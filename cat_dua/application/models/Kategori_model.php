<?php
class Kategori_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_kategori_tryout($jenis_tryout_id) {
        // Get jenis tryout data from the database where pilihan_tryout_id is equal to $pilihan_tryout_id
        $this->db->where('jenis_tryout_id', $jenis_tryout_id);
        $query = $this->db->get('kategori_m');
        return $query->result();
    }
    public function get_kategori_tryout_slug($slug) {
        // Get jenis tryout data from the database where pilihan_tryout_id is equal to $pilihan_tryout_id
        $this->db->where('slug', $slug);
        $query = $this->db->get('kategori_m');
        
        // Use row() instead of result() to get a single row
        return $query->row();
    }

}