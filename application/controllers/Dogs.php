<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dogs extends CI_Controller {

	public function __construct() {

        parent::__construct();  

        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('admin_model', 'admin', true);
        $this->load->model('dogs_model', 'dogs', true);
        $this->load->model('user_model', 'user', true);
        $this->load->model('breeds_model', 'breeds', true);
        $this->load->model('subadmin_model', 'subadmin', true);
        $this->load->model('pedigree_model', 'pedigree', true);
        $this->load->model('cms_model', 'cms', true);
        $this->load->library('session');
    }

	public function index() {

		//$this->load->view('welcome');

	}

    function puppy()
    {   
        $puppy_data = $this->dogs->get_puppy();
        $data['puppys'] = $puppy_data;
        $puppy_breeds = $this->dogs->get_puppy_breeds();
        $data['breeds'] = $puppy_breeds;
        $puppy_zipcodes = $this->dogs->get_puppy_zipcode();
        $data['zipcodes'] = $puppy_zipcodes;
        $data['cms'] = $this->cms->get_data();
        $this->load->view('/templates/header', $data);
        $this->load->view('puppy', $data);
        $this->load->view('/templates/footer', $data);
    }
    function studs()
    {   
        $stud_data = $this->dogs->get_stud();
        $data['studs'] = $stud_data;
        $stud_breeds = $this->dogs->get_stud_breeds();
        $data['breeds'] = $stud_breeds;
        $stud_zipcodes = $this->dogs->get_stud_zipcode();
        $data['zipcodes'] = $stud_zipcodes;
        $data['cms'] = $this->cms->get_data();
        $this->load->view('/templates/header', $data);
        $this->load->view('studs', $data);
        $this->load->view('/templates/footer', $data);
    }
    function adults()
    {   
        $adults_data = $this->dogs->get_adult();
        $data['adults'] = $adults_data;
        $adults_breeds = $this->dogs->get_adults_breeds();
        $data['breeds'] = $adults_breeds;
        $adults_zipcodes = $this->dogs->get_adults_zipcode();
        $data['zipcodes'] = $adults_zipcodes;
        $data['cms'] = $this->cms->get_data();
        $this->load->view('/templates/header', $data);
        $this->load->view('adults', $data);
        $this->load->view('/templates/footer', $data);
    }
    
    function search_puppy()
    {
        $search_data = $this->input->post();
        $searched_results = $this->dogs->search_puppy($search_data);
        $data['searched_results'] = $searched_results;
        $this->load->view('dogs_search_result', $data);
    }

    function search_stud()
    {
        $search_data = $this->input->post();
        $searched_results = $this->dogs->search_stud($search_data);
        $data['searched_results'] = $searched_results;
        $this->load->view('dogs_search_result', $data);
    }

    function search_adult()
    {
        $search_data = $this->input->post();
        $searched_results = $this->dogs->search_adult($search_data);
        $data['searched_results'] = $searched_results;
        $this->load->view('dogs_search_result', $data);
    }

	function del_dog()
	{
		$id = $this->input->post("delete_id");
        $category = $this->input->post("category");
		$this->dogs->del_dog($id, $category);
	}
	
	function view()
    {
        if(isset($_GET['id']))
            $id = $_GET['id'];
        $dog_data = $this->dogs->get_dog_data($id);
        $data['dog_data'] = $dog_data;
        /*for($i = 0; $i < count($data['dog_data']); $i++)
        {   
            $user_id = $data['dog_data'][$i]['vendor_name'];
            $data['dog_data'][$i]['breeder_name'] = $this->user->get_username_byID($user_id);
        }*/
        $pedigree_data = $this->pedigree->get_data_by_dog_id($id)[0];
        $data['pedigree'] = $pedigree_data;
        $breeder_data = $this->user->get_breeder_data($dog_data[0]['breeder_id'])[0];
        $data['breeder_info'] = $breeder_data;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/dog_view',$data);
        $this->load->view('admin/templates/footer');
    }

    function detail_view()
    {
        if(isset($_GET['id']))
            $id = $_GET['id'];
        $dog_data = $this->dogs->get_dog_data($id);
        $data['dog_data'] = $dog_data;
        /*for($i = 0; $i < count($data['dog_data']); $i++)
        {   
            $user_id = $data['dog_data'][$i]['vendor_name'];
            $data['dog_data'][$i]['breeder_name'] = $this->user->get_username_byID($user_id);
        }*/
        $pedigree_data = $this->pedigree->get_data_by_dog_id($id)[0];
        $data['pedigree'] = $pedigree_data;
        $breeder_data = $this->user->get_breeder_data($dog_data[0]['breeder_id'])[0];
        $data['breeder_info'] = $breeder_data;
        $data['cms'] = $this->cms->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('dog_detail',$data);
        $this->load->view('templates/footer', $data);
    }
    
    function edit()
    {
        if(isset($_GET['id']))
            $id = $_GET['id'];
         $dog_data = $this->dogs->get_dog_data($id);
        $data['dog_data'] = $dog_data;
        $pedigree_data = $this->pedigree->get_data_by_dog_id($id)[0];
        $data['pedigree'] = $pedigree_data;
        $templates = $this->user->get_breeder_data($this->session->userdata('id'))[0]['breed_name'];
        $breeds = array();
        if(strpos($templates, ','))
        {
            $temp = explode(',', $templates);
            for($i = 0; $i < count($temp); $i++)
            {
                array_push($breeds, $temp[$i]);
            }
        }
        else
        {   
            array_push($breeds, $templates);
        }
        $data['breeds'] = $breeds;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/dog_edit',$data);
        $this->load->view('admin/templates/footer');
    }

    public function upload_thumbnails(){
        $target_dir = 'uploads/dogs/gallery/'.$this->session->userdata('username').'/';
        if(!is_dir($target_dir))
            mkdir($target_dir, 0755, true);
        $target_file = $target_dir .$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    } 


    public function delete_thumbnail(){
        $name = $this->input->post('name');
        $directory = "uploads/dogs/gallery/".$this->session->userdata('username').'/';
        $path = $directory.$name;
        if(file_exists($path)){
            unlink($path);
            echo "success";
        }
        else echo "fail";
    }

    function update_dog_data()
    {   
        $data = $this->input->post();

        $temp = $data;
        
        $target_dir = "uploads/dogs/main_photo/".$data['dog_name'].'/';
        if(!is_dir($target_dir))
            mkdir($target_dir, 0755, true);
        if(isset($_FILES["photo"])){
            $temp = explode('/', $_FILES["photo"]['type']);
            $temp = $temp[1];
            $filename_main = $data['dog_name'].'.'.$temp;
            $target_file_main = $target_dir.$filename_main;
            move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file_main);
            $photo = $target_dir.$filename_main;
            $data['photo'] = '/'.$photo;
        }
        else
        {
            $data['photo'] = '';
            unset($data['photo']);
        }
        if(isset($_FILES["dimg"])){
            $temp = explode('/', $_FILES["dimg"]['type']);
            $temp = $temp[1];
            $filename_dimg = 'dad'.'.'.$temp;
            $target_file_dimg = $target_dir.$filename_dimg;
            move_uploaded_file($_FILES["dimg"]["tmp_name"], $target_file_dimg);
            $dimg = $target_dir.$filename_dimg;
            $data['dimg'] = '/'.$dimg;
        }
        else
        {
            $data['dimg'] = '';
            $data['dname'] = '';
        }
        if(isset($_FILES["bimg"])){
            $temp = explode('/', $_FILES["bimg"]['type']);
            $temp = $temp[1];
            $filename_bimg = 'bitch'.'.'.$temp;
            $target_file_bimg = $target_dir.$filename_bimg;
            move_uploaded_file($_FILES["bimg"]["tmp_name"], $target_file_bimg);
            $bimg = $target_dir.$filename_bimg;
            $data['bimg'] = '/'.$bimg;
        }
        else
        {   
            $data['bname'] = '';
            $data['bimg'] = '';
        }
        $breeder_id = $this->session->userdata('id');
        $temp_gallery = explode(',', $data['gallery']); 
        for($z = 0; $z < count($temp_gallery); $z++)
        {   
            $temp_gallery[$z] = '/uploads/dogs/gallery/'.$this->session->userdata('username').'/'.$temp_gallery[$z];
        }      
        for($i = 0; $i < count($temp_gallery); $i++)
        {
            if($i == 0)
                $temp_gallery_string = ''.$temp_gallery[$i];
            else
                $temp_gallery_string = ','.$temp_gallery[$i];
        }
        //$temp['breeder_id'] = $breeder_id;
       /* unset($temp['s1p']);
        unset($temp['s1i']);
        unset($temp['s2p']);
        unset($temp['s2i']);
        unset($temp['s3p']);
        unset($temp['s3i']);
        unset($temp['s4p']);
        unset($temp['s4i']);
        unset($temp['s5p']);
        unset($temp['s5i']);
        unset($temp['s6p']);
        unset($temp['s6i']);
        unset($temp['s7p']);
        unset($temp['s7i']);*/
        $dog_id = $data['id'];
        if(!isset($photo))
            unset($data['photo']);
        else         
            $data['photo'] = '/'.$photo;
        if(!isset($data['dname']))
            unset($data['dname']);
        if(!isset($data['bname']))
            unset($data['bname']);
        if(!isset($data['dimg']))
            unset($data['dimg']);
        if(!isset($data['bimg']))
            unset($data['bimg']);
        /*$data['dimg'] = '/'.$dimg;
        $data['bimg'] = '/'.$bimg;*/
        $data['vendor_name'] = $this->session->userdata('username');
        $data['breeder_id'] = $this->session->userdata('id');
        $data['gallery'] = json_encode($temp_gallery);
        $temp = $data;
        unset($temp['s1p']);
        unset($temp['s1i']);
        unset($temp['s2p']);
        unset($temp['s2i']);
        unset($temp['s3p']);
        unset($temp['s3i']);
        unset($temp['s4p']);
        unset($temp['s4i']);
        unset($temp['s5p']);
        unset($temp['s5i']);
        unset($temp['s6p']);
        unset($temp['s6i']);
        unset($temp['s7p']);
        unset($temp['s7i']);
        if($data['category'] !=='puppy')
        {
            $data['dname'] = '';
            $data['bname'] = '';
            $data['dimg'] = '';
            $data['bimg'] = '';
        }
        $this->dogs->update_dog($temp , $dog_id);
        //$dog_category = $data['category'];
        //$this->user->add_dog_to_user($dog_id,$dog_category,$breeder_id);
        $temp1['dog_id'] = $dog_id;
        $temp1['s1p'] = $data['s1p'];
        $temp1['s1i'] = $data['s1i'];
        $temp1['s2p'] = $data['s2p'];
        $temp1['s2i'] = $data['s2i'];
        $temp1['s3p'] = $data['s3p'];
        $temp1['s3i'] = $data['s3i'];
        $temp1['s4p'] = $data['s4p'];
        $temp1['s4i'] = $data['s4i'];
        $temp1['s5p'] = $data['s5p'];
        $temp1['s5i'] = $data['s5i'];
        $temp1['s6p'] = $data['s6p'];
        $temp1['s6i'] = $data['s6i'];
        $temp1['s7p'] = $data['s7p'];
        $temp1['s7i'] = $data['s7i'];
        $this->pedigree->update_data($temp1, $dog_id);
        echo "success";
    }
   
}
