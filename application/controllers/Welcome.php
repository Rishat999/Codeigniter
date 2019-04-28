<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {

        parent::__construct();  

        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('admin_model', 'admin', true);
        $this->load->model('dogs_model', 'dogs', true);
        $this->load->model('user_model', 'user', true);
        $this->load->model('breeds_model', 'breeds', true);
        $this->load->model('subadmin_model', 'subadmin', true);
        $this->load->model('blog_model', 'blog', true);
        $this->load->model('pedigree_model', 'pedigree', true);
        $this->load->model('cms_model', 'cms', true);
        $this->load->library('session');
    }

	public function index() {

		$breeder_count = $this->user->get_breeders_count();
		$dog_count = $this->dogs->get_dogs_count();
		$ads_count = $this->blog->get_blogs_count();
		$dog_data = $this->dogs->get_latest_dogs();
		$data['dog_count'] = $dog_count;
		$data['ads_count'] = $ads_count;
		$data['breeder_count'] = $breeder_count;
		$data['latest_dogs'] = $dog_data;
		$data['cms'] = $this->cms->get_data();
		$this->load->view('index', $data);

	}

	function join()
	{	
		$data['cms'] = $this->cms->get_data();
		$this->load->view('/templates/header', $data);
		$this->load->view('join', $data);
		$this->load->view('/templates/footer', $data);
	}

	
	
	function login()
	{	
		$data['cms'] = $this->cms->get_data();
		$this->load->view('/templates/header', $data);
		$this->load->view('login', $data);
		$this->load->view('/templates/footer', $data);
	}
	

}
