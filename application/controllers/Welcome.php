<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// Trae los 3 primeros segmentos uri
		$this->uri = $this->uris();
	}

	/**
	 * Inicio
	 */
	public function index()
	{
		$data['titulo'] = 'Mensaje de bienvenida';
 		$this->view('inicio');
	}
}
