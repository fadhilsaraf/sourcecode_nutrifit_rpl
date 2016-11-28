<?php

	class addPostingController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('PostingModel');
		}
		function displayAddPosting(){
			if($this->session->userdata('USERNAME') == 'admin'){
				$this->load->view('HeaderAdmin');
				$this->load->view('addPostingView');
			}
			elseif ($this->session->userdata('LOGIN') == 'true'){
				$this->load->view('HeaderMember');
				$this->load->view('addPostingView');
			}
			else{
				echo "<script>alert('anda harus login terlebih dahulu untuk mengakses halaman ini');history.go(-1);</script>";
				$this->load->view('loginView');
			}
		}
		
		function addPosting() {
			$this->PostingModel->insertPosting();
			
		}
	}

?>