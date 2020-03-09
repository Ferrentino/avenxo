<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_data_perwakilan_Mitra extends CI_Controller {

	var $title = 'Data Perwakilan Mitra';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PerwakilanMitraModel');
	}

	public function index()
	{   
		$result = $this->PerwakilanMitraModel->tampilkanDataMitra();
		$data['result'] = $result;
		$this->load->template('view_data_perwakilan_Mitra', $data);
	}

}