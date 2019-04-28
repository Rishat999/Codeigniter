<?php

class Admin_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }

    public function login($email_address, $password) {

        $this->db->where('email', $email_address);
        $query = $this->db->get('users');
        if($query->num_rows() > 0) {
            $row = $query->row();
            if($row->password == md5($password)) {  
                $this->session->set_userdata("photo", $row->photo);
                $this->session->set_userdata("username", $row->username);
                $this->session->set_userdata("email", $email_address);
                $this->session->set_userdata("role", $row->role);
                $this->session->set_userdata("id", $row->id);
                if($this->session->userdata('role') == "subadmin")
                {
                    $this->session->set_userdata("dog_control", $row->dog_control);
                    $this->session->set_userdata("breeder_control", $row->breeder_control);
                    $this->session->set_userdata("breed_control", $row->breed_control);
                    $this->session->set_userdata("configuration", $row->configuration);
                }
                if($this->session->userdata('role') == "breeder")
                {
                    $this->session->set_userdata("member_type", $row->member_type);
                    $this->session->set_userdata("payment_status", $row->payment_status);
                    $this->session->set_userdata("txn_id", $row->txn_id);
                    $this->session->set_userdata("city", $row->city);
                    $this->session->set_userdata("state", $row->state);
                    $this->session->set_userdata("zip", $row->zip);
                }
                $this->session->set_userdata("is_logged_in", true);
                return true; 
            } else {
                return -1;
            }
        } else {
            return -2;
        }           
       
    }

    function change_admin_pwd($id, $old, $new)
    {
        $query = $this->db
                    ->where('id',$id)
                    ->get('users');
        $pwd_from_db = $query->result_array();
        if(md5($old) == $pwd_from_db[0]['password'])
        {
            $sql = "
                    UPDATE
                        users 
                    set 
                        password= md5($new)
                    where 
                        id ='".$id."'";
            if($this->db->query($sql))
            {   
               echo  "updated";
            }
            else
            {
                echo  "not updated";
            }
        }
        else
            echo "wrong old password";        
    }

    function del_breeder($id)
    {
        $delete_id = $id;
        $this->db
                ->where('id',$delete_id)
                ->delete('users'); 
        echo "success";
    }

    function update_breeder_membership($id, $member_type)
    {   
        $user_id = $id;
        if($member_type=='plus')
        {
            $data = array(
                'member_type' => $member_type,
                'payment_status' => 1
            );
        }
        else
        {
            $data = array(
                'member_type' => $member_type
            );
        }                   
        $this->db->where('id', $user_id);
        $this->db->update('users', $data); 
        echo "success";
    }

    function user_info() {

        $user_id = $this->session->userdata('user_id');
        $query = $this->db
                    ->where('id',$user_id)
                    ->get('vlad_users');

        return $query->result();

    }

    /* Update Modal Data */
    function get_user_info() {

        $user_id = $this->input->post('id');
        $query = $this->db
                    ->where('id',$user_id)
                    ->get('vlad_users');

        return $query->result();

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

    function get_poweruser_email() {

        $query = $this->db
                    ->select('email_address')
                    ->where('role', 'poweruser')
                    ->get('vlad_users');

        return $query->result();

    }

    function get_admin_email() {

        $query = $this->db
                    ->select('email_address')
                    ->where('role', 'admin')
                    ->get('vlad_users');

        return $query->result();

    }

    function get_email_byID($id) {

        $query = $this->db
                    ->select('email_address')
                    ->where('id', $id)
                    ->get('vlad_users');

        return $query->result();

    }
    function get_user_Byid($id) {

        $query = $this->db                    
                    ->where('id', $id)
                    ->get('vlad_users');

        return $query->result();

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

    function get_down_users_data($user)
    {
        $sql = "SELECT level from vlad_users where role='".$user."'";
        if($this->db->query($sql))
        {   
            $level_data = $this->db->query($sql)->result_array(); 
        }
        else
        {
            echo "not exist";
        }
        $current_level = $level_data[0]['level'];
        
        $users = array();
        $sql_get_down_users = "SELECT * from vlad_users where level < ".$current_level;
        if($this->db->query($sql_get_down_users))
        {   
            $user_data = $this->db->query($sql_get_down_users)->result_array(); 
        }
        else
        {
            echo "not exist";
        }
        return $user_data;
       /* for($m = $current_level - 1; $m >0; $m--)
        {   
            $user = array();
            $index = 'level'.$m;

            $user[$index] = array();
            for($k = 0; $k < count($user_data); $k++)
            {   
                if($user_data[$k]['level'] == $m)
                {
                   array_push($user[$index], $user_data[$k]);

                }
            }
        }
        var_dump($user['level1']);*/
        exit();
    }
}
?>