<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends MY_Controller {

	public function __construct() {

        parent::__construct();

        $this->load->library('session');
        $this->load->model('user_model', 'user', true);
        $this->load->model('sendemail_model', 'semail', true);

    }

    public function sendToPoweruser() {

        $role = $this->session->userdata('role');

        if ($role == "poweruser") {
            echo "success";
        } else {
            $arrFname = $this->input->post('arrFname');
            $arrDesc = $this->input->post('arrDesc');
            $from = $this->session->userdata('user_email');
            $to = $this->user->get_poweruser_email()[0]->email_address;
            $title = "There are new documents uploaded recently";
            $res = $this->semail->send($from, $to, $title, $arrFname, $arrDesc, true);

            if ($res) {
                echo "success";
            } else {
                echo "failed";
            }    
        }
        
    }

    
}