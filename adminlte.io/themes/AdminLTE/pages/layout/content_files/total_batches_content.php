
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
              <h3 class="box-title">List of all Suppliers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Batch Number</th>
                  <th>Supplier Name</th>
                  <th>Total Products</th>
                  <th>Date Created</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($stock->get_stock() as $row){
                    echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['b_id']."</td>";
                      echo "<td>".$row['supplier_name']."</td>";
                      echo "<td>".$row['quantity']."</td>";
                      echo "<td>".$row['date_created']."</td>";
                      
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