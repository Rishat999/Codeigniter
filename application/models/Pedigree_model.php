<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedigree_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }

    function add_new_data($data)
    {
        $this->db->insert('pedigree',$data);  
        $insert_id = $this->db->insert_id();
        if(isset($insert_id))
            echo "success";
        else
            echo "failure";
    }
    
    function update_data($data, $dog_id)
    {   
        $this->db->where('dog_id', $dog_id);
        $this->db->update('pedigree', $data);
    }
    function get_data_by_dog_id($dog_id)
    {   
        $pedigree_data = $this->db
                    ->where('dog_id',$dog_id)
                    ->get('pedigree')                    
                    ->result_array();
        return $pedigree_data;
    }

    
}
?>