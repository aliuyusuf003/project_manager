<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){

			$user_id = $this->session->userdata('user_id');

			$data['tasks'] = $this->Task_model->get_all_tasks($user_id);
			$data['projects'] = $this->Project_model->get_all_projects($user_id);
		}

		$data['main_view'] = 'home_view';


		$this->load->view('layouts/main',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */