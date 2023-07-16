<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Users_model','m_user');
	}	

	public function index()
	{
		$this->load->view('v_new_user');
    }
    
    public function new()
	{
		$nama     = htmlspecialchars($this->input->post('name',TRUE),ENT_QUOTES);
		$email    = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$tgllahir = htmlspecialchars($this->input->post('tgllahir',TRUE),ENT_QUOTES);
		$jk       = htmlspecialchars($this->input->post('jeniskelamin',TRUE),ENT_QUOTES);
		$domisili = htmlspecialchars($this->input->post('domisili',TRUE),ENT_QUOTES);
		$nohp     = htmlspecialchars($this->input->post('nohp',TRUE),ENT_QUOTES);
		$pass     = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		$pass2    = htmlspecialchars($this->input->post('password2',TRUE),ENT_QUOTES);

	    $cek_email = $this->m_user->validasi_email_pengguna($email);
	    if($cek_email->num_rows() > 0){
	    	echo $this->session->set_flashdata('msg','error-email');
			redirect('register');
	    }else{
	    	if($pass == $pass2){
		    	
				$this->m_user->insert_pengguna($nama,$email,$tgllahir, $jk, $domisili, $nohp, $pass);
				echo $this->session->set_flashdata('msg','success');
				redirect('auth/login');
		    }else{
		    	echo $this->session->set_flashdata('msg','error');
				redirect('register');
		    }
	    }
		    
	}
}
