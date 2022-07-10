<?php
class User extends CI_Controller{
    //membuat method index
    public function user(){
        //load model user
        $this->load->model('user_model');
        $user = $this->user_model->getALL();
        $data['user'] = $user;
        //render Data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }
    public function kegiatan(){
        //load model user
        $this->load->model('kegiatan_model');
        $kegiatan = $this->kegiatan_model->getALL();
        $data['kegiatan'] = $kegiatan;
        //render Data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/kegiatan', $data);
        $this->load->view('layout/footer');
    }
    public function kategori_peserta(){
        //load model user
        $this->load->model('kategoripeserta_model');
        $kategori_peserta = $this->kategoripeserta_model->getALL();
        $data['kategori_peserta'] = $kategori_peserta;
        //render Data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/kategori_peserta', $data);
        $this->load->view('layout/footer');
    }
    public function jenis_kegiatan(){
        //load model user
        $this->load->model('jeniskegiatan_model');

        $jenis_kegiatan = $this->jeniskegiatan_model->getALL();
        $data['jenis_kegiatan'] = $jenis_kegiatan;
        //render Data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/jenis_kegiatan', $data);
        $this->load->view('layout/footer');
    }
    public function daftar(){
        //load model user
        $this->load->model('daftar_model');

        $daftar = $this->daftar_model->getALL();
        $data['daftar'] = $daftar;
        //render Data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/daftar', $data);
        $this->load->view('layout/footer');
    }
}
?>

 