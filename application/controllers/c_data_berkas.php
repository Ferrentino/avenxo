<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_data_berkas extends CI_Controller {

	var $title = 'Data Berkas';

	public function index()
	{   
		$this->load->template('view_data_berkas');
	}

}