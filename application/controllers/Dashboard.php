<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
    }

    function index() {
        $data['content'] = '/admin/dashboard_admin';

        $this->load->view('template_admin', $data);
    }
}