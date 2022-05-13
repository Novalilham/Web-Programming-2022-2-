<?php
class Dosen_model extends CI_Model {
    // Buat Property atau Variabel
    public $nidn;
    public $pendidikan;

    public function getALL(){
        //menampilkan data yang ada di table dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
?>