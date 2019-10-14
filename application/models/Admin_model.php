<?php 

class Admin_model extends CI_Model{

	function get_banner(){
		return $this->db->get('banner');
	}

	public function delete_banner($id){
		$this->db->where('id', $id);
		$this->db->delete('banner'); 
	}
	public function delete_isi($id){
		$this->db->where('id', $id);
		$this->db->delete('setting'); 
	}
	public function delete_inbok($id){
		$this->db->where('id', $id);
		$this->db->delete('tabelplasapedia'); 
	}

	function simpandata($agung, $data){
		$query = $this->db->insert($agung, $data);
		return $query;
	}
	function inputtenant($agung, $data){
		$query = $this->db->insert($agung, $data);
		return $query;
	}

	public function get_isitenant(){
		return $this->db->get('setting');
	}

	public function get_inbox(){
		return $this->db->get('tabelplasapedia');
	}

	function caption($agung, $data){
		$query = $this->db->insert($agung, $data);
		return $query;
	}

	public function get_isicaption(){
		return $this->db->get('caption');
	}

	public function register($agung, $data){
		$query = $this->db->insert($agung, $data);
		return $query;
	}

	function updateisitenant($agung,$data){
		$this->db->where('id', $id);
		$this->db->update('setting', $data);
		return true;
	}
	function bacatenant($id){
		$q = $this->db->get_where('setting', array('id' => $id));	
		return $q->result_array();
	}
}