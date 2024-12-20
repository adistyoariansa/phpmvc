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

    public function tambah() 
    {

        if ($this->model('mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getubah()
    {

        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById
        ($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'daftar mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->cariDatamahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
?>