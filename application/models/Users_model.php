<?php 
class Users_model extends CI_Model{

    function get_users(){
		$hsl=$this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}

	function get_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna");
		return $hsl;
	}

	function insert_user($nama,$email,$pass,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_user(user_name,user_email,user_password,user_level,user_status,user_photo) VALUES ('$nama','$email',MD5('$pass'),'$level','1','$gambar')");
		return $hsl;
	}

	function insert_pengguna($nama,$email,$tgllahir, $jk, $domisili, $nohp, $pass){
		$hsl=$this->db->query("INSERT INTO tbl_pengguna(user_name,user_email,user_tgllahir,user_jenis_kelamin,user_domisili,user_nohp,user_password) VALUES ('$nama','$email','$tgllahir','$jk','$domisili','$nohp',MD5('$pass'))");
		return $hsl;
	}

	function insert_user_noimg($nama,$email,$pass,$level){
		$hsl=$this->db->query("INSERT INTO tbl_user(user_name,user_email,user_password,user_level,user_status) VALUES ('$nama','$email',MD5('$pass'),'$level','1')");
		return $hsl;
	}

    function validasi_email($email){
		$hsl=$this->db->query("SELECT * FROM tbl_user WHERE user_email='$email'");
		return $hsl;
	}
	
	function validasi_email_pengguna($email){
		$hsl=$this->db->query("SELECT * FROM tbl_pengguna WHERE user_email='$email'");
		return $hsl;
    }
    
	function get_user_by_id($user_id){
		$result = $this->db->query("SELECT * FROM tbl_user WHERE user_id='$user_id'");
		return $result;
    }
    
	function update_user_nopass($userid,$nama,$email,$level,$gambar,$status){
		$hsl=$this->db->query("UPDATE tbl_user SET user_name='$nama',user_email='$email',user_level='$level',user_status='$status',user_photo='$gambar' WHERE user_id='$userid'");
		return $hsl;
    }
    
	function update_user_nopassimg($userid,$nama,$email,$level,$status){
		$hsl=$this->db->query("UPDATE tbl_user SET user_name='$nama',user_email='$email',user_level='$level',user_status='$status' WHERE user_id='$userid'");
		return $hsl;
    }   
    
	function update_user($userid,$nama,$email,$pass,$level,$gambar,$status){
		$hsl=$this->db->query("UPDATE tbl_user SET user_name='$nama',user_email='$email',user_password=MD5('$pass'),user_level='$level',user_status='$status',user_photo='$gambar' WHERE user_id='$userid'");
		return $hsl;
    }
    
	function update_user_noimg($userid,$nama,$email,$pass,$level,$status){
		$hsl=$this->db->query("UPDATE tbl_user SET user_name='$nama',user_email='$email',user_password=MD5('$pass'),user_level='$level',user_status='$status' WHERE user_id='$userid'");
		return $hsl;
	}

	function delete_user($userid){
		$hsl=$this->db->query("DELETE FROM tbl_user WHERE user_id='$userid'");
		return $hsl;
	}

	function delete_pengguna($userid){
		$hsl=$this->db->query("DELETE FROM tbl_pengguna WHERE user_id='$userid'");
		return $hsl;
	}

}

?>
