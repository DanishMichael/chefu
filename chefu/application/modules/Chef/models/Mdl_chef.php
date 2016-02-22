<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_chef extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
    $table = "chef";
    return $table;
}

function _insert_chef($data) {
    $table = "chef";
    $this->db->insert($table, $data);
}    
    
function _insert_user($data) {
    $table = "user";
    $this->db->insert($table, $data);
    
}    
    
function get_where($id) {
    $table = 'chef';
    $this->db->where('userId', $id);
    $query=$this->db->get($table);
    return $query;
}
    
}