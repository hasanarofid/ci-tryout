<?php 

class Tryout extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
	public function cek_aktif() {   
		if ($this->session->userdata('user_valid') == false && $this->session->userdata('user_id') == "") {
			redirect('user/login');
		} 
	}

    public function login() {
		$this->load->view('user/login');
	}

    // tryout polri
    public function polri(){
        $this->cek_aktif();
        $this->load->view('tryout/polri/index');
    }

    // tryout tni
    public function tni(){
        $this->cek_aktif();
        $this->load->view('tryout/tni/index');
    }

    //tryout kedinasan
    public function kedinasan(){
        $this->cek_aktif();
        $this->load->view('tryout/kedinasan/index');
    }

    //tryout casn
    public function casn(){
        $this->cek_aktif();
        $this->load->view('tryout/casn/index');
    }

    //tryout utbk
    public function utbk(){
        $this->cek_aktif();
        $this->load->view('tryout/utbk/index');
    }

}