
<?php

class FarmFetch extends CI_Model {

   public function farmName($email) {
        $this->db->select('*');
        $this->db->from('farmer');
        $this->db->where('email',$email);
        $query = $this->db->get();
        return $query; 
    }

}


