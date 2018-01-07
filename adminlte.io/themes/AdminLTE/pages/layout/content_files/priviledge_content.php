
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
        <div class="box-content">
        <div class="box-header" style="font-size: 18px;">
          <b>Manage priviledge levels of the company</b>
        </div>
        <div class="box-body col-md-6" style="">
            <div class="" style="padding: 3%; background: #fff; padding-left: 10%;">
              <div style="margin-bottom: 2%;">
                We have three priviledge levels as shown below:
              </div>
              <ul class="nav nav-pills nav-stacked" style="padding-bottom: 5%;">
                <li >
                  <label>Level 1:</label>
                  <b id="pname">
                    <?php 
                  $id=1;
                  foreach($user->get_priviledge($id) as $value){
                    echo $value['name'];
                  } ?>
                  </b>
                </li>
                <li>
                  <label>Level 2:</label><b id="pname">
                    <?php 
                  $id=2;
                  foreach($user->get_priviledge($id) as $value){
                    echo $value['name'];
                  } ?>
                  </b>
                </li>
                <li>
                  <label>Level 3:</label><b id="pname">
                    <?php 
                  $id=3;
                  foreach($user->get_priviledge($id) as $value){
                    echo $value['name'];
                  } ?>
                  </b>
                </li>
              </ul>
              <div class="inline" >
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#change_priviledge" style="padding: 2%; font-size: 16px;">  Change Priviledge Names
                    </button>
                </div>
          </div>
        </div>
        </div>
      </div>
          <!-- /.box -->
<?php include 'modals/change_priviledge_modal.php'; ?>
  </section>
</div>
<!-- end content_wrapper -->