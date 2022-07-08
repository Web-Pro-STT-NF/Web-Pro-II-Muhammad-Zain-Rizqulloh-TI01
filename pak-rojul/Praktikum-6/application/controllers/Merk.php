<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Merk extends CI_Controller
{
    public function index()
    {
        $this->load->model('merk_model', 'merk');
        $list_merk = $this->merk->getAll();
        $data['list_merk'] = $list_merk;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/index', $data);
        $this->load->view('layout/footer');
    }
}
