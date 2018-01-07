 <?php 
      require_once("../classes/SellingPoint.php");
      $selling = new SellingPoint();
                    foreach($selling->get_OnCurrentCat() as $value){
                      $id=$value['id'];
                      $quantity=$value['quantity'];
                    echo "<tr>";
?>
                           <td><?php echo $id; ?></td>
                            <td><?php echo $value['medic_name']; ?></td>
                            <td><form action="" method="POST">
                              <input type="text" class="change_qty" name="quantity" value="<?php echo $quantity; ?>" style="width: 15%; text-align: center;">
                            </form>
                            </td>
                            <td><?php echo $value['price']; ?></td>
                            <td><?php echo $value['total']; ?></td>
                
                           <?php
                    echo "</tr>";
                  }
              

?>