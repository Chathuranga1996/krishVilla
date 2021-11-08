<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deliver extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in')!== TRUE){
        redirect('Login');
        }

    }
    
	function index(){
        if($this->session->userdata('position')==='deliver'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/DeliverDashboard');
            $this->load->view('Structure/Footer');
        }
        else{
            echo "access denied";
        }
    }
	
        

}