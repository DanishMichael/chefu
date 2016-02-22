<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Chef extends MX_Controller
{

function __construct() {
parent::__construct();
}
function index(){
    
}
function signUpForm(){
    $data['view_file'] = "signup_form";
	$this->load->module('Main_template');
	$this->main_template->index($data);
}
function form_validate(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('address', 'Street', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
	    if($_FILES['userfile']['name']) {
            $config['upload_path'] = APPPATH . 'uploads/'; 
            if(file_exists(APPPATH . 'uploads/' . $_POST['firstname'].$_POST['lastname'])){
             while (file_exists(APPPATH . 'uploads/' . $config['file_name'])) {
                $config['file_name'] = $_POST['firstname'].$_POST['lastname']."1";
            }   
            }else{
                $config['file_name'] = $_POST['firstname'].$_POST['lastname'];
            }
            
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpg|jpeg|png|gif';
            $config["max_size"] = 1024;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
                {
                    // case - failure
                    $data['upload_error'] = array('error' => $this->upload->display_errors());
                    $data['view_file'] = "signup_form";
                	$this->load->module('Main_template');
                	$this->main_template->index($data);
                }
                else
                {
                    // case - success
                    $data_db_chef['img_url'] = APPPATH . 'uploads/' . $config['file_name'];
                }
        }
		


		if($this->form_validation->run() == FALSE)
		{
			$data['view_file'] = "signup_form";
        	$this->load->module('Main_template');
        	$this->main_template->index($data);
		}
		else
		{
			$this->load->module("User");
			$data_db_chef['chefFirstName'] = $_POST['firstname'];
			$data_db_chef['chefLastName'] = $_POST['lastname'];
			$data_db_chef['userId'] = $this->user->get_max()+1;
			
			$data_db_user['userName'] = $_POST['email'];
			$data_db_user['userPassword'] = $_POST['password'];
			$data_db_user['userPhone'] = $_POST['phone'];
			$data_db_user['userEmail'] = $_POST['email'];
			$data_db_user['userStreetAddress'] = $_POST['address'];
			$data_db_user['userLocationId'] = $_POST['city'];
			$data_db_user['userRole'] = "chef";
			$this->db->trans_start();
    	        $this->_insert_chef($data_db_chef);
    	        $this->_insert_user($data_db_user);
	        $this->db->trans_complete();
	        
	        if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
            }
            else
            {
                $this->db->trans_commit();
                $data['view_file'] = "dashboard";
            	$data['first_time'] = true;
            	$this->dashboard_view($data);
            }
	        
		}
}


public function dashboard(){
    $data['view_file'] = "dashboard";
    $data['chef_details'] = $this->get_where(5);
    $this->load->module("User");
    $data['user_details'] = $this->user->get_where(5);
    $this->dashboard_view($data);
}

public function dashboard_view($data){
    $this->load->module("Main_template");
    $this->main_template->index($data);
}

public function recipes(){
    $this->load->module('Recipes');
    if(isset($_GET['rec_id'])){
        $data['view_file'] = "dashboard";
        $data['recipe_data'] = $this->recipes->get_where($_GET['rec_id']);
        $this->load->module('Main_template');
        $this->main_template->index($data);
    }else{
        $data['view_file'] = "dashboard";
        $data['recipe_data'] = $this->recipes->get("recipeId");
        $this->load->module('Main_template');
        $this->main_template->index($data);
    }
    
    
}

public function editRec(){
    
}




public function password_check($str)
{
   if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
     return TRUE;
   }
   return FALSE;
}


function _insert_chef($data) {
    $this->load->model('mdl_chef');
    $this->mdl_chef->_insert_chef($data);
}
function _insert_user($data) {
    $this->load->model('mdl_chef');
    $this->mdl_chef->_insert_user($data);
}

function get_where($id) {
    $this->load->model('mdl_chef');
    $query = $this->mdl_chef->get_where($id);
    return $query;
}


}