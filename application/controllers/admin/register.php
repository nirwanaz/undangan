<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
    public function register_()
    {
        $this->load->view('templates_header');
        $this->load->view('register');
        $this->load->view('templates_footer');
    }
}
