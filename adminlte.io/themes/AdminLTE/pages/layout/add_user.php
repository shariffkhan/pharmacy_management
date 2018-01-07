<?php 
	require_once("classes/Connection.php");
	require_once("classes/Supplier.php");
	require_once("classes/Medicine.php");
	require_once("classes/User.php");
	$user=new User();
	$connect=new Connection();
	$supplier=new Supplier();
	$medicine=new Medicine();


	if(isset($_POST['submit_user'])){
		$fname=$_POST['fname'];
		$uname=$_POST['uname'];
		$mobile=$_POST['phone'];
		$address=$_POST['address'];
		$priviledge=$_POST['priviledge'];
		$details=$_POST['details'];

		$user->add_user($fname,$uname,$mobile,$address,$priviledge,$details);
	}
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'fixed/header.php'; ?>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">

  <?php include 'fixed/header_nav_fixed.php'; ?>

  <!-- =============================================== -->

    <?php include 'fixed/sidebar_fixed.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    <?php include 'content_files/add_user_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>

  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>