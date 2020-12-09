<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// Construct
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	}
	

	// Run Validation
	public function index()
	{

		// Set Rules Form Validation
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		// Cek Kondisi Authentication User
		if ($this->form_validation->run() == false) {
			
			// Load View
			$data['title'] = 'Login';

			// Load Header
			$this->load->view('templates/landpage/header', $data);

			// Load Content
			$this->load->view('landpage/login', $data);

			// Load Footer
			$this->load->view('templates/landpage/footer');

			// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Failed to login !!</div');
		}

		else{
			 $this->_login();
		}
	}

	// Function Login
	public function login() {

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		// Jika user ada
		if ($user) {
			// Jika ada user
			if($user['status'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'id_user' => $user['id_user'],
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];

					$this->session->set_userdata($data);
					if ($user['role_id'] == 1 || $user['role_id'] == 2) {
						redirect('admin');
					}
					else {
						redirect('homepage');	
					}
					
				}
				else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Your Password Is Wrong</div');
					redirect('landpage');				}
			}
			else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Please Check Your Email To Activated</div');
				redirect('landpage');
			}
		}
		else {
			
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Your Email Is Not Registered, Please Register Before !!</div');
			redirect('landpage');
		}
	}
	// Akhir Login

	// Function Logout
	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('id_user');

		// Message
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Account Has Been Logged Out!!</div');
			redirect('auth');
	}
	// Akhir Function Logout
}


