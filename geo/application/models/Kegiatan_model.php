<?php
class Kegiatan_model extends CI_Model{
    //buat variabel
    public $id, $judul, $kapasitas, $harga_tiket, $tanggal, $narasumber, $tempat, $pic, $foto_flyer, $jenis_id;

    public function getALL(){
        //menampilkan data yang ada di table user menggunakan query builder
        $query = $this->db->get('kegiatan');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('kegiatan', ['id' => $id]);
        return $query->row();
    }
}
?>