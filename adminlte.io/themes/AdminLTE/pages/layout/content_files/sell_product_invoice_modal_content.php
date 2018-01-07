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
<!-- ======= -->
        <div style="border-bottom: 1px solid gray; height: 100px;">
          <div id="inline-invoice">
            <div>INVOICE #AGS-101</div>
          </div>
           <div id="inline" class="pull-right">
            <div style="padding-bottom: 2%; font-size: 20px;"><b>Infarmacy</b></div>
             <div>Dar Es Salaam, Posta</div>
             <div>IFM, Samora Road</div>
            <div style="padding-top: 2%;">Sale No.: 00405</div>
           </div>
        </div>
        <!-- =========== -->
        <div style="border-bottom: 1px solid gray; height: 130px; padding-top: 15px;">
          <div id="inline-to">
            <div>
              <b>To</b>
            </div>
            <div>
              <span>Amana Hospital</span><br>
              <span>103 lumumba steet, kawe</span><br>
              <span>phone: +2556778556</span><br>
              <span>info@gmail.com</span>
            </div>
          </div>
          <div class="pull-right">
            <div>
              <span>Invoice Date: </span><span>23/05/2017</span>
            </div>
            <div>
              <span>Due Date:</span><span>24/05/2017</span>
            </div>
          </div>
        </div>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th>#</th><th>Items</th><th>Price</th><th>Quantity</th><th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach($selling->get_OnCurrentCat() as $value){

              ?>
              <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['medic_name']; ?></td>
                <td><?php echo $value['price']; ?></td>
                <td><?php echo $value['quantity']; ?></td>
                <td><?php echo $value['total']; ?> Tsh</td>
              </tr>
              <?php
            } ?>
            <tr><td></td><td></td><td></td><td></td></tr>
            <?php 
                  foreach($selling->get_sum_ofcat() as $value) {
                    ?>
              <tr><th>Total Items</th><td></td><td></td><th><?php echo $value['qty']; ?></th><th><?php echo $value['total']; ?> Tsh</th></tr>
              <?php } ?>
            </tbody>
          </table>
          <hr>
          <div class="box" style="padding: 2%;"><span>AGS.com</span><div style="float: right;">Tel: 0659992590</div></div>
        </div>