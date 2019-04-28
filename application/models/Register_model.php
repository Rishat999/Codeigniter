<?php

class Register_model extends CI_Model {
    
    function check_name($name) {

        $q = $this->db->where('name',$name)
                      ->get('vlad_users');
        if($q->num_rows() > 0) {
            return true;   
        } else {
            return false;   
        }

    }
    
    function add_user($data) {
        /*$data = array(
                'name' => $this->input->post('name'),
                'email_address' => $this->input->post('email_address'),
                'password' => md5($this->input->post('password')),
                'role' => $this->input->post('user_role'),
                'availability' => $this->input->post('user_availability'),
                'registered_at' => date('Y-m-d'),
            );*/
        $query = $this->db->where($data)
                      ->get('vlad_users');
        if($query->num_rows() > 0) {
            echo 'User already exists';   
        } else {
            $this->db->insert('vlad_users',$data);  
            echo "success";
        }


    }
    
}
?>