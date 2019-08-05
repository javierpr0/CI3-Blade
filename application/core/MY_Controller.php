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
}
