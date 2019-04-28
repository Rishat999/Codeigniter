<?php

class Breeds_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }   

    
    function get_all_breeds() {
        /*$result_breeds = $this->db
                    ->get('breeds')
                    ->order_by('breed_name','asc')                   
                    ->result_array();
        return $result_breeds;*/

        $this->db->from('breeds');
        $this->db->order_by("breed_name", "asc");
        $query = $this->db->get(); 
        return $query->result_array();
    }
   
    function add_new_breed($data)
    {   
        $new_data = array(
            "breed_name" => $data
        );
        $this->db->insert('breeds',$new_data);  
        $insert_id = $this->db->insert_id();
        if(isset($insert_id))
            echo "success";
        else
            echo "failure"; 
    }

    function del_breed($id)
    {
        $delete_id = $id;
        $this->db
                ->where('id',$delete_id)
                ->delete('breeds'); 
        echo "success";
    }
    /* Search user from modal form */
    function get_users_by_search() {

        $keyword = $this->input->post('keyword');
        $id = $this->session->userdata('user_id');
        $query = 'SELECT * FROM vlad_users WHERE id!='.$id.'
            AND (
                name LIKE "%'.$keyword.'%"
                OR email_address LIKE "%'.$keyword.'%"
            )
            ORDER BY registered_at ASC
        ';
        $result = $this->db->query($query)->result();

        return $result;

    }

    function update_user($data) {
        $user_id = $data['id'];
        $data = array(
                'name' => $data['name'],
                'email_address' => $data['email_address'],
                'role' => $data['role'],
                'level' => $data['level'],
                'availability' => $data['availability'],
                'password'=>md5($data['password'])
            );
        $this->db->where('id', $user_id);
        $this->db->update('vlad_users', $data); 
        echo "success";
    }
    
    /* delte user from delete form */
    function delete_user($id) {

        $delete_id = $id;
        $this->db
                ->where('id',$delete_id)
                ->delete('vlad_users'); 
        echo "success";
        
    }

   
}
?>