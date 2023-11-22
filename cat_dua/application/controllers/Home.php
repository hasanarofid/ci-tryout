<?php
// application/controllers/Home.php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Tampilkan halaman tanpa login
        $this->load->view('home_view');
    }
}


?>