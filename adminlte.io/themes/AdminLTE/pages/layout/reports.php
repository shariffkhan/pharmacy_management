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

 ?><!DOCTYPE html>
<html>

<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <?php include 'fixed/header.php'; ?>
   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">

  <?php include 'fixed/header_nav_fixed.php'; ?>

  <!-- =============================================== -->

    <?php include 'fixed/sidebar_fixed.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <?php include 'content_files/report_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>
  <!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>



  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>