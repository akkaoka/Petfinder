<?php

Class Donation_model extends CI_Model {
  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewuser(){
		$query=$this->db->query("SELECT * FROM tb_user");
		return $query->result();
	}

	public function viewdonater(){
		$query=$this->db->query("SELECT tb_donasi.`id_donasi`,tb_user.`nama`,tb_donasi.`nama_rek`,tb_donasi.`no_rek`,tb_donasi.`nama_bank`,tb_donasi.`jumlah_donasi`,tb_donasi.`tgl_donasi`
			FROM tb_donasi
			INNER JOIN tb_user ON tb_donasi.`id_user`=tb_user.`id_user`");
		return $query->result();
	}
	public function delete_donate($id_donasi){
		$this->db->query("DELETE FROM tb_donasi WHERE id_donasi=$id_donasi");
	}
}  