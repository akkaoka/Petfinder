<?php

Class Adoption_model extends CI_Model {
  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insertadoption($nama_binatang,$jenisbinatang,$gender,$umur,$kondisi,$size,$gambar){
		$this->db->query("INSERT INTO tb_binatang VALUES ('','$nama_binatang','$jenisbinatang','$gender','$umur','$kondisi','$size','$gambar')");
	}

	public function viewjenis(){
		$query=$this->db->query("SELECT * FROM tb_jenis_binatang");
		return $query->result();
	}

	public function viewuser(){
		$query=$this->db->query("SELECT * FROM tb_user");
		return $query->result();
	}

	public function viewkondisi(){
		$query=$this->db->query("SELECT * FROM tb_kondisi");
		return $query->result();
	}

	public function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('tb_adopsi');
        if(array_key_exists('id_adopsi',$params) && !empty($params['id_adopsi'])){
            $this->db->where('id_adopsi',$params['id_adopsi']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

	public function viewadoption(){
		$query=$this->db->query("SELECT tb_binatang.`id_binatang`,tb_binatang.`nama_binatang`,tb_jenis_binatang.`jenis_binatang`,tb_binatang.`gender`,tb_binatang.`umur`,tb_kondisi.`kondisi`,tb_binatang.`size`,tb_binatang.`gambar`
			FROM tb_binatang
			INNER JOIN tb_jenis_binatang ON tb_binatang.`id_jenis_binatang`=tb_jenis_binatang.`id_jenis_binatang`
			INNER JOIN tb_kondisi ON tb_binatang.`id_kondisi`=tb_kondisi.`id_kondisi`");
		return $query->result();
	}

	public function delete_adopt($id_binatang){
		$this->db->query("DELETE FROM tb_binatang WHERE id_binatang=$id_binatang");
	}

	public function view_adopt_by_id($id_binatang){
		$query=$this->db->query("SELECT * FROM tb_binatang WHERE id_binatang=$id_binatang");
		return $query->row_array();	
	}

	public function edited_adopt($id_binatang,$nama_binatang,$jenisbinatang,$gender,$umur,$kondisi,$size,$gambar){
		$this->db->query("UPDATE tb_binatang SET nama_binatang='$nama_binatang', id_jenis_binatang='$jenisbinatang', gender='$gender', umur='$umur', id_kondisi='$kondisi', size='$size', gambar='$gambar' WHERE id_binatang=$id_binatang");
	}

	public function viewadopter(){
		$query=$this->db->query("SELECT tb_adopsi.`id_adopsi`,tb_user.`nama`,tb_binatang.`nama_binatang`,tb_adopsi.`tgl_adopsi`,tb_adopsi.`file`
			FROM tb_adopsi
			INNER JOIN tb_user ON tb_adopsi.`id_user`=tb_user.`id_user`
			INNER JOIN tb_binatang ON tb_adopsi.`id_binatang`=tb_binatang.`id_binatang`");
		return $query->result();
	}
	public function delete_adopter($id_adopsi){
		$this->db->query("DELETE FROM tb_adopsi WHERE id_adopsi=$id_adopsi");
	}
}  