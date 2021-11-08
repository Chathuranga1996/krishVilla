<div style="width: 1000px; padding-left:50px; padding-top:50px">

    <!-- Registration form for customer-->
    
    <form id="loginform"  action="<?php echo base_url()?>index.php/Login/auth" method="POST">  
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">email</label>
        <input type="text" name="email" class="form-control" id="inputEmail4"><br/>
        </div>
       
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputPassword4">password</label>
        <input type="text" name="password" class="form-control" id="inputPassword4">
        </div>
    </div>
   
    <button type="submit" id="loginSubmit" class="btn btn-primary">Sign in</button>
    </form>
    <!--End of Registration form for customer-->

  
    
</div>
