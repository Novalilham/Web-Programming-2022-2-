<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        //akses model mahasiswa
            $this->load->model('mahasiswa_model');
            $mahasiswa = $this->mahasiswa_model->getALL();
            $data['mahasiswa'] = $mahasiswa;
            //render Data dan kirim data ke dalam view
            $this->load->view('mahasiswa/index', $data);
    }
    public function detail($id){
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;

        $this->load->view('mahasiswa/detail', $data);
    }

    // Method Dosen
    public function dosen(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getALL();
        $data['dosen'] = $dosen;
            $this->load->view('mahasiswa/dosen', $data);
    }
    public function detaildosen($id){
        $this->load->model('dosen_model');
        $dsn = $this->dosen_model->getById($id);
        $data['dsn'] = $dsn;

        $this->load->view('mahasiswa/detaildosen', $data);
    }
        
    // Method Matakuliah
    public function matakuliah(){
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getALL();
        $data['matkul'] = $matkul;
            $this->load->view('mahasiswa/matakuliah', $data);
    }
} 
?>