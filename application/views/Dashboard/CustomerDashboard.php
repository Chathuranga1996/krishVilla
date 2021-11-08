<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>themes/bootstrap/css/bootstrap.css"/>
    <script src="<?php echo base_url()?>themes/jQuery/jQuery.js"></script>
    <script src="<?php echo base_url()?>base_url.js"></script>
    <script src="<?php echo base_url()?>themes/SweetAlert/sweetalert2.all.min.js"></script>
    
  
</head>
<body>
    
   <h1>
      Customer Dashboard
   </h1>
   <h2> <?php echo $this->session->userdata('first_name');?></h2><br/>
   
    
   <a id="loginSubmit" class="btn btn-primary" href="<?php echo base_url()?>index.php/Login/logout">Sign out</a>
   <a class="btn btn-primary" href="javascript:window.history.go(-1);">Previous</a>
   <?php
   $this->load->view('Cart');?>


<label for="inputEmail4" >Select item</label>
      
            

            
        









</body>

</html>