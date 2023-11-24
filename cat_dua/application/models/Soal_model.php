<?php
class Soal_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_soal_tryout($kategori_id) {
        // Get jenis tryout data from the database where pilihan_tryout_id is equal to $pilihan_tryout_id
        $this->db->where('kategori_id', $kategori_id);
        $query = $this->db->get('soal_m');
        return $query->result();
    }

}