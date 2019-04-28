<?php

class Subadmin_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }

    function register_new_subadmin($data)
    {           
        $query = $this->db->where('email',$data['email'])
                      ->where('username',$data['username']) 
                      ->get('subadmins');
        if($query->num_rows() > 0) {
            echo 'User already exists';   
        } else {
            $data['pass'] = md5($data['pass']);
            $this->db->insert('subadmins',$data);  
            echo "success";
        }
    }
    
    function get_all_subadmin()
    {       
        $all = $this->db
                    ->order_by('id','asc')
                    ->get('subadmins')                    
                    ->result_array();
        return $all;
    }

    function delete_subadmin($id)
    {
        $delete_id = $id;
        $this->db
                ->where('id',$delete_id)
                ->delete('subadmins'); 
        echo "success";
    }


    function change_password($id, $pwd)
    {        
        $user_id = $id;
        $data = array(                
                'password'=>md5($pwd)
            );
        $this->db->where('id', $user_id);
        $this->db->update('users', $data); 
        echo "success";
    }
    
    function get_all_users() {

        $id = $this->session->userdata('user_id');
        $q = $this->db
                    /*->where('availability','user')*/
                    ->order_by('level','desc')
                    ->get('vlad_users')                    
                    ->result();

        return $q;

    }
    
    
   
    function search_users($user)
    {   
        $like = '"'.'%'.$user.'%'.'"';
        $sql = "SELECT * from vlad_users where name like $like";
        if($this->db->query($sql))
        {   
            $data = $this->db->query($sql)->result_array();
           
            return $data;
        }
        else
        {
            echo "not exist";
        }
    }

    
}
?>