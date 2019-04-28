<?php

class Cms_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }

    function get_data()
    {           
        $cms_data = $this->db
                    ->get('cms')                    
                    ->result_array();       
        return $cms_data;
    }
    
    function update_cms_data($data)
    {
        $user_id = 1;
        $this->db->where('id', $user_id);
        $this->db->update('cms', $data); 
        if ($this->db->affected_rows() > 0)
        {
          echo "success";
        }
        else
        {
          echo "failure";
        }
    }

    
}
?>