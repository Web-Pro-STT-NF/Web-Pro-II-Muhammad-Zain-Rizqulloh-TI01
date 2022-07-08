<?php

class Jenisperawatan_model extends CI_Model
{
    private $table = "jenis_perawatan";

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

    public function save($data)
    {
        $sql = "INSERT INTO jenis_perawatan 
        (id,nama)
        VALUES (?,?)";
        $this->db->query($sql, $data);
    }


    public function update($data)
    {
        $sql = "UPDATE jenis_perawatan SET id=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }


    public function delete($id)
    {
        $sql = "DELETE from jenis_perawatan WHERE id=?";
        $this->db->query($sql,array($id));
    }
}