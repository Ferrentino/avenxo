<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input_kerjasama extends CI_Controller {

	var $title = 'Input data Kerjasama';

	public function index()
	{   
		$this->load->template('view_input_kerjasama');
	}

}