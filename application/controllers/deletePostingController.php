<?php
	class deletePostingController extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('PostingModel');
	}
	
	function deletePost($id){
		if($this->session->userdata('USERNAME') == 'admin'){
			$this->PostingModel->deletePosting($id);
			$this->load->view('HeaderAdmin');
			redirect('viewPostingController/viewPosting');
		}
		elseif ($this->session->userdata('LOGIN') == 'true'){
			$this->PostingModel->deletePosting($id);
			$this->load->view('HeaderMember');
			redirect('viewPostingController/viewPosting');
		}
		else{
			echo "<script>alert('anda harus login terlebih dahulu untuk mengakses halaman ini');history.go(-1);</script>";
			$this->load->view('loginView');
		}
	}
}
?>