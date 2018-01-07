<?php
	
	/**
	* 
	*/
	class Connection {

		public $connect;
		
		public function __construct()	{
			$this->connect= new mysqli($host="localhost",$user="root",$pw="",$db="pharmacy_stock_db");
			return $this->connect;
		}


	//insert user
		public function add_user($name,$mobile,$address,$username,$priviledge){
		$insert="INSERT into user(user_id,priviledge,name,mobile,address) values('$username','$priviledge','$name','$mobile','$address')";
		if($this->connect->query($insert)){
			header("location: test.php? check='successful insert user'");
		}else{
			header("location: test.php? check='user not inserted.. ERROR'");
		}
	}

	//insert supplier


	//insert medicine category
		public function add_med_category($name,$description){
			$insert = "INSERT into medic_category(name,discription) values('$name','$description')";
			if($this->connect->query($insert)){
			header("location: test.php? check='successful insert medicine category'");
		}else{
			header("location: test.php? check='medicine category not inserted.. ERROR'");
		}
		}

	//insert medicine
	public function add_medicine($name,$category,$unit_measurement,$description){
		$insert="INSERT into medicine(med_name,med_category,desciption,unit_mesurement) values('$name','$category','$description','$unit_measurement')";
		if($this->connect->query($insert)){
			header("location: test.php? check='successful insert medicine'");
		}else{
			header("location: test.php? check='medicine not inserted.. ERROR'");
		}
	}


		}


?>