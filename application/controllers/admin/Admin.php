<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->library('session');

		$this->header_html = "/admin/header";
		$this->sidebar_html = "/admin/sidebar";
		$this->footer_html = "/admin/footer";

		$this->load->model('Admin_model');
		$this->admin = $this->Admin_model;
	}

	public function index() {
		if (!empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin/dashboard'));
		
		$this->load->view($this->header_html);
		$this->load->view('/admin/login');
		$this->load->view($this->footer_html);
	}

	public function auth() {
		$post = $this->input->post();

		// find email / username are exist
    $admin_identity = $this->admin->lookup_by_username($post['username']);
    if (isset($admin_identity)) {
      // if ($admin_identity['active'] == '0') {
      //   return print(json_encode(array('success' => false, 'msg' => 'User not activated')));
      // }

      if ($admin_identity->password === $post['passwd']) {
        // retieve identity user to session
        $this->session->set_userdata('admin', $admin_identity);
				return print(json_encode(array('success' => true, 'msg' => 'login successfully')));

      } else {
        return print(json_encode(array('success' => false, 'msg' => 'user account and password does not match')));
      }
    }

    return print(json_encode(array('success' => false, 'msg' => 'User not found')));
	}

	public function logout() {
		$this->session->unset_userdata('admin');
		$this->session->sess_destroy();

		redirect(base_url('index.php/admin/'));
	}
}
	