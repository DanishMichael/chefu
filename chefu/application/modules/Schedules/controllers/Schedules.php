<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Schedules extends MX_Controller
{

function __construct() {
parent::__construct();
}
function index(){
    
}
function availabilty(){
    $json = file_get_contents('php://input');
    $obj = json_decode($json);
    $query = $this->get_where($obj->chefId);
    $start_new = strtotime($obj->date. ' ' .$obj->start);
    $end_new = strtotime($obj->date. ' ' .$obj->end);
    
    $check = true;
    foreach ($query->result() as $row){
        $old_start = $row->start;
        $old_end = $row->end;
        if($start_new <= $old_end && $old_start >= $end_new){
            $check = false;
            echo "Not Available";
        }else{
            $check = true;
        }
    }
    if($check){
            $data['chefId'] = $obj->chefId;
            $data['start'] = date('Y-m-d H:i:s', $start_new);
            $data['end'] = date('Y-m-d H:i:s', $end_new);
            $data['userId'] = 98;
            $data['status'] = 'pending';
            $this->_insert($data);
            echo "okay";
        }
        
        
    
}

function get_where($id) {
    $this->load->model('mdl_schedules');
    $query = $this->mdl_schedules->get_where($id);
    return $query;
}
function _insert($data) {
    $this->load->model('mdl_schedules');
    $this->mdl_schedules->_insert($data);
}

}