<?php 
	require_once("Connection.php");
	
	class User{
		//public $connect;
	public function add_user($fname,$uname,$mobile,$address,$priviledge,$details){
		$connect = new Connection();
		$arr=explode(' ', trim($fname));
		$pwd=$arr[0].'1234';
		$insert="INSERT into user(full_name,user_name,password,priviledge,mobile,address,details) values('$fname','$uname','$pwd','$priviledge','$mobile','$address','$details')";
		if($connect->connect->query($insert)){
			header("location: add_user.php?check=successful insert new user");
	}else{
		header("location: add_user.php?check=SORRY user not inserted");
		}
	}

	public function get_all_users(){
		$connect = new Connection();
		$select="SELECT * FROM user";
		$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
	}

	public function total_user(){
		$connect = new Connection();
		$select="SELECT COUNT(user.id) as total from user ";
		$result=$connect->connect->query($select);
		return $result;
	}


	public function change_priviledge($super,$admin,$normal_user){
		$connect=new Connection();
		$level1="Level 1:";
		$level2="Level 2:";
		$level3="Level 3:";
		$insert="UPDATE priviledge p SET p.name='$super' where p.level='$level1';";
		$insert .="UPDATE priviledge p SET p.name='$admin' where p.level='$level2';";
		$insert .="UPDATE priviledge p SET p.name='$normal_user' where p.level='$level3'";
		if($connect->connect->multi_query($insert)){
			header("location: priviledge.php? check=successful change priviledge levels");
		}else{
			header("location: priviledge.php? check=SORRY fail to change priviledges");
		}

	}


	public function get_priviledge($id){
		$connect=new Connection();
		$select="SELECT p.name as name FROM priviledge p where p.id=$id";
		$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
	}

	public function get_all_priviledge(){
		$connect=new Connection();
		$select="SELECT * FROM priviledge";
		$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
	}

	public function get_specific_user($id){
			$connect=new Connection();
			$select="SELECT * from user u where u.id=$id";
			$result=$connect->connect->query($select);
		
			return $result;
		}

		public function change_status($status1,$status_state){
			$connect=new Connection();
			$change="UPDATE user u SET u.status='$status_state'	WHERE u.id='$status1'";
			if($connect->connect->query($change)){
				header("location: ../total_user.php");
			}else{
				header("location: ../total_user.php");
			}
		}



	}
 ?>