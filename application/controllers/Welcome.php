<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Structure/Header');
		$this->load->view('Home');
		$this->load->view('Structure/Footer');
		
	}

	public function aboutUs()
    {
        $this->load->view('Structure/Header');
		$this->load->view('AboutUs');
		$this->load->view('Structure/Footer');
    }

	public function workWithUs()
    {
        $this->load->view('Structure/Header');
		$this->load->view('WorkWithUs');
    }

	public function contactUs()
    {
        //$this->load->view('Structure/Header');
		$this->load->view('contact-us');
		//$this->load->view('Structure/Footer');
    }

}
