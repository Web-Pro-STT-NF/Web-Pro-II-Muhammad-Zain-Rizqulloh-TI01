<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Perawatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('perawatan_model', 'perawatan');
        $list_perawatan = $this->perawatan->getAll();
        $data['list_perawatan'] = $list_perawatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('perawatan_model', 'perawatan');
        $data['perawatan'] = $this->perawatan->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Jenis Perawatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("perawatan_model", "perawatan");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_perawatan[] = $_id;  //? 1
        $data_perawatan[] = $_nama;  //? 2

        if (isset($_idedit)) {
            $data_perawatan[] = $_idedit; // ? 8
            $this->perawatan->update($data_perawatan);
        } else {
            $this->perawatan->save($data_perawatan);
        }

        redirect(base_url() . 'index.php/perawatan/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("perawatan_model", "perawatan");
        $perawatanedit = $this->perawatan->findById($_id);

        $data['judul'] = 'Form Update perawatan';
        $data['perawatanedit'] = $perawatanedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("perawatan_model", "perawatan");
        $this->perawatan->delete($_id);
        redirect(base_url() . 'index.php/perawatan', 'refresh');
    }
}
