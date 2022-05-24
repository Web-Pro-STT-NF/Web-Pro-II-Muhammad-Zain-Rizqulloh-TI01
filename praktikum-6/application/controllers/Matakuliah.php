<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
		$this->load->model('Matakuliah_model','matkul1');
        $this->matkul1->id=1;
        $this->matkul1->kode='0417';
        $this->matkul1->nama='Ethical Hacking';
        $this->matkul1->sks=3;

        $this->load->model('Matakuliah_model','matkul2');
        $this->matkul2->id=2;
        $this->matkul2->kode='0597';
        $this->matkul2->nama='UI & UX';
        $this->matkul2->sks=4;

        $this->load->model('Matakuliah_model','matkul3');
        $this->matkul3->id=3;
        $this->matkul3->kode='0184';
        $this->matkul3->nama='Website Development';
        $this->matkul3->sks=3;

        $this->load->model('Matakuliah_model','matkul4');
        $this->matkul4->id=4;
        $this->matkul4->kode='0714';
        $this->matkul4->nama='Komunikasi Efektif';
        $this->matkul4->sks=2;



        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4];


        // $data['mahasiswa1']=$this->mhs1;   (sebelum di list)
        $data['list_matakuliah']=$list_matkul;


        $this->load->view('Matakuliah/index',$data);
	}

}
