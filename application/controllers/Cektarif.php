<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cektarif extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template','utility/cektarif');
	}
}
