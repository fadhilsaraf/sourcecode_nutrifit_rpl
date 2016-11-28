<?php
	
	class editProfilController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('UserModel');
		}
		function editProfilForm(){
			$username = $this->session->userdata('USERNAME');
			$data['user']=$this->UserModel->requestTampilMember($username);
			if($this->session->userdata('USERNAME') == 'admin'){
				$this->load->view('HeaderAdmin');
				$this->load->view('EditProfilView',$data);
			}
			elseif ($this->session->userdata('LOGIN') == 'true'){
				$this->load->view('HeaderMember');
				$this->load->view('EditProfilView',$data);
			}
			else{
				echo "<script>alert('anda harus login terlebih dahulu untuk mengakses halaman ini');history.go(-1);</script>";
				$this->load->view('loginView');
			}
		}
		function update($id){
			$this->UserModel->editProfil($id);
		}
	}
?>