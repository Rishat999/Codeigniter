<?php

class Blog_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('dogs_model', 'dogs', true);
    }

    function add_new_blog($data)
    {           
        $this->db->insert('blogs',$data);
        return $this->db->insert_id();
        
    }

    function get_all_blogs()
    {
        $this->db->from('blogs');
        $this->db->order_by("created_at", "desc");
        $query = $this->db->get(); 
        return $query->result_array();
    }
    
    function search_blog($search_data)
    {        
        $like = '"'.'%'.$search_data.'%'.'"';
        $sql = "SELECT * from blogs where title like $like";
        $final_search_result = array();
        $query = $this->db->query($sql);        
        foreach ($query->result_array() as $row)
        {
            array_push($final_search_result, $row);
        }
        return $final_search_result;        
    }
    
    function get_blogs_count()
    {
        $blogs_count = $this->db
                    ->get('blogs')                    
                    ->result();
        if(!isset($blogs_count))
            $return_val = 0;          
        else
            $return_val =  count($blogs_count);
        return $return_val;
    }

    function get_blog_by_id($id)
    {
        $blog = $this->db
                    ->where('id',$id)
                    ->get('blogs')                    
                    ->result_array();
        return $blog;
    }
    
}
?>