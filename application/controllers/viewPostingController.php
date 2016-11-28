<?php

	class viewPostingController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('PostingModel');
		}
	
		function viewPosting(){
			$data['posting']=$this->PostingModel->loadPostingData();
			//$this->session->userdata('USERNAME');
			if($this->session->userdata('USERNAME') == 'admin'){
				$this->load->view('HeaderAdmin');
				$this->load->view('HomeView', $data);
			}
			elseif($this->session->userdata('LOGIN') == 'true'){
				$this->load->view('HeaderMember');
				$this->load->view('HomeView', $data);
			}
			else{
				echo "<script>alert('anda harus login terlebih dahulu untuk mengakses halaman ini');history.go(-1);</script>";
				$this->load->view('loginView');
			}
				
			
		}
	}
?>