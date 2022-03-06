<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        $this->load->model('Video_model');
        $this->video_model = $this->Video_model;
    }

    public function index()
    {
        $this->load->view('template_admin');
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

        $this->video_model->field['music_name'] = $post['name'];
        $this->video_model->field['music_src'] = $post['src'];

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