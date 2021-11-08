<h1>farmer bill</h1>
<div style="margin:50px;">

    <table class="table">
        
        <tr class="thead-dark">
             <th scope="col">Earned So Far</th>
            
        </tr>
        
        <?php
            if($bill->num_rows()>0){
                foreach($bill->result() as $row){?>
                    <tr>
                        <td> Rs. <?php echo $row->total; ?></td>
                    </tr>
                <?php
               }

            }else{?>
                <?php echo "nothing";?>
            <?php
            }
        ?>
    
    </table>

</div>
