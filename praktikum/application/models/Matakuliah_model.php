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
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('matakuliah', ['id' => $id]);
        return $query->row();
    }
    public function savematkul($data){
        $sql = "INSERT INTO matakuliah (nama,sks,kode) VALUES(?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function updatematkul($data){
        $sql ="UPDATE matakuliah SET nama=?,sks=?,kode=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function deletematkul($data){
        //hapus data dosen
        $sql = "DELETE FROM matakuliah WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>