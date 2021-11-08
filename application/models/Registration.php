<?php
    class Registration extends CI_Model {

        
        public function insert_entry($data)
        {
            
            $dataset = array(
                "first_name" => $data["firstName"],
                "last_name" => $data["lastName"],
                "address" => $data["address1"].", " . $data["address2"] ,
                "city" => $data["city"],
                "email" => $data["email"],
                "password" => $data["password"],
                "contact_number" => $data["contactNumber"],
                "position" => 'customer',
            );
               $eee = $this->db->insert('user', $dataset);
               return $eee;
        }

       

}

?>