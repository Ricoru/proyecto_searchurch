<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class iglesia_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
	}

	public function insertar($data)
	{

        $id = $this->mongo_db->insert('iglesia', $data);
		// Return new document _id or FALSE on failure
		return isset($id) ? $id : FALSE;
	}
	

}