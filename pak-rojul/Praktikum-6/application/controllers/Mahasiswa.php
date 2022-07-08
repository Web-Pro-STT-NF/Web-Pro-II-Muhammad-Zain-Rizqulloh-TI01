<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $list_mahasiswa = $this->mahasiswa->getAll();
        $data['list_mahasiswa'] = $list_mahasiswa;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
    }
}
