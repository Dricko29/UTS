<?php
    class Gudang extends Controller {
        
        public function index()
        {
            $data['title'] = 'Halaman Gudang';
            $data['gudang'] = $this->model('GudangModel')->getAllGudang();
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('gudang/index', $data);
            $this->view('templates/footer');
        }

        // method tambah data gudang
        public function tambah()
        {
            $data['title'] = 'Tambah Gudang';
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('gudang/create', $data);
            $this->view('templates/footer');
        }

        
        public function simpanGudang()
        {
            if($this->model('GudangModel')->tambahGudang($_POST) > 0){
                Flasher::setMessage('Berhasil', 'ditambahkan','success');
                header('location:'. base_url . '/gudang');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'ditambahkan','danger');
                header('location:'. base_url . '/gudang');
                exit;
            }
        }
        public function edit($id)
        {
            $data['title'] = 'Detail Gudang';
            $data['gudang'] = $this->model('GudangModel')->getGudangById($id);
            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('gudang/edit', $data);
            $this->view('templates/footer');
        }

        public function updateGudang(){
            if ($this->model('GudangModel')->updateDataGudang($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'diupdate','success');
                header('location: '. base_url .'/gudang');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'diupdate','danger');
                header('location: '. base_url .'/gudang');
                exit;
            }
        
        }

        public function hapus($id)
        {
            if ($this->model('GudangModel')->deleteGudang($id) > 0) {
                Flasher::setMessage('Berhasil', 'dihapus','success');
                header('location: '. base_url .'/gudang');
                exit;
            }else{
                Flasher::setMessage('Gagal', 'dihapus','danger');
                header('location: '. base_url .'/gudang');
                exit;
            }
        }
    }
