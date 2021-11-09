<?php 

class KategoriModel {

    private $table = 'kategori';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahKategori($data){
        $query = "INSERT INTO kategori (nama_kategori) VALUES(:nama_kategori)";
        $this->db->query($query);
        $this->db->bind('nama_kategori', $data['nama_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getKategoriById($id_kategori)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kategori =:id_kategori');
        $this->db->bind('id_kategori',$id_kategori);
        return $this->db->single();
    }

    public function updateDataKategori($data)
    {
        $query = "UPDATE kategori SET nama_kategori=:nama_kategori WHERE id_kategori =:id_kategori";
        $this->db->query($query);
        $this->db->bind('id_kategori',$data['id_kategori']);
        $this->db->bind('nama_kategori',$data['nama_kategori']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteKategori($id_kategori)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_kategori =:id_kategori');
        $this->db->bind('id_kategori',$id_kategori);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
}