<?php
    class Kategori extends Controller {
        
        public function index()
        {
            $data['title'] = 'Halaman Kategori';
            $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }

        // method tambah data kategori
        public function tambah()
        {
            $data['title'] = 'Tambah Kategori';
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('kategori/create', $data);
            $this->view('templates/footer');
        }

        
        public function simpanKategori()
        {
            if($this->model('KategoriModel')->tambahKategori($_POST) > 0){
                Flasher::setMessage('Berhasil', 'ditambahkan','success');
                header('location:'. base_url . '/kategori');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'ditambahkan','danger');
                header('location:'. base_url . '/kategori');
                exit;
            }
        }
        public function edit($id_kategori)
        {
            $data['title'] = 'Detail Kategori';
            $data['kategori'] = $this->model('KategoriModel')->getKategoriById($id_kategori);
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('kategori/edit', $data);
            $this->view('templates/footer');
        }

        public function updateKategori(){
            if ($this->model('KategoriModel')->updateDataKategori($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate','success');
                header('location: '. base_url .'/kategori');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'diupdate','danger');
                header('location: '. base_url .'/kategori');
                exit;
            }
        
        }

        public function hapus($id_kategori)
        {
            if ($this->model('KategoriModel')->deleteKategori($id_kategori) > 0) {
                Flasher::setMessage('Berhasil', 'dihapus','success');
                header('location: '. base_url .'/kategori');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'dihapus','danger');
                header('location: '. base_url .'/kategori');
                exit;
            }
        }
    }
