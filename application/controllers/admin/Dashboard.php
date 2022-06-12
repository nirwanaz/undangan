<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {   
        parent::__construct();

        $this->load->library('session');

        if (!$this->session->has_userdata('admin')) redirect('index.php/admin');

        $this->header_html = "/admin/header";
        $this->sidebar_html = "/admin/sidebar";
        $this->footer_html = "/admin/footer";
    }

    function index() {
        $data['header'] = $this->header_html;
        $data['sidebar'] = $this->sidebar_html;
        $data['content'] = '/admin/dashboard';
        $data['footer'] = $this->footer_html;

        $this->load->view('admin_layout', $data);
    }
}