<?php
	class UserModel extends CI_Model{ 
		function validasiLogin(){
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			$query=$this->db->query("select  * from user where Username='$username' and Password='$password'");
			$cek=$query->num_rows();
			if($cek==0){
				if($username==null or $password==null){
					echo "<script>alert('harap isi form dengan lengkap terlebih dahulu');history.go(-1);</script>";
				}
				else
					echo "<script>alert('Username atau password anda salah, silakan coba login kembali');history.go(-1);</script>";
				
			} else {
				$data=$query->row();
				$datac=array('LOGIN'=>TRUE, 'NOID'=>$data->NoId, 'USERNAME'=>$username);
				$this->session->set_userdata($datac);
				redirect (base_url().'viewPostingController/viewPosting');
			}
		}
		
		function register(){
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$target_path = "assets/uploads/";
			$target_path = $target_path . basename( $_FILES['foto']['name']);
			if($username==null or $password==null or $nama==null or $_FILES['foto']['name']==null){
				echo "<script>alert('harap isi form dengan lengkap terlebih dahulu');history.go(-1);</script>";
			}
			else{
				if(preg_match("/@/",$email)==false){
					echo "<script>alert('harap isi email anda dengan benar (alamat email yang valiid)');history.go(-1);</script>";
				}
				else{
					if(preg_match("/image/",$_FILES['foto']['type'])){
						rename($target_path,"assets/uploads/".$username."_ava.png");
						$ava="assets/uploads/".$username."_ava.png";
						$data = array(
							 'NamaLengkap' => $nama,
							 'Username' => $username,
							 'Password' => $password,
							 'Email' => $email,
							 'Avatar' => $ava
						);
						$this->db->insert('user',$data);
						echo "<script>alert('selamat anda berhasil mendaftar');history.go(-1);</script>";						
						redirect (base_url(). 'loginController/index');
					}
					else{
						echo "<script>alert('harap masukan gambar dengan format jpg atau png');history.go(-1);</script>";
					}
					
				}
				
			}
			
		}
		
		function requestTampilMember($username){
			$this->db->where("Username",$username);
			$query=$this->db->get('user');
			return $query->row();
		}
		
		function tampilMember(){
			$query=$this->db->query("SELECT * FROM user WHERE Username <> 'admin' ORDER BY NoId");
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}
		}
		function hapusMember($id){
			$this->db->delete('user', array('NoId' => $id));
		}
		
		function editProfil($id){
			$username=$this->input->post('username');
			//if($this->input->post('password') != null){
			//	$password=md5($this->input->post('password'));
			//}
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			//if($_FILES['foto']['name']!=null){
			//	$target_path = "assets/uploads/";
			//	$target_path = $target_path . basename( $_FILES['foto']['name']);
			//	rename($target_path,"assets/uploads/".$username."_ava.png");
			//	$ava="assets/uploads/".$username."_ava.png";
			//}
			
			if($username==null or $nama==null){
				echo "<script>alert('harap isi form dengan lengkap terlebih dahulu');history.go(-1);</script>";
			}
			else{
				if(preg_match("/@/",$email)==false){
					echo "<script>alert('harap isi email anda dengan benar (alamat email yang valiid)');history.go(-1);</script>";
				}
				else{
					//if(preg_match("/image/",$_FILES['foto']['type'])){
						
						$data = array(
							 'NamaLengkap' => $nama,
							 'Username' => $username,
							 //'Password' => $password,
							 'Email' => $email,
							 //'Avatar' => $ava
						);
						$this->db->update('user',$data, array('NoId' => $id))	;	
						redirect (base_url(). 'viewProfileController/viewProfile/'.$id);
					//}
					//else{
					//	echo "<script>alert('harap masukan gambar dengan format jpg atau png');history.go(-1);</script>";
					//}
					
				}
				
			}
		}
		
		function tampilProfilMember($id){
			$query=$this->db->query("SELECT * FROM user WHERE NoId=$id");
			$data=$query->row();
			return $data;
		}
		
		function testRegister($username,$password,$nama,$email,$ava){
			//$username=$this->input->post('username');
			//$password=md5($this->input->post('password'));
			//$nama=$this->input->post('nama');
			//$email=$this->input->post('email');
			//$target_path = "assets/uploads/";
			//$target_path = $target_path . basename( $_FILES['foto']['name']);
			if($username==null or $password==null or $nama==null or $ava==null){
				echo "<script>alert('harap isi form dengan lengkap terlebih dahulu');history.go(-1);</script>";
			}
			else{
				if(preg_match("/@/",$email)==false){
					echo "<script>alert('harap isi email anda dengan benar (alamat email yang valiid)');history.go(-1);</script>";
				}
				else{
					if(preg_match("/image/",$ava)){
						//rename($target_path,"assets/uploads/".$username."_ava.png");
						//$ava="assets/uploads/".$username."_ava.png";
						$data = array(
							 'NamaLengkap' => $nama,
							 'Username' => $username,
							 'Password' => $password,
							 'Email' => $email,
							 'Avatar' => $ava
						);
						//$this->db->insert('user',$data);
						echo "<script>alert('selamat anda berhasil mendaftar');history.go(-1);</script>";						
						//redirect (base_url(). 'loginController/index');
					}
					else{
						echo "<script>alert('harap masukan gambar dengan format jpg atau png');history.go(-1);</script>";
					}
					
				}
				
			}
			
		}
		
		function testValidasiLogin($username,$password){
			$password=md5($password);
			$query=$this->db->query("select  * from user where Username='$username' and Password='$password'");
			$cek=$query->num_rows();
			if($cek==0){
				if($username==null or $password==null){
					echo "<script>alert('harap isi form dengan lengkap terlebih dahulu');history.go(-1);</script>";
				}
				else
					echo "<script>alert('Username atau password anda salah, silakan coba login kembali');history.go(-1);</script>";
				
			} else {
				echo "anda berhasil login";
			}
		}
	}
?>