<?php 
	require_once("classes/Connection.php");
	require_once("classes/User.php");
	require_once("classes/Supplier.php");
	require_once("classes/Medicine.php");
	require_once('classes/sellingPoint.php');
	$selling=new sellingPoint();
	$medicine=new Medicine();
	$user=new User();
	$connect=new Connection();
	$supplier=new Supplier();

// 	if(isset($_POST['med_id'])){
// 		 $med_id=$_POST['med_id'];
//                             // echo $id."<br>";
//                              echo $med_id."<br>";
// // 	$name="vidong
//                   //   $id=$_POST['delete_id'];
//                   //   echo $id;
//                   }
                  
                  $id=15;
                  foreach (sellingPoint::get_price_via_medicineid($id) as $value) {
                    echo $value['retail'];
                  }

                  $delete="DELETE * FROM medicine where"

                 // $selling->change_quantity($id,$quantity);
               
	

 ?>

 