<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		isnt_login(function() {
			redirect( base_url('Auth/login') );
		});
		$this->load->model('Users_model','m_user');
		$this->load->library('upload');
		$this->load->helper('text');
	}

	

	public function index()
	{
		$x['data']=$this->m_user->get_users();
		$this->load->view('v_data_user',$x);
	}

	public function add_new()
	{
		$this->load->view('v_add_user');
	}

	public function insert_user()
	{
		$nama  = htmlspecialchars($this->input->post('name',TRUE),ENT_QUOTES);
		$email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pass  = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		$pass2 = htmlspecialchars($this->input->post('password2',TRUE),ENT_QUOTES);
		$level = htmlspecialchars($this->input->post('level',TRUE),ENT_QUOTES);
		
		
		$config['upload_path']   = './assets/image-user/';  //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';   //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name']  = TRUE;                     //nama yang terupload nantinya
	    
		$this->upload->initialize($config);
		
	    $cek_email = $this->m_user->validasi_email($email);
	    if($cek_email->num_rows() > 0){
	    	echo $this->session->set_flashdata('msg','error-email');
			redirect('users');
	    }else{
	    	if($pass == $pass2){
		    	if(!empty($_FILES['pp']['name'])){
			        if ($this->upload->do_upload('pp')){
			            $gbr = $this->upload->data();
		                //Compress Image
		                $config['image_library']  = 'gd2';
		                $config['source_image']   = './assets/image-user/'.$gbr['file_name'];
		                $config['create_thumb']   = FALSE;
		                $config['maintain_ratio'] = FALSE;
		                $config['quality']        = '60%';
		                $config['new_image']      = './assets/image-user/'.$gbr['file_name'];
		                $this->load->library('image_lib', $config);
		                $this->image_lib->resize();
			            $gambar = $gbr['file_name'];
						$this->m_user->insert_user($nama,$email,$pass,$level,$gambar);
						echo $this->session->set_flashdata('msg','success');
						redirect('users');
					}else{
			            echo $this->session->set_flashdata('msg','error-img');
						redirect('users');
			    	}
			                 
			    }else{
					$this->m_user->insert_user_noimg($nama,$email,$pass,$level);
					echo $this->session->set_flashdata('msg','success');
					redirect('users');
				}
		    }else{
		    	echo $this->session->set_flashdata('msg','error');
				redirect('users');
		    }
	    }
		    
	}

	public function detail()
	{
		$user_id	= $this->uri->segment(3);
		$x['data']  = $this->m_user->get_user_by_id($user_id);
		$this->load->view('v_detail_user',$x);
	}
	
	function update(){
		$userid = $this->input->post('user_id',TRUE);
		$nama   = htmlspecialchars($this->input->post('name',TRUE),ENT_QUOTES);
		$email  = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pass   = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		$pass2  = htmlspecialchars($this->input->post('password2',TRUE),ENT_QUOTES);
		$level  = htmlspecialchars($this->input->post('level',TRUE),ENT_QUOTES);
		$status = htmlspecialchars($this->input->post('status',TRUE),ENT_QUOTES);
		
		$config['upload_path'] = './assets/image-user/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    $cek_email = $this->m_user->validasi_email($email);
	    if($cek_email->num_rows() > 0){
	    	$row = $cek_email->row();
	    	$user_id = $row->user_id;
	    	if($user_id <> $userid){
	    		echo ('error-email');
				redirect('users');
	    	}else{
			    if(empty($pass) || empty($pass2)){
			    	if(!empty($_FILES['pp']['name'])){
				        if ($this->upload->do_upload('pp')){
				            $gbr = $this->upload->data();
			                //Compress Image
			                $config['image_library']='gd2';
			                $config['source_image']='./assets/image-user/'.$gbr['file_name'];
			                $config['create_thumb']= FALSE;
			                $config['maintain_ratio']= FALSE;
			                $config['quality']= '60%';
			                $config['new_image']= './assets/image-user/'.$gbr['file_name'];
			                $this->load->library('image_lib', $config);
			                $this->image_lib->resize();

				            $gambar=$gbr['file_name'];		
							$this->m_user->update_user_nopass($userid,$nama,$email,$level,$gambar,$status);
							echo $this->session->set_flashdata('msg','info');
							redirect('users');
						}else{
				            echo $this->session->set_flashdata('msg','error-img');
				            redirect('users');
				    	}
				                 
				    }else{
						$this->m_user->update_user_nopassimg($userid,$nama,$email,$level,$status);
						echo $this->session->set_flashdata('msg','info');
						redirect('users');
					}
			    }else{
			    	if($pass == $pass2){
				    	if(!empty($_FILES['pp']['name'])){
					        if ($this->upload->do_upload('pp')){
					            $gbr = $this->upload->data();
				                //Compress Image
				                $config['image_library']='gd2';
				                $config['source_image']='./assets/image-user/'.$gbr['file_name'];
				                $config['create_thumb']= FALSE;
				                $config['maintain_ratio']= FALSE;
				                $config['quality']= '60%'; 
				                $config['new_image']= './assets/image-user/'.$gbr['file_name'];
				                $this->load->library('image_lib', $config);
				                $this->image_lib->resize();

					            $gambar=$gbr['file_name'];		
								$this->m_user->update_user($userid,$nama,$email,$pass,$level,$gambar,$status);
								echo $this->session->set_flashdata('msg','info');
								redirect('users');
							}else{
					            echo $this->session->set_flashdata('msg','error-img');
					            redirect('users');
					    	}
					                 
					    }else{
							$this->m_user->update_user_noimg($userid,$nama,$email,$pass,$level,$status);
							echo $this->session->set_flashdata('msg','info');
							redirect('users');
						}
				    }else{
				    	echo $this->session->set_flashdata('msg','error');
						redirect('users');
				    }
			    }
			}
	    	
	    }else{
		    if(empty($pass) || empty($pass2)){
		    	if(!empty($_FILES['pp']['name'])){
			        if ($this->upload->do_upload('pp')){
			            $gbr = $this->upload->data();
		                //Compress Image
		                $config['image_library']='gd2';
		                $config['source_image']='./assets/image-user/'.$gbr['file_name'];
		                $config['create_thumb']= FALSE;
		                $config['maintain_ratio']= FALSE;
		                $config['quality']= '60%'; 
		                $config['new_image']= './assets/image-user/'.$gbr['file_name'];
		                $this->load->library('image_lib', $config);
		                $this->image_lib->resize();

			            $gambar=$gbr['file_name'];		
						$this->m_user->update_user_nopass($userid,$nama,$email,$level,$gambar,$status);
						echo ('info');
						redirect('users');
					}else{
			            echo ('error-img');
			            redirect('users');
			    	}
			                 
			    }else{
					$this->m_user->update_user_nopassimg($userid,$nama,$email,$level,$status);
					echo ('info');
					redirect('users');
				}
		    }else{
		    	if($pass == $pass2){
			    	if(!empty($_FILES['pp']['name'])){
				        if ($this->upload->do_upload('pp')){
				            $gbr = $this->upload->data();
			                //Compress Image
			                $config['image_library']='gd2';
			                $config['source_image']='./assets/image-user/'.$gbr['file_name'];
			                $config['create_thumb']= FALSE;
			                $config['maintain_ratio']= FALSE;
			                $config['quality']= '60%'; 
			                $config['new_image']= './assets/image-user/'.$gbr['file_name'];
			                $this->load->library('image_lib', $config);
			                $this->image_lib->resize();

				            $gambar=$gbr['file_name'];		
							$this->m_user->update_user($userid,$nama,$email,$pass,$level,$gambar,$status);
							echo ('info');
							redirect('users');
						}else{
				            echo ('error-img');
				            redirect('users');
				    	}
				                 
				    }else{
						$this->m_user->update_user_noimg($userid,$nama,$email,$pass,$level,$status);
						echo ('info');
						redirect('users');
					}
			    }else{
			    	echo ('error');
					redirect('users');
			    }
		    }
		}

	}

	function delete(){
		$userid = $this->uri->segment(3);
		$this->m_user->delete_user($userid);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('users');
	}

}
