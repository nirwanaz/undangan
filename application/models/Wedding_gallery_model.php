<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding_gallery_model extends CI_Model {

    protected $_table = 'wedding_gallery';
    protected $key = 'wedding_gallery_id';
    public $field = [];

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_table_name() {
        return $this->_table;
    }
    
    public function read() {
        return $this->db->get($this->get_table_name());
    }

    public function create() {
        return $this->db->insert($this->get_table_name(), $this->field);
    }

    public function update($id) {
        $this->db->update($this->get_table_name(), $this->field, array($this->key => $id));
        return $this->db->affected_rows();
    }

    public function delete($id) {
        $this->db->delete($this->get_table_name(), array($this->key => $id));
        return $this->db->affected_rows();
    }
}