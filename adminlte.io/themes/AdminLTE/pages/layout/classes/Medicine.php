<?php 
	require_once("Connection.php");
	//$connect=new Connection();.

	class Medicine{

		public function add_medicine($name,$category,$reorder,$measurement,$details){
			$connect=new Connection();
			$insert="INSERT into medicine(med_name,med_category,reorder_level,desciption,unit_mesurement) values('$name','$category','$reorder','$details','$measurement')";
			if($connect->connect->query($insert)){
			header("location: register.php? check=successful medicine inserted");
		}else{
			header("location: register.php? check= SORRY.. medicine not inserted");
		}
		}

		public function add_category($name,$details){
			$connect=new Connection();
			$insert = "INSERT into medic_category(name,discription) values('$name','$details')";
			if($connect->connect->query($insert)){
			header("location: register.php? check=successful medicine category inserted");
		}else{
			header("location: register.php? check= medicine category not inserted");
		}
		}

		public function get_all_medicine(){
			$connect=new Connection();
			$select="SELECT m.id as id, m.med_name as name, m.med_category as category, m.unit_mesurement as unit, ms.quantity as qty, m.desciption as description, ms.retail as price, ms.wholesale as amount
			FROM medicine m
			join medic_stock_handler ms on ms.medic_id=m.id";			
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}

		public function get_all_medicine_frommedicine(){
			$connect=new Connection();
			$select="SELECT * from medicine";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}

		public function get_all_medicine_fromstock(){
			$connect=new Connection();
			$select="SELECT ms.id as id,m.med_name as name
				from medicine m 
				join medic_stock_handler ms on m.id=ms.medic_id";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}

		public function get_all_medicin($medic_id){
			$connect=new Connection();
		//	$insert="INSERT INTO medic_stock("
			$select = "SELECT m.med_name as name,s.whole_sell as wholesale,s.retail as retail  
						from medicine m
						join sales_cat s on  m.id=s.medic_id
						join medic_stock ms on m.id=s.medicine_id 
						where ms.medicine_id=$medic_id";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}

		public function get_specific_cat($category_id){
			$connect=new Connection();
			$select="SELECT m.name as name from medic_category m where m.id=$category_id";
			$result=$connect->connect->query($select);
		
			return $result;

		}

		public function get_category(){
			$connect=new Connection();
			$select="SELECT * FROM medic_category";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}

	}
 ?>