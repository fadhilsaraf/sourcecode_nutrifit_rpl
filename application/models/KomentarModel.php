<?php
class KomentarModel extends CI_Model{ 

	function KomentarModel() {
		parent::__construct();
	}
	
	function loadCommentData($id) {
		$query=$this->db->query("SELECT  * FROM komentar k,posting p,user u where k.idMember=u.NoId and p.IdPosting=$id and p.IdPosting=k.IdPosting ORDER BY k.IdKomen");
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
	
	function insertComment($id)
    {
		$i = $this->input->post('komentar');
		if($i==null){
			echo "<script>alert('harap isi komentar terlebih dahulu');history.go(-1);</script>";
		}
		else{
			$time=date("l jS \of F Y h:i:s A", strtotime('+6 hours'));
			$idm=$this->session->userdata('NOID');
			$data = array(
			 'IdPosting' => $id, 
			 'idMember' => $idm,
			 'IsiKomen' => $i,
			 'TanggalKomen' => $time
			);
			$this->db->insert('komentar',$data);
			redirect('detailPostingController/displayDetail/'.$id);
		}
		
    }
	
	function deleteComment($id){
		$this->db->delete('komentar', array('IdKomen' => $id));
	}
}
?>