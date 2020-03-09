<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_insert_data_lembaga extends CI_Controller {

	var $title = 'Data Lembaga';

	public function index()
	{   
		$this->load->template('view_insert_data_lembaga');
	}

	public function direct()
	{   
		$regional = $this->input->post('regional');
		$jenis_lembaga = $this->input->post('jenis_lembaga');
		redirect('c_input_lembaga/'.$regional.'_'.$jenis_lembaga);
	}
}