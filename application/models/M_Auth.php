<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

	private function loginAdmin($email, $password) {
		$q=$this->db->select('*')->where(array('user_email' => $email,'user_status' => 1, 'user_password' => md5($password)))->get('tbl_user');
		return $q;
	}

	private function loginPengguna($email, $password) {
		$q=$this->db->select('*')->where(array('user_email' => $email, 'user_password' => md5($password)))->get('tbl_pengguna');
		return $q;
	}

	public function doLogin($email, $password) {
		$cek_login_admin = $this->loginAdmin($email, $password);
		$cek_login_pengguna = $this->loginPengguna($email, $password);
		
		if( $cek_login_admin->num_rows() ) {
			$d = $cek_login_admin->row();
			$this->session->set_userdata('is_logged_in', 'login');
			$this->session->set_userdata('user_type', '1');
			$this->session->set_userdata('user_id', $d->user_id);
			$this->session->set_userdata('user_name', $d->user_name);
			$this->session->set_userdata('user_email', $d->user_email);
			$this->session->set_userdata('user_photo', assets_url('image-user/' . $d->user_photo));
			
			redirect( base_url('dashboard') );
		} else if( $cek_login_pengguna->num_rows() ) {
			$d = $cek_login_pengguna->row();
			$this->session->set_userdata('is_logged_in', 'login');
			$this->session->set_userdata('user_type', 'pengguna');
			$this->session->set_userdata('user_id', $d->id_user);
			$this->session->set_userdata('user_name', $d->user_name);
			$this->session->set_userdata('user_email', $d->email);
			$this->session->set_userdata('user_photo', assets_url('image-user/' . $d->user_photo));
			
			// $ambil_jabatan=$this->db->select('*')->where('id_jabatan', $d->id_jabatan)->get('tb_jabatan');
			// if( $ambil_jabatan->num_rows() ) {
			// 	$data_jabatan = $ambil_jabatan->row();
			// 	$id_jabatan = $data_jabatan->id_jabatan;
			// 	$nama_jabatan = $data_jabatan->nama_jabatan;
			// } else {
			// 	$id_jabatan = '0';
			// 	$nama_jabatan = 'Unknown';
			// }
			// $this->session->set_userdata('user_id_jabatan', $id_jabatan);
			// $this->session->set_userdata('user_nama_jabatan', $nama_jabatan);
			
			// $ambil_bidang=$this->db->select('*')->where('id_bidang', $d->id_bidang)->get('tb_bidang');
			// if( $ambil_bidang->num_rows() ) {
			// 	$data_bidang = $ambil_bidang->row();
			// 	$id_bidang = $data_bidang->id_bidang;
			// 	$nama_bidang = $data_bidang->nama_bidang;
			// } else {
			// 	$id_bidang = '0';
			// 	$nama_bidang = 'Unknown';
			// }
			// $this->session->set_userdata('user_id_bidang', $id_bidang);
			// $this->session->set_userdata('user_nama_bidang', $nama_bidang);

			redirect( base_url('dashboard') );
		} else {
			$this->session->set_flashdata('msg_alert', 'Email / password anda salah');
			redirect( base_url('auth/login') );
		}
	}

	public function doResetPassword($email) {
		$cek_email=$this->db->select('*')->where('email', $email)->get('tbl_pengguna');
		if( !$cek_email->num_rows() ) {
			$this->session->set_flashdata('msg_alert', 'Email tidak terdaftar');
			redirect( base_url('auth/lost_password') );
		} else {
			$this->session->set_flashdata('msg_alert', 'Password berhasil dikirim ke email');
			redirect( base_url('auth/lost_password') );
		}
	}

}

/* End of file auth.php */
/* Location: ./application/models/M_Auth.php */
