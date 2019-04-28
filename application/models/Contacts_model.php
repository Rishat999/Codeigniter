<?php

class Contacts_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }

    function add_new_contact($data)
    {           
        $this->db->insert('contacts',$data);
    }
    
    

    
}
?>