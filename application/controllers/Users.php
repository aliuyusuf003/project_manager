<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	// localhost/edwin_ci/index.php/Users/show
	// public function show($user_id)
	// {
	// 	// $this->load->model('user_model');

		

	// 	$data['results'] = $this->user_model->get_users($user_id);

	// 	$this->load->view("user_view",$data);

	// 	// Note that views should be used to display data and not  controller
	// 	// foreach ($result as  $value) {
	// 	// 	echo $value->username;
	// 	// 	echo '<br>'.$value->password;
	// 	// }

	// 	// var_dump($result);
		
	// }

	// public function insert(){

	// 	$username = 'peter';
	// 	$password = 'secret';

	// 	$data = [
	// 		'username'=>$username,
	// 		'password'=>$password
	// 	];

	// 	$this->user_model->create_users($data);
	// }


	// public function update(){
	// 	$id = 3;
	// 	$username = 'Wiliam';
	// 	$password = 'No secret';

	// 	$data = [
	// 		'username'=>$username,
	// 		'password'=>$password
	// 	];
	// 	$this->user_model->update_user($data,$id);
	// }

	// public function delete(){
	// 	$id = 3;
		
	// 	$this->user_model->delete_user($id);
	// }


	public function register(){
		
		$this->form_validation->set_rules('first_name', 'Firstname', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Lastname', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE){

			$data['main_view'] = 'users/register_view';

			$this->load->view('layouts/main',$data);
			
		}else{
			
			if($this->user_model->create_user()){

				$this->session->set_flashdata('user_registered','You are successfully registered, you can now login');
				
				redirect('home/index');
			}else{
				echo 'Sorry, we could not register you';
			}

		}

		

		
	}
	public function login(){
		// echo $_POST['username'];
		// echo '<br>'.$_POST['password'];

		// echo $this->input->post('username');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		//$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data = array(
				'errors' => validation_errors()
			);

			$this->session->set_flashdata($data);

			redirect('home');
		}else{
			// Getting data from the forms

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);

			if($user_id){
				$user_data = array(
					'user_id'=>$user_id,
					'username'=>$username,
					'logged_in'=>true
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success','You are now logged in');

				// $data['main_view'] = 'admin_view';
				// $this->load->view('layouts/main',$data);

				redirect('home/index');

			}else{
				$this->session->set_flashdata('login_failed','Sorry, You are not logged in');
				redirect('home/index');
			}
		}
	}


	public function logout(){

		$this->session->sess_destroy();

		redirect('home/index');
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */