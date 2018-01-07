
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
                <label style="margin-right: 3%;">
                  <input type="radio" name="r3" class="flat-red" checked><span> </span><label> Retail</label>
                </label>
                
                <label>
                  <input type="radio" name="r3" class="flat-red"><span> </span><label>Whole Sale</label>
                </label>
              </div>
              <div class="">
                <div class="form-group col-xs-6">

                  <form action="" method="POST">
                  <select name="stock_id" id="stock_id" class="form-control select2">
                  <?php 
                    foreach($medicine->get_all_medicine_fromstock() as $value){
                      ?>
                    <option value="<?php echo $value['id']; ?>">
                      <?php echo $value['name']; ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                  </form>
                 </div>
                 <div style="float: right;" class="form-group col-md-5">
                <input type="text" name="customer" placeholder="Customer name" class="form-control col-md-5" >
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
                 
                </tbody>
              </table>
            </div>
          
            <!-- /.box-body -->

            <div class="box-body">
              <table id="example1" class="table table-striped">
                <thead>
                <tr><b style="font-size: 18px;">Total</b></tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Total Items</th><td>10 items</td><td>40000-Tsh</td>
                  </tr>
                  <tr style="background: #fff;">
                    <th>Tax</th><td>18%</td><td>6000-Tsh</td>
                  </tr>
                  <tr>
                    <th>Total</th><td></td><td><b>57000 Tsh</b></td>
                  </tr>
                </tbody>

              </table>
              <div class="box-footer">
                  <input type="button" name="cancel" class="btn btn-lg bg-maroon col-xs-6" value="Cansel">
                  <input type="button" name="cancel" class="btn btn-lg bg-olive col-xs-6" value="Submeet" data-toggle="modal" data-target="#sell_product">
              </div>
              <?php include 'modals/sell_product.php'; ?>
            </div>
            <!-- /.box-body -->
     </div>

  </section>
  <section class="content col-md-6" style="background: pink; float: right;">
    
  </section>
</div>
<!-- end content_wrapper .-->

<script>
      $(function () {


        $('select').on('change', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'content_files/active_sell.php',
            data: $('form').serialize(),
            success: function (response) {
                $('#tbody').html(response);
            }
          });

        });

         $(".change_qty").on('change', function(){
          var data = $(this).val();
          alert(data);
        });


      });


  
</script>



<script>
//   function myFunction() {
//     var x = document.getElementById("change_qty");
//    // x.value = x.value.toUpperCase();
//    if(x != null){
//     alert("You pressed OK!");
//   }else{
//     alert("You pressed NOT OK!");
//   }
// }


      $(function () {

        // $('#change_qty').focusout( function (e) {

          // e.preventDefault();
// alert( $( "#change_qty" ).data( "foo" ) );
          // $.ajax({
          //   type: 'post',
          //   url: 'content_files/change_qtty.php',
          //   data: $('form').serialize(),
          //   success: function (response) {
          //      // $('#change_qty').load('content_files/current_.php');
          //      alert("You pressed OK!");
          //   }
          // });

        // });


        // on change value
       

      });


  
</script>


<script>
  /*$(document).ready(function() {

        setInterval(function(){
            $('#tbody').load('content_files/current_.php')
        },3000);

  });*/
</script>