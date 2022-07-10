<?php
class Jeniskegiatan_model extends CI_Model{
    //buat variabel
    public $id, $nama;

    public function getALL(){
        //menampilkan data yang ada di table user menggunakan query builder
        $query = $this->db->get('jenis_kegiatan');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('jenis_kegiatan', ['id' => $id]);
        return $query->row();
    }
}
?>