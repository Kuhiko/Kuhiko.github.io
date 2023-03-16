<?php

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data ['judul'] = 'Detail Daftar Mahasiswa';
        $data ['mahasiswa'] = $this->M_mahasiswa->getAll();
        $this->load->view('templates/head', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == FALSE){
            $data ['mahasiswa'] = $this->M_mahasiswa->getAll();
            $this->load->view('templates/head');
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_mahasiswa->tambahMhs();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('home');
        }
    }

    public function hapus($id)
    {
        $this->M_mahasiswa->hapusMhs($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('home');
    }

    public function edit()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == FALSE){
            $data ['mahasiswa'] = $this->M_mahasiswa->getAll();
            $this->load->view('templates/head');
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->M_mahasiswa->updateMhs();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('home');
        }
    }

    
}