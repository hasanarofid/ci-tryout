<?php 

class Ujian extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('jenis_tryout_model');
        $this->load->model('kategori_model');
        $this->load->model('soal_model');
    }
	public function cek_aktif() {   
		if ($this->session->userdata('user_valid') == false && $this->session->userdata('user_id') == "") {
			redirect('user/login');
		} 
	}

    public function login() {
    
		$this->load->view('user/login');
	}
    public function mulai($id_soal,$id_user){
        $this->cek_aktif();
        // var_dump($id_soal.' - '.$id_user);

        $this->load->view('ujian/index');
    }



}