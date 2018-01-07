
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
        <?php if(isset($_GET['check'])){
          echo $_GET['check'];
        } ?>
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>User Name</th>
                  <th>Phone Number</th>
                  <th>Address</th>
                  <th>Priviledge</th>
                  <th>Details</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($user->get_all_users() as $row){
                    echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['full_name']."</td>";
                      echo "<td>".$row['user_name']."</td>";
                      echo "<td>".$row['mobile']."</td>";
                      echo "<td>".$row['address']."</td>";
                      echo "<td>".$row['priviledge']."</td>";
                      echo "<td>".$row['details']."</td>";
                      ?>
                      <td>
                        <?php 
                        if(($row['status'])=='0')
  {
?>
<a href="classes/Action.php?active_user=<?php echo $row['id'];?>" 
 class="btn bg-olive" > Deactivate </a>
<?php
}
if(($row['status'])=='1')
{
?>
<a href="classes/Action.php?active_user=<?php echo $row['id'];?>" 
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
          <!-- /.box -->

  </section>
</div>
<!-- end content_wrapper -->