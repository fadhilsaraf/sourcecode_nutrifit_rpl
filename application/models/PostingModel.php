<?php
class postingModel extends CI_Model{ 

	function postingModel() {
		parent::__construct();
	}
	
	function requestPosting($id) {
		$query=$this->db->query("SELECT  * FROM posting p,user u where p.IdPosting=$id and p.idMember=u.NoId ORDER BY IdPosting");
		$data=$query->row();
		return $data;
	}
	
	function loadPostingData() {
		$query=$this->db->query("SELECT  * FROM posting p,user u where p.idMember=u.NoId ORDER BY IdPosting desc");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$menus[]=$data;
			}
			return $menus;
		}
		else{
			$menus=$query->result();
			return $menus;
		}
	}
	
	function insertPosting()
    {
		$j = $this->input->post('JudulPosting');
		$i = $this->input->post('IsiPosting');
		if($j==null or $i==null){
			echo "<script>alert('harap isi judul dan isi posting dengan lengkap');history.go(-1);</script>";
		}
		else{
			$time=date("l jS \of F Y h:i:s A", strtotime('+6 hours'));
			$id = $this->session->userdata('NOID');
			$data = array(
			 'JudulPosting' => $j ,
			 'idMember' => $id, 
			 'IsiPosting' => $i,
			 'TanggalPosting' => $time
			);
			$this->db->insert('posting',$data);
			redirect('viewPostingController/viewPosting');
		}
		
    }
	
	function updatePosting($id){
		$j = $this->input->post('JudulPosting');
		$i = $this->input->post('IsiPosting');
		$time=date("l jS \of F Y h:i:s A", strtotime('+6 hours'));
		if($j==null or $i==null){
			echo "<script>alert('harap isi judul dan isi posting dengan lengkap');history.go(-1);</script>";
		}
		else{
			$data = array(
			 'JudulPosting' => $j ,
			 'IsiPosting' => $i,
			 'TanggalPosting' => $time
			);
			$this->db->update('posting',$data, array('IdPosting' => $id));
			redirect('detailPostingController/displayDetail/'.$id);
		}
		
	}
	
	function deletePosting($id){
		$this->db->delete('posting', array('IdPosting' => $id));		
	}
}
?>