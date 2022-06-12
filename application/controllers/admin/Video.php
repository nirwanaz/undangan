<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        // Load Library
        $this->load->library('session');

        if (empty($this->session->userdata('admin'))) redirect(base_url('index.php/admin'));

        $this->header_html = "/admin/header";
        $this->sidebar_html = "/admin/sidebar";
        $this->footer_html = "/admin/footer";

        $this->load->model('Video_model');
        $this->video_model = $this->Video_model;
    }

    public function index()
    {
        $data['header'] = $this->header_html;
        $data['sidebar'] = $this->sidebar_html;
        $data['content'] = 'admin/fitur_video';
        $data['videos'] = $this->video_model->read();

        $this->load->view('admin_layout', $data);
    }

    public function store()
    {
        $post = $this->input->post();

        $this->video_model->field['video_name'] = $post['name'];
        $this->video_model->field['video_src'] = $post['src'];

        $this->video_model->create();
    }

    public function update()
    {
        $post = $this->input->post();

        $this->video_model->field['video_name'] = $post['name'];
        $this->video_model->field['video_src'] = $post['src'];

        $updated = $this->video_model->update($post['id']);
        
        if ($updated == 0) {
            return print('Id Tidak ditemukan');
        }

        return print(json_encode('success'));
    }

    public function delete()
    {
        $id = $this->input->post();

        $deleted = $this->video_model->delete($id);

        if ($deleted == 0) {
            return print('Id Tidak Ditemukan');
        }

        return print(json_encode('success'));
    }
}