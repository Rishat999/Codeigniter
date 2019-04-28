<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

        parent::__construct();  

        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Login_model', 'login', true);

    }

	public function index() {

		$this->load->view('login');

	}

	public function authenticate() {   

        $email_address = $this->input->post('email_address');
        $password = $this->input->post('pass');

        $this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $res = array('state' => false, 'msg' => validation_errors());
        } else {
            $type = $this->login->login($email_address, $password);
            if ($type) {
                redirect('/dashboard');
            } else {
                redirect('login');
            }
        }

    }

    public function logout() {

        $this->session->sess_destroy();

        redirect('/login');

    }

}
