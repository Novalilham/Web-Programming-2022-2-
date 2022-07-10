<?php
class Daftar_model extends CI_Model{
    //buat variabel
    public $id, $tanggal_daftar, $alasan, $users_id, $kegiatan_id, $kategori_peserta_id, $nosertifikat;

    public function getALL(){
        //menampilkan data yang ada di table user menggunakan query builder
        $query = $this->db->get('daftar');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('daftar', ['id' => $id]);
        return $query->row();
    }
    public function daftar($data){
        $sql = "INSERT INTO daftar(alasan, kategori_peserta_id) VALUES(?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    
}
?>