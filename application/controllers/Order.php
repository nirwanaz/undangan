<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    function __construct()
    {   
        parent::__construct();
        
        // Load Helper
        $this->load->helper('uniqueid');
        
        // Load Models
        $this->load->model('Order_model');
        $this->order = $this->Order_model;
        $this->load->model('Undangan_model');
        $this->undangan = $this->Undangan_model;
        $this->load->model('Wedding_model');
        $this->wedding = $this->Wedding_model;
        $this->load->model('Wedding_event_model');
        $this->wedding_event = $this->Wedding_event_model;
        $this->load->model('Wedding_couple_model');
        $this->wedding_couple = $this->Wedding_couple_model;
        $this->load->model('Wedding_place_model');
        $this->wedding_place = $this->Wedding_place_model;
        $this->load->model('Wedding_gallery_model');
        $this->wedding_gallery = $this->Wedding_gallery_model;
        $this->load->model('Wedding_music_model');
        $this->wedding_music = $this->Wedding_music_model;
    }

    function index() {
        $this->load->view('/client/order_create');
    }

    function template() {
        $this->load->view('/client/order_template');
    }

    function store() {
        $post = $this->input->post();

        print_r($post);
        // $this->order->field['customer_name'] = $post['cust_name'];
        // $this->order->field['bundle_id'] = 1;
        // $this->order->field['statuse'] = '0';
        // $this->order->create();

        // $this->wedding->field['wedding_id'] = $w_id;
        // $this->wedding->field['wedding_couple_id'] = $wc_id;
        // $this->wedding->field['name'] = $post['groomSName'].'&'.$post['brideSname'];
        // $this->wedding->create();

        // $this->wedding_couple->field['wedding_couple_id'] = $wc_id;
        // $this->wedding_couple->field['groom_photo'] = $post['groom_photo'];
        // $this->wedding_couple->field['bride_photo'] = $post['bride_photo'];
        // $this->wedding_couple->field['groom_fname'] = $post['groom_fname'];
        // $this->wedding_couple->field['bride_fname'] = $post['bride_fname'];
        // $this->wedding_couple->field['groom_father_name'] = $post['groom_father_name'];
        // $this->wedding_couple->field['bride_father_name'] = $post['bride_father_name'];
        // $this->wedding_couple->field['groom_mother_name'] = $post['groom_mother_name'];
        // $this->wedding_couple->field['bride_mother_name'] = $post['bride_mother_name'];
        // $this->wedding_couple->field['groom_desc'] = $post['groom_desc'];
        // $this->wedding_couple->field['bride_desc'] = $post['bride_desc'];
        // $this->wedding_couple->create();

        // $this->wedding_event->field['wedding_event_id'] = $we_id;
        // $this->wedding_event->field['wedding_place_id'] = $wp_id;
        // $this->wedding_event->field['wedding_id'] = $w_id;
        // $this->wedding_event->field['name'] = $post['event_name'];
        // $this->wedding_event->field['date_start'] = $post['event_date_start'];
        // $this->wedding_event->field['date_end'] = $post['event_date_stop'];
        // $this->wedding_event->field['time_start'] = $post['event_time_start'];
        // $this->wedding_event->field['time_end'] = $post['event_time_stop'];
        // $this->wedding_event->create();

        // $this->wedding_place->field['wedding_place_id'] = $wp_id;
        // $this->wedding_place->field['name'] = $post['place_name'];
        // $this->wedding_place->field['address'] = $post['place_address'];
        // $this->wedding_place->field['gmap'] = $post['place_gmap'];
        // $this->wedding_place->create();

        // $this->wedding_gallery->field['wedding_id'] = $w_id;
        // $this->wedding_gallery->field['photo'] = $post['gallery_photo'];
        // $this->wedding_gallery->create();

        // $this->wedding_gift->field['wedding_id'] = $w_id;
        // $this->wedding_gift->field['payment_id'] = $post['payment_id'];
        // $this->wedding_gift->field['account_name'] = $post['account_name'];
        // $this->wedding_gift->field['account_number'] = $post['account_number'];
        // $this->wedding_gift->create();

        // $this->wedding_music->field['wedding_id'] = $w_id;
        // $this->wedding_music->field['music_id'] = $post['music_id'];
        // $this->wedding_music->create();

        
    }
}