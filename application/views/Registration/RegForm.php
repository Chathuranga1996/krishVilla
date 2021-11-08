<div style="width: 1000px; padding-left:50px; padding-top:50px">

    <h2>Register As A Customer</h2>

    <!-- Registration form for customer-->
    
    <form id="customerRegForm" >  
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">First Name</label>
        <input type="text" name="firstName" class="form-control" id="inputEmail4" placeholder="first name">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="inputPassword4" placeholder="last name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">email</label>
        <input type="email" name="email" class="form-control" id="inputAddress" placeholder="email@email.com">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address line1</label>
        <input type="text" name="address1" class="form-control" id="inputAddress2" placeholder="Apartment">

        <label for="inputAddress2">Address line2</label>
        <input type="text" name="address2" class="form-control" id="inputAddress3" placeholder="street">

        <label for="inputAddress2">City</label>
        <input type="text" name="city" class="form-control" id="inputAddres3s2" placeholder="city">

       
        
        <label for="inputCitys">Contact Number</label>
        <input type="text" name="contactNumber" class="form-control" id="inputCity" placeholder="0770000000">
    
        
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity1">password</label>
        <input type="password" name="password" class="form-control" id="inputCity2">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity1">retype password</label>
        <input type="password" name="password2" class="form-control" id="inputCity3">
        </div>
        
    </div>

    <button type="submit" id="customerRegSubmit" class="btn btn-primary">Register</button>
    <a href="<?php echo base_url();?>"  id="customerRegSubmitback" class="btn btn-primary">Back</a>
    </form>
    <!--End of Registration form for customer-->

</div>

<script>
    $(document).ready(function(){
        $("#customerRegSubmit").click(function(){
           $.ajax({
               url: base_url + "index.php/RegisterForm/registercust",
               data: $("#customerRegForm").serialize(),
               method: "post",
               dataType:"json",
               success: function(response){
                  if(response){
                            alert("success!");
                            location.href = base_url; //this line will redirect to this link on success
                        
                   }
                  
                },
               error: function(response) {
                        alert("error");
               
                }
              
           });
        });

    });


    function aaa(){
        Swal.fire({
                            title: 'Error!',
                            text: 'Do you want to continue',
                            icon: 'error',
                            confirmButtonText: 'Cool'
                            })
    }
</script>