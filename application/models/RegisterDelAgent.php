<?php
    class RegisterDelAgent extends CI_Model {

        //delivery agent model from registerform 
        public function regDeliveryAgent($data)
        {
            
            $dataset = array(
                "first_name"                => $data["firstName"],
                "last_name"                 => $data["lastName"],
                "email"                     => $data["email"],
                "driving_license_number"    => $data["licenseNumber"],
                "vehicle_type"              => $data["vehicleType"],
                "vehicle_model"             => $data["vehicleModel"],
                "vehicle_reg_number"        => $data["vehicleRegNumber"]
                
            );

            $dataset2 = array(
                "first_name" => $data["firstName"],
                "last_name" => $data["lastName"],
                "address" => $data["address1"].", " . $data["address2"] ,
                "city" => $data["city"],
                "email" => $data["email"],
                "password" => $data["passwordRetype"],
                "contact_number" => $data["contactNumber"],
                "position" => 'deliver',
            );
                $exee = $this->db->insert('delivery_agent', $dataset);
                $exee21 = $this->db->insert('user', $dataset2);
                
                    return $exee21;

                    echo($exee21);
               
                   
        }

}

?>