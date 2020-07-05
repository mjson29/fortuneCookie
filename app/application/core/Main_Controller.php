<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main_Controller extends MX_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->module('Template');
		$this->load->module('Login');
	}
	
}
