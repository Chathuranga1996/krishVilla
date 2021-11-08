<h3>Add new item</h3>


<div style="width: 1000px; padding-left:50px; padding-top:50px">

    <form id="addSellingItem">

        <label for="inputEmail4">Name</label>
        <input type="text" readonly="true" name="farmerName" class="form-control" id="inputEmail4" value="<?php echo $this->session->userdata('first_name');?>">
        
        <label for="inputEmail4">email</label>
        <input type="text" readonly="true" name="email" class="form-control" id="inputEmail4" value="<?php echo $this->session->userdata('email');?>">
        

        <label for="inputEmail4" >Select category</label>
        <select id="itemsCategory" class="form-control" name="itemCategory">
            <?php
                foreach($item as $row){
                    echo '<option value="'.$row->category.'">'.$row->category.'</option>';
                }
            
            ?>
        </select>
        <label for="inputEmail4" >Select item</label>
        <select id="itemsName" class="form-control" name="itemsName">
            <?php
                foreach($category1 as $row){
                    echo '<option value="'.$row->category1.'">'.$row->category1.'</option>';
                }
            
            ?>
        </select>

        <label for="inputEmail4">Quantity (Kg)</label>
        <input type="number" name="qty" class="form-control" id="inputEmail4">
        
        <label for="inputEmail4">Sell Date</label>
        <input type="Date" name="sellDate" class="form-control" id="SellDate">
        
        
        
        <button type="submit" id="addSellingItemButton" class="btn btn-primary">Add item</button>
        
        

    </form>

    

<script>
    $(document).ready(function(){
        
         var now = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);// this phrase (new Date().getTime() + 24 * 60 * 60 * 1000) will give tomorrow
        var day = ("0" + now.getDate()).slice(-2);
         var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
        
        $('#SellDate').val(today);

       $("#itemsCategory").prepend('<option selected>Selecte Category</option>');
       $("#itemsName").prepend('<option selected disabled>Selecte Item</option>');
        $("#itemsCategory").change(function(){
           var itemId = $("#itemsCategory").val();
           if(itemId != ''){
               $.ajax({
                   url:"<?php echo base_url();?>index.php/Farmer/fetchItem",
                   method:"POST",
                   data:{itemId:itemId},
                   success:function(data){
                       $('#itemsName').html(data);

                   }
               })
           }
        });
 
        $("#addSellingItemButton").click(function(){
           $.ajax({
               url: "<?php echo base_url();?>index.php/Farmer/addSellingItems",
               data: $("#addSellingItem").serialize(),
               method: "post",
               dataType:"json",
               success: function(response){
                //console.log(response);
                  if(response){
                       // prompt("ww")
                            alert("success!");
                            //location.href = base_url; //this line will redirect to this link on success
                       

                   }
                 
                },
               error: function(response) {
                        alert("error");
               
                }
               
           
           });
        });

    });



</script>
                

</div>

                
    
    
</body>

</html>