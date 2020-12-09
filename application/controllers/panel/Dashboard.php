<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	// Construct
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index() {
		$data['title'] = 'Panel Admin';

		$this->load->view('templates/panel/header', $data);
		$this->load->view('templates/panel/nav', $data);
		$this->load->view('templates/panel/sidebar', $data);
		$this->load->view('panel/dashboard', $data);
		$this->load->view('templates/panel/footer');	
	}

}