

<div style="margin:50px;">
    <h2 style="margin-top:50px; margin-bottom:50px"> add items to inventory</h2>
    <table class="table">
        <tr><h4>Selling items for <?php echo date('Y-m-d');?><h4></tr>
        <tr class="thead-dark">
            <th scope="col">Item Category</th>
            <th scope="col">Item Name</th>
            <th scope="col">Qty (Kg)</th>
            <th scope="col">Selling Date</th>
            <th scope="col">Wast parcentage(%)</th>
            <th scope="col">Total qty (Kg)</th>
            <th scope="col">Unit Price (Kg)</th>
            <th scope="col">Total price (LKR)</th>
            <th scope="col">Add item</th>
        </tr>
        

        <?php
            if($sellItem->num_rows()>0){

                
                
                foreach($sellItem->result()as $row){?>
               
                    <tr>
                    <form id="<?php echo $row->item_name;?>"><!--gave item_name as form id-->
                    
                            <?php       //these random string generators for make different id at each time loop runs 
                            $bytes = 10;
                            $bytes2 = 5;
                            $bytes3 = 6;
                            $bytes4 = 7;
                            $bytes5 = 8;
                            $bytes6 = 9;
                            $bytes7 = 4;

                            $randIdWastParcentage = bin2hex(random_bytes($bytes));
                            $randIdTotalQty = bin2hex(random_bytes($bytes2));
                            $randIdsubmitDaily = bin2hex(random_bytes($bytes3));
                            $randQty = bin2hex(random_bytes($bytes4));
                            $randtotalPriceval = bin2hex(random_bytes($bytes5));
                            $randinputUnitPrice = bin2hex(random_bytes($bytes6));
                            $randReset = bin2hex(random_bytes($bytes7));
                             ?>
                           
                          
                        <td ><input type="text" name="category" value="<?php echo $row->category;?>" scope="col" class="form-control" readonly></td>
                        <td ><input type="text" name="itemName" value="<?php echo $row->item_name;?>" scope="col" class="form-control" readonly></td>
                        <td ><input type="number" name="qty"  value="<?php echo $row->qty;?>" scope="col" class="form-control" id="<?php echo $randQty;?>" readonly></td>
                        <td><input type="text" name="sellDate"  value="<?php echo $row->sell_date;?>" scope="col" class="form-control" id="sellDate" readonly></td>
                        
                            
                            <td><input type="number" name="wastParcentage" min="0" max="100" value=""  scope="col" class="form-control" id="<?php echo $randIdWastParcentage;?>"></td>
                            <td><input type="number" name="totalQty" value="" scope="col" class="form-control"  id = "<?php echo $randIdTotalQty;?>" readonly></td>  <!--after add wastage this will show totalqty with the help of jquery below-->
                            <td><input type="number" name="unitPrice" scope="col" class="form-control" id="<?php echo $randinputUnitPrice;?>"></td>
                            <td><input type="number" name="totalPrice" value="" scope="col" class="form-control"  id="<?php echo $randtotalPriceval;?>" readonly></td><!--after add unit price this will show total price with the help of the 2nd jquery below-->
                            <td><input type="submit" name="submitDaily" scope="col" class="form-control" id="<?php echo $randIdsubmitDaily;?>">  
                            <input scope="col" class="form-control" id="<?php echo $randReset;?>" type="reset">  </td>
                            
                        
                    </form>
                       <?php echo('<script>
                            $(document).ready(function() {
                                $("#'.$randIdWastParcentage .'").change(function() {
                                    var anz2 = 0;
                                    $( "#'.$randIdTotalQty.'").empty();
                                    $( "#'.$randtotalPriceval.'").empty();
                                    $( "#'.$randinputUnitPrice.'").val(0);
                                    percent = $("#'.$randIdWastParcentage.'").val();
                                    var AVQty = $("#'.$randQty.'").val();
                                    var anz = parseInt(AVQty)/100 * parseInt(percent) ;
                                    var anz2 = parseInt(AVQty) - parseInt(anz) ;
                                    $("#'.$randIdTotalQty.'").val(anz2);
                                    $("#'.$randIdTotalQty.'").prop("readonly", true);
                                    $("#'.$randtotalPriceval.'").prop("readonly", true);
                                   
                                });

                                $("#'.$randinputUnitPrice.'").change(function() {
                                    
                                    $( "#'.$randtotalPriceval.'").empty();
                                    unitPrice = $("#'. $randinputUnitPrice.'").val();
                                    var totalqty = $("#'.$randIdTotalQty.'").val();
                                    var totalPrice = parseInt(totalqty) * parseInt(unitPrice) ;
                                    
                                    $("#'.$randtotalPriceval.'").val(totalPrice);
                                    $("#'.$randtotalPriceval.'").prop("readonly", true);
                                   
                                   
                                });

                                // reset button
                                $("#'.$randReset.'").click(function() {
                                    
                                    $( "#'.$randinputUnitPrice.'").val(0);
                                    $( "#'.$randIdTotalQty.'").empty();
                                    $( "#'.$randtotalPriceval.'").empty();
                                    $( "#'.$randIdWastParcentage.'").val(0);
                                   
                                });

                                // ajax for submit the form

                                $("#'.$randIdsubmitDaily.'").click(function(){
                                    $.ajax({
                                        url: base_url + "index.php/Admin/addInventoryItem",
                                        data: $("#'.$row->item_name.'").serialize(),
                                        method: "post",
                                        dataType:"json",
                                        success: function(response){
                                         
                                           if(response){
                                               
                                                     alert("Item added!");
                                                    
                                              
                                            }
                                            
                                         },
                                        error: function(response) {
                                                 alert("something went wrong!");
                                         
                                         }
                                        
                                    
                                    });
                                 });



                            });
                        </script>') ?>
                       
                    </tr>
   
                    
                    
                <?php
               
               
                }

            }else{?>
                <tr colspan="8"> nothing </tr>
            <?php
            }
        
        
        ?>
    
    </table>

</div>

 
    


