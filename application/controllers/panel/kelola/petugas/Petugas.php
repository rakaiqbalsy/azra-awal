<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// Load Model
		$this->load->model('model_user');

		// Load form Validation
		$this->load->library('form_validation');	
	}

	public function index() {
		$data['title'] = 'Panel Admin';
		$data['users'] = $this->model_user->petugasList();

		$this->load->view('templates/panel/header', $data);
		$this->load->view('templates/panel/nav', $data);
		$this->load->view('templates/panel/sidebar', $data);
		$this->load->view('panel/kelola/petugas/view', $data);
		$this->load->view('templates/panel/footer');	
	}

	public function create() {

		$data['title'] = 'Panel Admin';
		
		// Set Rules
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This Email has already registered !!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[
			'matches' => 'Password not match !!',
			'min_length' => 'Password to short']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/panel/header', $data);
			$this->load->view('templates/panel/nav', $data);
			$this->load->view('templates/panel/sidebar', $data);
			$this->load->view('panel/kelola/petugas/add', $data);
			$this->load->view('templates/panel/footer');
		}

		else {
			// Get post form
			$data_users = [
			'nama' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'image' => 'default.svg',
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'alamat' => htmlspecialchars($this->input->post('alamat', true)),
			'no_handphone' => htmlspecialchars($this->input->post('hp', true)),
			'role_id' =>2,
			'created' => time()
			];

			// Insert Data
			$this->db->insert('tbl_user', $data_users);

			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Account Has Been Created Please Confirm Your Email !!</div');
			redirect('panel/kelola/petugas/petugas');
		}
	}

	public function update($id) {
		$data['title'] = 'Panel Admin';
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This Email has already registered !!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[
			'matches' => 'Password not match !!',
			'min_length' => 'Password to short']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {

			$data_user['user'] = $this->model_user->find($id);

			$this->load->view('templates/panel/header', $data, $data_user);
			$this->load->view('templates/panel/nav', $data, $data_user);
			$this->load->view('templates/panel/sidebar', $data, $data_user);
			$this->load->view('panel/kelola/petugas/update', $data_user);
			$this->load->view('templates/panel/footer');
		}

		else {
			$data_users = [
			'nama' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'image' => 'default.svg',
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'alamat' => htmlspecialchars($this->input->post('alamat', true)),
			'no_handphone' => htmlspecialchars($this->input->post('hp', true)),
			'role_id' =>2,
			'created' => time()
			];

			// Insert Data
			$this->db->where('id_user', $id);
			$this->db->update('tbl_user', $data_users);

			// Message
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Account Has Been Created Please Confirm Your Email !!</div');
			redirect('panel/kelola/petugas/petugas');
		}

	}

	// Delete Akun
	public function delete($id) {
		$this->model_user->delete($id);
		redirect('panel/kelola/petugas/petugas');
	}
}