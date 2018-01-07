
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
                  <th>Category Name</th>
                  <th>Description</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($medicine->get_category() as $row){
                    echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['discription']."</td>";
                      
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