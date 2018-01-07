<?php 
	require_once("Connection.php");

	class Stock{

		public function add_stock($id,$sup_id,$med_id,$batch,$quantity,$buying_price,$retail,$wholesale,$date_issued,$date_expire,$details){
			$connection=new Connection();
			$insert="INSERT INTO medic_stock(id,medicine_id,supplier_id,batch_id,quantity,buying_cost,retail_sale,whole_sale,date_issued,date_expired,description) values($id,$med_id,$sup_id,'$batch',$quantity,'$buying_price','$retail','$wholesale','$date_issued','$date_expire','$details')";
			if($connection->connect->query($insert)){

				$this->add_stock_tohandler($med_id,$quantity,$retail,$wholesale);
		}else{
			header("location: managestock.php? check='stock not inserted.. ERROR'");
		}
		}

		public function add_stock_tohandler($med_id,$quantity,$retail,$wholesale){
		$connection=new Connection();

		// get total quantity of inserted medicine
		$select="SELECT * from medic_stock_handler m where m.medic_id=$med_id";
		$result=$connection->connect->query($select);
		if(mysqli_num_rows($result) == 0){
			$insert="INSERT INTO medic_stock_handler(medic_id,quantity,retail,wholesale) values('$med_id','$quantity','$retail','$wholesale')";
			if($connection->connect->query($insert)){
			header("location: managestock.php? check=successful medicine and stock inserted");
		}else{
			header("location: managestock.php? check= medicine price not inserted");
		}
		}else{
			$select="SELECT m.quantity as qty from medic_stock_handler m where m.medic_id=$med_id";
			$querry=$connection->connect->query($select);
			$in_quantity=array();
			while($row=$querry->fetch_assoc()){
				$in_quantity=$row['qty'];
			}
			$new_qty=$in_quantity+$quantity;
			$update="UPDATE medic_stock_handler m SET  m.quantity=$new_qty, m.retail=$retail, m.wholesale=$wholesale where m.medic_id=$med_id";
			if($connection->connect->query($update)){
			header("location: managestock.php? check=successful medicine and stock inserted");
		}else{
			header("location: managestock.php? check= medicine price not inserted");
		}		
	}
		
	}


		public function get_stock(){
			$connection=new Connection();
			$select="SELECT ms.id as id,ms.batch_id as b_id, s.name as supplier_name,ms.quantity as quantity,ms.date_created as date_created FROM medic_stock ms join supplier s on s.id=ms.supplier_id";
			$querry=$connection->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}


		public function minimize_from_stock($quantity,$medicine){
			$connection=new Connection();
			$select="SELECT ms.id as id, ms.quantity as qty from medic_stock_handler ms where ms.medic_id in(SELECT m.id from medicine m where m.med_name='$medicine')";
			// die(var_dump($select));

			$querry=$connection->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result=$row['qty'];
				$id=$row['id'];
			}
			$total_quantity=$result;
			$remain_quantity=$total_quantity-$quantity;

			$update="UPDATE medic_stock_handler ms SET ms.quantity=$remain_quantity where ms.id=$id";
			$connection->connect->query($update);

		}

		



	}

 ?>