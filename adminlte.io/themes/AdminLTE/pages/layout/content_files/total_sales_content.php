
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

  <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Total Sales Of Today</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Items</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Amount</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($selling->get_all_sales() as $row){
                    echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['qty']."</td>";
                      echo "<td>".$row['price']."</td>";
                      echo "<td>".$row['amount']."</td>";
                      
                    echo "</tr>";
              }

                 ?>
                
                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

  </section>
</div>
<!-- end content_wrapper -->