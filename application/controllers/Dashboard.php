<?php
class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');

	}
	public function index(){
		$data['data_slider'] = $this->_selectSlider();
		$data['page']='dashboard';
		$this->load->view("home_view", $data);
	}
	public function content(){
		$data['page']='apaituplasapedia';
		$this->load->view("content", $data);
	}
	public function coverage(){
		$data['page']='area';
		$this->load->view("coverage_area", $data);
	}
	function _selectSlider(){
		$query = $this->db->get('banner');	
		return $query->result_array();
	}
	function _selectTenant(){
		$query = $this->db->get('setting');
		return $query->result_array();
	}
	public function tenant(){
		$data['data_tenant'] = $this->_selectTenant();
		$data['page']='tenant';
		$this->load->view("tenant", $data);
	}
	public function contact_us(){
		$data['page']='contactus';
		$this->load->view("contact_us", $data);
	}
	public function admin(){
		$data['page']='admin';
		$this->load->view("layout", $data);
	}
	function tambah_aksi(){
		$tabel = "tabelplasapedia";
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'subject' => $subjek,
			'pesan' => $pesan,
			);
		
		$this->db->insert($tabel, $data);
		redirect(site_url().'/dashboard/contact_us');
	}

	function tambah_email(){
		$tabel = "email";
		$email = $this->input->post('email');

		$data = array(
			'email' => $email,
			);
		
		$this->db->insert($tabel, $data);
		redirect(site_url().'/dashboard/contact_us');
	}
}
?>