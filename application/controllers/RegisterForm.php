<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterForm extends CI_Controller {

	
	// customer registration
	public function registercust(){
		$this->load->model('Registration');
		$response = $this->Registration->insert_entry($this->input->post());
	
		if($response){
			echo json_encode(true);
		}else{
			echo json_encode(false);
		}
		
	}


	// upload images
	public function upload_file(){
		$config['allowed_types'] = 'jpg|png';
		$config['upload_path'] = './upload/';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('image')){
		
					$pathimg = $this->upload->data()["full_path"];
			
					$imgpath = array("path_img"=>$pathimg);
					
					$this->load->model('AddImagePath');
					$response = $this->AddImagePath->insert_images($imgpath);
			
			echo "<script>alert('image uploaded successfully!');history.go(-1);</script>";

		}else{
			print_r($this->upload->display_errors());
		}
	}








	//delivery Agent
	public function RegisterDeliveryAgent(){
		$this->load->model('RegisterDelAgent');
		$response = $this->RegisterDelAgent->regDeliveryAgent($this->input->post());
		

		if($response){
			echo json_encode(true);
		}else{
			echo json_encode(false);
		}
	
	}
}