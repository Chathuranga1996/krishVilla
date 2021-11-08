
    <link rel="stylesheet" href="<?php echo base_url()?>themes/bootstrap/css/bootstrap.css"/>
    <script src="<?php echo base_url()?>themes/jQuery/jQuery.js"></script>
    <script src="<?php echo base_url()?>base_url.js"></script>
    <script src="<?php echo base_url()?>themes/SweetAlert/sweetalert2.all.min.js"></script>
    
  
</head>
<body>
    
   <h1>
      Admin Dashboard
      <a id="shopping" class="btn btn-primary" href="<?php echo base_url()?>index.php/customer">Shop</a>
      <a style="margin-left:300px" id="loginSubmit" class="btn btn-primary" href="<?php echo base_url()?>index.php/Login/logout">Sign out</a>
   </h1>
 


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
                      
                        alert("Item Added!");
                  }
                           
                },
               error: function(response) {
                        alert("error");
                
                }
            
           });
        });

    });

    </script>




