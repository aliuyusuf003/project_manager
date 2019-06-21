<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct(){

		parent::__construct();
		// $this->load->model('Project_model');//use this if you are not using autoload

		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access','Sorry, you need to login to view your projects');
			redirect('home/index');
		}
	}
	

	public function index()
	{

		$data['projects'] = $this->Project_model->get_projects();

		$data['main_view'] = 'projects/index';


		$this->load->view('layouts/main',$data);
	}

	public function display($project_id){

		$data['completed_tasks'] = $this->Project_model->get_project_tasks($project_id, true);
		$data['not_completed_tasks'] = $this->Project_model->get_project_tasks($project_id, false);
		$data['project_data'] = $this->Project_model->get_project($project_id);

		$data['main_view'] = 'projects/display';


		$this->load->view('layouts/main',$data);
	}

	public function create(){



		$this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
		$this->form_validation->set_rules('project_body', 'Project Description', 'trim|required');
		

		if($this->form_validation->run() == FALSE){

			$data['main_view'] = 'projects/create_project';

			$this->load->view('layouts/main',$data);
			
		}else{
				$data = array(
					'project_user_id' => $this->session->userdata('user_id'),
					'project_name' => $this->input->post('project_name'),
					'project_body' => $this->input->post('project_body')

				);
				
				if($this->Project_model->create_project($data)){

					$this->session->set_flashdata('project_created','You created a project');
					
					redirect("projects/index");
				}

			}
	}



	public function edit($project_id){



		$this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
		$this->form_validation->set_rules('project_body', 'Project Description', 'trim|required');
		

		if($this->form_validation->run() == FALSE){
			$data['project_data'] = $this->Project_model->get_project_info($project_id);
			$data['main_view'] = 'projects/edit_project';

			$this->load->view('layouts/main',$data);
			
		}else{
				$data = array(
					'project_user_id' => $this->session->userdata('user_id'),
					'project_name' => $this->input->post('project_name'),
					'project_body' => $this->input->post('project_body')

				);
				
				if($this->Project_model->edit_project($project_id,$data)){

					$this->session->set_flashdata('project_updated','Your project has been updated');
					
					redirect("projects/index");
				}

			}
	}



	public function delete($project_id){

		$this->Project_model->delete_project_tasks($project_id);
		$this->Project_model->delete_project($project_id);

		$this->session->set_flashdata('project_deleted','Your project has been deleted');
					
		redirect("projects/index");
		

	}





}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */