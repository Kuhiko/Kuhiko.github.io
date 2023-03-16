<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data ['judul'] = 'Home';
        $data ['mahasiswa'] = $this->M_mahasiswa->getAll();
        $this->load->view('templates/head', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data ['mahasiswa'] = $this->M_mahasiswa->getKeyword($keyword);
       // $data ['mahasiswa'] = $this->M_mahasiswa->getAll();
        $this->load->view('templates/head');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}