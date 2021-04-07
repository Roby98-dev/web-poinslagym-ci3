<?php

class About extends CI_Controller {
    public function index() {
        $data ['title'] = 'About | Poinsla';

        $this->load->view('templates/header', $data);
        $this->load->view('partials/navbar');
        $this->load->view('templates/banner');
        $this->load->view('partials/about');
        $this->load->view('templates/footer');
    }
}