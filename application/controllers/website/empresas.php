<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model("website/dbempresa");
	}

	public function empresa($a,$b)
	{
			echo " $a";
	}
	
}