<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('user_model');
	}

	function index(){
		$this->load->view('viewregister');
	}
	public function aksi_register(){
		$nama=$this->input->post('nama');
		$tgl_lahir=$this->input->post('tgl_lahir');
		$gender=$this->input->post('gender');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$telp=$this->input->post('telp');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		//$gambar=$this->input->post('gambar');
		$this->user_model->insert_user($nama,$tgl_lahir,$gender,$alamat,$email,$telp,$username,$password);
		redirect("../index.php/login");
	}
	
}