<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
        $this->load->model('cms_model', 'cms', true);
        $this->load->library('session');
        
    }
    
    function index()
    {   
        $data['cms'] = $this->cms->get_data();
        $this->load->view('/templates/header', $data);
        $this->load->view('contact', $data);
        $this->load->view('/templates/footer', $data);
    }

    function add_contact()
    {
        $data = $this->input->post();
        $this->contacts->add_new_contact($data);
        var_dump($data);
        exit();
    }
    

}