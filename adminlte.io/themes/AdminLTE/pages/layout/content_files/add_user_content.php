
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
            <div style="padding: 3%; ">
              <a href="priviledge.php">
                <div class="inline">
                  <button type="button" class="btn btn-primary btn-xs" style="padding: 2%; font-size: 16px;">  Manage Priviledges
                    </button>
                </div>
              </a>
                <div class="inline">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#add_user" style="padding: 2%; font-size: 16px;">  Add user
                    </button>
                </div>
                <a href="total_user.php">
                <div class="inline">
                    <button type="button" class="btn btn-primary btn-xs" style="padding: 2%; font-size: 16px;">  See users
                    </button>
                </div>
              </a>
                            
          </div>
        </div>
          <!-- /.box -->
<?php include 'modals/add_user_modal.php'; ?>
  </section>
</div>
<!-- end content_wrapper -->