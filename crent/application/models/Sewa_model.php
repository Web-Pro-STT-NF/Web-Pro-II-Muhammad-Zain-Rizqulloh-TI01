<?php

class Sewa_model extends CI_Model
{
    private $table = "sewa";

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
        $sql = "INSERT INTO sewa
        (id,tanggal_mulai,tanggal_akhir,tujuan,noktp,users_id,mobil_id)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }




    public function update($data)
    {
        $sql = "UPDATE sewa SET id=?,tanggal_mulai=?,tanggal_akhir=?,tujuan=?,noktp=?,users_id=?,mobil_id=? WHERE id=?";
        $this->db->query($sql, $data);
    }


    public function delete($id)
    {
        $sql = "DELETE from sewa WHERE id=?";
        $this->db->query($sql,array($id));
    }

    public function berhasil($id)
    {
        $sql ="SELECT *,(tanggal_akhir-tanggal_mulai)*biaya_sewa as total FROM beli" ;
        $this->db->query($sql,array($id));
    }
}