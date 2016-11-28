<?php
	class quizController extends CI_Controller {
		private $noSoal = array(1,2,3,4,5,6);
		function __construct() {
			parent::__construct();
			$this->load->model('QuizModel');
		}
		function index(){
			$id = 0;
			$nilai=0;
			shuffle($this->noSoal);
			$data['dataSoal']=$this->QuizModel->retrieveSoal($this->noSoal[$id]);
			$data['IdSoal'] = $this->noSoal[$id];
			$data['no'] = $id;
			$data['nilai']=$nilai;
			$this->load->view('HeaderMember');
			$this->load->view('QuizView',$data);
		}
		function testIndex(){
			$id = 0;
			$nilai=0;
			$this->QuizModel->testRetrieveSoal($id);
		}
		function kerjakanSoal($no,$nilai1){
			$nilai = $this->QuizModel->cekJawaban($this->noSoal[$no-1],$nilai1);
			$data['dataSoal']=$this->QuizModel->retrieveSoal($this->noSoal[$no]);
			$data['IdSoal'] = $this->noSoal[$no];
			$data['no'] = $no;
			$data['nilai']=$nilai;
			$this->load->view('HeaderMember');
			$this->load->view('QuizView',$data);
		}
		function testKerjakanSoal($no,$nilai1,$jawab){
			$no=$this->QuizModel->tesValidasiJawaban($no,$nilai1,$jawab);
			$this->QuizModel->testRetrieveSoal($no);
			//$this->load->view('HeaderMember');
			//this->load->view('QuizView',$data);
		}
	}
?>