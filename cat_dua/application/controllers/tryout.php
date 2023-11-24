<?php 

class Tryout extends CI_Controller {
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

    // tryout polri
    public function polri($id =null ,$slug=null){
        $this->cek_aktif();
        
        
        $data['jenis'] = $this->jenis_tryout_model->get_jenis_tryout(1);
        
        if(!empty($id)){
            $data['slug1'] = $id;
            $modKategori = $this->jenis_tryout_model->get_jenis_tryout_slug($id);
            $data['kategori'] = $this->kategori_model->get_kategori_tryout($modKategori->id);
            $url = 'tryout/polri/kategori';
        }else{
            $data['kategori'] = null;
            $data['slug1'] = null;
            $url = 'tryout/polri/index';
        }

        if(!empty($slug)){
            $mod = $this->kategori_model->get_kategori_tryout_slug($slug);
            $data['soal'] = $this->soal_model->get_soal_tryout($mod->id);
            $url = 'tryout/polri/soal';
        }else{
            $data['soal'] = null;
            // $url = 'tryout/polri/index'; 
        }

        // var_dump($slug);die;
        


        $this->load->view( $url,$data);
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