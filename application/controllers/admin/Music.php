<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        // Load Library
        $this->load->library('session');
        // Load Helper
        $this->load->helper('file');

        if (empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin'));

        $this->header_html = "/admin/header";
        $this->sidebar_html = "/admin/sidebar";
        $this->footer_html = "/admin/footer";

        // Load Model
        $this->load->model('Music_model');
        $this->music_model = $this->Music_model;
    }

    public function index()
    {

        $data['header'] = $this->header_html;
        $data['sidebar'] = $this->sidebar_html;
        $data['content'] = '/admin/fitur_music';
        $data['footer'] = $this->footer_html;
        $data['musics'] = $this->music_model->read();

        $this->load->view('admin_layout', $data);
    }

    public function store()
    {
        $post = $this->input->post();
        
        // config upload file
        $config = array(
            'upload_path' => './assets/audio/',
            'allowed_types' => '*',
            'file_ext_tolower' => TRUE,
            'max_size' => '4096KB',
            'max_filename' => '64'
        );

        // do upload file
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload("file")) return print(json_encode(array(
            'success' => false, 
            'msg' => $this->upload->display_errors()
            )));

        // if success upload
        $upload = $this->upload->data();

        $this->music_model->field['name'] = $post['name'];
        $this->music_model->field['src'] = $upload['file_name'];

        $this->music_model->create();

        return print(json_encode(array('data' => array('success' => true, 'msg' => 'Music has been added'))));
    }

    public function update()
    {
        $post = $this->input->post();

        $this->music_model->field['name'] = $post['name'];
        $this->music_model->field['src'] = $post['src'];

        $updated = $this->music_model->update($post['id']);
        
        if ($updated == 0) {
            return print(json_encode(array('success' => false, 'msg' => 'Cannot Found ID')));
        }

        return print(json_encode(array('success' => true, 'msg' => 'music has been updated')));
    }

    public function delete()
    {
        $post = $this->input->post();

        $music = $this->music_model->get_by_id($post['id']);

        if (empty($music[0])) {
            return print(array('success' => false, 'msg' => 'Cannot Found ID'));
        }

        $filename = $music[0]->src;
        
        // Begin Transaction 
        $this->db->trans_begin(); 
        $deleted = $this->music_model->delete($post['id']);
        
        if ($deleted == 0) {
            return print(json_encode(array('success' => false, 'msg' => 'Failed to Delete Music')));
        }

        $deleted_file = delete_file('./assets/audio/', $filename);

        if (!$deleted_file) {
            $this->db->trans_rollback();
            return print(json_encode(array('success' => false, 'msg' => 'File can\'t deleted')));
        }

        $this->db->trans_commit();
        return print(json_encode(array('data' => array('success' => true, 'msg' => 'Music has been deleted'))));
    }
}