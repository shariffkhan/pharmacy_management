<?php 
	require_once("Connection.php");
	//$connect=new Connection();

	class Supplier{
		

		public function add_supplier($name,$mobile,$location,$address,$details){
			$connect=new Connection();
			$insert="INSERT INTO supplier(name,phone_number,location,address,comment) VALUES('$name','$mobile','$location','$address','$details')";
			if($connect->connect->query($insert)){
			header("location: register.php? check='successful insert user'");
		}else{
			header("location: register.php? check='user not inserted.. ERROR'");
		}
		}

		public function get_all_supplier(){
			$connect=new Connection();
			$select="SELECT * FROM supplier";
			$querry = $connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}

		public function get_specific_supplier($id){
			$connect=new Connection();
			$select="SELECT * from supplier s where s.id=$id";
			$result=$connect->connect->query($select);
		
			return $result;
		}

		public function delete_supplier($id){
			$connect=new Connection();
			$delete="DELETE FROM supplier WHERE supplier.id=$id";
			if($connect->connect->query($delete)){
				header("location: all_supplier.php?success_delete=you have successful delete one row");
			}else{
				header("location: all_supplier.php?success_delete=SORRY.. fail to delete, try again");
			}
		}

		public function change_supplier($id,$name,$phone,$location,$address,$comment){
			$connect=new Connection();
			$change="UPDATE supplier s SET s.name='$name',s.phone_number='$phone',s.location='$location',s.address='$address',s.comment='$comment' 
			WHERE s.id='$id'";
			if($connect->connect->query($change)){
				header("location: all_supplier.php?success_delete=you have successful change one row");
			}else{
				header("location: all_supplier.php?success_delete=SORRY.. fail to change, try again");
			}
		}

		public function change_status($status1,$status_state){
			$connect=new Connection();
			$change="UPDATE supplier s SET s.status='$status_state'	WHERE s.id='$status1'";
			if($connect->connect->query($change)){
				header("location: ../all_supplier.php");
			}else{
				header("location: ../all_supplier.php");
			}
		}


	}
 ?>