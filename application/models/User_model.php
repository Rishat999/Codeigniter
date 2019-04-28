<?php

class User_model extends CI_Model {

    function get_users_count()
    {   
        $count = $this->db
                    ->get('users')                    
                    ->result();
        if(empty($count))
            $return_val = 0;          
        else
            $return_val =  count($count);
        return $return_val;
    }

    function get_breeders_count()
    {        
        $breeder_count = $this->db
                    ->where('role','breeder')
                    ->get('users')                    
                    ->result();
        if(empty($breeder_count))
            $return_val = 0;          
        else
            $return_val =  count($breeder_count);
        return $return_val;
    }

    function get_paid_breeder_count()
    {
        $paid_breeder_count = $this->db
                    ->where('payment_status',1)
                    ->get('users')                    
                    ->result();
        if(empty($paid_breeder_count))
            $return_val = 0;          
        else
            $return_val =  count($paid_breeder_count);
        return $return_val;
    }

    function get_breeders_data()
    {
        $breeders = $this->db
                    ->where('role','breeder')
                    ->get('users')                    
                    ->result_array();
        return $breeders;
    }

    function get_breeder_data($id)
    {
         $breeder = $this->db
                    ->where('id',$id)
                    ->get('users')                    
                    ->result_array();
        return $breeder;
    }

    function updateavatar($path)
    {   
        $data = array(
                'photo' => $path
            );
        $id = $this->session->userdata('id');
        $email = $this->session->userdata('email');
        $this->db->where('id', $id)
                 ->where('email', $email);
        $this->db->update('users', $data); 
        $this->session->unset_userdata("photo");
        $this->session->set_userdata("photo", $path);
        echo "success";
    }

    function get_username_byID($id)
    {
        $query = $this->db
                    ->where('id',$id)
                    ->get('users');
        $data = $query->result_array();
        return $data[0]['username'];
    }

    /*subadmin part*/
    function register_new_subadmin($data)
    {           
        $query = $this->db->where('email',$data['email'])
                      ->where('username',$data['username']) 
                      ->get('users');
        if($query->num_rows() > 0) {
            echo 'User already exists';   
        } else {
            $data['password'] = md5($data['password']);
            $data['role'] = 'subadmin';
            $this->db->insert('users',$data);  
            echo "success";
        }
    }


    function register_user($data)
    {           
        $query_user_email = $this->db->where('email',$data['email'])
                      ->get('users');
        $query_user_username = $this->db
                      ->where('username',$data['username']) 
                      ->get('users');
        if($query_user_email->num_rows() > 0 || $query_user_username->num_rows() > 0) {
            echo 'User already exists';   
        } else {
            $data['password'] = md5($data['password']);
            $data['role'] = 'breeder';
            $this->db->insert('users',$data);  
            echo "success";
        }
    }
    function get_all_subadmin()
    {       
        $all = $this->db
                    ->where('role', 'subadmin')
                    ->order_by('id','asc')
                    ->get('users')                    
                    ->result_array();
        return $all;
    }

    function delete_subadmin($id)
    {
        $delete_id = $id;
        $this->db
                ->where('id',$delete_id)
                ->delete('users'); 
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

    function get_user_ByName($username) {

        $query = $this->db                    
                    ->where('usernamae', $usernamae)
                    ->get('users');

        return $query->result_array();

    }

    function updategallery($image, $number)
    {
        $user_id = $this->session->userdata('id');
         $data = array(                
                'gallery'.$number =>$image
            );
        $this->db->where('id', $user_id);
        $this->db->update('users', $data); 
        echo "success";
    }

    function get_gallery_photos($id)
    {
        $query = $this->db                    
                    ->where('id', $id)
                    ->get('users');
        $result = $query->result_array();
        $gallery_photos = $result[0]['gallery1'].','.$result[0]['gallery2'].','.$result[0]['gallery3'].','.$result[0]['gallery4'];
        return $gallery_photos;
    }

    function add_dog_to_user($id, $category, $userid)
    {   
        $query = $this->db                    
                    ->where('id', $userid)
                    ->get('users');
        $result = $query->result_array();
        if($category=='puppy')
        {
            $original = $result[0]['available_puppy'];
            $item = 'available_puppy';
        }
        else if($category=='stud')
        {   
            $original = $result[0]['available_stud'];
            $item = 'available_stud';
        }
        else
        {
            $original = $result[0]['available_adult'];

            $item = 'available_adult';
        }
        if($original=='')
        {
            $data = array(
                $item => $original.$id
            );
        }
        else
        {
            $data = array(
                $item => $original.','.$id
            );
        }
        $this->db->where('id', $userid);
        $this->db->update('users', $data); 
    }

     function get_user_Byid($id) {
        $query = $this->db                    
                    ->where('id', $id)
                    ->get('users');
        $result = $query->result_array();
        return $result[0];

    }

    function update_profile($data)
    {
        $user_id = $data['id'];
        $this->db->where('id', $user_id);
        $this->db->update('users', $data); 
    }

    function update_password($data)
    {
        $this->db->where('email', $data['email']);
        $data['password'] = md5($data['password']);
        $this->db->update('users', $data); 
        if ($this->db->affected_rows() > 0)
        {
          return "success";
        }
        else
        {
          return "failure";
        }
    }
    function update_available_dogs($dog_id, $category)
    {   
        
        $query = $this->db                    
                    ->where('id', $this->session->userdata('id'))
                    ->get('users');
        $result = $query->result_array();
        //return $result[0];
        if($category == 'adult')
        {
            $temp = $result[0]['available_adult'];
            
        }
        else if($category == 'puppy')
            $temp = $result[0]['available_puppy'];
        else
            $temp = $result[0]['available_stud'];
            if(!strpos($temp, ','))
            {
                $replace_val = '';
            }
            else
            {
                $temp_array = explode(',', $temp);
                $temp_result = array();
                for($i = 0; $i < count($temp_array); $i++)
                {
                    if($temp_array[$i] !== $dog_id)
                        array_push($temp_result, $temp_array[$i]);
                }
                for($j = 0; $j < count($temp_result); $j++)
                {   
                    if($j ==0)                        
                        $replace_val = $temp_result[$j];
                    else
                        $replace_val = $replace_val.','.$temp_result[$j];
                }               
            }
        $item = 'available_'.$category;
        $data = array(
            $item => $replace_val
        );
        $this->db->where('id', $this->session->userdata('id'));
        $this->db->update('users', $data); 
    }

    function search_breeder($search_data)
    {
        $sql = "SELECT * FROM users WHERE role = 'breeder' ";   
        if(!empty($search_data['breeder_name']) && $search_data['breeder_name'] != "all"){
            $sql .= " AND username LIKE "."'%".$search_data['breeder_name']."%'";
        }

        if(!empty($search_data['breed_name']) && $search_data['breed_name'] != "all"){
            $sql .= " AND breed_name LIKE "."'%".$search_data['breed_name']."%'";
        }
        
        if(!empty($search_data['zip']) && $search_data['zip'] != "all"){
            $sql .= " AND zip = '".$search_data["zip"]."'";
        }
        if(isset($search_data['has_puppy']) && $search_data['has_puppy']!="0"){
            $sql .= " AND available_puppy <> ''";
        }
        
        if(isset($search_data['has_stud']) && $search_data['has_stud']!="0"){
            $sql .= " AND available_stud <> ''";
        }

        if(isset($search_data['has_adult']) && $search_data['has_adult']!="0"){
            $sql .= " AND available_adult <> ''";
        }
        
        if(!empty($search_data['filter'])){
            $filter = /*implode(" ", $search_data['filter'])*/$search_data['filter'];
            $sql .= " ORDER BY $filter ASC";
            // print_r($sql);
        }
        $final_search_result = array();
        $query = $this->db->query($sql);        
        foreach ($query->result_array() as $row)
        {
            array_push($final_search_result, $row);
        }
        return $final_search_result;        
    }

    /*end*/
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