<?php
class mahasiswa extends controller {
    
    public function index() {
        $data['judul'] = 'daftar mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if ($this->model('mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
?>