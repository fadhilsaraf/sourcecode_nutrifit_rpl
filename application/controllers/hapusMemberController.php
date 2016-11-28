<?php  

class hapusMemberController extends CI_Controller {
	//konstruktor parent
	function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	}

	//fungsi untuk me-load halaman index
	function hapusMemberForm(){
		if($this->session->userdata('USERNAME') == 'admin'){
			$data['user']=$this->UserModel->tampilMember();
			$this->load->view('HeaderAdmin');
			$this->load->view('hapusMemberView', $data);
		}
		else{
			echo "<script>alert('anda harus sebagai admin untuk mengakses halaman ini');history.go(-1);</script>";
			$this->load->view('loginView');
		}
	}
	
	function hapusMember($id){
		if($this->session->userdata('USERNAME') == 'admin'){
			$this->UserModel->hapusMember($id);
			$this->load->view('HeaderAdmin');
			redirect('hapusMemberController/hapusMemberForm');
		}
		else{
			echo "<script>alert('anda harus sebagai admin untuk mengakses halaman ini');history.go(-1);</script>";
			$this->load->view('loginView');
		}
	}
	
}
?>