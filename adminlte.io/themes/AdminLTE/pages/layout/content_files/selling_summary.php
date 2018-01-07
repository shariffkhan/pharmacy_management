<?php
  require_once("../classes/Supplier.php");
  require_once("../classes/Medicine.php");
  require_once("../classes/Stock.php");
  require_once("../classes/Connection.php");
  require_once("../classes/SellingPoint.php");
  $stock=new Stock();
  $medicine=new Medicine();
  $supplier=new Supplier();
  $connect=new Connection();
  $selling=new SellingPoint();
?>
<table id="example1" class="table table-striped">
                  <thead>
                  <tr><b style="font-size: 18px;">Total</b></tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach($selling->get_sum_ofcat() as $value) {

                      // calculate tax and total revenue////////////
                      $quantity= $value['qty'];
                      $total = $value['total'];
                      $tax=($total*18/100);
                      $total_revenue=$total-$tax;
                      
                    ?>
                    <tr>
                      <th>Total Items</th>
                      <td>
                        <b class="quantity"><?php echo $quantity; ?></b> items</td>
                        <td>
                          <span id="total_price"><?php echo $total." "; ?></span>
                          <span>-Tsh</span>
                        </td>
                    </tr>
                    <tr style="background: #fff;">
                      <th>Tax</th>
                      <td>18%</td>
                      <td><span id="total_vat"><?php echo $tax." "; ?></span>-Tsh</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td></td>
                      <td>
                        <b>
                          <span id="total_price_exec_vat"><?php echo $total_revenue." "; ?></span> Tsh
                        </b>
                      </td>
                    </tr>
                    <?php
                    } ?>
                  </tbody>

                </table>