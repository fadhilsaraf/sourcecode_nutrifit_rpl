<?php

	class logoutController extends CI_Controller {
	//konstruktor parent
	function __construct() {
		parent::__construct();
	}

	function logout(){
		$this->session->sess_destroy();
		redirect (base_url().'loginController/index');
	}
	}
?>