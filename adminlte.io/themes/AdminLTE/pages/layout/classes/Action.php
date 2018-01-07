<?php 
	require_once("Connection.php");
	require_once("Supplier.php");
	require_once("User.php");
	$supplier=new Supplier();
	$user=new User();

	if(isset($_GET['status'])){
		$status1=$_GET['status'];

		foreach($supplier->get_specific_supplier($status1) as $row){
			$status_var=$row['status'];
				if($status_var=='0'){
					$status_state=1;
				}else{
					$status_state=0;
				}
					$supplier->change_status($status1,$status_state);

				}
	}

	if(isset($_GET['active_user'])){
		$status1=$_GET['active_user'];

		foreach($user->get_specific_user($status1) as $row){
			$status_var=$row['status'];
				if($status_var=='0'){
					$status_state=1;
				}else{
					$status_state=0;
				}
					$user->change_status($status1,$status_state);

				}
	}

 ?>