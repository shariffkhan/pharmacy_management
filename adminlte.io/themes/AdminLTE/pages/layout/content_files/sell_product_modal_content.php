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
<div style="text-align: center; font-size: 18px; line-height: 20px;" >
          <div style="padding-bottom: 2%; font-size: 20px;"><b>Infarmacy</b></div>
          <div>Dar Es Salaam, Posta</div>
          <div>IFM, Samora Road</div>
          <div style="padding-top: 2%;">Sale No.: 00405</div>
        </div>
        <div>
          <div>Date: <?php echo date("d-m-Y/h:i"); ?></div>
          <div>Customer: <b>Proudly Customer</b></div>
        </div>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th>#</th><th>Items</th><th>Quantity</th><th>Price</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach($selling->get_OnCurrentCat() as $value){

              ?>
              <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['medic_name']; ?></td>
                <td><?php echo $value['quantity']; ?></td>
                <td><?php echo $value['total']; ?> Tsh</td>
              </tr>
              <?php
            } ?>
            <tr><td></td><td></td><td></td><td></td></tr>
            <?php 
                  foreach($selling->get_sum_ofcat() as $value) {
                    ?>
              <tr><th>Total Items</th><td></td><th><?php echo $value['qty']; ?></th><th><?php echo $value['total']; ?> Tsh</th></tr>
              <?php } ?>
            </tbody>
          </table>
          <hr>
          <div class="box" style="padding: 2%;"><span>AGS.com</span><div style="float: right;">Tel: 0659992590</div></div>
        </div>
        <div style="text-align: center;"><img src="images/serial.jpg" width="80%" height="5%"></div>