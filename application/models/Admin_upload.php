<?php

class Admin_upload extends CI_Model{
	function uploadgambar($filegambar){
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '100000000';

		$this->load->library('upload');

		$this->upload->initialize($config);

// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:

		if ( ! $this->upload->do_upload('gambar'))
		{
			$error = array('error' => $this->upload->display_errors());

			

			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			return $data;
		}
	}
}

?>