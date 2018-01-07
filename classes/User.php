<?php 
	require_once("Connection.php");
	
	class User{
		//public $connect;
	public function add_user($name,$mobile,$address,$username,$priviledge){
		$connect = new Connection();
		$insert="INSERT into user(user_id,priviledge,name,mobile,address) values('$username','$priviledge','$name','$mobile','$address')";
		$connect->mysqli_query($insert);
			

	}



}
 ?>