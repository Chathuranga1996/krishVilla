
<div style="width: 1000px; padding-left:50px; padding-top:50px">
<select id="itemsCategory" class="form-control" name="itemCategory" >
            <?php
                foreach($farm_name as $row){
                    echo '<option value="'.$row->farm_name.'">'.$row->farm_name.'</option>';
                }
            
            ?>
</select>


</div>
<?php var_dump($sesdata2); ?>
