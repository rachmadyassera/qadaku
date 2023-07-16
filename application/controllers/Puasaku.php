<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puasaku extends CI_Controller {

	function __construct(){
		parent::__construct();
		isnt_login(function() {
			redirect( base_url('Auth/login') );
		});
		$this->load->model('M_qada','mq');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	

	public function index()
	{
            $iduser         = $this->session->userdata('user_id');
        $x['tqp']          = $this->mq->get_tqp_byid($iduser);
        $x['qps']          = $this->mq->get_qps_byid($iduser);
        $x['total_tqp']    = $this->mq->total_tqp_byid($iduser);
        $x['total_qps']    = $this->mq->total_qps_byid($iduser);
        $x['get_all_user'] = $this->mq->get_all_user();
		$this->load->view('v_data_puasaku',$x);
	}

	public function add_tqp()
	{
		$this->load->view('v_add_target_puasa');
	}

	public function add_qps()
	{

        $iduser    = $this->session->userdata('user_id');
        $total_tqp = $this->mq->total_tqp_byid($iduser);
        $total_qps = $this->mq->total_qps_byid($iduser);
        $qpsjml    = 1;

        if  ($total_tqp==$total_qps){
            echo $this->session->set_flashdata('msg','error-add');
            redirect('puasaku');

			}elseif($total_tqp < $total_qps){
            echo $this->session->set_flashdata('msg','error-add');
            redirect('puasaku');

			}else{
            $this->mq->add_qps($iduser,$qpsjml);
            echo $this->session->set_flashdata('msg','success');
            redirect('puasaku');

            }
        
	}

	public function detail()
	{
		$user_id	= $this->uri->segment(3);
		$x['data']  = $this->m_user->get_user_by_id($user_id);
		$this->load->view('v_detail_user',$x);
    }
    
    public function create_tqp()
	{
		$iduser = $this->session->userdata('user_id');
		$ket    = htmlspecialchars($this->input->post('keterangan',TRUE),ENT_QUOTES);
		$thn    = htmlspecialchars($this->input->post('tahun',TRUE),ENT_QUOTES);
		$jml    = htmlspecialchars($this->input->post('jumlah',TRUE),ENT_QUOTES);
        
        $this->mq->add_tqp($iduser,$ket,$thn,$jml);
        echo $this->session->set_flashdata('msg','success-target');
        redirect('puasaku');
    }
	
	function hapus(){
		$idqps = $this->uri->segment(3);
		$this->mq->hapus_qps($idqps);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('puasaku');
    }
    
    function hapustqp(){
		$idtqp = $this->uri->segment(3);
		$this->mq->hapus_tqp($idtqp);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('puasaku');
	}

}
