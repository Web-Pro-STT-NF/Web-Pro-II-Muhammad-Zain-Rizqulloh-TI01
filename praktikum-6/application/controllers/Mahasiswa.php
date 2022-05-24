<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');
        $this->mhs1->id=1;
        $this->mhs1->nim=010001;
        $this->mhs1->nama='Muhammad Farhan';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.89;

        $this->load->model('mahasiswa_model','mhs2');
        $this->mhs2->id=2;
        $this->mhs2->nim=020001;
        $this->mhs2->nama='Nabilah putri';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.49;

        $this->load->model('mahasiswa_model','mhs3');
        $this->mhs3->id=3;
        $this->mhs3->nim=030001;
        $this->mhs3->nama='Faiz Fikri';
        $this->mhs3->gender='L';
        $this->mhs3->ipk=3.60;

        $this->load->model('mahasiswa_model','mhs4');
        $this->mhs4->id=4;
        $this->mhs4->nim=040001;
        $this->mhs4->nama='Pandan Wangi';
        $this->mhs4->gender='P';
        $this->mhs4->ipk=3.30;
        
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4];


       // $data['mahasiswa1']=$this->mhs1;   (sebelum di list)
        $data['list_mahasiswa']=$list_mhs;


        $this->load->view('mahasiswa/index',$data);
    }
}