<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
    
public function check_user($username, $password) {
        $query = $this->db->query("select * from tb_user where username='$username' AND password='$password' limit 1");
        return $query;
    }
}