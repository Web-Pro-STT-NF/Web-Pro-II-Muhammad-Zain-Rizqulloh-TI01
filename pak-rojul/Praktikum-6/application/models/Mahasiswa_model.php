<?php

class Mahasiswa_model extends CI_Model
{
    private $table = "mahasiswa";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findByid($id){
            $this->db->where('id',$id);
            $query = $this->db->get($this->table);
            return $query->row();
    }

    public function save($data){

    }

    public function update($data){

    }

    public function dalete($id){

    }
}