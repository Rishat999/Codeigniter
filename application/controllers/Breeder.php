<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Breeder extends CI_Controller {

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
        $this->load->model('cms_model', 'cms', true);
        $this->load->library('session');
        //$role = $this->session->userdata('role');
        
      /*  if($role != 'admin') {
            redirect(base_url());
        }*/

    }
    
    function breeder()
    {   
        $breeders_data = $this->user->get_breeders_data();
        $data['breeders_data'] = $breeders_data;
        $data['breeds'] = $this->breeds->get_all_breeds();
        $data['cms'] = $this->cms->get_data();
        $this->load->view('/templates/header' ,$data);
        $this->load->view('breeder' ,$data);
        $this->load->view('/templates/footer' ,$data);
    }


    function search_breeder()
    {
        $search_data = $this->input->post();
        $searched_results = $this->user->search_breeder($search_data);
        $data['searched_results'] = $searched_results;
        $this->load->view('breeder_search_result', $data);
    }

    function view()
    {
        if(isset($_GET['id']))
            $id = $_GET['id'];
        $breeder_data = $this->user->get_breeder_data($id);
        $data['breeder_data'] = $breeder_data;
        /*get available puppy data*/
        $available_puppy_data = array();
        $available_puppy = $breeder_data[0]['available_puppy'];
        if(!empty($available_puppy))
        {   
            if(!strpos($available_puppy, ','))
            {   
                $puppy_item = $this->dogs->get_dog_data($available_puppy);               
                if(empty(($puppy_item)))
                    $puppy= '';
                else
                    $puppy = $puppy_item[0];
                $available_puppy_data[0] = $puppy;
            }
            else
            {
                $temp_puppy = explode(',', $available_puppy);
                $available_puppy_data = array();
                for($i = 0; $i < count($temp_puppy); $i++)
                {
                    $puppy_item = $this->dogs->get_dog_data($temp_puppy[$i])[0];
                    array_push($available_puppy_data, $puppy_item);
                }
            }
            
        }
        else
            $available_puppy_data = '';
        /*get available stud data*/
        $available_stud_data = array();
        $available_stud = $breeder_data[0]['available_stud'];
        if(!empty($available_stud))
        {   
            if(!strpos($available_stud, ','))
            {   
                $stud_item = $this->dogs->get_dog_data($available_stud);               
                if(empty(($stud_item)))
                    $stud= '';
                else
                    $stud = $stud_item[0];
                $available_stud_data[0] = $stud;
            }
            else
            {
                $temp_stud = explode(',', $available_stud);
                $available_stud_data = array();
                for($i = 0; $i < count($temp_stud); $i++)
                {
                    $stud_item = $this->dogs->get_dog_data($temp_stud[$i])[0];
                    array_push($available_stud_data, $stud_item);
                }
            }
            
        }
        else
            $available_stud_data = '';
        /*get available adult data*/
        $available_adult_data = array();
        $available_adult = $breeder_data[0]['available_adult'];
        if(!empty($available_adult))
        {   
            if(!strpos($available_adult, ','))
            {   
                $adult_item = $this->dogs->get_dog_data($available_adult);               
                if(empty(($adult_item)))
                    $adult= '';
                else
                    $adult = $adult_item[0];
                $available_adult_data[0] = $adult;
            }
            else
            {
                $temp_adult = explode(',', $available_adult);
                $available_adult_data = array();
                for($i = 0; $i < count($temp_adult); $i++)
                {
                    $adult_item = $this->dogs->get_dog_data($temp_adult[$i])[0];
                    array_push($available_adult_data, $adult_item);
                }
            }
            
        }
        else
            $available_adult_data = '';
        $data['available_puppy'] = $available_puppy_data;
        $data['available_stud'] = $available_stud_data;
        $data['available_adult'] = $available_adult_data;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_view',$data);
        $this->load->view('admin/templates/footer');
    }

    function detail_view()
    {
        if(isset($_GET['id']))
            $id = $_GET['id'];
        $breeder_data = $this->user->get_breeder_data($id);
        $data['breeder_data'] = $breeder_data;
        /*get available puppy data*/
        $available_puppy_data = array();
        $available_puppy = $breeder_data[0]['available_puppy'];
        if(!empty($available_puppy))
        {   
            if(!strpos($available_puppy, ','))
            {  /* 
                $puppy_item = $this->dogs->get_dog_data($available_puppy)[0];
                $available_puppy_data[0] = $puppy_item;*/

                $puppy_item = $this->dogs->get_dog_data($available_puppy);               
                if(empty(($puppy_item)))
                    $puppy= '';
                else
                    $puppy = $puppy_item[0];
                $available_puppy_data[0] = $puppy;
            }
            else
            {
                $temp_puppy = explode(',', $available_puppy);
                $available_puppy_data = array();
                for($i = 0; $i < count($temp_puppy); $i++)
                {   
                    $puppy_item = $this->dogs->get_dog_data($temp_puppy[$i]);               
                    if(!empty(($puppy_item)))
                        $puppy = $puppy_item[0];
                    else
                        continue;
                    array_push($available_puppy_data, $puppy);
                }
            }
            
        }
        else
            $available_puppy_data = '';
        /*get available stud data*/
        $available_stud_data = array();
        $available_stud = $breeder_data[0]['available_stud'];
        if(!empty($available_stud))
        {   
            if(!strpos($available_stud, ','))
            {   /*
                $stud_item = $this->dogs->get_dog_data($available_stud)[0];
                $available_stud_data[0] = $stud_item;
                */
                $stud_item = $this->dogs->get_dog_data($available_stud);               
                if(empty(($stud_item)))
                    $stud= '';
                else
                    $stud = $stud_item[0];
                $available_stud_data[0] = $stud;
            }
            else
            {
                $temp_stud = explode(',', $available_stud);
                $available_stud_data = array();
                for($i = 0; $i < count($temp_stud); $i++)
                {
                    $stud_item = $this->dogs->get_dog_data($temp_stud[$i]);               
                    if(!empty(($stud_item)))
                        $stud = $stud_item[0];
                    else
                        continue;
                    array_push($available_stud_data, $stud);
                }
            }
            
        }
        else
            $available_stud_data = '';
        /*get available adult data*/
        $available_adult_data = array();
        $available_adult = $breeder_data[0]['available_adult'];
        if(!empty($available_adult))
        {   
            if(!strpos($available_adult, ','))
            {   
                $adult_item = $this->dogs->get_dog_data($available_adult);               
                if(empty(($adult_item)))
                    $adult= '';
                else
                    $adult = $adult_item[0];
                $available_adult_data[0] = $adult;
            }
            else
            {
                $temp_adult = explode(',', $available_adult);
                $available_adult_data = array();
                for($i = 0; $i < count($temp_adult); $i++)
                {
                    $adult_item = $this->dogs->get_dog_data($temp_adult[$i]);               
                    if(!empty(($adult_item)))
                        $adult = $adult_item[0];
                    else
                        continue;
                    array_push($available_adult_data, $adult);
                }
            }
            
        }
        else
            $available_adult_data = '';
        $data['available_puppy'] = $available_puppy_data;
        $data['available_stud'] = $available_stud_data;/*
        var_dump($available_adult_data);
        exit();
        if(count($data['available_adult']) == 1 && $data['available_adult'][0] == '')
            echo "is  empty";
        else
            echo "not empty";
        exit();*/
        $data['available_adult'] = $available_adult_data;
        $data['cms'] = $this->cms->get_data();
        $this->load->view('templates/header',$data);
        $this->load->view('breeder_detail_view',$data);
        $this->load->view('templates/footer',$data);
    }

    function dashboard()
    {   
        $id = $this->session->userdata('id');
        $count_all_dogs = $this->dogs->get_breeder_dogs_count($id);
        $count_male_dogs = $this->dogs->get_breeder_male_count($id);
        $count_female_dogs = $this->dogs->get_breeder_female_count($id);
        $count_puppy_dogs = $this->dogs->get_breeder_puppy_count($id);
        $count_stud_dogs = $this->dogs->get_breeder_stud_count($id);
        $count_adult_dogs = $this->dogs->get_breeder_adult_count($id);
        $data['count_all_dogs'] = $count_all_dogs;
        $data['count_male_dogs'] = $count_male_dogs;
        $data['count_female_dogs'] = $count_female_dogs;
        $data['count_puppy_dogs'] = $count_puppy_dogs;
        $data['count_stud_dogs'] = $count_stud_dogs;
        $data['count_adult_dogs'] = $count_adult_dogs;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_dashboard',$data);
        $this->load->view('admin/templates/footer');        
    }

    function upload()
    {   
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
        /*$count_all_dogs = $this->dogs->get_breeder_dogs_count($id);
        $data['my_dogs_count'] = $count_all_dogs;*/
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_upload_dog', $data);
        $this->load->view('admin/templates/footer');
    }

    function payment()
    {   

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_payment');
        $this->load->view('admin/templates/footer');
    }

    function change_avatar()
    {   

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_upload_photo');
        $this->load->view('admin/templates/footer');
    }
    function do_upload()
    {   
        $user=$this->session->userdata('id');
        if (!is_dir('uploads/breeders/'.$user)) {
            $current_umask = umask(); 
            umask(0000);             
            if (! is_dir("uploads/breeders/".$user)) { 
                mkdir("uploads/breeders/".$user); 
                chmod("uploads/breeders/".$user, 0777); 
                umask($current_umask); 
            } 
        }
        $config['upload_path']          = 'uploads/breeders/'.$user;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name'] = $this->session->userdata('username');
        $this->load->library('upload', $config);
        /*check if the avatar is already exists or not*/
        $files = glob('uploads/breeders/'.$user.'/'.$this->session->userdata('username').'.*');
        if (count($files) > 0)
        foreach ($files as $file)
         {
            $info = pathinfo($file);
            unlink('uploads/breeders/'.$user.'/'.$this->session->userdata('username').'.'.$info["extension"]);
         }
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userimage'))
        {   
            $error = array('error' => $this->upload->display_errors());
            $data['errors'] = $error;
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/breeder_upload_photo', $data);
            $this->load->view('admin/templates/footer');
            
        }
        else
        {         
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $path = base_url().'uploads/breeders/'.$user.'/'.$filename;
            $this->user->updateavatar($path);
            redirect('breeder/dashboard');

            //$this->load->view('upload_success', $data);
        }
    }
    function change_password()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/change_password');
        $this->load->view('admin/templates/footer');
    }

    function gallery()
    {
        $data['gallery_data'] = $this->user->get_gallery_photos($this->session->userdata('id'));
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_gallery',$data);
        $this->load->view('admin/templates/footer');
    }

    function myprofile()
    {   
        if(empty($this->session->userdata('id')))
            redirect(base_url().'login');
        $profile = $this->user->get_user_Byid($this->session->userdata('id'));
        $data['myprofile'] = $profile;
        $breed_data = $this->breeds->get_all_breeds();
        $data['breeds'] = $breed_data;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/templates/footer');
    }

    function gallery_upload()
    {   
        $imageNumber = $this->input->post('imagenum');
        $user=$this->session->userdata('id');   
        if (!is_dir('uploads/breeders/'.$user)) {
            $current_umask = umask(); 
            umask(0000);             
            if (! is_dir("uploads/breeders/".$user)) { 
                mkdir("uploads/breeders/".$user); 
                chmod("uploads/breeders/".$user, 0777); 
                umask($current_umask); 
            } 
        }
        $config['upload_path']          = 'uploads/breeders/'.$user;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name'] = 'gallery'.$imageNumber;
        $this->load->library('upload', $config);
        /*check if the avatar is already exists or not*/
        $files = glob('uploads/breeders/'.$user.'/'.$config['file_name'].'.*');
        if (count($files) > 0)
        foreach ($files as $file)
         {
            $info = pathinfo($file);
            unlink('uploads/breeders/'.$user.'/'.$config['file_name'].'.'.$info["extension"]);
         }
        
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('galleryimage'))
        {   
            $error = array('error' => $this->upload->display_errors());
            $data['errors'] = $error;
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/breeder_gallery', $data);
            $this->load->view('admin/templates/footer');
            
        }
        else
        {         
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $path = base_url().'uploads/breeders/'.$user.'/'.$filename;
            $this->user->updategallery($path, $imageNumber);
            redirect('breeder/gallery');
        }
    }

    function update_profile()
    {
        $data = $this->input->post();
        $this->user->update_profile($data);
        $profile = $this->user->get_user_Byid($this->session->userdata('id'));
        $data['myprofile'] = $profile;
        $breed_data = $this->breeds->get_all_breeds();
        $data['breeds'] = $breed_data;
        $data['notification'] = "success";
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/templates/footer');
    }

    function mydogs()
    {   
        $id = $this->session->userdata('id');
        $breeder_data = $this->user->get_breeder_data($id);
        $data['breeder_data'] = $breeder_data;
        /*get available puppy data*/
        $available_puppy = $breeder_data[0]['available_puppy'];
            
        if(!empty($breeder_data[0]['available_puppy']))
        {
            $temp_puppy = explode(',', $available_puppy);
            $available_puppy_data = array();
            for($i = 0; $i < count($temp_puppy); $i++)
            {
                $puppy_item = $this->dogs->get_dog_data($temp_puppy[$i])[0];
                array_push($available_puppy_data, $puppy_item);
            }
        }       
        else
         $available_puppy_data = '';
        /*get available stud data*/
        $available_stud = $breeder_data[0]['available_stud'];        
        if(!empty($breeder_data[0]['available_stud']))
        {
            $temp_stud = explode(',', $available_stud);
            $available_stud_data = array();
            for($i = 0; $i < count($temp_stud); $i++)
            {
                $stud_item = $this->dogs->get_dog_data($temp_stud[$i])[0];
                array_push($available_stud_data, $stud_item);
            }
        }
        else
         $available_stud_data = '';
        /*get available adult data*/
        $available_adult = $breeder_data[0]['available_adult'];        
        if(!empty($breeder_data[0]['available_adult']))
        {
            $temp_adult = explode(',', $available_adult);
            $available_adult_data = array();
            for($i = 0; $i < count($temp_adult); $i++)
            {
                $adult_item = $this->dogs->get_dog_data($temp_adult[$i])[0];
                array_push($available_adult_data, $adult_item);
            }
        }
        else
         $available_adult_data = '';

        /*echo $breeder_data[0]['available_adult'];
        exit();
        if(!empty($breeder_data[0]['available_adult']))
        {   
            if(!strpos($breeder_data[0]['available_adult'],','))
            {      

                $temp = array();
                $temp[0] = $breeder_data[0]['available_adult'];
                //array_push($temp, $breeder_data[0]['available_adult']);
                //$available_adult_data = $breeder_data[0]['available_adult'];
                array_push($available_adult_data, $temp[0]);
                var_dump($available_adult_data);
                exit();
            }
            else
            {
                $temp_adult = explode(',', $available_adult);
                $available_adult_data = array();
                for($i = 0; $i < count($temp_adult); $i++)
                {
                    $adult_item = $this->dogs->get_dog_data($temp_adult[$i])[0];
                    array_push($available_adult_data, $adult_item);
                }
            }
            
        }*/
        
        $data['available_puppy'] = $available_puppy_data;
        $data['available_stud'] = $available_stud_data;
        $data['available_adult'] = $available_adult_data;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_mydogs', $data);
        $this->load->view('admin/templates/footer');
    }
}