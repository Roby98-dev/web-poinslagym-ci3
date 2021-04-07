<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($nama = 'Roby Adi Putra') {
		$data['title'] = 'Poinsla Helth | Homepage';
		$data['nama'] = $nama;
		$this->load->view('templates/header', $data);
		$this->load->view('partials/navbar');
		$this->load->view('partials/hero');
		$this->load->view('partials/about');
		$this->load->view('partials/classes');
		$this->load->view('partials/schedule');
		$this->load->view('partials/contact');
		$this->load->view('templates/footer');
	}
}