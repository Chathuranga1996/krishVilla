<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmer extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in')!== TRUE){
        redirect('Login');
        }
        $this->load->model('FarmerAddItems'); //this model's for fetch item category

    }
    
	function index(){
        if($this->session->userdata('position')==='farmer'){

            

            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/FarmerDashboard');
		    $this->load->view('Structure/Footer');


            $data['item'] = $this->FarmerAddItems->fetchCategory();// related with fetch category fn
            $this->load->view('DynamicSelectItems/FarmerItemSelect',$data);//loads data fron category table to farmer's Dashboard view


            $this->load->model('FarmerBillModel');
            $farmerBill['bill'] = $this->FarmerBillModel->farmerBill();
            $this->load->view('Functionalities/FarmerBill',$farmerBill);


            $this->load->view('InsertIMG/InsertImages');
            
        }else{
            echo "access denied";
        }
    }

    function fetchItem(){
        if($this->input->post('itemId')){
            echo $this->FarmerAddItems->fetchitem($this->input->post('itemId'));
        }
    }



    function addSellingItems(){ //farmer added selling items

      
		$response = $this->FarmerAddItems->insertSellitem($this->input->post());
		
		if($response){
			echo json_encode(true);
			
		}else{
			echo json_encode(false);
			
		}

    }
	
        

}
