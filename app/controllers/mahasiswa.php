<?php
class mahasiswa extends controller{
    public function index()
    {
     $data['judul'] = 'daftar mahasiswa';
     $data['mhs'] = $this->model('mahasiswa_model') ->getAllMahasiswa();
     $this->view('templates/header', $data);
     $this->view('mahasiswa/index', $data);
     $this->view('templates/footer');
    }
}

?>