<?php 

class M_data extends CI_Model{
	function tampil_data($tabel){
		return $this->db->get($tabel);
	}

	function input_data($data,$table){
		$q = $this->db->insert($table,$data); 
		return $q;
	}
}