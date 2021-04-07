<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {
	public function index() {
		$data['title'] = 'Classes | Poinsla';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/navbar');
		$this->load->view('templates/banner', $data);
		$this->load->view('partials/classes');
		$this->load->view('templates/footer');
	}
}