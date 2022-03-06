<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bride extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        $this->load->model('Bride_model');
        $this->bride_model = $this->Bride_model;
    }

    public function index()
    {
        $this->load->view('template_admin');
    }

    public function store()
    {
        $post = $this->input->post();

        $this->bride_model->field['bride_fname'] = $post['fname'];
        $this->bride_model->field['bride_sname'] = $post['sname'];
        $this->bride_model->field['bride_father_name'] = $post['father_name'];
        $this->bride_model->field['bride_mother_name'] = $post['mother_name'];
        $this->bride_model->field['photo'] = $post['photo'];
        $this->bride_model->field['additional_information'] = $post['additional_information'];

        $this->bride_model->create();
    }

    public function update()
    {
        $post = $this->input->post();

        $this->bride_model->field['bride_fname'] = $post['fname'];
        $this->bride_model->field['bride_sname'] = $post['sname'];
        $this->bride_model->field['bride_father_name'] = $post['father_name'];
        $this->bride_model->field['bride_mother_name'] = $post['mother_name'];
        $this->bride_model->field['photo'] = $post['photo'];
        $this->bride_model->field['additional_information'] = $post['additional_information'];

        $updated = $this->bride_model->update($post['id']);
        
        if ($updated == 0) {
            return print('Id Tidak ditemukan');
        }

        return print(json_encode('success'));
    }

    public function delete()
    {
        $id = $this->input->post();

        $deleted = $this->bride_model->delete($id);

        if ($deleted == 0) {
            return print('Id Tidak Ditemukan');
        }

        return print(json_encode('success'));
    }
}