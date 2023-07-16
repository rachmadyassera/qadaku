<?php 
class M_qada extends CI_Model{

	function get_tqp_byid($iduser){
		$hsl=$this->db->query("SELECT * FROM tbl_target_qada_puasa WHERE id_user_tqp ='$iduser' Order By id_target_qada_puasa DESC limit 5");
		return $hsl;
	}

	function get_qps_byid($iduser){
		$hsl=$this->db->query("SELECT * FROM tbl_qada_puasa_selesai WHERE id_user_qps ='$iduser' Order By id_qada_puasa_selesai DESC limit 5");
		return $hsl;
	}

	function get_tqs_byid($iduser){
		$hsl=$this->db->query("SELECT * FROM tbl_target_qada_shalat WHERE id_user_tqs ='$iduser' Order By id_target_qada_shalat DESC limit 5");
		return $hsl;
	}

	function get_qss_byid($iduser){
		$hsl=$this->db->query("SELECT * FROM tbl_qada_shalat_selesai WHERE id_user_qss ='$iduser' Order By id_qada_shalat_selesai DESC limit 5");
		return $hsl;
	}

	public function total_tqp_byid($iduser) {
		$this->db->select_sum('tqp_jumlah');
		$q = $this->db->get_where('tbl_target_qada_puasa', array('id_user_tqp' => $iduser));
		// $q=$this->db->query("SELECT ( SELECT COUNT(*) FROM tbl_target_qada_puasa WHERE id_user_tqp= '{$this->session->userdata('user_id')}') AS tqp_jumlah");
		return $q->row_array()['tqp_jumlah'];
	}

	public function total_qps_byid($iduser) {
		$this->db->select_sum('qps_jumlah');
		$q = $this->db->get_where('tbl_qada_puasa_selesai', array('id_user_qps' => $iduser));
		return $q->row_array()['qps_jumlah'];
	}

	public function total_tqs_ws1_byid($iduser) {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 1,'id_user_tqs' => $iduser));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws2_byid($iduser) {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 2,'id_user_tqs' => $iduser));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws3_byid($iduser) {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 3,'id_user_tqs' => $iduser));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws4_byid($iduser) {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 4,'id_user_tqs' => $iduser));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_tqs_ws5_byid($iduser) {
		$this->db->select_sum('tqs_jumlah');
		$q = $this->db->get_where('tbl_target_qada_shalat', array('id_ws_tqs' => 5,'id_user_tqs' => $iduser));
		return $q->row_array()['tqs_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}


	public function total_qss_ws1_byid($iduser) {
		$this->db->select_sum('qss_jumlah');
		$q = $this->db->get_where('tbl_qada_shalat_selesai', array('id_ws_qss' => 1,'id_user_qss' => $iduser));
		return $q->row_array()['qss_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_qss_ws2_byid($iduser) {
		$this->db->select_sum('qss_jumlah');
		$q = $this->db->get_where('tbl_qada_shalat_selesai', array('id_ws_qss' => 2,'id_user_qss' => $iduser));
		return $q->row_array()['qss_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_qss_ws3_byid($iduser) {
		$this->db->select_sum('qss_jumlah');
		$q = $this->db->get_where('tbl_qada_shalat_selesai', array('id_ws_qss' => 3,'id_user_qss' => $iduser));
		return $q->row_array()['qss_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_qss_ws4_byid($iduser) {
		$this->db->select_sum('qss_jumlah');
		$q = $this->db->get_where('tbl_qada_shalat_selesai', array('id_ws_qss' => 4,'id_user_qss' => $iduser));
		return $q->row_array()['qss_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}

	public function total_qss_ws5_byid($iduser) {
		$this->db->select_sum('qss_jumlah');
		$q = $this->db->get_where('tbl_qada_shalat_selesai', array('id_ws_qss' => 5,'id_user_qss' => $iduser));
		return $q->row_array()['qss_jumlah'];
		
		// $q=$this->db->query('SELECT COUNT(*) FROM tbl_target_qada_puasa');
		// return $q->row_array()['COUNT(*)'];
	}
	
	function get_all_user(){
		$hsl = $this->db->get('tbl_pengguna');
		return $hsl; 
	}	

    function get_users(){
		$hsl=$this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}

	function get_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna");
		return $hsl;
	}

	function add_qps($iduser,$qpsjml){
		$hsl=$this->db->query("INSERT INTO tbl_qada_puasa_selesai(id_user_qps,qps_jumlah) VALUES ('$iduser','$qpsjml')");
		return $hsl;
	}

	function add_tqp($iduser,$ket,$thn,$jml){
		$hsl=$this->db->query("INSERT INTO tbl_target_qada_puasa(id_user_tqp,tqp_keterangan,tqp_tahun,tqp_jumlah) VALUES ('$iduser','$ket','$thn','$jml')");
		return $hsl;
	}

	function add_qss($iduser,$ws,$jml){
		$hsl=$this->db->query("INSERT INTO tbl_qada_shalat_selesai(id_user_qss,id_ws_qss,qss_jumlah) VALUES ('$iduser','$ws','$jml')");
		return $hsl;
	}

	function add_tqs($iduser,$ket,$ws,$jml){
		$hsl=$this->db->query("INSERT INTO tbl_target_qada_shalat(id_user_tqs,tqs_keterangan,id_ws_tqs,tqs_jumlah) VALUES ('$iduser','$ket','$ws','$jml')");
		return $hsl;
	}
	
 
	function get_user_by_id($user_id){
		$result = $this->db->query("SELECT * FROM tbl_user WHERE user_id='$user_id'");
		return $result;
    }

	function hapus_qps($idqps){
		$hsl=$this->db->query("DELETE FROM tbl_qada_puasa_selesai WHERE id_qada_puasa_selesai='$idqps'");
		return $hsl;
	}
	
	function hapus_tqp($idtqp){
		$hsl=$this->db->query("DELETE FROM tbl_target_qada_puasa WHERE id_target_qada_puasa='$idtqp'");
		return $hsl;
	}

	function hapus_qss($idqss){
		$hsl=$this->db->query("DELETE FROM tbl_qada_shalat_selesai WHERE id_qada_shalat_selesai='$idqss'");
		return $hsl;
	}
	
	function hapus_tqs($idtqs){
		$hsl=$this->db->query("DELETE FROM tbl_target_qada_shalat WHERE id_target_qada_shalat='$idtqs'");
		return $hsl;
	}

}

?>
