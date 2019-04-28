<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->model('pedigree_model', 'pedigree', true);
        $this->load->library('session');
        $username = $this->session->userdata('username');
        /*if(empty($role)) {
            redirect('/admin');
        }*/
        /*if(!isset($this->session->userdata('role')))
            redirect('/admin');*/
          
        $photo;
        $dimg;
        $bimg; 
        $temp_gallery_string;
    }
    
    function index() {
        $this->load->view('admin/login');
    }
    function login()
    {
        $email_address = $this->input->post('email');
        $password = $this->input->post('password');
        $type = $this->admin->login($email_address, $password);
        echo $type.','.$this->session->userdata('role');
        /*$this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/profile');
        $this->load->view('admin/templates/footer');*/
    }

    function cms()
    {   
        $data['cms'] = $this->cms->get_data();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/cms' , $data);
        $this->load->view('admin/templates/footer'); 
    }

    function update_cms()
    {
        $update_data = $this->input->post();
        $this->cms->update_cms_data($update_data);
    }

    function logout()
    {
        
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("photo");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("role");
        $this->session->unset_userdata("is_logged_in");
        $this->session->sess_destroy();
        redirect(base_url());
    }
    function dashboard()
    {   
        $count_users = $this->user->get_users_count();
        $count_breeders = $this->user->get_breeders_count();
        $count_all_dogs = $this->dogs->get_dogs_count();
        $count_male_dogs = $this->dogs->get_male_count();
        $count_female_dogs = $this->dogs->get_female_count();
        $count_puppy_dogs = $this->dogs->get_puppy_count();
        $count_stud_dogs = $this->dogs->get_stud_count();
        $count_adult_dogs = $this->dogs->get_adult_count();
        $count_paid_breeders = $this->user->get_paid_breeder_count();
        $data['count_users'] = $count_users;
        $data['count_breeders'] = $count_breeders;
        $data['count_all_dogs'] = $count_all_dogs;
        $data['count_male_dogs'] = $count_male_dogs;
        $data['count_female_dogs'] = $count_female_dogs;
        $data['count_puppy_dogs'] = $count_puppy_dogs;
        $data['count_stud_dogs'] = $count_stud_dogs;
        $data['count_adult_dogs'] = $count_adult_dogs;
        $data['count_paid_breeders'] = $count_paid_breeders;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/templates/footer');        
    }

    function change_password()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/change_password');
        $this->load->view('admin/templates/footer');
    }

    function change_admin_pwd()
    {
        $old_pass = $this->input->post("old_pwd");
        $new_pass = $this->input->post("new_pwd");
        $id = $this->session->userdata('id');
        $this->admin->change_admin_pwd($id, $old_pass, $new_pass);
    }

    function breeds()
    {   
        $breeds_data = $this->breeds->get_all_breeds();
        $data['breeds_data'] = $breeds_data;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeds',$data);
        $this->load->view('admin/templates/footer');
    }

    function breeders()
    {   
        $breeders_data = $this->user->get_breeders_data();
        $data['breeders_data'] = $breeders_data;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeders',$data);
        $this->load->view('admin/templates/footer');
    }


    function new_subadmin()
    {   
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/new_subadmin');
        $this->load->view('admin/templates/footer');
    }

    function register_subadmin()
    {   
        $subadmin_data = $this->input->post();
        $this->user->register_new_subadmin($subadmin_data);
    }

    function subadmin()
    {   
        $data['subadmin_data'] = $this->user->get_all_subadmin();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/subadmin',$data);
        $this->load->view('admin/templates/footer');
    }

    function del_subadmin()
    {
        $del_id = $this->input->post("delete_id");
        $this->user->delete_subadmin($del_id);
    }

    function del_breeder()
    {
        $del_id = $this->input->post("delete_id");
        $this->admin->del_breeder($del_id);
    }

    function change_subadmin_pass()
    {
        $id = $this->input->post('breeder_id');
        $pwd = $this->input->post('pwd');
        $this->user->change_password($id, $pwd);
    }

    function puppy()
    {
        $data['puppys'] = $this->dogs->get_puppy();
        /*for($i = 0; $i < count($data['puppys']); $i++)
        {   
            $user_id = $data['puppys'][$i]['breeder_id'];
            $data['puppys'][$i]['breeder_name'] = $this->user->get_username_byID($user_id);
        }*/
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/puppy',$data);
        $this->load->view('admin/templates/footer');
    }

    function stud()
    {
        $data['studs'] = $this->dogs->get_stud();
        /*for($i = 0; $i < count($data['studs']); $i++)
        {   
            $user_id = $data['studs'][$i]['breeder_id'];
            $data['studs'][$i]['breeder_name'] = $this->user->get_username_byID($user_id);
        }*/
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/stud',$data);
        $this->load->view('admin/templates/footer');
    }

    function adult()
    {
        $data['adults'] = $this->dogs->get_adult();
        /*for($i = 0; $i < count($data['adults']); $i++)
        {   
            $user_id = $data['adults'][$i]['breeder_id'];
            $data['adults'][$i]['breeder_name'] = $this->user->get_username_byID($user_id);
        }*/
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/adult',$data);
        $this->load->view('admin/templates/footer');
    }

    function del_breed()
    {
        $del_id = $this->input->post("delete_id");
        $this->breeds->del_breed($del_id);
    }


    function change_avatar()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/upload_photo');
        $this->load->view('admin/templates/footer');
    }

    function do_upload()
    {   
        $user=$this->session->userdata('id');
        if (!is_dir('uploads/admin/'.$user)) {
            $current_umask = umask(); 
            umask(0000);             
            if (! is_dir("uploads/admin/".$user)) { 
                mkdir("uploads/admin/".$user); 
                chmod("uploads/admin/".$user, 0777); 
                umask($current_umask); 
            } 
        }
        $config['upload_path']          = 'uploads/admin/'.$user;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '1024*10';
        /*$config['max_width']            = 1024;
        $config['max_height']           = 768;*/
        $config['file_name'] = $this->session->userdata('username');
        $this->load->library('upload', $config);
        /*check if the avatar is already exists or not*/
        $files = glob('uploads/admin/'.$user.'/'.$this->session->userdata('username').'.*');
        if (count($files) > 0)
        foreach ($files as $file)
         {
            $info = pathinfo($file);
            unlink('uploads/admin/'.$user.'/'.$this->session->userdata('username').'.'.$info["extension"]);
         }
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userimage'))
        {
            $error = array('error' => $this->upload->display_errors());
            $data['errors'] = $error;
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/upload_photo', $data);
            $this->load->view('admin/templates/footer');
            
        }
        else
        {         
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $path = base_url()."uploads/admin/".$user.'/'.$filename;
            $this->user->updateavatar($path);
            redirect('admin/dashboard');

            //$this->load->view('upload_success', $data);
        }
    }

    function update_breeder_membership()
    {
        $id = $this->input->post('id');
        $member_type = $this->input->post("member_type");
        $this->admin->update_breeder_membership($id, $member_type);
    }

    /*function upload()
    {   
        $data['breeds'] = $this->breeds->get_all_breeds();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_upload_dog', $data);
        $this->load->view('admin/templates/footer');
    }*/
    
    function upload_dog_data()
    {   
        $data = $this->input->post();
        $temp = $data;

        /*if($data->category == 'stud')
        {   
            $temp['price'] = $temp['price2'];
            unset($temp['price2']);
            unset($temp['dimg']);
            unset($temp['bimg']);
        }*/
        
        $target_dir = "uploads/dogs/main_photo/".$data['dog_name'].'/';
        if(!is_dir($target_dir))
            mkdir($target_dir, 0755, true);
        if(isset($_FILES["main"])){
            $temp = explode('/', $_FILES["main"]['type']);
            $temp = $temp[1];
            $filename_main = $data['dog_name'].'.'.$temp;
            $target_file_main = $target_dir.$filename_main;
            move_uploaded_file($_FILES["main"]["tmp_name"], $target_file_main);
            $photo = $target_dir.$filename_main;
        }
        if(isset($_FILES["dimg"])){
            $temp = explode('/', $_FILES["dimg"]['type']);
            $temp = $temp[1];
            $filename_dimg = $data['dname'].'.'.$temp;
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
            $filename_bimg = $data['bname'].'.'.$temp;
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
        $data['photo'] = '/'.$photo;
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
        
        $dog_id = $this->dogs->add_new_dog($temp);
        $dog_category = $data['category'];
        
        $this->user->add_dog_to_user($dog_id,$dog_category,$breeder_id);
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
        $this->pedigree->add_new_data($temp1);

    }

    /*function payment()
    {   

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/breeder_payment');
        $this->load->view('admin/templates/footer');
    }*/

    function new_breed()
    {
        $breed = $this->input->post("new_breed");
        $this->breeds->add_new_breed($breed);
    }






    function get_info() {

        $info = $this->user->get_user_info();

        echo json_encode($info); 

    }
   
    
    function update_user()
    {
        $data = $this->input->post();
        $this->user->update_user($data);
    } 
   
    
    function delete() {
        $delete_id = $this->input->post("delete_id");
        $this->user->delete_user($delete_id);

        
    }
    function search_users()
    {
        $user_key = $this->input->post("search_user_key");
        $search_results['user_key'] = $user_key;
        $search_results['search_user_results'] = $this->user->search_users($user_key);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('search_user_results',$search_results);
        $this->load->view('templates/footer');
    }

    function get_down_users()
    {
        $current_user = $this->input->post('current_role');
        
        $this->user->get_down_users_data($current_user);
        /*$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('search_user_results',$search_results);
        $this->load->view('templates/footer');*/

    }

}