<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterFarmer extends CI_Controller {

	

	public function registerfam(){
		$this->load->model('RegFarmer');
		$response = $this->RegFarmer->insert_farmer($this->input->post());
		

		if($response){
			echo json_encode(true);
			
		}else{
			echo json_encode(false);
		}
		
	}


}