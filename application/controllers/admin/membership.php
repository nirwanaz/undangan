<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

  function __construct()
  {
    parent::__construct();

    $this->load->library('session');
    $this->load->helper('email');

    if (!$this->session->has_userdata('admin')) redirect(base_url('index.php/admin'));

    $this->header_html = "/admin/header";
    $this->sidebar_html = "/admin/sidebar";
    $this->footer_html = "/admin/footer";

    $this->load->model('User_model');
    $this->user = $this->User_model;
  }

  public function index()
  {
    $data['users'] = $this->user->read();
    $data['header'] = $this->header_html;
    $data['sidebar'] = $this->sidebar_html;
    $data['content'] = '/admin/membership';
    $data['footer'] = $this->footer_html;

    $this->load->view('admin_layout', $data);
  }

  public function add()
  {
    $data['header'] = $this->header_html;
    $data['sidebar'] = $this->sidebar_html;
    $data['content'] = '/admin/v_add_user';
    $data['footer'] = $this->footer_html;

    $this->load->view('admin_layout', $data);
  }

  public function store()
  {
    $post = $this->input->post();

    if (!check_email($post['email'])) {
      return print(json_encode(array('success' => false, 'msg' => 'Email Not Valid')));
    }

    $this->user->field['firstname'] = $post['firstname'];
    $this->user->field['lastname'] = $post['lastname'];
    $this->user->field['email'] = $post['email'];
    $this->user->field['password'] = $post['passwd'];
    $this->user->field['active'] = '1';
    $this->user->field['username'] = $post['firstname'].rand(1,100).rand(0,10);

    $this->user->create();

    return print(json_encode(array('success' => true, 'msg' => 'User has been created')));
  }

  public function deactive()
  {
    $post = $this->input->post();

    if (!isset($post['user_id'])) {
      return print(json_encode(array('success' => false, 'msg' => 'User id not found')));
    }

    $this->user->field['active'] = '0';

    $this->user->update($post['user_id']);

    return print(json_encode(array('success' => true, 'msg' => 'Deactive User succesfully')));  
  }
}