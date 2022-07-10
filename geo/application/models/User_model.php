<?php
class User_model extends CI_Model{
    //buat variabel
    public $id, $username, $password, $email, $created_at, $last_login, $status, $role;

    public function getALL(){
        //menampilkan data yang ada di table user menggunakan query builder
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('user', ['id' => $id]);
        return $query->row();
    }
}
?>