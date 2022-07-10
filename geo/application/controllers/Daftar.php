<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Daftar extends CI_Controller {
 
	function daftar(){
        $this->load->model('daftar_model', 'daftar');
        // $this->load->model('user_model');
        // $user_id =$this->user_model->getALL();
        // $this->load->model('kegiatan_model');
        // $kegiatan_id =$this->kegiatan_model->getALL();
        // $this->load->model('kategoripeserta_model');
        // $kategori_peserta_id =$this->kategoripeserta_model->getALL();


        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_user_id = $this->input->post('user_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');

        $data_daftar['tanggal_daftar'] = $_tanggal_daftar; //langkah kedua daftar
        $data_daftar['alasan'] = $_alasan;
        $data_daftar['user_id'] = $_user_id;
        $data_daftar['kegiatan_id'] = $_kegiatan_id;
        $data_daftar['kategori_peserta_id'] = $_kategori_peserta_id;
        $data_daftar['nosertifikat'] = $_nosertifikat;

        redirect('user/daftar');
    }

}
?>