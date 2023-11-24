<?php
class Jenis_tryout_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_jenis_tryoutall() {
        // Get jenis tryout data from the database
        $query = $this->db->get('jenis_tryout_m');
        return $query->result();
    }

    public function insert_jenis_tryout($data) {
        // Insert jenis tryout data into the database
        $this->db->insert('jenis_tryout_m', $data);
        return $this->db->insert_id(); // Return the last inserted ID
    }

    // Add other methods as needed for updating, deleting, etc.
    public function get_jenis_tryout($pilihan_tryout_id) {
        // Get jenis tryout data from the database where pilihan_tryout_id is equal to $pilihan_tryout_id
        $this->db->where('pilihan_tryout_id', $pilihan_tryout_id);
        $query = $this->db->get('jenis_tryout_m');
        return $query->result();
    }
    
    public function get_jenis_tryout_slug($slug) {
        // Get jenis tryout data from the database where pilihan_tryout_id is equal to $pilihan_tryout_id
        $this->db->where('slug', $slug);
        $query = $this->db->get('jenis_tryout_m');
        
        // Use row() instead of result() to get a single row
        return $query->row();
    }
}
?>
