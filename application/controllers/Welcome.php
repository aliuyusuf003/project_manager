<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// localhost/edwin_ci/index.php/-----------default
	public function index()
	{
		$this->load->view('welcome_message');
		// include_once('./application/views/welcome_message.php');
	}

	// localhost/edwin_ci/index.php/welcome/test
	public function test()
	{
		echo 'This is a test controller';
	}
}
