<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    
    // Load Library
    $this->load->library('session');

    if (empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin'));

    // Load Helper
    $this->load->helper('file'); 

    $this->header_html = "/admin/header";
    $this->sidebar_html = "/admin/sidebar";
    $this->footer_html = "/admin/footer";

    // Load Model
    $this->load->model('Template_model');
    $this->template = $this->Template_model;
  }

  public function index() {

    $data['header'] = $this->header_html;
    $data['sidebar'] = $this->sidebar_html;  
    $data['content'] = 'admin/template';
    $data['footer'] = $this->footer_html;
    $data['templates'] = $this->template->read();

    $this->load->view('admin_layout', $data);
  }

  public function store() {

    $post = $this->input->post();
    $upload = $this->do_upload();

    $this->template->field['name'] = $post['name'];
    $this->template->field['thumbnail'] = $upload['file_name'];
    $this->template->field['url'] = $post['link'];

    $this->template->create();

    return print(json_encode(
      array(
        'data' => array(
          'success' => true,
          'msg' => 'Template has been added'
        )
      )));
  }

  public function update() {

    $post = $this->input->post();
    $template = $this->template->get_by_id($post['id']);

    if (empty($template[0])) return print(array('data' => array('success' => false, 'msg' => 'Cannot Found ID')));

    if ($template[0]->name !== $post['name']) {
      $this->template->field['name'] = $post['name'];
      $updated = TRUE;
    }

    if ($template[0]->thumbnail !== $post['name']) {
      $upload = $this->do_upload();
      $this->template->field['thumbnail'] = $upload['file_name'];
      $updated = TRUE;
    }

    if ($template[0]->url !== $post['link']) {
      $this->template->url = $post['link'];
      $updated = TRUE;
    }

    if ($updated) $this->template->update();

    return print(json_encode(
      array(
        'data' => array(
          'success' => true,
          'msg' => 'Template has been updated'
        )
      )
    ));
  }

  public function delete() {
    $post = $this->input->post();
    $template = $this->template->get_by_id($post['id']);

    if (empty($template[0])) {
      return print(json_encode(array('data' => array('success' => false, 'msg' => 'Cannot Found ID'))));
    }
    
    // Begin Transaction
    $this->db->trans_begin();
    $deleted = $this->template->delete($post['id']);

    if ($deleted == 0) {
      return print(json_encode(array('data' => array('success' => false, 'msg' => 'Failed to delete template'))));
    }

    // delete file 
    $deleted_file = delete_file('./assets/image/thumbnail/', $template[0]->thumbnail);

    if (!$deleted_file) {
      $this->db->trans_rollback();
      return print(json_encode(array('data' => array('success' => false, 'msg' => 'File can\'t deleted'))));
    }

    $this->db->trans_commit();
    return print(json_encode(array('data' => array('success' => true, 'msg' => 'Template has been deleted'))));
  }

  private function do_upload() {
    
    // config upload file
      $config = array(
          'upload_path' => './assets/image/thumbnail/',
          'allowed_types' => 'png|jpg',
          'file_ext_tolower' => TRUE,
          'max_size' => '1024KB',
          'max_filename' => '64'
      );

      // do upload file
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload("file")) return print(json_encode(array(
          'success' => false, 
          'msg' => $this->upload->display_errors()
          )));

      // if success upload
      return $this->upload->data();
  }
}
