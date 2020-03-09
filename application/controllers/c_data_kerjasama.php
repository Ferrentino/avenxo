<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_data_kerjasama extends CI_Controller {

	var $title = 'Data Kerjasama';

	public function index()
	{   
		$this->load->template('view_data_kerjasama');
	}

}