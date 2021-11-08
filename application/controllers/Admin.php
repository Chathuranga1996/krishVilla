<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in')!== TRUE){
        redirect('Login');
        }
        $this->load->model('EnterItemsModel');

    }
    
	function index(){
        if($this->session->userdata('position')==='admin'){
            $this->load->view('Structure/Header');
            $this->load->view('Dashboard/AdminDashboard');
		    $this->load->view('Structure/Footer');

            // add new foot items
            //$this->load->model('EnterItemsModel');
            $data['item'] = $this->EnterItemsModel->fetchCategory();
            $this->load->view('DynamicSelectItems/AddCategory',$data);

            // add farmer's products to inventory
            $dataSell['sellItem'] = $this->EnterItemsModel->fetchSellItems();
            //var_dump($dataSell['sellItem']);
            $this->load->view('DynamicSelectItems/AddInventory',$dataSell);

            //load inventory 
            $inventory['inventoryItems'] = $this->EnterItemsModel->fetchInventory();
            $this->load->view('Functionalities/inventory', $inventory);

    
        }else{
            echo "access denied";
        }
    }


    public function addNewItem(){//add new sell product
		//$this->load->model('Registration');
		$response = $this->EnterItemsModel->insert_new($this->input->post());
		
		if($response){
			echo json_encode(true);
		
		}else{
			echo json_encode(false);
		
		}
	
	}

    public function addInventoryItem(){//add new items to the inventory
		
		$sendInventory = $this->EnterItemsModel->insert_inventory($this->input->post());
		
		if($sendInventory){
			echo json_encode(true);
		
		}else{
			echo json_encode(false);
		
		}
	
	}

   
	
        

}