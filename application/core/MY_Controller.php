<?php defined('BASEPATH') || exit('No direct script access allowed');

use Coolpraz\PhpBlade\PhpBlade;
class MY_Controller extends CI_Controller {
	protected $views = APPPATH . 'views';
	private $cache = APPPATH . 'cache';
	protected $blade;
	public function __construct()
	{
		parent::__construct();
		$this->blade = new PhpBlade($this->views, $this->cache);
	}

	protected function view($view = null, $data = null)
	{
		if(!isset($data)){$data[] = 0;}
		echo $this->blade->view()->make($view, $data);
	}

	protected function uris()
	{
		$data       = new \stdClass();
		$data->uno  = $this->uri->segment(1);
		$data->dos  = $this->uri->segment(2);
		$data->tres = $this->uri->segment(3);
		return $data;
	}
}
