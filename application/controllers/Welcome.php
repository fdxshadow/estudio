<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url');
		$this->load->model('datos');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['peliculas']=$this->datos->obtener();
		$this->load->view('header');
		$this->load->view('crud',$data);
		$this->load->view('footer');
	}


	public function eliminar($id){
		//$id=$this->input->post('id');
		$this->datos->eliminar($id);
		redirect("");
	}


	public function loadeditar($id){
		$edicion = $this->datos->obtenerbyid($id);
		$datos['edicion']=$edicion[0];
		$this->load->view('header');
		$this->load->view('editar',$datos);
		$this->load->view('footered');
	}


	public function editar(){
		$id=$this->input->post('id');
		$nombre=$this->input->post('Nombre');
		$genero=$this->input->post('Genero');
		$sucursal=$this->input->post('Sucursal');
		$this->datos->editar($id,$nombre,$genero,$sucursal);
		redirect("");
	}

}
