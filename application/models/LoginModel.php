<?php

class LoginModel extends CI_Model {

    public function userLogin($logData) {
      $query = $this->db->get_where('user',array('email' => $logData['email'], 'password' => $logData['password']));

     if($query){
       return $query->result_array();
     }
   
    }



}
