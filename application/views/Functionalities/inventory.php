
<div style="margin:150px;">
<h1>inventory</h1>
    <table class="table">
        <tr><h4>inventory items for <?php echo date('Y-m-d');?><h4></tr>
        <tr class="thead-dark">
            <th scope="col">Item Category</th>
            <th scope="col">Item Name</th>
            <th scope="col">Added Qty (Kg)</th>
            <th scope="col">Wast parcentage(%)</th>
            <th scope="col">Total qty (Kg)</th>
            <th scope="col">Sold Qty (Kg)</th>
            <th scope="col">Rest Qty (Kg)</th>
            
        </tr>
        <?php
            if($inventoryItems->num_rows()>0){
                foreach($inventoryItems->result()as $row){?>
                    <tr>
                        <td ><?php echo $row->item_category;?></td>
                        <td ><?php echo $row->item_name;?></td>
                        <td ><?php echo $row->qty_added;?></td>
                        <td><?php echo $row->wast_percentage;?></td>
                        <td><?php echo $row->total_qty_sell;?></td>
                        <td><?php echo $row->sold_qty;?></td>
                        <td><?php echo $row->rest_qty;?></td>
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

 
    


