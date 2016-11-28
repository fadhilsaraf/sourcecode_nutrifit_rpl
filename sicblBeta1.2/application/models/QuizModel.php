<?php
	class QuizModel extends CI_Model{ 

		function QuizModel() {
			parent::__construct();
		}
		function retrieveSoal($id) {
			$this->db->where("IdSoal",$id);
			$query=$this->db->get('dataSoal');
			return $query->row();
		}
		function cekJawaban($id,$nilai1){
			$jawab=$this->input->post('jawaban');
			$query=$this->db->query("select  * from dataSoal where IdSoal='$id' and Ans='$jawab'");
			$cek=$query->num_rows();
			if($cek==1){
				$nilai1+=10;
				return $nilai1;
			}
			else{
				return $nilai1;
			}
		}
		
		function testRetrieveSoal($id) {
			echo"ini adalah soal ke ".$id;
		}
		function tesValidasiJawaban($id,$nilai1,$jawab){
			$query=$this->db->query("select  * from dataSoal where IdSoal='$id' and Ans='$jawab'");
			$cek=$query->num_rows();
			if($cek==1){
				$nilai1+=10;
				echo "selamat nilai anda ".$nilai1;
				echo "<br>";
			}
			else{
				echo "maaf nilai anda masih ".$nilai1;
				echo "<br>";
			}
			return $id+=1;
		}
	}
?>