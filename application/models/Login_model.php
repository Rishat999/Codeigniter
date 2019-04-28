<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->library('session');

    }

    public function login($email_address, $password) {

        $this->db->where('email_address', $email_address);
        $query = $this->db->get('vlad_users');

        if($query->num_rows() > 0) {

            $row = $query->row();

            if($row->password == md5($password)) {   
                $this->session->set_userdata("level", $row->level);
                $this->session->set_userdata("user_name", $row->name);
                $this->session->set_userdata("user_email", $email_address);
                $this->session->set_userdata("role", $row->role);
                $this->session->set_userdata("is_logged_in", true);

                return true; 
            } else {
                return -1;
            }

        } else {
            return -2;
        }           

    }

	public function verify() {

		$query = $this->db
        				->where('email_address',$this->input->post('email_address'))
        				->where('password',md5($this->input->post('pass')))
        				->get('vlad_users');
        
		if($query->num_rows() > 0) {
            foreach($query->result() as $row) {
                $user_id = $row->user_id;   
                $role = $row->role;
            }

            $data = array(
                'user_id' => $user_id,
                'role' => $role,
                'is_logged_in' => true
            );  

            $this->session->set_userdata($data);

            return true;            

		} else {
            return false;   
        }

	}
    
    public function is_logged_in() {

		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!$is_logged_in) {
			redirect('login');
		}        

		return true;

	}
    
}
?>