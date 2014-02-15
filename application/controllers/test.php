<?php

if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
// ::CONTROLLER/Examples:: Performs tests to see if the Mdb class operates properly
class test extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('example_model','em');
	}

	function registrar()
	{
		//validate form input
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{
			$additional_data = array('first_name' => $this->input->post('descripcion'),
				'last_name' => "valor"
			);
		}
		if ($this->form_validation->run() == true && $this->em->register($additional_data))
		{ //check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', "User Created");
			redirect("Examples", 'refresh');
		}
	}

	function actualizar(){
		$this->em->update();
	}

	function eliminar(){
		$this->em->delete();	
	}

}