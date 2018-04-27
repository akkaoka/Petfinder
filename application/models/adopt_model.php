<?php

Class Adopt_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function viewadopt(){
		$query=$this->db->query("SELECT tb_binatang.`id_binatang`,tb_binatang.`nama_binatang`,tb_jenis_binatang.`jenis_binatang`,tb_binatang.`gender`,tb_binatang.`umur`,tb_kondisi.`kondisi`,tb_binatang.`size`,tb_binatang.`gambar`
			FROM tb_binatang
			INNER JOIN tb_jenis_binatang ON tb_binatang.`id_jenis_binatang`=tb_jenis_binatang.`id_jenis_binatang`
			INNER JOIN tb_kondisi ON tb_binatang.`id_kondisi`=tb_kondisi.`id_kondisi`");
		return $query->result();
	}

	public function addData($table, $array)
	{
	    $this->db->insert($table, $array);
	    return $this->db->insert_id();
	} 

	public function uploaded_adopt($id_user,$id_binatang,$file){
		$sql="INSERT INTO tb_adopsi VALUES ('',$id_user,$id_binatang,NOW(),'$file','0')";
	$this->db->query ($sql);
	}
}