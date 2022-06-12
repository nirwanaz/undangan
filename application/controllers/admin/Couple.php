<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Couple extends CI_Controller {

  function __construct() {
    parent::__construct();

    // Load Model
    $this->load->model('Wedding_couple_model');
    $this->wedding_couple = $this->wedding_couple_model;
  }

  function index() {
    $data = $this->wedding_couple->read();
  }

  
}