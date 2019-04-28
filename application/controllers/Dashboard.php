<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct() {

        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('docs_model', 'docs', true);
        $this->load->model('user_model', 'user', true);

    }
    
    public function index() {

        //$data['docs'] = $this->docs->get_all_docs();
        /*if(!$this->session->userdata('username')){
            redirect('/admin');
        }*/
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('dashboard');
        $this->load->view('templates/footer');

	}

    
    
}