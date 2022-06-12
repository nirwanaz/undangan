<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gift_model extends CI_Model {

    protected $_table = 'gift';
    protected $key = 'gift_id';
    public $field = [];

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_table_name() {
        return $this->_table;
    }
    
    public function get_by_id($id) {
      return $this->db->get_where($this->get_table_name(), array($this->key => $id))->result();
    }

    public function read() {
        return $this->db->get($this->get_table_name())->result();
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