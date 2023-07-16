<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( !function_exists('assets_url') ) {
	
	function assets_url($path, $cached=true) {
		return base_url( 'assets/' . $path . ((!$cached) ?  '?' . time() : ''));
	}

}

if( !function_exists('uploads_url') ) {
	
	function uploads_url($path, $cached=true) {
		return base_url( 'uploads/' . $path . ((!$cached) ?  '?' . time() : ''));
	}

}

if( !function_exists('uploads_pegawai_url') ) {
	
	function uploads_pegawai_url($path, $cached=true) {
		return base_url( 'assets/file-pegawai/' . $path . ((!$cached) ?  '?' . time() : ''));
	}

}

if( !function_exists('assets_login_url') ) {
	
	function assets_login_url($path, $cached=true) {
		return base_url( 'theme-login/' . $path . ((!$cached) ?  '?' . time() : ''));
	}

}

if (! function_exists('hitung_umur')) {
    function hitung_umur($tgl)
    {
        $tanggal = new DateTime($tgl);
        $today = new DateTime('today');
        $y = $today->diff($tanggal)->y;
        $m = $today->diff($tanggal)->m;
        $d = $today->diff($tanggal)->d;
        return $y . " Tahun ";
	}
	
}