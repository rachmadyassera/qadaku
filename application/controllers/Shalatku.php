<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shalatku extends CI_Controller {

	function __construct(){
		parent::__construct();
		isnt_login(function() {
			redirect( base_url('Auth/login') );
		});
		$this->load->model('M_qada','mq');
		$this->load->model('M_Dashboard');
		$this->m_dashboard = $this->M_Dashboard;
		$this->load->library('upload');
		$this->load->helper('text');
	}

	

	public function index()
	{
			$iduser          = $this->session->userdata('user_id');
		$x['tqs']           = $this->mq->get_tqs_byid($iduser);
		$x['qss']           = $this->mq->get_qss_byid($iduser);
		$x['get_all_user']  = $this->mq->get_all_user();
		$x['get_all_ws']    = $this->m_dashboard->get_all_ws();
		$x['total_tqs_ws1'] = $this->mq->total_tqs_ws1_byid($iduser);
		$x['total_tqs_ws2'] = $this->mq->total_tqs_ws2_byid($iduser);
		$x['total_tqs_ws3'] = $this->mq->total_tqs_ws3_byid($iduser);
		$x['total_tqs_ws4'] = $this->mq->total_tqs_ws4_byid($iduser);
		$x['total_tqs_ws5'] = $this->mq->total_tqs_ws5_byid($iduser);
		$x['total_qss_ws1'] = $this->mq->total_qss_ws1_byid($iduser);
		$x['total_qss_ws2'] = $this->mq->total_qss_ws2_byid($iduser);
		$x['total_qss_ws3'] = $this->mq->total_qss_ws3_byid($iduser);
		$x['total_qss_ws4'] = $this->mq->total_qss_ws4_byid($iduser);
		$x['total_qss_ws5'] = $this->mq->total_qss_ws5_byid($iduser);

		$this->load->view('v_data_shalatku',$x);
	}

	public function add_tqs()
	{	
		
		$x['get_all_ws']    = $this->m_dashboard->get_all_ws();
		$this->load->view('v_add_target_shalat',$x);
	}

	public function add_qss()
	{
		$x['get_all_ws']    = $this->m_dashboard->get_all_ws();
		$this->load->view('v_add_qss',$x);
	}

	public function detail()
	{
		$user_id	= $this->uri->segment(3);
		$x['data']  = $this->m_user->get_user_by_id($user_id);
		$this->load->view('v_detail_user',$x);
    }
    
    public function create_tqs()
	{
		$iduser = $this->session->userdata('user_id');
		$ket    = htmlspecialchars($this->input->post('keterangan',TRUE),ENT_QUOTES);
		$ws     = htmlspecialchars($this->input->post('waktushalat',TRUE),ENT_QUOTES);
		$jml    = htmlspecialchars($this->input->post('jumlah',TRUE),ENT_QUOTES);
        
        $this->mq->add_tqs($iduser,$ket,$ws,$jml);
        echo $this->session->set_flashdata('msg','success-target');
        redirect('shalatku');
	}
	
	public function create_qss()
	{

		$iduser = $this->session->userdata('user_id');
		
		$total_tqs_ws1 = $this->mq->total_tqs_ws1_byid($iduser);
		$total_tqs_ws2 = $this->mq->total_tqs_ws2_byid($iduser);
		$total_tqs_ws3 = $this->mq->total_tqs_ws3_byid($iduser);
		$total_tqs_ws4 = $this->mq->total_tqs_ws4_byid($iduser);
		$total_tqs_ws5 = $this->mq->total_tqs_ws5_byid($iduser);
		$total_qss_ws1 = $this->mq->total_qss_ws1_byid($iduser);
		$total_qss_ws2 = $this->mq->total_qss_ws2_byid($iduser);
		$total_qss_ws3 = $this->mq->total_qss_ws3_byid($iduser);
		$total_qss_ws4 = $this->mq->total_qss_ws4_byid($iduser);
		$total_qss_ws5 = $this->mq->total_qss_ws5_byid($iduser);

		$ws     = htmlspecialchars($this->input->post('waktushalat',TRUE),ENT_QUOTES);
		$jml    = htmlspecialchars($this->input->post('jumlah',TRUE),ENT_QUOTES);

		if ($ws==1){

			if	($total_tqs_ws1==$total_qss_ws1){
				
				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}elseif	($total_tqs_ws1<$total_qss_ws1){

				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}else{
				
				$this->mq->add_qss($iduser,$ws,$jml);
				echo $this->session->set_flashdata('msg','success');
				redirect('shalatku');

			}

		}elseif ($ws==2){

			if	($total_tqs_ws2==$total_qss_ws2){
				
				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}elseif	($total_tqs_ws2<$total_qss_ws2){

				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}else{
				
				$this->mq->add_qss($iduser,$ws,$jml);
				echo $this->session->set_flashdata('msg','success');
				redirect('shalatku');

			}

		}elseif ($ws==3){

			if	($total_tqs_ws3==$total_qss_ws3){
				
				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}elseif	($total_tqs_ws3<$total_qss_ws3){

				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}else{
				
				$this->mq->add_qss($iduser,$ws,$jml);
				echo $this->session->set_flashdata('msg','success');
				redirect('shalatku');

			}

		}elseif ($ws==4){

			if	($total_tqs_ws4==$total_qss_ws4){
				
				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}elseif	($total_tqs_ws4<$total_qss_ws4){

				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}else{
				
				$this->mq->add_qss($iduser,$ws,$jml);
				echo $this->session->set_flashdata('msg','success');
				redirect('shalatku');

			}

		}else{

			if	($total_tqs_ws5==$total_qss_ws5){
				
				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}elseif	($total_tqs_ws5<$total_qss_ws5){

				echo $this->session->set_flashdata('msg','error-add');
				redirect('shalatku');

			}else{
				
				$this->mq->add_qss($iduser,$ws,$jml);
				echo $this->session->set_flashdata('msg','success');
				redirect('shalatku');

			}
		}
    }
	
	function hapus(){
		$idqss = $this->uri->segment(3);
		$this->mq->hapus_qss($idqss);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('shalatku');
    }
    
    function hapustqs(){
		$idtqs = $this->uri->segment(3);
		$this->mq->hapus_tqs($idtqs);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('shalatku');
	}

}
