<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function getFind($id, $table)
	{
		return $this->db->get_where($table, array('id'=>$id))->row();
	}
	
}
