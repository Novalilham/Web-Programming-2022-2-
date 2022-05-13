<?php
class Matakuliah_model extends CI_Model {
    // Buat Property atau Variabel
    public $nama;
    public $sks;
    public $kode;

    public function getALL(){
        //menampilkan data yang ada di table matakuliah menggunakan query builder
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
}
?>