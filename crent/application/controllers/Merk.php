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

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('merk_model', 'merk');
        $data['merk'] = $this->merk->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Merk';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("merk_model", "merk");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_merk[] = $_id;  //? 1
        $data_merk[] = $_nama;  //? 2
        $data_merk[] = $_produk;

        if (isset($_idedit)) {
            $data_merk[] = $_idedit; // ? 8
            $this->merk->update($data_merk);
        } else {
            $this->merk->save($data_merk);
        }

        redirect(base_url() . 'index.php/merk/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("merk_model", "merk");
        $merkedit = $this->merk->findById($_id);

        $data['judul'] = 'Form Update merk';
        $data['merkedit'] = $merkedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("merk_model", "merk");
        $this->merk->delete($_id);
        redirect(base_url() . 'index.php/merk', 'refresh');
    }

}
