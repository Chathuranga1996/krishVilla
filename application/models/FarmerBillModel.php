<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FarmerBillModel extends CI_Model {

    

   
        
    public function farmerBill() { //Admin controller
        
        $mail =  $this->session->userdata('email');

        $this->db->select('email, qty, unit_price');
        $this->db->select_sum('(qty*unit_price)','total');
        $this->db->where('email',$mail);//match email 
        $farmerSellData = $this->db->get('sell_item');
        
        
        return $farmerSellData; 
    
     }


        



}