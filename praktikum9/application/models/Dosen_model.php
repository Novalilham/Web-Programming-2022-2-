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
    public function savedosen($data){
        $sql = "INSERT INTO dosen (nama,gender,tmp_lahir,tgl_lahir,nidn,pendidikan) VALUES(?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function updatedosen($data){
        $sql ="UPDATE dosen SET nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,nidn=?,pendidikan=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function deletedosen($data){
        //hapus data dosen
        $sql = "DELETE FROM dosen WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>