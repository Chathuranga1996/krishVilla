   
   <h1>
      farmer Dashboard
   </h1>
   <h2>Welcome <?php 
    echo $this->session->userdata('first_name');
?></h2>

  
   <a id="loginSubmit" class="btn btn-primary" href="<?php echo base_url()?>index.php/Login/logout">Sign out</a>
   <a id="shopping" class="btn btn-primary" href="<?php echo base_url()?>index.php/customer">Shop</a>

   


  
