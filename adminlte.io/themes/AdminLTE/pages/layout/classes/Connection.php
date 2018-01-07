<?php
	
	/**
	* 
	*/
	class Connection {

		private $host="localhost";
		private $user="root";
		private $pw="";
		private $db="pharmacy_stock_db";

		var $connect;
		
		public function __construct()	{
			$this->connect= new mysqli($this->host,$this->user,$this->pw,$this->db);
			return $this->connect;
		}
	
	public function total_medicine(){
		$select="SELECT COUNT(medicine.id) as total from medicine ";
		$result=$this->connect->query($select);
		return $result;
	}

	public function total_category(){
		$select="SELECT COUNT(medic_category.id) as total from medic_category ";
		$result=$this->connect->query($select);
		return $result;
	}

	public function total_supplier(){
		$select="SELECT COUNT(supplier.id) as total from supplier ";
		$result=$this->connect->query($select);
		return $result;
	}

	public function total_batches(){
		$select="SELECT COUNT(medic_stock.id) as total from medic_stock ";
		$result=$this->connect->query($select);
		return $result;
	}

	public function last_stock_id(){
		$select="SELECT MAX(medic_stock.id) as max from medic_stock";
		$result=$this->connect->query($select);
		return $result;
	}

	



	//insert user
	// 	public function add_user($name,$mobile,$address,$username,$priviledge){
	// 	$insert="INSERT into user(user_id,priviledge,name,mobile,address) values('$username','$priviledge','$name','$mobile','$address')";
	// 	if($this->connect->query($insert)){
	// 		header("location: test.php? check='successful insert user'");
	// 	}else{
	// 		header("location: test.php? check='user not inserted.. ERROR'");
	// 	}
	// }

	//insert supplier


	//insert medicine category
		// public function add_category($name,$details){
		// 	$insert = "INSERT into medic_category(name,discription) values('$name','$details')";
		// 	if($this->connect->query($insert)){
		// 	header("location: register.php? check='successful insert medicine category'");
		// }else{
		// 	header("location: register.php? check='medicine category not inserted.. ERROR'");
		// }
		// }

	//insert medicine
	// public function add_medicine($name,$category,$measurement,$details){
	// 	$insert="INSERT into medicine(med_name,med_category,desciption,unit_mesurement) values('$name','$category','$details','$measurement')";
	// 	if($this->connect->query($insert)){
	// 		header("location: register.php? check='successful insert medicine'");
	// 	}else{
	// 		header("location: register.php? check='medicine not inserted.. ERROR'");
	// 	}
	// }


		}


?>