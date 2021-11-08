<h1>Delivery Agent</h1>

<h2> <?php echo $this->session->userdata('first_name');?></h2><br/>
   
<a id="shopping" class="btn btn-primary" href="<?php echo base_url()?>index.php/customer">Shop</a> 
   <a id="loginSubmit" class="btn btn-primary" href="<?php echo base_url()?>index.php/Login/logout">Sign out</a>
   <a class="btn btn-primary" href="javascript:window.history.go(-1);">Previous</a>
