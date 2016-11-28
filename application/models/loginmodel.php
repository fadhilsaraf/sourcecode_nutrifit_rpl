<?php
class loginmodel extends CI_Model{ 

	function cekuser(){
		$username=$this->input->post('user');
		$password=$this->input->post('pass');
		$query=$this->db->query("select  * from user where Username='$username' and Password='$password'");
		$cek=$query->num_rows();
		if($cek==0){
			echo"<script>alert('Data Tidak Ditemukan');</script>";
			redirect (base_url().'home/index/');
		} else {
			$data=$query->row();
			$datac=array('LOGIN'=>TRUE,'NAMA'=>$data->nama,'USERID'=>$data->id,'STATUS_LOGIN'=>"Selamat Datang");
			$this->session->set_userdata($datac);
			redirect (base_url().'home/index2');
		}
	}
	function cekdup(){
		$u=$this->input->post('user');
		$query=$this->db->query("select  * from user where username='$u'");
		return $query->num_rows();
	}
	
}
?>