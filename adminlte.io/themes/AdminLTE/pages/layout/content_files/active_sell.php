<?php

  require_once("../classes/SellingPoint.php");
  $selling=new SellingPoint();
                
                        
                          
    
    $stock_id=$_POST['stock_id'];
    $sell_type=$_POST['option'];
     foreach($selling->get_OnCurrentSell($stock_id) as $value){
        $id=$value['med_id'];
        $med_name=$value['med_name'];
        $retail=$value['retail'];
        $wholesale=$value['wholesale'];

        if($sell_type == 'retail'){
          $selling_price = $retail;
        }else{
          $selling_price = $wholesale;
        }


       $selling->OnCurrentSell($med_name,$selling_price);
     }

     
// $name="shariff.";
//  echo json_encode($name);
                            
?>

 <?php 
    foreach($selling->get_OnCurrentCat() as $value){
                      $id=$value['id'];
                      $quantity=$value['quantity'];
                      $medic_name = $value['medic_name'];
                      $price = $value['price'];
                    echo "<tr>";
?>
                           <td><?php echo $id; ?></td>
                            <td><?php echo $value['medic_name']; ?></td>
                            <td>
                              <form action="content_files/test-add.php" method="POST">
                                <input type="text" class="change_qty" name="quantity" value="<?php echo $quantity; ?>" style="width: 15%; text-align: center;">
                                <input type="hidden" name="price" value="<?php echo $price; ?>" hidden="true" />
                                <input type="hidden" name="hid" value="<?php echo $id; ?>">
                                <input type="hidden" name="med_name" value="<?php echo $medic_name; ?>">
                            </form>
                            </td>
                            <td><?php echo $value['price']; ?></td>
                            <td class="price" id="price-<?php echo $id; ?>"><?php echo $value['total'];?></td>
                
                           <?php
                    echo "</tr>";
                  }
?>