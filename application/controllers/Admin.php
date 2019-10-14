<?php
class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('form'); 
		$this->load->helper('url');
		$this->load->model('Admin_model','admin_model');
		$this->load->library('pagination');
		$this->load->library('table');
		$this->load->helper(array('form', 'url'));
		$this->load->library('email');
		$this->load->library('upload');
	}

	public function index(){
		$this->banner();
		if (!isset($username)) { 
			echo "<script>
			alert('Silahkan Login Terlebih Dahulu');
			window.location = 'http://magang.novatama.com/cei/login';
		</script>";
	}
}

public function banner(){
	$username = $this->session->userdata('username');
	$data['banner'] = $this->admin_model->get_banner();
	$this->load->view('banner', $data);
	if (!isset($username)) { 
		echo "<script>
		alert('Silahkan Login Terlebih Dahulu');
		window.location = 'http://magang.novatama.com/cei/login';
	</script>";
}
}

function kotakmasuk($paging = 0){
	$username = $this->session->userdata('username');
	$per_page = 5;

	$data['tabelplasapedia'] = $this->admin_model->get_inbox();
	$config['base_url'] = 'http://magang.novatama.com/cei/admin/kotakmasuk';
	$config['total_rows'] = $this->db->get('tabelplasapedia')->num_rows();
	$config['per_page'] = $per_page;
	$config['num_links'] = 2;
	$config['full_tag_open'] = '<div id="pagination">';
	$config['full_tag_close'] = '</div>';

	$this->pagination->initialize($config);

	$this->db->limit($per_page, $paging);
	$data['records'] = $this->db->get('tabelplasapedia');
	$data['paging'] = $paging;

	$this->load->view('inbox', $data);
	if (!isset($username)) { 
		echo "<script>
		alert('Silahkan Login Terlebih Dahulu');
		window.location = 'http://magang.novatama.com/cei/login';
	</script>";
}
}
public function email() {
                               						//memasukkan library helper form
   $this->load->view('tampilan_pengiriman');       //memasukkan tampilan view tampilan_pengiriman.php
}
public function prosespengiriman() {
	$this->load->helper(array('form', 'url'));
	$this->load->library('email');
    //konfigurasi email
	$config = array();
	$config['charset'] = 'utf-8';
   $config['useragent'] = 'Codeigniter'; //bebas sesuai keinginan kamu
   $config['protocol']= "smtp";
   $config['mailtype']= "html";
   $config['smtp_host']= "ssl://mail.magang.novatama.com";
   $config['smtp_port']= "465";
   $config['smtp_timeout']= "5";
   $config['smtp_user']= "admin@magang.novatama.com";              //isi dengan email anda
   $config['smtp_pass']= "08998072929";            // isi dengan password dari email anda
   $config['crlf']="\r\n";
   $config['newline']="\r\n";

   $config['wordwrap'] = TRUE;

 //memanggil library email dan set konfigurasi untuk pengiriman email
   
   $this->email->initialize($config);
 //konfigurasi pengiriman kotak di view ke pengiriman email di gmail
   $this->email->from($this->input->post('from'));
   $this->email->to($this->input->post('to'));
   $this->email->subject($this->input->post('subject'));
   $this->email->message($this->input->post('isi'));

//proses uploads
   
   $this->upload->initialize(array(
   	"upload_path"   => "./uploads/",
   	"allowed_types" => "*"
   	));
   
// pernyataan jika pengiriman berhasil atau tidak

   if($this->email->send())
   {
   	redirect(base_url('admin/email/'));
   }else
   {
   	echo "<script>
		alert('Silahkan Login Terlebih Dahulu');
		window.location = 'http://magang.novatama.com/cei/admin/email';
	</script>";
   }
}
public function delete($id){
	$this->admin_model->delete_banner($id);
	redirect('admin/banner');
}
public function hapus($id)
{
	$this->admin_model->delete_inbok($id);
	redirect('admin/kotakmasuk');
}
public function deletepost($id)
{
	$this->admin_model->delete_isi($id);
	redirect('admin/isitenant');
}

function inputgambar(){
	$this->load->view('upload/f_upload');
}

function inputtenant(){
	$this->load->view('upload/f_setting');
}

function isitenant(){
	$data['setting'] = $this->admin_model->get_isitenant();
	$this->load->view('isitenant', $data);
}

function p_inputtenant(){
	$isi=$this->input->post('tenant');
	$datasimpan=array('isi_tenant'=>$isi);
	$simpan=$this->admin_model->inputtenant('setting',$datasimpan);

	if($simpan){
		redirect(base_url('admin/isitenant/'));
		echo "data telah tersimpan";
	}else{
		echo "data gagal tersimpan";
	}
}
function inputcaption(){
	$this->load->view('upload/f_caption');
}

function isicaption(){
	$data['caption'] = $this->admin_model->get_isicaption();
	$this->load->view('isitenant', $data);
}

function p_inputcaption(){
	$isi=$this->input->post('tenant');
	$datasimpan=array('isi_caption'=>$isi);
	$simpan=$this->admin_model->inputtenant('caption',$datasimpan);

	if($simpan){
		redirect(base_url('admin/isitenant/'));
		echo "data telah tersimpan";
	}else{
		echo "data gagal tersimpan";
	}
}


public function simpangambar(){
	$this->load->model('Admin_upload');
	$simpangambar=$this->Admin_upload->uploadgambar('gambar');

	$nama=$this->input->post('nama');
	$gambar=$simpangambar['upload_data']['file_name'];
	$created_at=date("Y-m-d h:m:s");

	$datasimpan=array('name'=>$nama,'gambar'=>$gambar,'created_at'=>$created_at);
	$simpan=$this->admin_model->simpandata('banner',$datasimpan);

	if($simpan){
		redirect(base_url('admin/banner/'));
		echo "data telah tersimpan";
	}else{
		echo "data gagal tersimpan";
	}
}

public function edittenant($id) {
	$query = $this->db->get_where('setting',array('id'=>$id));
	$data['data_setting'] = $query->row_array();
	$this->load->view('upload/u_tenant',$data);
}
public function prosesupdate($id){
	$tabel = "setting";
	$isi_tenant = $this->input->post('tenant');
	$data = array(
		'isi_tenant' => $isi_tenant,
		);
	$this->db->where('id', $id);
	$this->db->update($tabel, $data);
	redirect(site_url().'admin/isitenant');
}
}