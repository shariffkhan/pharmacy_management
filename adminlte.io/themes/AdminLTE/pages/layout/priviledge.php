<?php 
	require_once("classes/Connection.php");
	require_once("classes/Supplier.php");
	require_once("classes/Medicine.php");
	require_once("classes/User.php");
	$user=new User();
	$connect=new Connection();
	$supplier=new Supplier();
	$medicine=new Medicine();


	if(isset($_POST['submit_priviledge'])){
		$super=$_POST['super'];
		$admin=$_POST['admin'];
		$normal_user=$_POST['normal_user'];
		

		$user->change_priviledge($super,$admin,$normal_user);
	}
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'fixed/header.php'; ?>
  <style type="text/css">
  	#pname{background: olive; margin-left: 2%; padding: 1%; border-radius: 20%;}
  	.nav li{padding: 1.5% 0%;}
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
    <?php include 'content_files/priviledge_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>

  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>