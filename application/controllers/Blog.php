<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {

        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');        
        $this->load->model('admin_model', 'admin', true);
        $this->load->model('dogs_model', 'dogs', true);
        $this->load->model('user_model', 'user', true);
        $this->load->model('breeds_model', 'breeds', true);
        $this->load->model('subadmin_model', 'subadmin', true);
        $this->load->model('contacts_model', 'contacts', true);
        $this->load->model('pedigree_model', 'pedigree', true);
        $this->load->model('blog_model', 'blog', true);
        $this->load->model('cms_model', 'cms', true);
        $this->load->library('session');
        
    }
    
    function index()
    {   
        $blogs = $this->blog->get_all_blogs();
        $data['blogs'] = $blogs;
        $data['breeds'] = $this->breeds->get_all_breeds();
        $data['cms'] = $this->cms->get_data();
        $this->load->view('/templates/header' , $data);
        $this->load->view('blog', $data);
        $this->load->view('/templates/footer' , $data);
    }

    function add_blog()
    {
        $data = $this->input->post();
        $target_dir = "uploads/blogs/".$data['username']."/";
        if(!is_dir($target_dir))
            mkdir($target_dir, 0755, true);
        if(isset($_FILES["photo"])){
            $temp = explode('/', $_FILES["photo"]['type']);
            $temp = $temp[1];
            $filename_main = $data['title'].'.'.$temp;
            $target_file_main = $target_dir.$filename_main;
            move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file_main);
            $photo = $target_dir.$filename_main;
            $data['photo'] = '/'.$photo;
        }
        else
        {
            $data['photo'] = '';
        }
        $result = $this->blog->add_new_blog($data);
        if($result)
            echo "success";
        else 
            echo "failure";
        
    }

    function search_blog()
    {
        $search_data = $this->input->post('blog_name');
        $searched_results = $this->blog->search_blog($search_data);
        $data['searched_results'] = $searched_results;
        $this->load->view('blog_search_result', $data);
    }
    
    function detail_blog()
    {
        if(isset($_GET['id']))
            $id = $_GET['id'];
        $blog_data = $this->blog->get_blog_by_id($id);
        $data['blog'] = $blog_data[0];
        $data['cms'] = $this->cms->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('blog_detail',$data);
        $this->load->view('templates/footer', $data);
    }

}