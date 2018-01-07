<?php 
	require_once("classes/Supplier.php");
  require_once("classes/Medicine.php");
  require_once("classes/Stock.php");
  require_once("classes/Connection.php");
  require_once("classes/SellingPoint.php");
  $stock=new Stock();
  $medicine=new Medicine();
  $supplier=new Supplier();
  $connect=new Connection();
  $selling=new SellingPoint();

  if(isset($_POST['submit-recept'])){

    $numer_of_cat = $selling->get_total_oncurrentcat();
   // die(var_dump($numer_of_cat));
    $check_id=1;
    while($check_id<=$numer_of_cat){
    foreach($selling->get_finished_OnCurrentCat($check_id) as $value){
                      $id=$value['id'];
                      $cat_id=$value['cat_id'];
                      $quantity=$value['quantity'];
                      $medic_name = $value['medic_name'];
                      $price = $value['price'];
                      $total=$value['total'];
                      
        $select="SELECT ms.id as sid from medic_stock_handler ms join medicine m on m.id=ms.medic_id and m.med_name='$medic_name' LIMIT 1";
        $querry=$connect->connect->query($select);
        
     $result=array();
      while($row=$querry->fetch_assoc()){
        $result = $row['sid'];
    }
        $insert="INSERT INTO medic_sales(stock_id,sell_cat_id,quantity_sold,price,amount) values($result,'$cat_id',$quantity,$price,$total)";
       // $connect->connect->query($insert);

       // die(var_dump($medic_name));
        if($connect->connect->query($insert)){
          $stock->minimize_from_stock($quantity,$medic_name);
        }
      }
      $check_id++;
    }
    $selling->change_status_oncat();
  }

 ?>

 <!DOCTYPE html>
<html>

<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <?php include 'fixed/header.php'; ?>
   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <style type="text/css">
    #inline, #inline-invoice, #inline-to{display: inline-block;}
    #inline-invoice{font-weight: bold; font-size: 20px; margin-top: 15px;}
    #inline{text-align: right; line-height: 20px;}
    #inline-to{}
  </style>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">

  <?php include 'fixed/header_nav_fixed.php'; ?>

  <!-- =============================================== -->

    <?php include 'fixed/sidebar_fixed.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <?php include 'content_files/home_seller_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>
  <!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
   // function onfocusit() {
   //      //   alert('fafafa');



   //      //  // var data = document.getElementsByClassName('change_qty');

   //      //  var data = $(this).val();


   //      // // alert(data.value);

   //      // alert(data);
   //      //   // go to the database and increment the order


   //        // change the values in the ui
   //      }
      
</script>
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
})
   //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })


</script>

<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>


<script>
  
    // on change when quantity changed, on hover mouse out
    // var data = $('.change_qty');
            // console.log(data);

            $(document).on('keyup', '.change_qty', function (e) {
              console.log($(this).val());
              // get the parent value
              var parentvar = $(this).parent();

              console.log(parentvar);
             // alert(parentvar.val());
              $.ajax({
                type: parentvar.attr("method"),
                url: parentvar.attr("action"),
                data: parentvar.serialize(),
                success: function (data){
                  data = JSON.parse(data);
                  //document.write(data);
                  $('#price-' + data[2]).html(data[0]);
                  $('.quantity').html(data[1]);
                  $("#total_price").html(data[3]);
                  var total_vat = parseInt(data[3])*18/100;
                  var total_price_exec_vat = parseInt(data[3]) + total_vat;
                  $("#total_vat").html(total_vat);
                  $("#total_price_exec_vat").html(total_price_exec_vat);
                }
              });
            });


      var render_selling_point_summary = function(){
        var link = "content_files/selling_summary.php";
        $.get(link, function(data){
          $("#selling-summary-container").html(data);
        });
      }


            //on change when product being selected.
      $(function () {
        $('select').on('change', function (e) {
          e.preventDefault();
          console.log($('form').serializeArray());
          $.ajax({
            type: 'post',
            url: 'content_files/active_sell.php',
            data: $('form').serialize(),
            success: function (response) {
            // console.log(data);
               $('#tbody').html(response);
               render_selling_point_summary();
            }
          });

        });

      });


      $(document).on("click", ".sell-invoice", function(e){
        e.preventDefault();
        $("#invoice").modal("toggle");
        var link = "content_files/sell_product_invoice_modal_content.php";
        $.get(link, function(data){
          $("#sell-product-invoice-modal-content-container").html(data);
        });
      });

      $(document).on("click", ".sell-receipt", function(e){
        e.preventDefault();
        $("#sell_product").modal("toggle");
        var link = "content_files/sell_product_modal_content.php";
        $.get(link, function(data){
          $("#sell-product-modal-content-container").html(data);
        });
      });

      $(document).on("change", ".sell-type", function(){
        var value = $(this).attr("value");
        var retail_html = '<input type="radio" name="option" value="retail" class="sell-type" checked>';
        var wholesale_html = '<input type="radio" name="option" value="wholesale" class="sell-type" checked>';
        if($(this).attr("value") == 'retail'){
          $("#sell-type").html(retail_html);
        }else{
          $("#sell-type").html(wholesale_html);
        }
      });


      



  
</script>


  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>