<?php
class Dosen extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

}
?>