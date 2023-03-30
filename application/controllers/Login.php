<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('crud');
	}

    


}