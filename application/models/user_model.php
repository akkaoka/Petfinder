<?php

Class user_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function addData($table, $array)
	{
    $this->db->insert($table, $array);
    return $this->db->insert_id();
	}
								
	public function insert_user($nama,$tgl_lahir,$gender,$alamat,$email,$telp,$username,$password,$gambar){
		$sql="INSERT INTO tb_user (nama,tgl_lahir,gender,alamat,email,telp,username,password,level,gambar) VALUES ('$nama','$tgl_lahir','$gender','$alamat','$email','$telp','$username',md5('$password'),'member','$gambar')";
		$this->db->query ($sql);
	}
}