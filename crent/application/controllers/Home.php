<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $this->load->model('mobil_model', 'mobil');
        $list_mobil = $this->mobil->getAll();
        $data['list_mobil'] = $list_mobil;

        $this->load->view('home/index', $data);
    }
}