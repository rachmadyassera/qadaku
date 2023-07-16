<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {

	public function total_admin() {
		$q=$this->db->query('SELECT COUNT(*) FROM tb_admin');
		return $q->row_array()['COUNT(*)'];
	}

	public function total_dataizin() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_izinterkonfirmasi() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin WHERE status!='waiting' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_user() {
		$q=$this->db->query('SELECT COUNT(*) FROM tbl_pengguna');
		return $q->row_array()['COUNT(*)'];
	}

	public function jumlah_tqp() {
		$q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		return $q->row_array()['COUNT(*)'];
	}

	public function jumlah_tqs() {
		$q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_shalat');
		return $q->row_array()['COUNT(*)'];
	}

	public function total_tqp() {
		$this->db->select_sum('tqp_jumlah');
		$q = $this->db->get('tbl_target_qada_puasa');
		return $q->row_array()['tqp_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs() {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get('tbl_target_qada_shalat');
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws1() {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 1));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws2() {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 2));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws3() {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 3));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws4() {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 4));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws5() {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 5));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_qps() {
		$this->db->select_sum('qps_jumlah');
		$q = $this->db->get('tbl_qada_puasa_selesai');
		return $q->row_array()['qps_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_qss() {
		$this->db->select_sum('qss_jumlah');
		$q = $this->db->get('tbl_qada_shalat_selesai');
		return $q->row_array()['qss_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	function get_new_user(){
		$result = $this->db->query("SELECT * FROM tbl_pengguna Order By id_user DESC limit 5");
		return $result;
	}

	function get_new_tqp_user(){
		$result = $this->db->query("SELECT * FROM tbl_target_qada_puasa Order By id_target_qada_puasa DESC limit 5");
		return $result;
	}

	function get_new_tqs_user(){
		$result = $this->db->query("SELECT * FROM tbl_target_qada_shalat Order By id_target_qada_shalat DESC limit 5");
		return $result;
	}

	function get_new_qps_user(){
		$result = $this->db->query("SELECT * FROM tbl_qada_puasa_selesai Order By id_qada_puasa_selesai DESC limit 5");
		return $result;
	}

	function get_new_qss_user(){
		$result = $this->db->query("SELECT * FROM tbl_qada_shalat_selesai Order By id_qada_shalat_selesai DESC limit 5");
		return $result;
	}

	function get_all_user(){
		$hsl = $this->db->get('tbl_pengguna');
		return $hsl; 
	}	

	function get_all_ws(){
		$hsl = $this->db->get('tbl_waktu_shalat');
		return $hsl; 
	}	



	public function total_pegawai_on() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE status_aktif='1' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_pegawai_off() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE status_aktif='2' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_pegawai_mutasi() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE status_aktif='3' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_pegawai_pensi() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE status_aktif='4' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_pegawai_lk() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE jenis_kelamin='1' AND status_aktif='1' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_pegawai_pr() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE jenis_kelamin='2'  AND status_aktif='1' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function total_pegawai_ljg() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_pegawai WHERE jenis_kelamin='1'AND status_kawin='1' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}


	public function pegawai_total_izincuti() {
		$q=$this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='cuti' AND i.id='{$this->session->userdata('user_id')}'");
		return $q->row_array()['COUNT(*)'];
	}

	public function pegawai_total_izinsekolah() {
		$q=$this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='sekolah' AND i.id='{$this->session->userdata('user_id')}'");
		return $q->row_array()['COUNT(*)'];
	}

	public function pegawai_total_izinseminar() {
		$q=$this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='seminar' AND i.id='{$this->session->userdata('user_id')}'");
		return $q->row_array()['COUNT(*)'];
	}

	public function pegawai_izin_terkonfirmasi() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE status!='waiting' AND i.id='{$this->session->userdata('user_id')}' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}

	public function baak_total_izincuti() {
		$q=$this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='cuti'");
		return $q->row_array()['COUNT(*)'];
	}

	public function baak_total_izinsekolah() {
		$q=$this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='sekolah'");
		return $q->row_array()['COUNT(*)'];
	}

	public function baak_total_izinseminar() {
		$q=$this->db->query("SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE ni.type='seminar'");
		return $q->row_array()['COUNT(*)'];
	}

	public function baak_izin_terkonfirmasi() {
		$q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tb_izin AS i LEFT JOIN tb_namaizin AS ni ON i.id_namaizin=ni.id_namaizin WHERE status!='waiting' ) AS TOTAL");
		return $q->row_array()['TOTAL'];
	}



	function graph_pegawai_per_gol()
    {
        $this->db->group_by('pangkat_gol');
        $this->db->select('pangkat_gol');
        $this->db->select("count(*) as total");
        return $this->db->from('tbl_pegawai')
          ->get()
          ->result();
	}
	
	function get_pengumuman(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengumuman Order By id_pengumuman DESC limit 3");
		return $hsl;
	}

}

/* End of file M_Dashboard.php */
/* Location: ./application/models/M_Dashboard.php */