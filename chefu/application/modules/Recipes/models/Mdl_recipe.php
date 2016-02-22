<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_recipe extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
    $table = "recipe";
    return $table;
}

function _insert($data) {
    $table = $this->get_table();
    $this->db->insert($table, $data);
}


function get_max() {
    $table = $this->get_table();
    $this->db->select_max('recipeId');
    $query = $this->db->get($table);
    $row=$query->row();
    $id=$row->recipeId;
    return $id;
}

function get($order_by) {
    $table = $this->get_table();
    $this->db->order_by($order_by);
    $query=$this->db->get($table);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $table = $this->get_table();
    $this->db->limit($limit, $offset);
    $this->db->order_by($order_by);
    $query=$this->db->get($table);
    return $query;
}

function get_where($id) {
    $table = $this->get_table();
    $this->db->where('recipeId', $id);
    $query=$this->db->get($table);
    return $query;
}

function get_where_custom($col, $value) {
    $table = $this->get_table();
    $this->db->where($col, $value);
    $query=$this->db->get($table);
    return $query;
}



}