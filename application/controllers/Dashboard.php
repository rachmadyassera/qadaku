<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_Dashboard');
		$this->m_dashboard = $this->M_Dashboard;
		isnt_login(function() {
			redirect( base_url('Auth/login') );
		});
	}	

	public function index()
	{
		$x['all_user']      = $this->m_dashboard->total_user();
		$x['jumlah_tqp']    = $this->m_dashboard->jumlah_tqp();
		$x['total_tqp']     = $this->m_dashboard->total_tqp();
		$x['total_qps']     = $this->m_dashboard->total_qps();
		$x['new_user']      = $this->m_dashboard->get_new_user();
		$x['new_tqp_user']  = $this->m_dashboard->get_new_tqp_user();
		$x['new_qps_user']  = $this->m_dashboard->get_new_qps_user();
		$x['get_all_user']  = $this->m_dashboard->get_all_user();
		$x['jumlah_tqs']    = $this->m_dashboard->jumlah_tqs();
		$x['total_tqs']     = $this->m_dashboard->total_tqs();
		$x['total_qss']     = $this->m_dashboard->total_qss();
		$x['new_tqs_user']  = $this->m_dashboard->get_new_tqs_user();
		$x['new_qss_user']  = $this->m_dashboard->get_new_qss_user();
		$x['get_all_ws']    = $this->m_dashboard->get_all_ws();
		$x['total_tqs_ws1'] = $this->m_dashboard->total_tqs_ws1();
		$x['total_tqs_ws2'] = $this->m_dashboard->total_tqs_ws2();
		$x['total_tqs_ws3'] = $this->m_dashboard->total_tqs_ws3();
		$x['total_tqs_ws4'] = $this->m_dashboard->total_tqs_ws4();
		$x['total_tqs_ws5'] = $this->m_dashboard->total_tqs_ws5();
		$x['data_pgm']      = $this->m_dashboard->get_pengumuman();

		// $x['pegawai_on']      = $this->m_dashboard->total_pegawai_on();
		// $x['pegawai_off']     = $this->m_dashboard->total_pegawai_off();
		// $x['pegawai_mutasi']  = $this->m_dashboard->total_pegawai_mutasi();
		// $x['pegawai_pensiun'] = $this->m_dashboard->total_pegawai_pensi();
		// $x['pegawai_lk']      = $this->m_dashboard->total_pegawai_lk();
		// $x['pegawai_pr']      = $this->m_dashboard->total_pegawai_pr();
		// $x['pegawai_ljg']     = $this->m_dashboard->total_pegawai_ljg();
		// $x['graph_gol']       = $this->m_dashboard->graph_pegawai_per_gol();
		
		
		if ($this->session->userdata('user_type')=='1'){
			// $this->load->view('dashboard',$x);    
			$this->load->view('dashboard',$x);     
			}else{
			// $this->load->view('dashboard_asn',$x);
			$this->load->view('dashboard_pgn',$x);
			}        
	}
}
