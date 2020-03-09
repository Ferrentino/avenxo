<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input_perwakilan_STIKI extends CI_Controller {

	var $title = 'Input data Perwakilan STIKI';

	public function index()
	{   
		$this->load->template('view_input_perwakilan_STIKI');
	}

}