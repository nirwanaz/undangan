<?php
defined('BASEPATH') or exit('No direct script access allowed');

class fitur extends CI_Controller
{
    public function music()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('fitur_music');
        $this->load->view('templates_footer');
    }

    public function add_music()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('v_add_music');
        $this->load->view('templates_footer');
    }

    public function photo()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('fitur_photo');
        $this->load->view('templates_footer');
    }

    public function add_photo()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('v_add_foto');
        $this->load->view('templates_footer');
    }

    public function video()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('fitur_video');
        $this->load->view('templates_footer');
    }

    public function add_video()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('v_add_video');
        $this->load->view('templates_footer');
    }

    public function gift()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('fitur_gifts');
        $this->load->view('templates_footer');
    }

    public function add_gift()
    {
        $this->load->view('templates_header');
        $this->load->view('sidebar');
        $this->load->view('v_add_gifts');
        $this->load->view('templates_footer');
    }

}