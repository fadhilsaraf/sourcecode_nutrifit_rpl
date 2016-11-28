<?php  

class registerController extends CI_Controller {
	//konstruktor parent
	function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	}

	//fungsi untuk me-load halaman index
	function registerForm(){
		$this->load->view('registerView');
	}
	
	function register(){
		$this->UserModel->register();
	}
	
}
?>