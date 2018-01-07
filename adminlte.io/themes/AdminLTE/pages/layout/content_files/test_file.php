<?php 

  require_once("../classes/Supplier.php");
  require_once("../classes/Medicine.php");
  require_once("../classes/Stock.php");
  require_once("../classes/Connection.php");
  require_once("../classes/SellingPoint.php");
  $stock=new Stock();
  $medicine=new Medicine();
  $supplier=new Supplier();
  $connect=new Connection();
  $selling=new SellingPoint();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>here</title>
 </head>
 <body>

 	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody id="tbody">
                  <?php
                   foreach($selling->get_OnCurrentCat() as $value){
                       $id=$value['id'];
                      $quantity=$value['quantity'];
                    echo "<tr>";
?>
                           <td><?php echo $id; ?></td>
                            <td><?php echo $value['medic_name']; ?></td>
                            <td>
                              <form action="" method="POST">
                                <input type="text" class="change_qty" name="quantity" value="<?php echo $quantity; ?>" style="width: 15%; text-align: center;">
                                <input type="hidden" name="hid" value="<?php echo $id; ?>">
                                <input type="hidden" name="med_name" value="<?php echo $value['medic_name']; ?>">
                            </form>
                            </td>
                            <td class="price"><?php echo $value['price']; ?></td>
                            <td><?php echo $value['total']; ?></td>
                
                           <?php
                    echo "</tr>";
            
                    }
                   ?>
                </tbody>
              </table>
            <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>

              <script>
              	var data = $('.change_qty');
        		console.log(data);

        		data.on('change', function () {
        			console.log($(this).val());
        			// get the parent value

        			var parentvar = data.parent();
        			console.log(parentvar);
        			$.ajax({
        				type: 'post',
        				url: 'test-add.php',
        				data: parentvar.serialize(),
        				success: function (data){
        					$('.price').html(data);
        				}
        			
        			});
        		})



   	
      
</script>
 
 </body>
 </html>