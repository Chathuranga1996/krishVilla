
<div style="width: 1000px; padding-left:50px; padding-top:50px">
    <h1>Register As A Farmer</h1>

    <!-- Registration form for customer-->
    
    <form id="farmerRegForm" > 
        
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
        <input type="text" name="contactNumber" class="form-control" id="inputCity" placeholder="contact number">
    
        
    </div>
   

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Farm Name</label>
        <input type="text" name="farmName" class="form-control" id="inputEmail4" placeholder="farm name">
        </div>
        
    </div>
    <div class="form-group">
        <label for="inputAddress2">size</label>
        <input type="text" name="farmsize" class="form-control" id="inputAddress2" placeholder="farm size">

              
        
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity0">password</label>
        <input type="password" class="form-control" id="inputCityx">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity1">retype password</label>
        <input type="password" name="password" class="form-control" id="inputCity2">
        </div>
        
    </div>
 
    
    <button type="submit" id="farmerRegSubmit" class="btn btn-primary">Register</button>
    <a class="btn btn-primary" href="javascript:window.history.go(-1);">Back</a>
    </form>
    <!--End of Registration form for customer-->

    

 

<script>
    $(document).ready(function(){
        $("#farmerRegSubmit").click(function(){
           $.ajax({
               url: base_url + "index.php/RegisterFarmer/registerfam",
               data: $("#farmerRegForm").serialize(),
               method: "post",
               dataType:"json",
               success: function(response){
                    if(response){
                            alert("success! now you can login");
                            location.href = base_url; //this line will redirect to this link on success                     
                   }
                },
               error: function(response) {
                        alert("error");
                    }
            
           });
        });

    });


</script>