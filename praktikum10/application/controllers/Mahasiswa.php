<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        //akses model mahasiswa
            $this->load->model('mahasiswa_model');
            $mahasiswa = $this->mahasiswa_model->getALL();
            $data['mahasiswa'] = $mahasiswa;
            //render Data dan kirim data ke dalam view
            $this->load->view('dashboard');
            $this->load->view('mahasiswa/index', $data);
            
    }
    public function detail($id){
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('dashboard');
        $this->load->view('mahasiswa/detail', $data);
    }

    // Method Dosen
    public function dosen(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getALL();
        $data['dosen'] = $dosen;
        $this->load->view('dashboard');
            $this->load->view('mahasiswa/dosen', $data);
    }
    public function detaildosen($id){
        $this->load->model('dosen_model');
        $dsn = $this->dosen_model->getById($id);
        $data['dsn'] = $dsn;
        $this->load->view('dashboard');
        $this->load->view('mahasiswa/detaildosen', $data);
    }
        
    // Method Matakuliah
    public function matakuliah(){
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getALL();
        $data['matkul'] = $matkul;
        $this->load->view('dashboard');
            $this->load->view('mahasiswa/matakuliah', $data);
    }
    public function form(){
        //render view
        $this->load->view('dashboard');
        $this->load->view('mahasiswa/form');

    }
    public function save(){
        //akses model mahasiswa
        $this->load->model('mahasiswa_model', 'mahasiswa'); //langkah pertama mahasiswa
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');

        $data_mahasiswa['nim'] = $_nim; //langkah kedua mahasiswa
        $data_mahasiswa['nama'] = $_nama;
        $data_mahasiswa['gender'] = $_gender;
        $data_mahasiswa['tmp_lahir'] = $_tmp_lahir;
        $data_mahasiswa['tgl_lahir'] = $_tgl_lahir;
        $data_mahasiswa['ipk'] = $_ipk;

        if((!empty($_idedit))){ //update
            $data_mahasiswa['id'] = $_idedit;
            $this->mahasiswa->update($data_mahasiswa);
        }else{
            //databaru
            $this->mahasiswa->save($data_mahasiswa);
        }
        redirect("mahasiswa","refresh");
    }
    public function edit($id){
        //akses model mahasiswa
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $obj_mahasiswa = $this->mahasiswa->getById($id);
        $data['obj_mahasiswa'] = $obj_mahasiswa;
        $this->load->view('dashboard');
        $this->load->view('mahasiswa/edit', $data);
    }
    public function delete($id){
        $this->load->model('mahasiswa_model', 'mahasiswa');
        //mengecek data mahasiswa berdasarkan id
        $data_mahasiswa['id'] = $id;
        $this->mahasiswa->delete($data_mahasiswa);
        redirect('mahasiswa','data_mahasiswa');
    }
    public function formdosen(){
        //render view
        $this->load->view('dashboard');
        $this->load->view('mahasiswa/formdosen');
        }    
    
    public function savedosen(){
         //akses model dosen
         $this->load->model('dosen_model', 'mahasiswa'); //langkah pertama dosen
         $_nama = $this->input->post('nama');
         $_gender = $this->input->post('gender');
         $_tmp_lahir = $this->input->post('tmp_lahir');
         $_tgl_lahir = $this->input->post('tgl_lahir');
         $_nidn = $this->input->post('nidn');
         $_pendidikan = $this->input->post('pendidikan');
    
         //langkah kedua dosen
         $data_dosen['nama'] = $_nama;
         $data_dosen['gender'] = $_gender;
         $data_dosen['tmp_lahir'] = $_tmp_lahir;
         $data_dosen['tgl_lahir'] = $_tgl_lahir;
         $data_dosen['nidn'] = $_nidn;
         $data_dosen['pendidikan'] = $_pendidikan;
        
            if((!empty($_idedit))){ //update
                $data_dosen['id'] = $_idedit;
                $this->mahasiswa->updatedosen($data_dosen);
            }else{
                //databaru
                $this->mahasiswa->savedosen($data_dosen);
            }
            redirect('index.php/mahasiswa/dosen');
        }
        public function editdosen($id){
            //akses model dosen
            $this->load->model('dosen_model', 'mahasiswa');
            $obj_dosen = $this->mahasiswa->getById($id);
            $data['obj_dosen'] = $obj_dosen;
            $this->load->view('dashboard');
            $this->load->view('mahasiswa/editdosen', $data);
        }
        public function deletedosen($id){
            $this->load->model('dosen_model', 'mahasiswa');
            //mengecek data dosen berdasarkan id
            $data_dosen['id'] = $id;
            $this->mahasiswa->deletedosen($data_dosen);
            redirect('index.php/mahasiswa/dosen','data_dosen');
        }
        public function formmatkul(){
            //render view
            $this->load->view('dashboard');
            $this->load->view('mahasiswa/formmatkul');
    
        }
        public function savematkul(){
            //akses model matakuliah
            $this->load->model('matakuliah_model', 'mahasiswa'); //langkah pertama matkul
            $_nama = $this->input->post('nama');
            $_sks = $this->input->post('sks');
            $_kode = $this->input->post('kode');
    
            $data_matkul['nama'] = $_nama; //langkah kedua matakuliah
            $data_matkul['sks'] = $_sks;
            $data_matkul['kode'] = $_kode;
    
            if((!empty($_idedit))){ //update
                $data_matkul['id'] = $_idedit;
                $this->mahasiswa->updatematkul($data_matkul);
            }else{
                //databaru
                $this->mahasiswa->savematkul($data_matkul);
            }
            redirect("index.php/mahasiswa/matakuliah");
        }
        public function updatematkul($id){
            //akses model mahasiswa
            $this->load->model('matakuliah_model', 'mahasiswa');
            $obj_matakuliah = $this->mahasiswa->getById($id);
            $data['obj_matakuliah'] = $obj_matakuliah;
            $this->load->view('dashboard');
            $this->load->view('mahasiswa/updatematkul', $data);
        }
        public function deletematkul($id){
            $this->load->model('matakuliah_model', 'mahasiswa');
            //mengecek data mahasiswa berdasarkan id
            $data_matakuliah['id'] = $id;
            $this->mahasiswa->deletematkul($data_matakuliah);
            redirect('index.php/mahasiswa/matakuliah','data_matakuliah');
        }
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('logged_in')){
                redirect('/login');
            }
        }
} 
?>
