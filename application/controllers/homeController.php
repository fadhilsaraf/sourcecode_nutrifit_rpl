<?php  

class homeController extends CI_Controller {
	//konstruktor parent
	function __construct() {
		parent::__construct();
	}

	//fungsi untuk me-load halaman index
	function reqPosting(){
		$this->load->view('HomeView');
		$data['posting']=$this->PostingModel->viewPosting($id);
		$this->load->view('HomeView',$data);
	}
		
}
?>