<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Model {

    

    public function userLogin($email,$password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query = $this->db->get();
        return $query;

    
     }
   



}
