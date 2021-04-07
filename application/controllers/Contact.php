<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index() {
		$data['title'] = 'Contact | Poinsla';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/navbar');
		$this->load->view('templates/banner', $data);
		$this->load->view('partials/contact');
		$this->load->view('templates/footer');
	}
}