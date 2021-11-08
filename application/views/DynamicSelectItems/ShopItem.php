<h1>Shop items</h1>
<h5>only shows items for the relevent day</h5>

<?php

foreach ($shopItem as $perreq) 
{
    echo'    <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="product">
            <a href="Strawberry.html" class="img-prod"><img class="img-fluid" src="';?> <?php echo base_url();?>upload/shopItems/Fruits/banana.jpg <?php echo '" alt="Colorlib Template">
                <div class="overlay"></div>
            </a>
            <div class="text py-3 pb-4 px-3 text-center">
                <h3><a href="Strawberry.html">'. $perreq->item_name . '</a></h3>
                
              
                    <p class="price"><span>'."Rs " . $perreq->unit_price ."/=".' </span></p>
                    <input type="number" name="buyAmount">
                    <input type="button" value="buy" id="buyBtn">
    
                
               
                
            </div>
            </div>
            </div>';

}?>

<?php echo $this->session->userdata('first_name');?>


<script>
    $(document).ready(function(){
        $("#buyBtn").click(function(){
           $.ajax({
               url: base_url + "index.php/Customer/addCart",
               data: {itemName:"name",email:"email",age:"age"},
               method: "post",
               dataType:"json",
               success: function(response){
               
                            alert("success!");
                   
                },
               error: function(response) {
                        alert("error");
                
                }
            
           });
        });

    });

</script>