<?php
	class testDriverController extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('UserModel');
			$this->load->model('QuizModel');
		}
		function ujiRegister(){
			$username=null;
			$password=12345;
			$nama="maul";
			$email="a@gmail.com";
			$ava="/image/text.jpg";
			$this->UserModel->testRegister($username,$password,$nama,$email,$ava);
		}
		function ujiLogin(){
			$username='admin';
			$password='admin';
			$this->UserModel->testValidasiLogin($username,$password);
		}
		function ujiQuiz(){
			$no=1;
			$nilai1=0;
			$jawab='c';
			$this->QuizModel->tesValidasiJawaban($no,$nilai1,$jawab);
		}
		function ujiIntegrasi(){
			redirect (base_url(). 'quizController/testIndex');
		}
		function ujiIntegrasi2(){
			redirect (base_url(). 'quizController/testKerjakanSoal/1/0/c');
		}
		function ujiIntegrasi3(){
			redirect (base_url(). 'quizController/testIndex');
		}
		
		
		
	}
?>