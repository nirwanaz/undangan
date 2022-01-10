<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'html', 'inflector']);

    }
    public function index($id) {
        $data['content'] = '/theme/theme'.$id;
        $data['map'] = '/component/maps';
        $this->load->view('theme_layout', $data);
    }
}