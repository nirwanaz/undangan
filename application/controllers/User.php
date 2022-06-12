<?php
defined('BASEPATH') OR exit('No direct access allowed');

class User extends CI_Controller {

  function __construct() {
    parent::__construct();
    
    $this->load->library('session');

    $this->load->model('User_model');
    $this->user = $this->User_model;
  }

  function signin() {
    if ($this->session->has_userdata('user')) {
      redirect('user/dashboard');
    } else {
      $this->load->view('/client/user_login');
    }
  }

  function login() {
    $post = $this->input->post();

    // find email / username are exist
    $user_identity = $this->user->lookup_by_email_or_username($post['username']);
    if (isset($user_identity)) {
      if ($user_identity['active'] == '0') {
        return print(json_encode(array('success' => false, 'msg' => 'User not activated')));
      }

      if ($user_identity['password'] === $post['password']) {
        // retieve identity user to session
        $this->session->set_userdata('user', $user_identity);

      } else {
        return print(json_encode(array('success' => false, 'msg' => 'user account and password does not match')));
      }
    }

    return print(json_encode(array('success' => false, 'msg' => 'User not found')));
  }

  function register() {
    $post = $this->input->post();

    $this->user->field['email'] = $post['email'];
    $this->user->field['first_name'] = $post['firstname'];
    $this->user->field['last_name'] = $post['lastname'];
    $this->user->field['password'] = $post['password'];
    $this->user->field['username'] = 
    $this->user->field['active'] = '1';

    $this->user->create();

    return print(json_encode(array('success' => true, 'msg' => 'User has been created')));
  }

  function deactived() {
    $post = $this->input->post();

    $user = $this->user->get_by_id($post['id']);
    
    if (!isset($user)) {
      return print(json_encode(array('success' => false, 'msg' => 'User cant be found')));
    }

    $this->user->field['active'] = 0;
    $this->user->update($post[id]);

  }

  function logout() {
    $this->session->unset_userdata('user');
    $this->session->sess_destroy();

    return print(json_encode(array('success' => true, 'msg' => 'Logout success')));
  }
}