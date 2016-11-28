<?php	
	class detailPostingController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('PostingModel');
			$this->load->model('KomentarModel');
		}
		
		function displayDetail($id){
			$data['posting']=$this->PostingModel->requestPosting($id);
			$data['IdPosting'] = $id;
			$data['komen']=$this->KomentarModel->loadCommentData($id);
			if($this->session->userdata('USERNAME') == 'admin'){
				$this->load->view('HeaderAdmin');
				$this->load->view('detailPostingView',$data);
			}
			elseif ($this->session->userdata('LOGIN') == 'true'){
				$this->load->view('HeaderMember');
				$this->load->view('detailPostingView',$data);
			}
			else{
				echo "<script>alert('anda harus login terlebih dahulu untuk mengakses halaman ini');history.go(-1);</script>";
				$this->load->view('loginView');
			}
		}
		
		function addComment($id){
			$this->KomentarModel->insertComment($id);
		}
		function deleteComment($idK,$idP){
			$this->KomentarModel->deleteComment($idK);
			redirect('detailPostingController/displayDetail/'.$idP);
		}
	}
?>