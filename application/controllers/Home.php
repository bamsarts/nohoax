<?php

class Home extends CI_controller
{

  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->load->view('home');
  }

  public function admin()
  {
    $this->load->view('admin_view/admin');
  }
}


 ?>
