<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct(){
		parent::__construct();
		// isnt_admin(function() {
		// redirect( base_url('auth/login') );
		// });		
		isnt_login(function() {
			redirect( base_url('Auth/login') );
		});
		isnt_admin(function() {
			redirect( base_url('Auth/login') );
		});
		$this->load->model('M_pengumuman','modal');
		$this->load->library('upload');
		$this->load->helper('text');
    }
 
	public function index()
	{
		$x['data']=$this->modal->get_pengumuman();
		$this->load->view('v_data_pengumuman',$x);
	}
	
	public function add_new()
	{
		$this->load->view('v_add_pengumuman');
	}

	public function insert()
	{
		$judul  = htmlspecialchars($this->input->post('judul',TRUE),ENT_QUOTES);
		$desk   = htmlspecialchars($this->input->post('deskripsi',TRUE),ENT_QUOTES);
		$author = $this->session->userdata('user_name');
		
		
		$config['upload_path']   = './assets/file-pengumuman/';  //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';   //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name']  = TRUE;                     //nama yang terupload nantinya
	    
		$this->upload->initialize($config);
		
		if ($this->upload->do_upload('gbr')){
			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library']  = 'gd2';
			$config['source_image']   = './assets/file-pengumuman/'.$gbr['file_name'];
			$config['create_thumb']   = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['quality']= '60%';
			$config['new_image']      = './assets/file-pengumuman/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$gbrpgm = $gbr['file_name'];
			//var_dump($hukuman);
			$this->modal->insert_pengumuman($judul,$desk,$gbrpgm,$author);
			echo $this->session->set_flashdata('msg','success');
			redirect('pengumuman');
		}else{
			echo $this->session->set_flashdata('msg','error-img');
			redirect('pengumuman');
		}
		    
	}

	public function detail()
	{
		$x['title'] = 'Forms &rsaquo; Update &mdash; Pengumuman';
		   $id_pgm  = $this->uri->segment(3);
		$x['data']  = $this->modal->get_pgm_by_id($id_pgm);
		$this->load->view('v_edit_pengumuman',$x);
	}

	public function update()
	{
		$id_pgm = htmlspecialchars($this->input->post('idpgm',TRUE),ENT_QUOTES);
		$judul  = htmlspecialchars($this->input->post('judul',TRUE),ENT_QUOTES);
		$desk   = htmlspecialchars($this->input->post('deskripsi',TRUE),ENT_QUOTES);
		$author = $this->session->userdata('user_name');
		
	
		$config['upload_path']   = './assets/file-pengumuman/';  //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';   //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name']  = TRUE;              //nama yang terupload nantinya
			
		$this->upload->initialize($config);
		if(!empty($_FILES['gbr']['name'])){

			if ($this->upload->do_upload('gbr')){
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library']  = 'gd2';
				$config['source_image']   = './assets/file-pengumuman/'.$gbr['file_name'];
				$config['create_thumb']   = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality']= '60%';
				$config['new_image']      = './assets/file-pengumuman/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$gbrpgm = $gbr['file_name'];
				//var_dump($hukuman);
				$this->modal->update_pgm($id_pgm,$judul,$desk,$gbrpgm,$author);
				echo $this->session->set_flashdata('msg','success');
				redirect('pengumuman');
			}else{
				echo $this->session->set_flashdata('msg','error-img');
				redirect('pengumuman');
			}
		}else{	
			$this->modal->update_pgm_noimg($id_pgm,$judul,$desk,$author);
			echo $this->session->set_flashdata('msg','success');
			redirect('pengumuman');
		}
	}

	function delete(){
		$idpgm   = $this->uri->segment(3);
		$this->modal->delete_pgm($idpgm);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('pengumuman');
	}
	
}
