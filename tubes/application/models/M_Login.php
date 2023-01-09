<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
    public function getUser($username, $password){
        $condition = "username =" . "'" . $username ."' AND "."password =" . "'" . $password. "'" ;
		$this->db->select('*');
		$this->db->from('auth');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        // var_dump($query);
        if($query->num_rows() == 1) {
            return true;
        }
		return false;
	}
}