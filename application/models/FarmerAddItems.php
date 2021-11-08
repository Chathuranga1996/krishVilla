<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FarmerAddItems extends CI_Model {

    

    public function fetchCategory() {
       
        $this->db->order_by('category','ASC');
        $query = $this->db->get('category');
        return $query->result();
    
     }

     public function fetchitem($itemId) {
       
        
        $this->db->where('category',$itemId);
        $this->db->order_by('item_name','ASC');
        $query = $this->db->get('item');
        $output = '<option value="">select item</option>';
        foreach($query->result() as $row){
           $output .= '<option value="' . $row->item_name.'">'.$row->item_name.'</option>'; 

        }
        return $output;
    
     }





     public function insertSellitem($data)
        {  
           $dataset = array(
                "farmer_name" => $data["farmerName"],
                "email" => $data["email"],
                "category" => $data["itemCategory"],
                "item_name" => $data["itemsName"],
                "qty" => $data["qty"],
                "sell_date" => $data["sellDate"],
                
            );
                
                $eeese2 = $this->db->insert('sell_item', $dataset);
                return $eeese2;
        }
   
}