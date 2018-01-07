
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
              <span style="color: red;"><?php 
                if(isset($_GET['success_delete'])){
      $pop=$_GET['success_delete'];

      echo $pop;
    }
   ?>
     
   </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Supplier Name</th>
                  <th>Phone Number</th>
                  <th>Location</th>
                  <th>Address</th>
                  <th>Other Details</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($supplier->get_all_supplier() as $row){
                    echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['phone_number']."</td>";
                      echo "<td>".$row['location']."</td>";
                      echo "<td>".$row['address']."</td>";
                      echo "<td>".$row['comment']."</td>";
                      ?>
                      <td>
                        <?php 
                        if(($row['status'])=='0')
  {
?>
<a href="classes/Action.php?status=<?php echo $row['id'];?>" 
 class="btn bg-olive" > Deactivate </a>
<?php
}
if(($row['status'])=='1')
{
?>
<a href="classes/Action.php?status=<?php echo $row['id'];?>" 
 class="btn bg-danger" > Activate</a>
<?php
}
?>
                      </td>
                      <td>
                             <b data-placement="top" data-toggle="tooltip" title="Edit">
                              <button type="button" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_supplier<?php echo $row['id']; ?>" >
                                <span class="glyphicon glyphicon-pencil"></span>
                              </button>
                             </b>

                             <b data-placement="top" data-toggle="tooltip" title="Delete">
                             <button type="button" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_supplier<?php echo $row['id']; ?>">
                                <span class="glyphicon glyphicon-trash">
                                    </span>
                             </button>
                           </b>

                           </td>

                           <?php
                    echo "</tr>";
                     include 'modals/edit_supplier.php';
                     include 'modals/delete_supplier.php'; 
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
