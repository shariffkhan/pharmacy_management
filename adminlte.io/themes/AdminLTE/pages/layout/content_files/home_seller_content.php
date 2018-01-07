      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Infarmacy
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol><?php if(isset($_GET['popcat'])){
        echo $_GET['popcat'];
      } ?>
    </section>
  <!-- Main content -->
    <section class="content-body">
     
      <div class="col-md-5 " style="background: #E5E4E2;">
     <!-- radio -->
              <div style=" text-align: center; padding-top: 2%;">
                <form id="check_radio">
                <label style="margin-right: 3%;">
                  <input type="radio" name="option" value="retail" class="sell-type" checked><span> </span><label> Retail</label>
                </label>
                
                <label>
                  <input type="radio" name="option" value="wholesale" class="sell-type"><span> </span><label>Whole Sale</label>
                </label>
              </form>
              </div>
              <div class="">
                <div class="form-group col-xs-6">

                  <form action="" method="POST">
                  <select name="stock_id" id="stock_id" class="form-control select2">
                  <?php 
                    foreach($medicine->get_all_medicine_fromstock() as $value){
                      ?>
                    <option value="<?php echo $value['id']; ?>" disable>
                      <?php echo $value['name']; ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>

                  <div style="display: none;" id="sell-type">
                    <input type="radio" name="option" value="retail" class="flat-red" checked>
                  </div>
                  </form>
                 </div>
                 <div style="float: right; text-align: right;" class="col-md-5">
                     <span style="margin-right: 10px;">SALE CAT #:</span>
                     <span><?php echo $selling->check_latest_cat(); ?></span>
                </div>
                <div class="form-group">
                <input type="text" name="customer" placeholder="Barcode scanner" class="form-control">
              </div>
              </div>
              
              <!-- /.box-header -->
             
            <div class="box-body" style="background: #fff; height: 250px !important; overflow-y: scroll; margin-top: 3%;">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody id="tbody">
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
                                <input type="hidden" name="med_name" value="<?php echo $value['medic_name']; ?>">
                            </form>
                            </td>
                            <td ><?php echo $value['price']; ?></td>
                            <td class="price" id="price-<?php echo $id; ?>"><?php echo $value['total']; ?></td>
                
                           <?php
                    echo "</tr>";
                    
                    }
                   ?>
                </tbody>
              </table>
            </div>
          
            <!-- /.box-body -->

            <div class="box-body">
              <div id="selling-summary-container">
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
              </div>
              <div class="box-footer">
                <form action="" method="POST">
                  <input type="button" name="cancel" class="btn btn-lg bg-maroon col-xs-4" value="Cancel">
                  <button class="btn btn-lg bg-purple col-xs-4 sell-invoice">Invoice</button>
                  <button class="btn btn-lg bg-olive col-xs-4 sell-receipt">Submit</button>
                </form>
              </div>
              <?php include 'modals/sell_product.php'; ?>
              <?php include 'modals/prepare_invoice.php'; ?>
            </div>
            <!-- /.box-body -->
     </div>

  </section>
  <section class="content col-md-6" style="background: pink; float: right;">
    
  </section>
</div>
<!-- end content_wrapper -->





