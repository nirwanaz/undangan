<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function login_()
    {
        $this->load->view('templates_header');
        $this->load->view('login');
        $this->load->view('templates_footer');
    }
}
