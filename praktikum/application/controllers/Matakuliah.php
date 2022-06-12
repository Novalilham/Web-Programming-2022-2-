<?php
class Matakuliah extends CI_Controller{

    // Method Matakuliah
    public function index(){
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getALL();
        $data['matkul'] = $matkul;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('mahasiswa/matakuliah', $data);
            $this->load->view('layout/footer');
    }

    
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }

}
?>