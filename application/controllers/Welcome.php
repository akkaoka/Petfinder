<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		public function __construct(){
		parent::__construct();
		// if ($this->session->userdata('username')=="") {
		// 	redirect('login');
		// }elseif($this->session->userdata('level') == 'admin'){
		// 	redirect('admin/admin');
		// }
		$this->load->library('session');
		$this->load->model('login_model');
		$this->load->model('user_model');
		$this->load->model('adopt_model');
		$this->load->model('donate_model');
	}

	//VIEW HOME//
	public function index()
	{
		$data = array(
					'error' => '',
					'username' => $this->session->userdata('username')
				);
		$this->load->view('viewhome',$data);
	}


	//REGISTER//
	public function aksi_register(){
		$file_name=$this->input->post('username')."_".time();
		$config = array(
			'upload_path' 	=> './images/user', 
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
			$nama=$this->input->post('nama');
			$tgl_lahir=$this->input->post('tgl_lahir');
			$gender=$this->input->post('gender');
			$alamat=$this->input->post('alamat');
			$email=$this->input->post('email');
			$telp=$this->input->post('telp');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$this->user_model->insert_user($nama,$tgl_lahir,$gender,$alamat,$email,$telp,$username,$password,$gambar);
			redirect('login');
		}
		
	}


	//LOGOUT//
	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}


	//ABOUT
	public function viewabout(){
		$this->load->view('viewabout');
	}	


	//ADOPT
	public function viewadopt(){
		$data['binatang']=$this->adopt_model->viewadopt();
		$this->load->view('viewadopt',$data);
	}

	public function download_adopt(){
		if (empty($this->session->userdata('username'))) {
			redirect("login");
		}else{
		$this->load->view('download_adopt');
		}
	}

	public function download()
	{
		 $name = 'adoption_form_2017.doc';
		 $data = file_get_contents("images/default.png"); // letak file pada aplikasi kita
		 
		 force_download($name,$data);
	}

	public function upload_adopt(){
		$this->load->view('upload_adopt');
	}

	public function uploaded_adopt(){
		$file_name=$this->input->post('id_binatang')."_".time();
		$config = array(
			'upload_path' 	=> './images/file',
			'allowed_types'	=> 'doc|docx',
			'max_size'		=> 100000,
			'file_name'		=> $file_name,
			'overwrite'		=> true
		);
		print_r($_FILES);
		$this->load->library('upload',$config);

		if (!$this->upload->do_upload('file')) {
			$error = array('error' => $this->upload->display_error());
			print_r($error);
		}else{
			print_r($_GET);
			$data  = array('upload_data' => $this->upload->data());
			$file=$data['upload_data']['file_name'];
			$id_binatang=$this->input->post("id_binatang");
			$id_user=$this->session->userdata("id_user");
			$this->adopt_model->uploaded_adopt($id_user,$id_binatang,$file);
			// redirect("finish");
		}
	}

	public function finish(){
		$this->load->view('finish');
	}

		
	//DONATE
	public function viewdonate(){
		$this->load->view('viewdonate');
	}

	public function form_donation(){
		$this->load->view('form_donation');
	}

	public function insertform(){
		$id_user=$this->session->userdata("id_user");
		$nama_rek=$this->input->post('nama_rek');
		$no_rek=$this->input->post('no_rek');
		$nama_bank=$this->input->post('nama_bank');
		$jumlah_donasi=$this->input->post('jumlah_donasi');
		$this->donate_model->insertform($id_user,$nama_rek,$no_rek,$nama_bank,$jumlah_donasi);
		redirect("finish");
	}


	//CONTACT
	public function viewcontact(){
		$this->load->view('viewcontact');
	}
}