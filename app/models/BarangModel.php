<?php 
    class BarangModel {
        private $table = 'barang';
        private $db;

        public function __construct()
        {
            $this->db= new Database;    
        }

        public function getAllBarang()
        {

            $this->db->query("SELECT * FROM barang 
            INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori 
            INNER JOIN gudang ON barang.id_gudang = gudang.id_gudang");
            return $this->db->resultSet();
        }


        public function tambahBarang($data)
        {
            $query = "INSERT INTO barang (nama_barang,harga,stok,id_kategori,id_gudang) VALUES(:nama_barang,:harga,:stok,:id_kategori,:id_gudang)";
            $this->db->query($query);
            $this->db->bind('nama_barang', $data['nama_barang']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('stok', $data['stok']);
            $this->db->bind('id_kategori', $data['id_kategori']);
            $this->db->bind('id_gudang', $data['id_gudang']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getBarangById($id)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
            $this->db->bind('id',$id);
            return $this->db->single();
        }

        public function updateDataBarang($data)
        {

            $query = "UPDATE barang SET nama_barang=:nama_barang, harga=:harga, stok=:stok, id_kategori=:id_kategori, id_gudang=:id_gudang WHERE id =:id";
            $this->db->query($query);
            $this->db->bind('id',$data['id']);
            $this->db->bind('nama_barang',$data['nama_barang']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('stok', $data['stok']);
            $this->db->bind('id_kategori', $data['id_kategori']);
            $this->db->bind('id_gudang', $data['id_gudang']);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function deleteBarang($id)
        {
            $this->db->query('DELETE FROM ' . $this->table . ' WHERE id =:id');
            $this->db->bind('id',$id);
            $this->db->execute();
            return $this->db->rowCount();
        }


    }