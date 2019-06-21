<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_users($user_id){

		// This can also be used
		// $this->db->where([
		// 	'id'=>$user_id,
		// 	'username'=>$username
		// ]);
		
		// $this->db->where('id',$user_id);
		// $query = $this->db->get('users');

		// return $query->result();
		
		// $query = $this->db->query("SELECT * FROM users");
		// return $query->num_rows();
		// return $query->num_fields();
		// $query = $this->db->get('users');

		// return $query->result();     //returns array of objects
		
		// Without autoload

		// $config['hostname'] = 'localhost';
		// $config['username'] = 'root';
		// $config['password'] = '';
		// $config['database'] = 'errand_db';

		// $config_2['hostname'] = 'localhost';
		// $config_2['username'] = 'root_2';
		// $config_2['password'] = '';
		// $config_2['database'] = 'errand_db_2';


		// $connection = $this->load->database($config);
		// $connection_2 = $this->load->database($config_2);


	}

	// public function create_users($data){

	// 	$this->db->insert('users',$data);
	// 	echo 'Inserted';
	// }

	// public function update_user($data,$id){
	// 	$this->db->where(['id'=>$id]);
	// 	$this->db->update('users',$data);
	// 	echo 'Updated';
	// }

	// public function delete_user($id){
	// 	$this->db->where(['id'=>$id]);
	// 	$this->db->delete('users');
	// 	echo 'Deleted';
	// }

	public function create_user(){
		$options = ['cost'=>12];

		// $enc_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);
		$enc_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);
		$data = array(
			'first_name' 	=> $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'email' 		=> $this->input->post('email'),
			'username' 		=> $this->input->post('username'),
			// 'password' 		=> $this->input->post('password')
			'password'		=> $enc_pass
			);
		
		$insert_id = $this->db->insert('users',$data);

		return $insert_id;

		
	}

	public function login_user($username,$password){

		$this->db->where('username',$username);

		$result = $this->db->get('users');
		$db_password = $result->row(2)->password;

		if(password_verify($password,$db_password)){
			return $result->row(0)->id;
		}else{
			return false;
		}	
	}

	// public function login_user($username,$password){

	// 	$this->db->where('username',$username);
	// 	$this->db->where('password',$password);

	// 	$result = $this->db->get('users');

	// 	if($result->num_rows() == 1){
	// 		return $result->row(0)->id;
	// 	}else{
	// 		return false;
	// 	}	
	// }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */