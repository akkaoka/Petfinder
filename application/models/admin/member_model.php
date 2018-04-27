<?php

Class Member_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewmember(){
		$query=$this->db->query("SELECT tb_user.`id_user`,tb_user.`nama`,tb_user.`tgl_lahir`,tb_user.`gender`,tb_user.`alamat`,tb_user.`email`,tb_user.`telp`,tb_user.`username`,tb_user.`gambar`
			FROM tb_user");
		return $query->result();
	}

	public function delete_member($id_user){
		$this->db->query("DELETE FROM tb_user WHERE id_user=$id_user");
	}

}  