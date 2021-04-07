<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {
	public function index() {
		$data['title'] = 'Schedule | Poinsla';
		$this->load->view('templates/header', $data);
		$this->load->view('partials/navbar');
		$this->load->view('templates/banner', $data);
		$this->load->view('partials/schedule');
		$this->load->view('templates/footer');
	}
}