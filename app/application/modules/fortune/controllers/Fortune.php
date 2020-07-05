<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fortune extends Main_Controller {

	function __construct() {

		parent::__construct();
        date_default_timezone_set("Asia/Manila");
        
		$this->load->model('Fortune_model');

    }
    
    function get_rand_fortune(){
		$return['fortune'] = $this->Fortune_model->rand_fortune();
        
        echo json_encode($return);
    }

    function replace_fortune(){
        if($_POST){
            $id = $_POST['id'];
            $data['fortune'] = $_POST['fortune'];
            $data['is_active'] = 1;

            $new_id = $this->Fortune_model->add_fortune($data);
            if($new_id != NULL){
                $this->Fortune_model->remove_fortune($id);
            }
            $data['id'] = $new_id;
            $return['fortune'] = $data;
            echo json_encode($return);
        }else{
            echo "No Data Received!";
        }
    }

    function seed(){
        $this->Fortune_model->seeder();

        echo "Done!!";
    }

}