<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in')!== TRUE){
        redirect('Login');
        }

    }
    
	function index(){
        if($this->session->userdata('position')==='customer'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('InsertIMG/InsertImages');
            $this->load->view('Structure/Footer');
        }elseif($this->session->userdata('position')==='farmer'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('Structure/Footer');
        }elseif($this->session->userdata('position')==='admin'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('Structure/Footer');
        }elseif($this->session->userdata('position')==='deliver'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/CustomerDashboard');
            $this->load->view('Structure/Footer');
        }
        else{
            echo "access denied";
        }


    }

    function cartItem(){
       
         
   

    }       

}