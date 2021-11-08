<?php
    class AddImagePath extends CI_Model {

        
        public function insert_images($data)
        {
            $mail =  $this->session->userdata('email');
           
            $dataset = array(
                "profile_image" => $data["path_img"],
               
               );
              $this->db->where('email', $mail);
              $eese= $this->db->update('user',$dataset);
              
        }

       

}

?>