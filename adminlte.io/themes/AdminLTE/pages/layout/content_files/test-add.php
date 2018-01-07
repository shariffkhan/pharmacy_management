<?php 

	require_once("../classes/Connection.php");
	require_once("../classes/SellingPoint.php");

	$connect=new Connection();
	$selling=new SellingPoint();


	// get the form values
	$id = $_POST['hid'];

    
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$med_name = $_POST['med_name'];
// die(var_dump($quantity));
	// send the values in the database
	SellingPoint::change_quantity($id, $med_name, $price, $quantity);


	// get the price of the given column and update the ui
	$new_price = SellingPoint::get_field_price($id);

	echo json_encode($new_price);



   



 ?>