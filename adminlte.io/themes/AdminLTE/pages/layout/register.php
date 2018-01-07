<?php 
	require_once("classes/Connection.php");
	require_once("classes/Supplier.php");
	require_once("classes/Medicine.php");
	require_once("classes/Inbetween.php");
	$btn=new Inbetween();
	$connect=new Connection();
	$supplier=new Supplier();
	$medicine=new Medicine();


	if(isset($_POST['add_supplier'])){
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$location=$_POST['location'];
		$address=$_POST['address'];
		$details=$_POST['details'];

		$supplier->add_supplier($name,$mobile,$location,$address,$details);
	}elseif (isset($_POST['add_medicine'])) {
		$name=$_POST['name'];
		$category_id=$_POST['category'];
		$reorder_level=$_POST['reorder'];
		$measurement=$_POST['measurement'];
		$details=$_POST['details'];

		foreach($medicine->get_specific_cat($category_id) as $value){
			$category=$value['name'];
		}

		$medicine->add_medicine($name,$category,$reorder_level,$measurement,$details);
	}elseif (isset($_POST['add_category'])) {
		$name=$_POST['name'];
		$details=$_POST['details'];

		$medicine->add_category($name,$details);
	}
 ?>

<!DOCTYPE html>
<html>

<head>
  <?php include 'fixed/header.php'; ?>

  <!-- style for tabs design -->
<link rel="stylesheet" href="content_files/register_content.css">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">

  <?php include 'fixed/header_nav_fixed.php'; ?>

  <!-- =============================================== -->

    <?php include 'fixed/sidebar_fixed.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    <?php include 'content_files/register_content.php'; ?>
<!-- end content_wrapper -->

  
  <?php include 'fixed/footer.php'; ?>

  </body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/layout/fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Dec 2017 10:53:56 GMT -->
</html>