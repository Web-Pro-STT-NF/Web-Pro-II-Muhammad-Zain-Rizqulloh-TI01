<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class JenisPerawatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('Jenisperawatan_model', 'jpr');
        $list_jenisperawatan = $this->jpr->getAll();
        $data['list_jenisperawatan'] = $list_jenisperawatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenisperawatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('jenisperawatan_model', 'jenisperawatan');
        $data['jpr'] = $this->jenisperawatan->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenisperawatan/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Jenis Perawatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenisperawatan/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("jenisperawatan_model", "jenisperawatan");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_jpr[] = $_id;  //? 1
        $data_jpr[] = $_nama;  //? 2

        if (isset($_idedit)) {
            $data_jpr[] = $_idedit; // ? 8
            $this->jenisperawatan->update($data_jpr);
        } else {
            $this->jenisperawatan->save($data_jpr);
        }

        redirect(base_url() . 'index.php/jenisperawatan/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenisperawatan_model", "jenisperawatan");
        $jpredit = $this->jenisperawatan->findById($_id);

        $data['judul'] = 'Form Update jenisperawatan';
        $data['jpredit'] = $jpredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenisperawatan/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenisperawatan_model", "jenisperawatan");
        $this->jenisperawatan->delete($_id);
        redirect(base_url() . 'index.php/jenisperawatan', 'refresh');
    }
}
