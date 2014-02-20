<?php if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

class iglesias extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('iglesia_model','im');
	}
	
	function index() {
		$this->load->view('welcome_message');
	}

	function registrar()
	{
		//validate form input
		$this->form_validation->set_rules('nom_iglesia', 'iglesia', 'required|xss_clean');
		$this->form_validation->set_rules('encargado', 'encargado', 'required|xss_clean');
		$this->form_validation->set_rules('pais', 'pais', 'required|xss_clean');
		$this->form_validation->set_rules('ciudad', 'ciudad', 'required|xss_clean');
		$this->form_validation->set_rules('direccion', 'direccion', 'required|xss_clean');
		$this->form_validation->set_rules('telefono', 'telefono', 'required|xss_clean');
		$this->form_validation->set_rules('gllpLatitude', 'gllpLatitude', 'required|xss_clean');
		$this->form_validation->set_rules('gllpLongitude', 'gllpLongitude', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{
			$iglesia_data = array(
				'nom_iglesia' => $this->input->post('nom_iglesia'),
				'encargado' => $this->input->post('encargado'), 
				'pais' => $this->input->post('pais'),
				'ciudad' => $this->input->post('ciudad'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'telefono' => $this->input->post('email'),
				'gllpLatitude' => $this->input->post('gllpLatitude'),
				'gllpLongitude' => $this->input->post('gllpLongitude')
			);

			if($this->im->insertar($iglesia_data)){
				$return = array('responseCode'=>200, 'datos'=>$iglesia_data);
			}else{
				$return = array("responseCode"=>400, "greeting"=>"Bad");
			}
			
			$return = json_encode($return);
			echo $return;
		}
		
	}

}