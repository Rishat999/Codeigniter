<?php

class Dogs_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);

    }

    function get_dogs_count(){
        $dogs_count = $this->db
                    ->get('dogs')                    
                    ->result();
        if(!isset($dogs_count))
            $return_val = 0;          
        else
            $return_val =  count($dogs_count);
        return $return_val;
    }

    function get_male_count()
    {
        $male_count = $this->db
                    ->where('gender','male')
                    ->get('dogs')                    
                    ->result();
        if(!isset($male_count))
            $return_val = 0;          
        else
            $return_val =  count($male_count);
        return $return_val;
    }

    function get_breeder_male_count($id)
    {
        $breeder_male_count = $this->db
                    ->where('breeder_id',$id)
                    ->where('gender','male')
                    ->get('dogs')                    
                    ->result();
        if(!isset($breeder_male_count))
            $return_val = 0;          
        else
            $return_val =  count($breeder_male_count);
        return $return_val;
    }

    function get_breeder_female_count($id)
    {
        $breeder_female_count = $this->db
                    ->where('breeder_id',$id)
                    ->where('gender','female')
                    ->get('dogs')                    
                    ->result();
        if(!isset($breeder_female_count))
            $return_val = 0;          
        else
            $return_val =  count($breeder_female_count);
        return $return_val;
    }

    function get_female_count()
    {
        $female_count = $this->db
                    ->where('gender','female')
                    ->get('dogs')                    
                    ->result();
        if(!isset($female_count))
            $return_val = 0;          
        else
            $return_val =  count($female_count);
        return $return_val;
    }

    function get_puppy_count()
    {
        $puppy_count = $this->db
                    ->where('category','puppy')
                    ->get('dogs')                    
                    ->result();
        if(!isset($puppy_count))
            $return_val = 0;          
        else
            $return_val =  count($puppy_count);
        return $return_val;
    }

    function get_breeder_puppy_count($id)
    {
        $puppy_count = $this->db
                    ->where('breeder_id',$id)
                    ->where('category','puppy')
                    ->get('dogs')                    
                    ->result();
        if(!isset($puppy_count))
            $return_val = 0;          
        else
            $return_val =  count($puppy_count);
        return $return_val;
    }

    function get_stud_count()
    {
        $stud_count = $this->db
                    ->where('category','stud')
                    ->get('dogs')                    
                    ->result();
        if(!isset($stud_count))
            $return_val = 0;          
        else
            $return_val =  count($stud_count);
        return $return_val;
    }

    function get_breeder_stud_count($id)
    {
        $stud_count = $this->db
                    ->where('breeder_id',$id)
                    ->where('category','stud')
                    ->get('dogs')                    
                    ->result();
        if(!isset($stud_count))
            $return_val = 0;          
        else
            $return_val =  count($stud_count);
        return $return_val;
    }

    function get_adult_count()
    {
        $adult_count = $this->db
                    ->where('category','adult')
                    ->get('dogs')                    
                    ->result();
        if(!isset($adult_count))
            $return_val = 0;          
        else
            $return_val =  count($adult_count);
        return $return_val;
    }

    function get_breeder_adult_count($id)
    {
        $adult_count = $this->db
                    ->where('breeder_id',$id)
                    ->where('category','adult')
                    ->get('dogs')                    
                    ->result();
        if(!isset($adult_count))
            $return_val = 0;          
        else
            $return_val =  count($adult_count);
        return $return_val;
    }

    function get_breeder_dogs_count($id)
    {
        $dogs_count = $this->db
                    ->where('breeder_id',$id)
                    ->get('dogs')                    
                    ->result();
        if(!isset($dogs_count))
            $return_val = 0;          
        else
            $return_val =  count($dogs_count);
        return $return_val;
    }

    function get_puppy()
    {
        $puppy_data = $this->db
                    ->where('category','puppy')
                    ->get('dogs')                    
                    ->result_array();       
        return $puppy_data;
    }

    function get_puppy_breeds()
    {
        $puppy_breeds_data = $this->db
                    ->where('category','puppy')
                    ->get('dogs')                    
                    ->result_array();  
        
        $breeds_array = array();
        for($i = 0; $i < count($puppy_breeds_data); $i++)
        {
            array_push($breeds_array, $puppy_breeds_data[$i]['breed_name']);
        } 
        return $breeds_array;
    }
    
    function get_puppy_zipcode()
    {
        $puppy_zipcode_data = $this->db
                    ->where('category','puppy')
                    ->get('dogs')                    
                    ->result_array();  
        
        $zipcode_array = array();
        for($i = 0; $i < count($puppy_zipcode_data); $i++)
        {
            array_push($zipcode_array, $puppy_zipcode_data[$i]['zip']);
        } 
        return $zipcode_array;
    }
    
    function search_puppy($search_data)
    {
        $sql = "SELECT * FROM dogs WHERE category = 'puppy' ";
        if(isset($search_data['minimum_price'], $search_data['maximum_price'])){
            $sql .= " AND price BETWEEN '".$search_data["minimum_price"]."' AND '".$search_data["maximum_price"]."' ";
        }

        if(isset($search_data['breed_name']) && $search_data['breed_name'] != "all"){
            $sql .= " AND breed_name ='".$search_data['breed_name']."'";
        }


        if (isset($search_data['gender']) && $search_data['gender']!="all"){
            $sql .= " AND gender = '".$search_data['gender']."'";
            //echo "<script>alert('".$search_data['gender']."');</script>";
        }
        
        if(isset($search_data['zip']) && $search_data['zip'] != "all"){
            $sql .= " AND zip = '".$search_data["zip"]."'";
        }
        
        if(isset($search_data['badge1']) && $search_data['badge1']!="0"){
            $sql .= " AND badge1!= 'false'";
        }
        if(isset($search_data['badge2']) && $search_data['badge2']!="0"){
            $sql .= " AND badge2!= 'false'";
        }
        if(isset($search_data['badge3']) && $search_data['badge3']!="0"){
            $sql .= " AND badge3!= 'false'";
        }
        if(isset($search_data['badge4']) && $search_data['badge4']!="0"){
            $sql .= " AND badge4!= 'false'";
        }
        if(isset($search_data['badge5']) && $search_data['badge5']!="0"){
            $sql .= " AND badge5!= 'false'";
        }
        if(isset($search_data['badge6']) && $search_data['badge6']!="0"){
            $sql .= " AND badge6!= 'false'";
        }
        if(isset($search_data['badge7']) && $search_data['badge7']!="0"){
            $sql .= " AND badge7!= 'false'";
        }
        if(isset($search_data['badge8']) && $search_data['badge8']!="0"){
            $sql .= " AND badge8!= 'false'";
        }
        if(isset($search_data['badge9']) && $search_data['badge9']!="0"){
            $sql .= " AND badge9!= 'false'";
        }
        if(isset($search_data['badge10']) && $search_data['badge10']!="0"){
            $sql .= " AND badge10!= 'false'";
        }
        if(isset($search_data['badge11']) && $search_data['badge11']!="0"){
            $sql .= " AND badge11!= 'false'";
        }
        /*echo $sql;
        exit();*/
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

    function search_stud($search_data)
    {
        $sql = "SELECT * FROM dogs WHERE category = 'stud' ";
        if(isset($search_data['minimum_price'], $search_data['maximum_price'])){
            $sql .= " AND price BETWEEN '".$search_data["minimum_price"]."' AND '".$search_data["maximum_price"]."' ";
        }

        if(isset($search_data['breed_name']) && $search_data['breed_name'] != "all"){
            $sql .= " AND breed_name ='".$search_data['breed_name']."'";
        }


        if (isset($search_data['gender']) && $search_data['gender']!="all"){
            $sql .= "AND gender = '".$search_data['gender']."'";
            //echo "<script>alert('".$search_data['gender']."');</script>";
        }
        
        if(isset($search_data['zip']) && $search_data['zip'] != "all"){
            $sql .= " AND zip = '".$search_data["zip"]."'";
        }
        
        if(isset($search_data['badge1']) && $search_data['badge1']!="0"){
            $sql .= " AND badge1!= 'false'";
        }
        if(isset($search_data['badge2']) && $search_data['badge2']!="0"){
            $sql .= " AND badge2!= 'false'";
        }
        if(isset($search_data['badge3']) && $search_data['badge3']!="0"){
            $sql .= " AND badge3!= 'false'";
        }
        if(isset($search_data['badge4']) && $search_data['badge4']!="0"){
            $sql .= " AND badge4!= 'false'";
        }
        if(isset($search_data['badge5']) && $search_data['badge5']!="0"){
            $sql .= " AND badge5!= 'false'";
        }
        if(isset($search_data['badge6']) && $search_data['badge6']!="0"){
            $sql .= " AND badge6!= 'false'";
        }
        if(isset($search_data['badge7']) && $search_data['badge7']!="0"){
            $sql .= " AND badge7!= 'false'";
        }
        if(isset($search_data['badge8']) && $search_data['badge8']!="0"){
            $sql .= " AND badge8!= 'false'";
        }
        if(isset($search_data['badge9']) && $search_data['badge9']!="0"){
            $sql .= " AND badge9!= 'false'";
        }
        if(isset($search_data['badge10']) && $search_data['badge10']!="0"){
            $sql .= " AND badge10!= 'false'";
        }
        if(isset($search_data['badge11']) && $search_data['badge11']!="0"){
            $sql .= " AND badge11!= 'false'";
        }
        /*echo $sql;
        exit();*/
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
    
    function search_adult($search_data)
    {
        $sql = "SELECT * FROM dogs WHERE category = 'adult' ";
        if(isset($search_data['minimum_price'], $search_data['maximum_price'])){
            $sql .= " AND price BETWEEN '".$search_data["minimum_price"]."' AND '".$search_data["maximum_price"]."' ";
        }

        if(isset($search_data['breed_name']) && $search_data['breed_name'] != "all"){
            $sql .= " AND breed_name ='".$search_data['breed_name']."'";
        }

        if (isset($search_data['gender']) && $search_data['gender']!="all"){
            $sql .= " AND gender = '".$search_data['gender']."'";
            //echo "<script>alert('".$search_data['gender']."');</script>";
        }
        
        if(isset($search_data['zip']) && $search_data['zip'] != "all"){
            $sql .= " AND zip = '".$search_data["zip"]."'";
        }
        
        if(isset($search_data['badge1']) && $search_data['badge1']!="0"){
            $sql .= " AND badge1!= 'false'";
        }
        if(isset($search_data['badge2']) && $search_data['badge2']!="0"){
            $sql .= " AND badge2!= 'false'";
        }
        if(isset($search_data['badge3']) && $search_data['badge3']!="0"){
            $sql .= " AND badge3!= 'false'";
        }
        if(isset($search_data['badge4']) && $search_data['badge4']!="0"){
            $sql .= " AND badge4!= 'false'";
        }
        if(isset($search_data['badge5']) && $search_data['badge5']!="0"){
            $sql .= " AND badge5!= 'false'";
        }
        if(isset($search_data['badge6']) && $search_data['badge6']!="0"){
            $sql .= " AND badge6!= 'false'";
        }
        if(isset($search_data['badge7']) && $search_data['badge7']!="0"){
            $sql .= " AND badge7!= 'false'";
        }
        if(isset($search_data['badge8']) && $search_data['badge8']!="0"){
            $sql .= " AND badge8!= 'false'";
        }
        if(isset($search_data['badge9']) && $search_data['badge9']!="0"){
            $sql .= " AND badge9!= 'false'";
        }
        if(isset($search_data['badge10']) && $search_data['badge10']!="0"){
            $sql .= " AND badge10!= 'false'";
        }
        if(isset($search_data['badge11']) && $search_data['badge11']!="0"){
            $sql .= " AND badge11!= 'false'";
        }
        /*echo $sql;
        exit();*/
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

    function get_stud()
    {
        $stud_data = $this->db
                    ->where('category','stud')
                    ->get('dogs')                    
                    ->result_array();       
        return $stud_data;
    }

    function get_stud_breeds()
    {
        $stud_breeds_data = $this->db
                    ->where('category','stud')
                    ->get('dogs')                    
                    ->result_array();  
        
        $breeds_array = array();
        for($i = 0; $i < count($stud_breeds_data); $i++)
        {
            array_push($breeds_array, $stud_breeds_data[$i]['breed_name']);
        } 
        return $breeds_array;
    }

    function get_stud_zipcode()
    {
        $stud_zipcode_data = $this->db
                    ->where('category','stud')
                    ->get('dogs')                    
                    ->result_array();  
        
        $zipcode_array = array();
        for($i = 0; $i < count($stud_zipcode_data); $i++)
        {
            array_push($zipcode_array, $stud_zipcode_data[$i]['zip']);
        } 
        return $zipcode_array;
    }
    
    function get_adult()
    {
        $adult_data = $this->db
                    ->where('category','adult')
                    ->get('dogs')                    
                    ->result_array();       
        return $adult_data;
    }

    function get_adults_breeds()
    {
        $adult_breeds_data = $this->db
                    ->where('category','adult')
                    ->get('dogs')                    
                    ->result_array();  
        
        $breeds_array = array();
        for($i = 0; $i < count($adult_breeds_data); $i++)
        {
            array_push($breeds_array, $adult_breeds_data[$i]['breed_name']);
        } 
        return $breeds_array;
    }

    function get_adults_zipcode()
    {
        $adult_zipcode_data = $this->db
                    ->where('category','adult')
                    ->get('dogs')                    
                    ->result_array();  
        
        $zipcode_array = array();
        for($i = 0; $i < count($adult_zipcode_data); $i++)
        {
            array_push($zipcode_array, $adult_zipcode_data[$i]['zip']);
        } 
        return $zipcode_array;
    }

    function del_dog()
    {   
        $delete_id = $this->input->post('delete_id');
        $delete_category = $this->input->post('category');
        $this->db
                ->where('id',$delete_id)
                ->delete('dogs'); 
        echo "success";
        $this->user->update_available_dogs($delete_id, $delete_category);
        echo "success";
    }

    function get_dog_data($id)
    {   
        $query = $this->db
                    ->where('id',$id)
                    ->get('dogs');
        $data = $query->result_array();
        
        return $data;
    }


    function add_new_dog($data)
    {
        $this->db->insert('dogs',$data);  
        $insert_id = $this->db->insert_id();
        return  $insert_id;

    }

    function update_dog($temp , $dog_id)
    {   
        //format the badges
        $temp_format['badge1'] = 'false';
        $temp_format['badge2'] = 'false';
        $temp_format['badge3'] = 'false';
        $temp_format['badge4'] = 'false';
        $temp_format['badge5'] = 'false';
        $temp_format['badge6'] = 'false';
        $temp_format['badge7'] = 'false';
        $temp_format['badge8'] = 'false';
        $temp_format['badge9'] = 'false';
        $temp_format['badge10'] = 'false';
        $temp_format['badge11'] = 'false';
        $this->db->where('id', $dog_id);
        $this->db->update('dogs', $temp_format);
        if(empty($temp['dimg']))
            unset($temp['dimg']);
        if(empty($temp['bimg']))
            unset($temp['bimg']);
        if(empty($temp['dname']))
            unset($temp['dname']);
        if(empty($temp['bname']))
            unset($temp['bname']);
        $this->db->where('id', $dog_id);
        $this->db->update('dogs', $temp);
    }
    function get_latest_dogs()
    {
        $join_result = $this->db->select('t1.id,t1.dog_name,t1.description,t1.age,t1.photo,t1.price,t1.zip,t1.city,t1.state,t1.breed_name, t1.vendor_name,t1.gender,t1.category,t2.payment_status,t2.member_type')
         ->from('dogs as t1')
         ->join('users as t2', 't1.breeder_id = t2.id', 'LEFT')
         ->get();
        if($join_result->num_rows() != 0)
        {   
            $temp_dogs = array();
            $latest_dogs = array();
            $all_dogs = $join_result->result_array();
            for($i = 0; $i < count($all_dogs); $i++)
            {
                if($all_dogs[$i]['member_type'] == 'plus' || $all_dogs[$i]['member_type'] == 'professional')
                {
                    array_push($temp_dogs, $all_dogs[$i]);
                }
            }
            if(count($temp_dogs) > 20)
            {
                for($j = 0; $j < 20; $j++)
                {
                    array_push($latest_dogs, $temp_dogs[$j]);
                }
            }
            else
            {   
                $latest_dogs = $temp_dogs;
            }
            return $latest_dogs;
        }
        else
        {
            return array('');
        }
    }
    /*end*/
  
    
    

    
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