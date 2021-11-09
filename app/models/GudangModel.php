<?php 

class GudangModel {

    private $table = 'gudang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGudang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahGudang($data){
        $query = "INSERT INTO gudang (gudang) VALUES(:gudang)";
        $this->db->query($query);
        $this->db->bind('gudang', $data['gudang']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getGudangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function updateDataGudang($data)
    {
        $query = "UPDATE gudang SET gudang=:gudang WHERE id =:id";
        $this->db->query($query);
        $this->db->bind('id',$data['id']);
        $this->db->bind('gudang',$data['gudang']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteGudang($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
}