<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_data_perwakilan_STIKI extends CI_Controller {

	var $title = 'Data Perwakilan STIKI';

	public function index()
	{   
		$this->load->template('view_data_perwakilan_STIKI');
	}

}