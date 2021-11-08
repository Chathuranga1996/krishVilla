
<h3>Add new item</h3>

<div style="width: 1000px; padding-left:50px; padding-top:50px">

    <form id="addNewItem">
        <label for="inputEmail4" >Select category</label>
        <select id="itemsCategory" class="form-control" name="itemCategory">
            <?php
                foreach($item as $row){
                    echo '<option value="'.$row->category.'">'.$row->category.'</option>';
                }
            
            ?>
        </select>
        
        <label for="inputEmail4" >Item Name</label>
        <input type="text" name="itemName" class="form-control" id="inputEmail4">
        <button type="submit" id="addItemButton" class="btn btn-primary">Add item</button>
        
        

    </form>

<script>
    $(document).ready(function(){
        $("#addItemButton").click(function(){
           $.ajax({
               url: base_url + "index.php/Admin/addNewItem",
               data: $("#addNewItem").serialize(),
               method: "post",
               dataType:"json",
               success: function(response){
                
                  if(response){
                      
                            alert("success!");
                            
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

                