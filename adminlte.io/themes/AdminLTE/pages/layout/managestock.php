<?php 
session_start();
  require_once("classes/Supplier.php");
  require_once("classes/Medicine.php");
  require_once("classes/Stock.php");
  require_once("classes/InBetween.php");
  $btn=new InBetween();
  $stock=new Stock();
  $medicine=new Medicine();
  $supplier=new Supplier();

  if(isset($_POST['submit_stock'])){
    $sup_id=$_SESSION['id'];
    $med_id=$_POST['med_name'];
    $batch=$_SESSION['batch'];
    $quantity=$_POST['quantity'];
    $buying_price=$_POST['buying_price'];
    $retail=$_POST['retail'];
    $wholesale=$_POST['wholesale'];
    $date_issued=$_POST['issued'];
    $date_expire=$_POST['expire'];
    $details=$_POST['details'];

    $btn->check_medicine_price($sup_id,$med_id,$batch,$quantity,$buying_price,$retail,$wholesale,$date_issued,$date_expire,$details);
  }
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'fixed/header.php'; ?>
  <style type="text/css">
    #batan{color: #428bca;}
    #exTab2{background: white; padding: 2%;}
    #showpop{color: green;}
  </style>

  <!-- style for tabs design -->
<link rel="stylesheet" href="content_files/register_content.css">
<!-- fullCalendar -->
  <link rel="stylesheet" href="../../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->

<body class="hold-transition skin-blue fixed sidebar-mini">

  <?php include 'fixed/header_nav_fixed.php'; ?>

  <!-- =============================================== -->

    <?php include 'fixed/sidebar_fixed.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    <?php include 'content_files/managestock_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>
  <!-- fullCalendar -->
<script src="../bower_components/moment/moment.js"></script>
<script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>