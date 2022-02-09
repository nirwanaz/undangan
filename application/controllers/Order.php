<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
    }

    function index() {
        $data['content'] = '/admin/orderIndex';

        $this->load->view('template_admin', $data);
    }

    function displayAddOrder() {
        $data['content'] = '/admin/order_create';

        $this->load->view('template_admin', $data);
    }
}