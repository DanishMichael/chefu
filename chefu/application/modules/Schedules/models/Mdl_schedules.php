<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_schedules extends CI_Model {

function __construct() {
parent::__construct();
}

function get_where($id) {
    $table = 'schedules';
    $this->db->where('chefId', $id);
    $query=$this->db->get($table);
    return $query;
}

function _insert($data) {
    $table = 'schedules';
    $this->db->insert($table, $data);
}
    
}