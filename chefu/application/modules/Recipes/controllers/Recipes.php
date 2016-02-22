<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Recipes extends MX_Controller
{

function __construct() {
parent::__construct();
}
function index(){
    
}

function addRecipe(){
    $this->db->trans_start();
        $data_rec['recipeName'] = $_POST['recipe_title'];
        $data_rec['recipeCategoryId'] = $_POST['category_id'];
        $data_rec['recipeDescription'] = $_POST['description'];
        
        $this->_insert($data_rec);
        if(isset($_POST['number_of_ings'])){
            $recipeId = $data_ing['recipeId'] =  $this->get_max();
            if(!($data_ing['recipeId'])){
                $recipeId = $data_ing['recipeId'] = 1;    
            }
            $this->load->module('Ingredients');
            for ($x = 1; $x <= $_POST['number_of_ings']; $x++) {
                $data_ing['ingredientName'] = $_POST['ing'.$x];
                $data_ing['ingredientQty'] = $_POST['ing_qty'.$x];
                $this->ingredients->_insert($data_ing);
            }
        }
        $this->load->module('Steps');
        if(isset($_POST['number_of_steps'])){
            for ($x = 1; $x <= $_POST['number_of_steps']; $x++) {
                if($_FILES['file_upload'.$x]['name']) {
                        $config['upload_path'] = APPPATH . 'uploads/recipeSteps'; 
                        $config['file_name'] = $recipeId.$x;
                        }
                        $config['overwrite'] = TRUE;
                        $config["allowed_types"] = 'jpg|jpeg|png|gif';
                        $config["max_size"] = 1024;
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('file_upload'.$x))
                            {
                                // case - failure
                                $data['upload_error'] = array('error' => $this->upload->display_errors());
                                var_dump($data['upload_error']);
                                die();
                            }
                            else
                            {
                                // case - success
                                $data_step['stepImgUrl'] = APPPATH . 'uploads/' . $config['file_name'];
                            }
                    }
                $data_step['stepDesc'] = $_POST['description'];
                $data_step['stepNumber'] = $x;
                $this->steps->_insert($data_step);
            }
        
        
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            die("internal error");
        }
        else
        {
            $this->db->trans_commit();
            die("Data Added Successfully");
        //     $data['view_file'] = "dash";
        // 	$data['first_time'] = true;
        // 	$this->load->module('Main_template');
        // 	$this->main_template->index($data);
        }
}

function get_max() {
    $this->load->model('mdl_recipe');
    $max_id = $this->mdl_recipe->get_max();
    return $max_id;
}


function _insert($data) {
    $this->load->model('mdl_recipe');
    $this->mdl_recipe->_insert($data);
}


function get($order_by) {
    $this->load->model('mdl_recipe');
    $data_query['recipe_data'] = $this->mdl_recipe->get($order_by);
    $this->load->module('Steps');
    $this->load->module('Ingredients');
    foreach ($data_query['recipe_data']->result() as $row) {
        $data_query['step_data'.$row->recipeId] = $this->steps->get_where($row->recipeId);
        $data_query['ing_data'.$row->recipeId] = $this->ingredients->get_where($row->recipeId);
    }
    
    
    echo json_encode($data_query['recipe_data']->result());
}
function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_recipe');
    $query = $this->mdl_dost->get_with_limit($limit, $offset, $order_by);
    return $query;
}
function recipeSingle(){
    $this->load->model('mdl_recipe');
    $data['recipe_data'] = $this->mdl_recipe->get_where($_GET['recId']);
    $this->load->module('Steps');
    $this->load->module('Ingredients');
    foreach ($data['recipe_data']->result() as $row) {
        $data['step_data'] = $this->steps->get_where($row->recipeId);
        $data['ing_data'] = $this->ingredients->get_where($row->recipeId);
    }
    
    
    $data['view_file'] = 'single_recipe';
    $this->load->module('Main_template');
    $this->main_template->index($data);
}
function get_where($id) {
    $this->load->model('mdl_recipe');
    $data_query['recipe_data'] = $this->mdl_recipe->get_where($id);
    $this->load->module('Steps');
    $this->load->module('Ingredients');
    foreach ($data_query['recipe_data']->result() as $row) {
        $data_query['step_data'.$row->recipeId] = $this->steps->get_where($row->recipeId);
        $data_query['ing_data'.$row->recipeId] = $this->ingredients->get_where($row->recipeId);
    }
    
    
    return $data_query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_recipe');
    $query = $this->mdl_recipe->get_where_custom($col, $value);
    return $query;
}


}