<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class example_model extends CI_Model {

	public function __construct() 
	{
		parent::__construct();
	}

	public function register($data = array())
	{

		// IP address
		$ip_address = '192.168.1.1';
		$password   = '12345';

		// New user document
		/*$data = array(
			'username'   => 'Richard',
			'password'   => $password,
			'email'      => 'example@gmail.com',
			'ip_address' => $ip_address,
			'created_on' => time(),
			'last_login' => time(),
			'active'     => 1
		);*/

        $this->mongo_db->insert('users', $data);
		// Return new document _id or FALSE on failure
		return isset($id) ? $id : FALSE;
	}

	public function update()
	{
		#no funciona todavia
		$this->mongo_db->update('users', array('id' => '2','last_name' => '0' ));
	}


	//Funciona
	public function delete()
	{
		#rebizar porque me elimina el primero mas no el que deberia ser
		$this->mongo_db->delete('users','52ed6f1c02a5c3b82400002c');
	}
	

}