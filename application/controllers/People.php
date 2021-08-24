<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

  public function index()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/people.php');
    $this->load->view('includes/footer.php');
  }

  public function vucetic()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/person/vucetic.php');
    $this->load->view('includes/footer.php');
  }
  
  public function ling()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/person/ling.php');
    $this->load->view('includes/footer.php');
  }
  
  public function wang()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/person/wang.php');
    $this->load->view('includes/footer.php');
  }

  public function dragut()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/person/dragut.php');
    $this->load->view('includes/footer.php');
  }
  
  public function ji()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/person/ji.php');
    $this->load->view('includes/footer.php');
  }
  
  public function wehar()
  {
    $this->load->view('includes/head.php');
    $this->load->view('includes/nav.php');
    $this->load->view('includes/jumbotron.php');
    $this->load->view('people/person/wehar.php');
    $this->load->view('includes/footer.php');
  }
}