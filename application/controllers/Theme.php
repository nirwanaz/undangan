<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'html', 'inflector']);

    }
    public function index($id) {
        $data['groom_name'] = '';
        $data['bride_name'] = '';
        $data['groom_sname'] = '';
        $data['bride_sname'] = '';
        $data['bride_father_name'] = '';
        $data['bride_mother_name'] = '';
        $data['groom_father_name'] = '';
        $data['groom_mother_name'] = '';
        $data['date_event_wedding_start'] = '';
        $data['date_event_wedding_end'] = '';
        $data['locate_event_wedding'] = '';
        $data['gmap_embed_event_wedding'] = '';
        $data['gmap_link_event_wedding'] = '';
        $data['album_items'] = ['assets/image/LST_7528-min.jpg', 'assets/image/LST_7534-min.jpg', 'assets/image/LST_7569-min.jpg'];
        $data['bank_name'] = '';
        $data['bank_no_account'] = '';
        $data['content'] = '/theme/theme'.$id;
        $this->load->view('theme_layout', $data);
    }
}