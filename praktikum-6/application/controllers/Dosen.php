<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$this->load->model('Dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='0110';
        $this->dsn1->nama='Tubagus';
        $this->dsn1->gender='L';
        $this->dsn1->pendidikan='s3';

        $this->load->model('Dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='0210';
        $this->dsn2->nama='Sugeng';
        $this->dsn2->gender='L';
        $this->dsn2->pendidikan='s2';

        $this->load->model('Dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn='0111';
        $this->dsn3->nama='Siti Komariah';
        $this->dsn3->gender='P';
        $this->dsn3->pendidikan='s2';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];


        // $data['mahasiswa1']=$this->mhs1;   (sebelum di list)
        $data['list_dosen']=$list_dsn;


        $this->load->view('Dosen/index',$data);
	}

}
