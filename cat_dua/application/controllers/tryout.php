<?php 

class Tryout extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('jenis_tryout_model');
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
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(1);
        $this->load->view('tryout/polri/index',$data);
    }

    // tryout tni
    public function tni(){
        $this->cek_aktif();
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(2);
        $this->load->view('tryout/tni/index',$data);
    }

    //tryout kedinasan
    public function kedinasan(){
        $this->cek_aktif();
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(3);
        $this->load->view('tryout/kedinasan/index',$data);
    }

    //tryout casn
    public function casn(){
        $this->cek_aktif();
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(4);
        $this->load->view('tryout/casn/index',$data);
    }

    //tryout utbk
    public function utbk(){
        $this->cek_aktif();
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(5);
        $this->load->view('tryout/utbk/index',$data);
    }

     //tryout bumn
     public function bumn(){
        $this->cek_aktif();
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(6);
        $this->load->view('tryout/utbk/index',$data);
    }

}