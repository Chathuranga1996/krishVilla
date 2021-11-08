<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactUs extends CI_Controller {
    
    
	function index(){
      $config = Array(
        'protocol' => 'smtp',
        'smtp_host'=> 'ssl://smtp.googlemail.com',
        'smtp_port'=> 465,
        'smtp_user'=> 'krishvillashop@gmail.com'
        'smtp_pass'=> 'Achala@1',
        'mailtype' => 'html',
        'charset'  => 'iso-8859-1',
        'wordwrap' => TRUE
      );

      $email = $this->input->post('fullname');
      $message = $this->input->post('email');
      $subject = $this->input->post('subject');
      $message = $this->input->post('message');

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from($email);
      $this->email->to('krishvillashop@gmail.com');
      $this->email->subject($subject);
      $this->email->message($message);
      if($this->email->send()){
          alert('success');
      }else{
        alert('success');
      }

    }
	
        

}