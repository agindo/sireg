<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

	public function auth($email, $password){
		$check = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
		if($check->num_rows() > 0) {
			return 1;
		}else{
			return 0;
		}
	}

	public function authUsers($email, $password){
		$check = $this->db->get_where('users', array('email'=>$email, 'password'=>$password))->row();
		$arr = Array();
		$obj = Array();
		$arr['userID'] = $check->id;
		$arr['userName'] = $check->email;
		// $arr['userLevel'] = $check->level;
		$obj['Users'] = $arr;
		
		return $obj;
	}

	public function getUsersByEmail($email)
	{
		return $this->db->get_where('users', array('email'=>$email));
	}

}
