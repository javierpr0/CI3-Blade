<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// Verifica los 3 primeros segmentos uri
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

	/******************************************************************************************************************/
	// Metodos BLADE
	/******************************************************************************************************************/

	/**
	 * Carga de vistas
	 * @param $view
	 * @param $data
	 */
	private function view($view, $data)
	{
		echo $this->blade->view()->make($view, $data);
	}

	/**
	 * Obtiene los 3 primeros segmentos de la url, incluso puedes itegrar dentro de este metodo el uso de Flashdata
	 * Debido a que el integrar blade con CI ocasiona conflicto dentro del frontend con algunos metodos de CI.
	 * @return stdClass
	 */
	private function uris()
	{
		// Segmentos
		$data       = new \stdClass();
		$data->uno  = $this->uri->segment(1);
		$data->dos  = $this->uri->segment(2);
		$data->tres = $this->uri->segment(3);
		return $data;
	}
}
