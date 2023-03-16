<?php

class Profile extends CI_Controller
{
    public function index()
    {
        $data ['judul'] = 'Profile';
        $this->load->view('templates/head', $data);
        $this->load->view('profile/index');
        $this->load->view('templates/footer');
    }
}