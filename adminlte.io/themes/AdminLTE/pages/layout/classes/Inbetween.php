<?php 
	require_once("Connection.php");
	require_once("Stock.php");
	

	class Inbetween{

		public function check_medicine_price($sup_id,$med_id,$batch,$quantity,$buying_price,$retail,$wholesale,$date_issued,$date_expire,$details){
			$stock=new Stock();
			$connection=new Connection();

			foreach($connection->last_stock_id() as $max){
				$id = $max['max']+1;

				$stock->add_stock($id,$sup_id,$med_id,$batch,$quantity,$buying_price,$retail,$wholesale,$date_issued,$date_expire,$details);
			}
			
			
		}


	}

 ?>