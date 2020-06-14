<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Daftar Siswa";
        $data['siswa'] = $this->Siswa_model->getAllSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }
}
