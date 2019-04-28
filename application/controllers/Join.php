<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Join extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load paypal library & product model
        $this->load->library('paypal_lib');
        $this->load->model('product');
        $this->load->library('session');
    }
    
    function index(){
        $data = array();
        
        // Get products data from the database
       /* $data['products'] = $this->product->getRows();*/

        // Pass products data to the view
        $this->load->view('products/index');
    }
    
    function buy($id){
        if($id[0] == 'a')
        {
            $item_name = 'plus';
            $item_number = 1;
        }
        else
        {
            $item_name = 'professional';
            $item_number = 2;
        }
        $amount = substr($id, 1, strlen($id));
        // Set variables for paypal form
        $returnURL = base_url().'paypal/success';
        $cancelURL = base_url().'paypal/cancel';
        $notifyURL = base_url().'paypal/ipn';
        
        // Get product data from the database
        /*$product = $this->product->getRows($id);*/
        
        // Get current user ID from the session
        $userID = $this->session->userdata('id');
        
        // Add fields to paypal form
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $item_name);
        $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $item_number);
        $this->paypal_lib->add_field('amount',  $amount);
        
        // Render paypal form
        $this->paypal_lib->paypal_auto_form();
    }
}