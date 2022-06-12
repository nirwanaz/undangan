<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends CI_Controller {

  function __construct()
  {
    parent::__construct();

    // Load Library
    $this->load->library('session');

    if (empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin'));

    $this->header_html = "/admin/header";
    $this->sidebar_html = "/admin/sidebar";
    $this->footer_html = "/admin/footer";

    $this->load->model('Feature_model');
    $this->feature_model = $this->Feature_model;
  }

  public function index()
  {
    $data['header'] = $this->header_html;
    $data['sidebar'] = $this->sidebar_html;
    $data['content'] = '/admin/feature';
    $data['footer'] = $this->footer_html;
    $data['features'] = $this->feature_model->read();

    $this->load->view('admin_layout', $data);

  }

  public function store()
  {
    $post = $this->input->post();

    $this->feature_model->field['code'] = $post['code'];
    $this->feature_model->field['name'] = $post['name'];
    $this->feature_model->field['value'] = $post['value'];
    $this->feature_model->field['description'] = $post['description'];

    $this->feature_model->create();

    return print(json_encode(array('data' => array('success' => true, 'msg' => 'Feature has been added'))));
  }
}