<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gift extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        // Load Library
        $this->load->library('session');
        // Load Helper
        $this->load->helper('file');

        if (empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin'));

        $this->header_html = '/admin/header';
        $this->sidebar_html = '/admin/sidebar';
        $this->footer_html = '/admin/footer';

        // Load Model
        $this->load->model('Gift_model');
        $this->gift_model = $this->Gift_model;
    }

    public function index()
    {
        $data['header'] = $this->header_html;
        $data['sidebar'] = $this->sidebar_html;
        $data['content'] = '/admin/fitur_gifts';
        $data['gifts'] = $this->gift_model->read();
        $data['footer'] = $this->footer_html;

        $this->load->view('admin_layout', $data);
    }

    public function store()
    {
        $post = $this->input->post();
        $upload = $this->do_upload();

        $this->gift_model->field['name'] = $post['name'];
        $this->gift_model->field['background'] = $upload['file_name'];

        $this->gift_model->create();

        return print(json_encode(array('data' => array('success' => true, 'msg' => 'Gift has been added'))));
    }

    public function update()
    {
        $post = $this->input->post();

        $gift = $this->gift_model->get_by_id($post['id']);

        if (empty($gift[0])) {
            return print(json_encode(array('success' => false, 'msg' => 'Cannot Found ID')));
        }

        if ($gift[0]->name !== $post['name']) {
            $this->gift_model->field['name'] = $post['name'];
            $updated = TRUE;
        }

        if ($gift[0]->background !== $post['file']) {
            $upload = $this->do_upload();
            $this->gift_model->field['background'] = $upload['file_name'];
            $updated = TRUE;
        }

        if ($updated) $this->gift_model->update($post['id']);

        return print(json_encode(array('success' => true, 'msg' => 'music has been updated')));
    }

    public function delete()
    {
        $post = $this->input->post();

        $gift = $this->gift_model->get_by_id($post['id']);

        if (empty($gift[0])) {
            return print(array('success' => false, 'msg' => 'Cannot Found ID'));
        }

        $filename = $gift[0]->background;
        
        // Begin Transaction 
        $this->db->trans_begin(); 
        $deleted = $this->gift_model->delete($post['id']);
        
        if ($deleted == 0) {
            return print(json_encode(array('success' => false, 'msg' => 'Failed to Delete Gift')));
        }

        $deleted_file = delete_file('./assets/image/gift/', $filename);

        if (!$deleted_file) {
            $this->db->trans_rollback();
            return print(json_encode(array('success' => false, 'msg' => 'File can\'t deleted')));
        }

        $this->db->trans_commit();
        return print(json_encode(array('data' => array('success' => true, 'msg' => 'Gift has been deleted'))));
    }

    private function do_upload() {
      // config upload file
      $config = array(
          'upload_path' => './assets/image/gift/',
          'allowed_types' => 'png|jpeg|webp',
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