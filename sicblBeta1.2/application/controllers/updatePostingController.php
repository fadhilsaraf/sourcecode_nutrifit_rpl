<?php
	class updatePostingController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('PostingModel');
		}
		function displayUpdate($id){
			$data['posting']=$this->PostingModel->requestPosting($id);
			$data['IdPosting'] = $id;
			if($this->session->userdata('USERNAME') == 'admin'){
				$this->load->view('HeaderAdmin');
				$this->load->view('updatePostingView',$data);
			}
			elseif ($this->session->userdata('LOGIN') == 'true'){
				$this->load->view('HeaderMember');
				$this->load->view('updatePostingView',$data);
			}
			else{
				echo "<script>alert('anda harus login terlebih dahulu untuk mengakses halaman ini');history.go(-1);</script>";
				$this->load->view('loginView');
			}
		}
		function updatePost($id){
			$this->PostingModel->updatePosting($id);
			
		}
	}
?>