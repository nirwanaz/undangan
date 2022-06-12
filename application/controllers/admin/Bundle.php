<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bundle extends CI_Controller {

  function __construct()
  {
    parent::__construct();

    // Load Library
    $this->load->library('session');

    if (empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin'));

    $this->header_html = "/admin/header";
    $this->sidebar_html = "/admin/sidebar";
    $this->footer_html = "/admin/footer";

    $this->load->model('Bundle_model');
    $this->load->model('BundleFeature_model');
    $this->load->model('Feature_model');

    $this->bundle = $this->Bundle_model;
    $this->bundle_feature = $this->BundleFeature_model;
    $this->feature = $this->Feature_model;
  }

  public function index()
  {
    $data['header'] = $this->header_html;
    $data['sidebar'] = $this->sidebar_html;
    $data['content'] = '/admin/bundle';
    $data['footer'] = $this->footer_html;
    $data['bundles'] = $this->bundle->read();

    $this->load->view('admin_layout', $data);

  }

  public function add()
  {
    $data['header'] = $this->header_html;
    $data['sidebar'] = $this->sidebar_html;
    $data['content'] = '/admin/v_add_bundle';
    $data['footer'] = $this->footer_html;
    $data['features'] = $this->feature->read();

    $this->load->view('admin_layout', $data);
  }

  public function store()
  {
    $post = $this->input->post();
    $bundle_feature = explode(',', $post['features']);

    switch($post['period']) {
      case '0.5y':
        $renewal = '+6 months';
        break;
      case '1y':
        $renewal = '+1 years';
        break;
      case '3y':
        $renewal = '+3 years';
        break;
    }

    $this->bundle->field['name'] = $post['name'];
    $this->bundle->field['price'] = $post['price'];
    $this->bundle->field['renewal'] = $renewal;

    $this->db->trans_begin();
    
    // insert to table bundle 
    $this->bundle->create();
    $bundle_id = $this->db->insert_id();

    if (is_array($bundle_feature)) {
      foreach($bundle_feature as $feature) {
        $this->bundle_feature->field['bundle_id'] = $bundle_id;
        $this->bundle_feature->field['feature_id'] = $feature;

        $this->bundle_feature->create();
      }
    }

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      return print(json_encode(array('data' => array('false' => true, 'msg' => 'Bundle has failed created'))));

    }

    $this->db->trans_commit();
    return print(json_encode(array('data' => array('success' => true, 'msg' => 'Bundle has been created'))));
  }
}