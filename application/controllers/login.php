<?php
class Login extends CI_Controller {
//constructor
	function login() {
		parent::__construct();
		$this->load->helper('url');	
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');				
	}
//index for showing the login form
	function index() {
		$this->load->view('login_view');
	}
//this function will do the login process 
	function proseslogin() {
$username = $this->input->post('username'); //read the username that filled by the user
$password = $this->input->post('password'); //read the password that filled by the user
$passwordx = md5($password); //this is for change $password into MD5 form
//the query is to matching the username+password user with username+password from database
$q = $this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
if ($q->num_rows() == 1) { 
// if the query is TRUE, then save the username into session and load the welcome view
	$nama = $q->row()->username;
	$this->session->set_userdata('username',$nama);
	$data['welcome'] = "Welcome $nama";
	$this->load->view('welcome_view', $data);
}
else { 
// query error
	$data['error']='!! Wrong Username or Password !!';
	$this->load->view('login_view', $data);
}
}
//to do logout process
function logout() {	
	$this->session->sess_destroy();
	$data['logout'] = 'You have been logged out.';		
	$this->load->view('login_view', $data);
}

function daftar(){
	$this->load->view('sign_up');
}

function p_daftar(){
		$tabel = "tbl_user";
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password,
			);
		
		$this->db->insert($tabel, $data);
		redirect(site_url().'login');
	}
}
?>