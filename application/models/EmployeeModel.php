<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {

	public function insertEmployee($data)
	{
        $this->db->insert('employee',$data);
		
	}
	
}