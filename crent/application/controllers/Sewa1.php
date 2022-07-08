

<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class Sewa1 extends CI_Controller
{
    public function index()
    {
        $this->load->model('sewa_model', 'sewa');
        $list_sewa = $this->sewa->getAll();
        $data['list_sewa'] = $list_sewa;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('sewa_model', 'sewa');
        $data['sewa'] = $this->sewa->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa1/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data sewa';

        $this->load->view('sewa1/create', $data);

    }

    public function save()
    {
        $this->load->model("sewa_model", "sewa");
        $this->load->model("users_model", "sewa");
        $this->load->model("mobil_model", "sewa");

        $_id = $this->input->post('id');
        $_tanggal_mulai = $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_sewa[] = $_id;  //? 1
        $data_sewa[] = $_tanggal_mulai;  //? 2
        $data_sewa[] = $_tanggal_akhir;
        $data_sewa[] = $_tujuan;
        $data_sewa[] = $_noktp;
        $data_sewa[] = $_users_id;
        $data_sewa[] = $_mobil_id;


        if (isset($_idedit)) {
            $data_sewa[] = $_idedit; // ? 8
            $this->sewa->update($data_sewa);
        } else {
            $this->sewa->save($data_sewa);
        }

        redirect(base_url() . 'index.php/sewa1/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("sewa_model", "sewa");
        $sewaedit = $this->sewa->findById($_id);

        $data['judul'] = 'Form Update sewa';
        $data['sewaedit'] = $sewaedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("sewa_model", "sewa");
        $this->sewa->delete($_id);
        redirect(base_url() . 'index.php/sewa', 'refresh');
    }
}
