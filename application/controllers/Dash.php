<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard');
		
	}

	public function customerDashboard()
	{
		$this->load->view('Dashboard/CustomerDashboard');
		
	}

	public function farmerDashboard()
	{
		$this->load->view('Dashboard/farmerDashboard');
		
	}

	public function login()
    {
        
		$this->load->view('Structure/Header');
		$this->load->view('Login');
		$this->load->view('Structure/Footer');
    }

	public function registerCustomer()
    {
        $this->load->view('Structure/Header');
		$this->load->view('Registration/RegForm');
    }

	public function registerFarmer()
    {
        $this->load->view('Structure/Header');
		$this->load->view('Registration/RegFarmer');
    }

	public function registerDelivery()
    {
        $this->load->view('Structure/Header');
		$this->load->view('Registration/RegDelivery');
    }

	// public function shop()
    // {
    //     $this->load->view('Structure/Header');
	// 	$this->load->view('Shop');
	// 	$this->load->view('Structure/Footer');
    // }

	// public function vegetable()
    // {
    //     $this->load->view('Structure/Header');
	// 	$this->load->view('Vegetables');
	// 	$this->load->view('Structure/Footer');
    // }

	// public function fruit()
    // {
    //     $this->load->view('Structure/Header');
	// 	$this->load->view('Fruits');
	// 	$this->load->view('Structure/Footer');
    // }

	public function checkout()
    {
        $this->load->view('Structure/Header');
		$this->load->view('Checkout');
		$this->load->view('Structure/Footer');
    }

	

	

	



}
