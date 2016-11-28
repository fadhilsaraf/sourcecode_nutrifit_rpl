<?php  

class loginController extends CI_Controller {
	//konstruktor parent
	function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	}

	function index(){
		$data['error']=0;
		$this->load->view('LoginView');
	}
		
	function verivyLogin(){
		$this->UserModel->validasiLogin();
	}
}
?>