<?php 

class User extends CI_Controller {

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


    public function index() {
        $this->cek_aktif();
        // var_dump(1);die;
        $this->load->view('user/index');
    }

    public function act_login() {
		
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		
		$password2	= md5($password);
		
		$q_data		= $this->db->query("SELECT * FROM m_user WHERE username = ? AND password = ?",array($username,$password2));
		$j_data		= $q_data->num_rows();
		$a_data		= $q_data->row();
		
		$_log		= array();
		if ($j_data === 1) {
			
				$sess_nama_user = "User";
			$data = array(
                    'user_id' => $a_data->id,
                    'user_user' => $a_data->username,
                    'user_paket' => $a_data->paket,
                    'user_email' => $a_data->email,
					'user_valid' => true
                    );
            $this->session->set_userdata($data);
			$_log['log']['status']			= "1";
			$_log['log']['keterangan']		= "Login berhasil";
			$_log['log']['detil_admin']		= $this->session->userdata;
		} else {
			$_log['log']['status']			= "0";
			$_log['log']['keterangan']		= "Maaf, username dan password tidak ditemukan";
			$_log['log']['detil_admin']		= null;
		}
		
		j($_log);
	}

    public function logout() {
		$data = array(
                        'user_id' => '',
                        'user_user' => '',
                        'user_paket' => '',
                        'user_email' => '',
                        'user_valid' => false
                    );
        $this->session->set_userdata($data);
		redirect('user');
	}

}


?>