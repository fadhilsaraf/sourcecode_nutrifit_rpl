<?php

	class viewProfileController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('UserModel');
		}
	
		function viewProfile(){
			$username = $this->session->userdata('USERNAME');
			$data['user']=$this->UserModel->requestTampilMember($username);
			if($this->session->userdata('USERNAME') == 'admin'){
			$this->load->view('HeaderAdmin');
				$this->load->view('ProfileView',$data);
			}
			else{
				$this->load->view('HeaderMember');
				$this->load->view('ProfileView',$data);
			}
		}
		
		function tampilProfilMember($id){
			$data['user']=$this->UserModel->tampilProfilMember($id);
			if($this->session->userdata('USERNAME') == 'admin'){
			$this->load->view('HeaderAdmin');
				$this->load->view('ProfileView2',$data);
			}
			else{
				echo "<script>alert('anda harus sebagai admin untuk mengakses halaman ini');history.go(-1);</script>";
				$this->load->view('loginView');
			}
		}
		}
?>