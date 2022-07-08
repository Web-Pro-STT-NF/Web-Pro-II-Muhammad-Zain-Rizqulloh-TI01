<?php

class Merk_model extends CI_Model
{
    private $table = "merk";

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
        $sql = "INSERT INTO merk VALUES (?,?,?)";
        $this->db->query($sql, $data);
    }


    public function update($data)
    {
        $sql = "UPDATE merk SET id=?,nama=?,produk=? WHERE id=?";
        $this->db->query($sql, $data);
    }


    public function delete($id)
    {
        $sql = "DELETE from merk WHERE id=?";
        $this->db->query($sql,array($id));
    }
}