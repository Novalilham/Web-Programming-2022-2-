<?php
class Kategoripeserta_model extends CI_Model{
    //buat variabel
    public $id, $nama;

    public function getALL(){
        //menampilkan data yang ada di table user menggunakan query builder
        $query = $this->db->get('kategori_peserta');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('kategori_peserta', ['id' => $id]);
        return $query->row();
    }
}
?>