<?php
    class RegFarmer extends CI_Model {

        
        public function insert_farmer($data)
        {
            
            $dataset = array(
                "farm_name" => $data["farmName"],
                "email" => $data["email"],
                "size_perches" => $data["farmsize"]
                
            );

            $dataset2 = array(
                "first_name" => $data["firstName"],
                "last_name" => $data["lastName"],
                "address" => $data["address1"].", " . $data["address2"] ,
                "city" => $data["city"],
                "email" => $data["email"],
                "password" => $data["password"],
                "contact_number" => $data["contactNumber"],
                "position" => 'farmer', 
            );
                
                $exee = $this->db->insert('farmer', $dataset);
                $exee21 = $this->db->insert('user', $dataset2);
                return $exee21;
                 }
}

?>