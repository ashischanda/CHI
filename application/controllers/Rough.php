<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rough extends CI_Controller {
  
	public function index()
	{
		$this->load->view('includes/head.php');
		$this->load->view('includes/nav.php');
		$this->load->view('includes/jumbotron.php');
		$this->load->view('rough.php');
		$this->load->view('includes/footer.php');
	}
}