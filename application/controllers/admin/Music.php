<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        $this->load->model('Music_model');
        $this->music_model = $this->Music_model;
    }

    public function index()
    {
        $this->load->view('template_admin');
    }

    public function store()
    {
        $post = $this->input->post();

        $this->music_model->field['music_name'] = $post['name'];
        $this->music_model->field['music_src'] = $post['src'];

        $this->music_model->create();
    }

    public function update()
    {
        $post = $this->input->post();

        $this->music_model->field['music_name'] = $post['name'];
        $this->music_model->field['music_src'] = $post['src'];

        $updated = $this->music_model->update($post['id']);
        
        if ($updated == 0) {
            return print('Id Tidak ditemukan');
        }

        return print(json_encode('success'));
    }

    public function delete()
    {
        $id = $this->input->post();

        $deleted = $this->music_model->delete($id);

        if ($deleted == 0) {
            return print('Id Tidak Ditemukan');
        }

        return print(json_encode('success'));
    }
}