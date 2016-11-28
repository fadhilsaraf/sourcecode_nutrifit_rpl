<?php  

class home extends CI_Controller {
	

	//konstruktor parent
	function __construct() {
		parent::__construct();
		$this->load->model('loginmodel');
	}
	
	var $offset=10;
	//fungsi untuk me-load halaman index
	function index(){
		$this->load->view('index');
	}
	
	function daftar(){
		$this->load->view('daftar');
	}

	//fungsi yg di gunakan untuk login
	function user_login(){
		$data['user']=$this->loginmodel->getForumdisplay(6);
		$config['base_url'] = base_url().'home/user_login/'.$id.'/';
		$this->load->view('user',$data);
	}
	
	function cekuser(){
		$this->loginmodel->cekuser();
		$this->load->view('index');
	}
	
	//fungsi yang di gunakan untuk logout
	function user_logout(){
		$this->session->sess_destroy();
		redirect (base_url().'home');
	}
}