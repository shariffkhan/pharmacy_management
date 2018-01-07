<?php
	require_once('Connection.php');
class SellingPoint{
	//adding items to cat

	public function get_OnCurrentSell($stock_id){
		$connect=new Connection();
		$select = "SELECT m.id as med_id,m.med_name as med_name,s.retail as retail,s.wholesale as wholesale
		 from medicine m 
		 join medic_stock_handler s on m.id=s.medic_id
		 where s.id=$stock_id";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
	}

	public static function get_price_via_medicineid($id){
		$connect=new Connection();
		$select="SELECT s.retail as retail from sales_cat s where s.stock_id in(SELECT ms.id from medic_stock ms where ms.medicine_id=$id) LIMIT 1";
		$querry=$connect->connect->query($select);
		return $querry;
	}

	public function check_latest_cat(){
		$connect=new Connection();
		$select="SELECT sell_cat_id as cat_id FROM medic_sales where id=(SELECT MAX(id) FROM medic_sales) LIMIT 1";
		$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result=$row['cat_id'];
			}
			if($result==null){
				$cat_id='AGS-010';
			}else{
				$sub = substr($result, 5);
				$cat_id="AGS-0" . ($sub + 1);
			}
			return $cat_id;
	}



	public function OnCurrentSell($med_name,$retail){
		
			$connect=new Connection();
			//
		//$cat=10;
		$cat_id=$this->check_latest_cat();
		$quantity=1;
		$total=$quantity*$retail;
		$seller='Chambili Watatu';
		$status='temporary';
			
				$insert="INSERT INTO on_current_cat(cat_id,medic_name,quantity,price,total,seller_name,status) values('$cat_id','$med_name',$quantity,$retail,$total,'$seller','$status')";
				$connect->connect->query($insert);
	}

	//display items to cat
	public function get_OnCurrentCat(){
			$connect=new Connection();
			$select="SELECT * FROM on_current_cat o where o.status='temporary'";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
	}

	public function get_total_oncurrentcat(){
		$connect=new Connection();
			$select="SELECT COUNT(o.id) as max FROM on_current_cat o where o.status='temporary'";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result =$row['max'];
			}
			return $result;
	}

	public function get_finished_OnCurrentCat($id){
		$connect=new Connection();
			$select="SELECT * FROM on_current_cat o where o.status='temporary' and id=$id";
			$querry=$connect->connect->query($select);
			$result=array();
			while($row=$querry->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
	}

	public function change_status_oncat(){
		$connect=new Connection();
		$delete="TRUNCATE TABLE on_current_cat";
          $connect->connect->query($delete);
	}

	//update quantity when selling products
	public static function change_quantity($id,$med_name, $price,$quantity){
		$connect = new Connection();

		$selectmn="SELECT m.id as mid from medicine m where m.med_name='$med_name'";
		$querry=$connect->connect->query($selectmn);
		$result=array();
		while($row=$querry->fetch_assoc()){
				$mid = $row['mid'];
		}

		$med_id = $mid;


        $overallprice = $price * $quantity;
		$change="UPDATE on_current_cat o SET o.quantity = $quantity, o.total = $overallprice WHERE o.id = $id";
		$res = $connect->connect->query($change);
		return $res;
	}

	public static function get_field_price($id) {
		$connect = new Connection();
		$quantity = 0;
		$price = 0;
		$q_query = "SELECT * FROM on_current_cat";
		$exec_query = $connect->connect->query($q_query);
		while($qrow=$exec_query->fetch_assoc()){
			$quantity = $quantity + $qrow['quantity'];
			$price = $price + $qrow['total'];
		}

		$select="SELECT o.quantity, o.total as total FROM on_current_cat o WHERE o.id = $id LIMIT 1";
		$querry=$connect->connect->query($select);
		$result=array();
		$count = 0;
		while($row=$querry->fetch_assoc()){
			$result[] = $row['total'];
			$result[] = $quantity;
			$result[] = $id;
			$result[] = $price;

			$count++;
		}

		return $result;
	}

	public function get_sum_ofcat(){
		$connect = new Connection();
		$select="SELECT SUM(o.quantity) as qty, SUM(o.total) as total from on_current_cat o";
		$querry=$connect->connect->query($select);
		$result=array();
		while($row=$querry->fetch_assoc()){
				$result[] = $row;
		}
		return $result;
	}


	public function get_total_sales(){
		$connect=new Connection();
		$select="SELECT COUNT(id) as total from medic_sales";
		$querry=$connect->connect->query($select);
		$result=array();
		while($row=$querry->fetch_assoc()){
				$result= $row['total'];
		}
		return $result;
	}


	public function get_all_sales(){
		$connect=new Connection();
		$select="SELECT ms.id as id, m.med_name as name, ms.price as price, ms.quantity_sold as qty, ms.amount as amount 
		from medic_sales ms 
		join medic_stock_handler msh on msh.id=ms.stock_id 
		join medicine m on m.id=msh.medic_id";
		$querry=$connect->connect->query($select);
		$result=array();
		while($row=$querry->fetch_assoc()){
				$result[]= $row;
		}
		return $result;
	}


}
?>