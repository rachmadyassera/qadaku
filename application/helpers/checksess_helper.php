<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( !function_exists('isnt_s_admin') ) {
	
	function isnt_admin($callback) {
		$ci =& get_instance();
		if ( $ci->session->userdata('user_type') !== '1' && $ci->session->userdata('user_type') !== 'Super Admin') {
			$callback();
		}
	}

}

if( !function_exists('isnt_admin') ) {
	
	function isnt_adminbkd($callback) {
		$ci =& get_instance();
		if ( $ci->session->userdata('user_level') !== '2' && $ci->session->userdata('user_level') !== 'Admin') {
			$callback();
		}
	}

}

if( !function_exists('isnt_pegawai') ) {
	
	function isnt_pegawai($callback) {
		$ci =& get_instance();
		if ( $ci->session->userdata('user_level') !== 'Pegawai') {
			$callback();
		}
	}

}