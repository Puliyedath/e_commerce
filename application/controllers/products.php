<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		echo "Welcome to CodeIgniter. The default Controller is Main.php for e-commerce project";
		$this->load->view('index.php');
	}

	public function home()
	{
		$this->load->view('index.php');

	}
}

//end of main controller