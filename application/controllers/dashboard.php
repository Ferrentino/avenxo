<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $title = 'Dashboard';

	public function index()
	{   
		$this->load->template('view_dashboard');
	}

}
