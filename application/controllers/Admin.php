<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}elseif($this->session->userdata('level') == 'member'){
			redirect('welcome');
		}
		// $this->load->library('session');
		$this->load->model('admin/login_model');
		$this->load->model('admin/member_model');
		$this->load->model('admin/adoption_model');
		$this->load->model('admin/donation_model');
	}

	//VIEW HOME//
	public function index()
	{
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('admin/index',$data);
	}


	//LOGOUT//
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}


	//ADOPTION
	public function viewadoption(){
		$data = array();
        
        //get files from database
        $data['files'] = $this->adoption_model->getRows();
		$data['binatang']=$this->adoption_model->viewadoption();
		$this->load->view('admin/viewadoption',$data);
	}
	public function download($id_adopsi){
        if(!empty($id_adopsi)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->adoption_model->getRows(array('id_adopsi' => $id_adopsi));
            
            //file path
            $file = 'images/file/'.$fileInfo['file'];
            
            //download file from directory
            force_download($file, NULL);
        }
    }
	public function delete_adopt(){
			$id_binatang=$this->input->get('id_binatang');
			$this->adoption_model->delete_adopt($id_binatang);
			redirect("admin/viewadoption");
	}
	public function insertadoption()
	{
		$data['jenisbinatang']=$this->adoption_model->viewjenis();
		$data['kondisi']=$this->adoption_model->viewkondisi();
		$this->load->view('admin/insertadoption',$data);
	}
	public function insertedadoption(){
		$file_name=$this->input->post('nama_binatang')."_".time();
		$config = array(
			'upload_path' 	=> './images/binatang', 
			'allowed_types'	=> 'jpg|png|gif',
			'max_size'		=> 100000,
			'file_name'		=> $file_name,
			'overwrite'		=> true
		);

		$this->load->library('upload',$config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_error());
			print_r($error);
		}else{
			$data  = array('upload_data' => $this->upload->data());
			$gambar=$data['upload_data']['file_name'];
			$nama_binatang=$this->input->post('nama_binatang');
			$jenisbinatang=$this->input->post('jenisbinatang');
			$gender=$this->input->post('gender');
			$umur=$this->input->post('umur');
			$kondisi=$this->input->post('kondisi');
			$size=$this->input->post('size');
			$this->adoption_model->insertadoption($nama_binatang,$jenisbinatang,$gender,$umur,$kondisi,$size,$gambar);
			redirect("admin/viewadoption");
		}
	}

	public function edit_adopt(){
			$id_binatang=$this->input->get('id_binatang');
			$data['jenisbinatang']=$this->adoption_model->viewjenis();
			$data['kondisi']=$this->adoption_model->viewkondisi();
			$data['binatang']=$this->adoption_model->view_adopt_by_id($id_binatang);
			$this->load->view('admin/editadoption',$data);	
	}
	public function edited_adopt(){ 
		$file_name=$this->input->post('nama_binatang')."_".time();
		$config = array(
			'upload_path' 	=> './images/binatang', 
			'allowed_types'	=> 'jpg|png|gif',
			'max_size'		=> 100000,
			'file_name'		=> $file_name,
			'overwrite'		=> true
		);

		$this->load->library('upload',$config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_error());
			print_r($error);
		}else{
			$data  = array('upload_data' => $this->upload->data());
			$gambar=$data['upload_data']['file_name'];
			$id_binatang=$this->input->post('id_binatang');
			$nama_binatang=$this->input->post('nama_binatang');
			$jenisbinatang=$this->input->post('jenisbinatang');
			$gender=$this->input->post('gender');
			$umur=$this->input->post('umur');
			$kondisi=$this->input->post('kondisi');
			$size=$this->input->post('size');
			$this->adoption_model->edited_adopt($id_binatang,$nama_binatang,$jenisbinatang,$gender,$umur,$kondisi,$size,$gambar);
			redirect("admin/viewadoption");
        }
    }

	public function viewadopter(){
		$data['adopter']=$this->adoption_model->viewadopter();
		$data['user']=$this->adoption_model->viewuser();
		$data['binatang']=$this->adoption_model->viewadoption();
		$this->load->view('admin/viewadopter',$data);
	}
	public function delete_adopter(){
			$id_adopsi=$this->input->get('id_adopsi');
			$this->adoption_model->delete_adopter($id_adopsi);
			redirect("admin/viewadopter");
	}

		 
	//DONATE
	public function viewdonater(){
		$data['donater']=$this->donation_model->viewdonater();
		$data['user']=$this->donation_model->viewuser();
		$this->load->view('admin/viewdonater',$data);
	}
	public function delete_donate(){
			$id_donasi=$this->input->get('id_donasi');
			$this->donation_model->delete_donate($id_donasi);
			redirect("admin/viewdonater");
	}

	//MEMBER
	public function viewmember(){
		$data['member']=$this->member_model->viewmember();
		$this->load->view('admin/viewmember',$data);
	}
	public function delete_member(){
			$id_user=$this->input->get('id_user');
			$this->member_model->delete_member($id_user);
			redirect("admin/viewmember");
	}
}