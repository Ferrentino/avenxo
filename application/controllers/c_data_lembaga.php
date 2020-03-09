<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_data_lembaga extends CI_Controller {

	var $title = 'Data Lembaga';

	public function index()
	{   
		$this->load->model('m_data_lembaga');
		$data['data'] = $this->m_data_lembaga->tampil_data();
		$this->load->template('view_data_lembaga', $data);
	}

	public function edit($id)
	{   
		$this->load->model('m_data_lembaga');
		$regional = $this->m_data_lembaga->get_regional($id);

		if ($regional == "Internasional") {
			redirect('c_edit_data_lembaga/internasional/'.$id);
		}

		if ($regional == "Nasional") {
			redirect('c_edit_data_lembaga/nasional/'.$id);
		}
	}

	public function perwakilanMitra($id) {
		$this->load->model('m_data_lembaga');

		$regional = $this->m_data_lembaga->get_regional($id);

		if ($regional == "Internasional") {
			redirect('c_input_perwakilan_mitra/internasional/'.$id);
		}

		if ($regional == "Nasional") {
			redirect('c_input_perwakilan_mitra/nasional/'.$id);
		}
	}
}