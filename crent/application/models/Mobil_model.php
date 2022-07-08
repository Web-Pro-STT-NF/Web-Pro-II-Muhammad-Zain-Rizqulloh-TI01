<?php

class Mobil_model extends CI_Model
{
    private $table = "mobil";

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
        $sql = "INSERT INTO mobil 
        (id,nopol,warna,biaya_sewa,deskripsi,cc,tahun,merk_id,foto)
        VALUES (?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }


    public function update($data)
    {
        $sql = "UPDATE mobil SET id=?,nopol=?,warna=?,biaya_sewa=?,deskripsi=?,cc=?,tahun=?,merk_id=?,foto=? 
        WHERE id=?";
        $this->db->query($sql, $data);
    }


    public function delete($id)
    {
        $sql = "DELETE from mobil WHERE id=?";
        $this->db->query($sql,array($id));
        
    }

    public function upload_foto($array)
    {
        $sql = "UPDATE mobil SET foto=? WHERE id=?";
        $this->db->query($sql, $array);
    }

    public function lihat($array)
    {
        $sql = "SELECT mobil.id, merk.produk as merk, mobil.nopol, mobil.warna, mobil.biaya_sewa, mobil.deskripsi, mobil.cc, mobil.tahun
        FROM mobil
        Left Join merk
        ON mobil.merk_id = merk.id where mobil.id=?;";
        $this->db->query($sql, $array);
    }
}