<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_detail_data_lembaga extends CI_Controller {

	var $title = 'Detail Lembaga';

	public function index($id)
	{   
		$this->load->model('m_detail_data_lembaga');
		$data['detail'] = $this->m_detail_data_lembaga->detail_data($id);
		$data['statistik'] = $this->m_detail_data_lembaga->statistik($id);
		$data['perwakilan'] = $this->m_detail_data_lembaga->perwakilan($id);
		$this->load->template('view_detail_data_lembaga', $data);
	}
}