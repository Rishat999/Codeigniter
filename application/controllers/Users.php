<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {

        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');        
        $this->load->model('user_model', 'user', true);
        $this->load->library('session');
        //$role = $this->session->userdata('role');
        
      /*  if($role != 'admin') {
            redirect(base_url());
        }*/

    }
    
    function index() {
        $this->load->view('admin/login');

        /*$data['title'] = 'Users';
        $data['users'] = $this->user->get_all_users();  

        if(!$data['users']) {
            $data['nodata'] = TRUE;           
        }

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|matches[tmp_password]');
        $this->form_validation->set_rules('tmp_password', 'Password Confirmation', 'trim');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('users',$data);
            $this->load->view('templates/footer');
        } else {
            $this->user->update_user();

            redirect('users?update');
        }*/

    }
    function admin_login()
    {
        /*$data['title'] = 'Users';
        $data['users'] = $this->user->get_all_users();  

        if(!$data['users']) {
            $data['nodata'] = TRUE;           
        }*/

        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|matches[tmp_password]');
        $this->form_validation->set_rules('tmp_password', 'Password Confirmation', 'trim');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            /*$this->load->view('admin/dashboard',$data);*/
            $this->load->view('admin/dashboard');
            $this->load->view('admin/templates/footer');
        } else {
                redirect('/admin');
        }
    }

    function register_user()
    {
        $data = $this->input->post();
        $this->user->register_user($data);
    }

    function get_info() {

        $info = $this->user->get_user_info();

        echo json_encode($info); 

    }
    public function edit()
    {        
        $user_id = $this->input->get('user_id');
        $data['edit_user'] = $this->user->get_user_Byid($user_id)[0];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_user',$data);
        $this->load->view('templates/footer');
    }
    
    function update_user()
    {
        $data = $this->input->post();
        $this->user->update_user($data);
    } 
   
    function forget_password()
    {
        $data = $this->input->post();
        $result = $this->user->update_password($data);
        echo $result;
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