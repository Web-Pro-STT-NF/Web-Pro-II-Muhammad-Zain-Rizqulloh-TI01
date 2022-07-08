<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Hasil extends CI_Controller
{
    public function index()
    {
        $this->load->model('mobil_model', 'mobil');
        $list_mobil = $this->mobil->getAll();
        $data['list_mobil'] = $list_mobil;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $data['mobil'] = $this->mobil->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data mobil';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("mobil_model", "mobil");

        $_id = $this->input->post('id');
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_mobil[] = $_id;  //? 1
        $data_mobil[] = $_nopol;  //? 2
        $data_mobil[] = $_warna;
        $data_mobil[] = $_biaya_sewa;
        $data_mobil[] = $_deskripsi;
        $data_mobil[] = $_cc;
        $data_mobil[] = $_tahun;
        $data_mobil[] = $_merk_id;
        $data_mobil[] = $_foto;

        if (isset($_idedit)) {
            $data_mobil[] = $_idedit; // ? 8
            $this->mobil->update($data_mobil);
        } else {
            $this->mobil->save($data_mobil);
        }

        redirect(base_url() . 'index.php/mobil/lihat?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("mobil_model", "mobil");
        $mobiledit = $this->mobil->findById($_id);

        $data['judul'] = 'Form Update mobil';
        $data['mobiledit'] = $mobiledit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("mobil_model", "mobil");
        $this->mobil->delete($_id);
        redirect(base_url() . 'index.php/mobil', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']         = 10024;
        $config['max_width']        = 6000;
        $config['max_height']       = 6000;

        $id = $this->input->post('id');
        $array = explode('.', $_FILES['fotomobil']['name']);
        $extension = end($array);
        $new_name = $id . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('fotomobil')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('mobil_model','mobil');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $id; // ? ke 2
            $this->mobil->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('mobil/detail', $data);
        }
        redirect(base_url() . 'index.php/hasil/lihat?id=' . $id);
    }

    public function lihat()
    {
        $_id = $this->input->get('id');
        $this->load->model("mobil_model", "mobil");
        $mobilliat = $this->mobil->findById($_id);

        $this->load->model("merk_model", "merk");
        $merkliat = $this->merk->findById($_id);

        $data['judul'] = 'Form Update mobil';
        $data['mobilliat'] = $mobilliat;
        $data['merkliat'] = $merkliat;
        

        $this->load->view('hasil/lihat', $data);

    }


}
