<?php

Class Donate_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insertform($id_user,$nama_rek,$no_rek,$nama_bank,$jumlah_donasi){
		$sql="INSERT INTO tb_donasi(id_user,nama_rek,no_rek,nama_bank,jumlah_donasi,tgl_donasi) VALUES ('$id_user','$nama_rek','$no_rek','$nama_bank','$jumlah_donasi',NOW())";
		$this->db->query ($sql);
	}

}