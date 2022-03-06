<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class undangan extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper(['html', 'inflector', 'date_helper']);
        // Load Model
        $this->load->model('Undangan_model');
        $this->undangan = $this->Undangan_model;
        $this->load->model('Wedding_model');
        $this->wedding = $this->Wedding_model;
        $this->load->model('Wedding_event_model');
        $this->wedding_event = $this->Wedding_event_model;
        $this->load->model('Wedding_place_model');
        $this->wedding_place = $this->Wedding_place_model;
        $this->load->model('Wedding_couple_model');
        $this->wedding_couple = $this->Wedding_couple_model;
        $this->load->model('Wedding_gallery_model');
        $this->wedding_gallery = $this->Wedding_gallery_model;
        $this->load->model('Wedding_music_model');
        $this->wedding_music = $this->Wedding_music_model;
    }    

    function index() {
        $data['groom_name'] = 'miftakhul';
        $data['bride_name'] = 'alen fitriani';
        $data['groom_sname'] = 'miftakhul';
        $data['bride_sname'] = 'alen';
        $data['bride_father_name'] = 'bambang sungkono';
        $data['bride_mother_name'] = 'musripah';
        $data['groom_father_name'] = 'rustam (alm)';
        $data['groom_mother_name'] = 'mugiatun';
        $data['date_event_wedding_start'] = '25-02-2022';
        $data['date_event_wedding_end'] = '26-02-2022';
        $data['locate_event_wedding'] = 'Dsn. Brongkos rt.04 rw.03 ds. siraman kec. kesamben blitar';
        $data['gmap_embed_event_wedding'] = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.6905590342617!2d112.35126331478035!3d-8.13295189414552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78968db496a15d%3A0x53e8e6c59fe7d717!2sGg.%20Krisna%2C%20Karangsono%2C%20Siraman%2C%20Kec.%20Kesamben%2C%20Kabupaten%20Blitar%2C%20Jawa%20Timur%2066191!5e0!3m2!1sid!2sid!4v1644814183144!5m2!1sid!2sid';
        $data['gmap_link_event_wedding'] = 'https://maps.app.goo.gl/nJNQjvGv4e13X56i7';
        $data['content'] = '/theme/theme4';
        $data['album_items'] = ['assets/image/LST_7528-min.jpg', 'assets/image/LST_7534-min.jpg', 'assets/image/LST_7569-min.jpg'];
        $data['bank_name'] = 'mandiri';
        $data['bank_no_account'] = '1780002278048';

        $this->load->view('theme_layout', $data);
    }

    private function get_wedding() {
        return $this->wedding->read();
    }

    private function get_wedding_couple() {
        return $this->wedding_couple->read();
    }

    private function get_wedding_event() {
        return $this->wedding_event->read();
    }

    private function get_wedding_place() {
        
    }
}
