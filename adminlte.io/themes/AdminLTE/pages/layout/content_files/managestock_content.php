
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
        <?php 
    // get notification 
  if(isset($_GET['check'])){
    
    $check=$_GET['check'];
    echo $check;
    
  }?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <!-- Main content -->

  <section class="content">
     
<div id="exTab1" class="container"> 
<ul  class="nav nav-pills">
      <li class="active">
        <a  href="#1a" data-toggle="tab">Register Stock</a>
      </li>
      <li ><a href="#modify" data-toggle="tab">Modify Stock</a>
      </li>
      <li><a href="#3a" data-toggle="tab">manage</a>
      </li>
    </ul>

      <div class="tab-content clearfix">
        <!-- start tab one -->
        <div class="tab-pane active" id="1a">
         <!--  start form for supplier -->
            <div class="box-header with-border">
              <h3 class="box-title">Register New Stock
               <?php 
        if(isset($_POST['supplier_stock'])){

          
         $_SESSION['id']=$_POST['name'];
         $_SESSION['batch']=date("Y/m/d-h:i");
         
         foreach($supplier->get_specific_supplier($_SESSION['id']) as $value){
          echo "from"." "."<b id=\"showpop\">".$value['name']."</b>"." "."with batch no"." "."<b id=\"showpop\">".$_SESSION['batch']."</b>";
    }
    
  }
   
                 ?>
                   
                 </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="exTab2"> 
<ul class="nav nav-tabs">
      <li class="<?php if(!isset($_POST['supplier_stock'])) echo "active"; ?>" >
        <a  href="#1" id="batan" data-toggle="tab">Select Supplier Name</a>
      </li>
      <li class="<?php if(isset($_POST['supplier_stock'])) echo "active"; ?>">


        <a href="#2"  id="batan" data-toggle="tab">Add Stock</a>
      </li>
    </ul>

      <div class="tab-content">
        <div class="tab-pane <?php if(!isset($_POST['supplier_stock'])) echo "active"; ?>" id="1">
          <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier Name</label>
                  <div class="form-group">
                    <div class="form-group">
                       <select name="name" class="form-control">
                  <?php 
                  
                    foreach($supplier->get_all_supplier() as $value){
                      ?>
                    <option value="<?php echo $value['id']; ?>">
                      <?php echo $value['name']; ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                 </div>
                </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="supplier_stock" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>

        <!-- ================================================== -->
        <!-- start inside two -->
        <div class="tab-pane <?php if(isset($_POST['supplier_stock'])) echo "active"; ?>" id="2">
          <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Medicine Name</label>

                  <div class="form-group">
                       <select name="med_name" class="form-control">
                  <?php 
                    foreach($medicine->get_all_medicine_frommedicine() as $value){
                      ?>
                    <option value="<?php echo $value['id']; ?>">
                      <?php echo $value['med_name']; ?>
                    </option>
                    <?php
                    }
                    ?>
                  </select>
                 </div>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Quatity</label>
                  <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Quatity">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Buying Price</label>
                  <input type="text" name="buying_price" class="form-control" id="exampleInputPassword1" placeholder="Price">
                </div>
                <div class="form-group">
                  <label>Retail Price</label>
                    <input type="text" name="retail" class="form-control" id="inputPassword3" placeholder="Retail Price">
                </div>
                <div class="form-group">
                  <label >Wholesale Price</label>
                    <input type="text" name="wholesale" class="form-control" id="inputPassword3" placeholder="Wholesale Price">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date issued</label>

                  <input type="text" name="issued" class="form-control" id="exampleInputPassword1" placeholder="Date Issued">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Date Expired</label>
                  
                  <input type="text" name="expire" class="form-control" id="exampleInputPassword1" placeholder="Expire Date">

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Other Description</label>
                  <div class="">
                    <textarea rows="4" name="details" class="form-control" id="inputEmail3" placeholder="Other Details"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit_stock" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
      </div>
  </div>
</div>


          <!-- End New supplier -->
       
        <!-- end tab one -->
       <!--  =
        =
        =
        =
        =
        = -->
        <!-- start second tab -->
        <div class="tab-pane" id="modify">
                   <!--  start form for supplier -->
            <div class="box-header with-border">
              <h3 class="box-title">Register New Stock

              </h3>
            </div>
                
                <form class="form-horizontal">
              <div class="box-body" >
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Name">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Other Description</label>

                  <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="inputEmail3" placeholder="Other Details"></textarea>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-block bg-purple">Register</button>
              </div>
            </form>


        </div>
        <!-- end second tab -->
       <!--  =
        =
        =
        =
        = -->
        <!-- start third tab -->
        <div class="tab-pane" id="3a">
                            <!--  start form for medicine category -->
            <div class="box-header with-border">
              <h3 class="box-title">Register New Medicine Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body" >
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Supplier Name">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Other Description</label>

                  <div class="col-sm-10">
                    <textarea rows="4" class="form-control" id="inputEmail3" placeholder="Other Details"></textarea>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-block bg-purple">Register</button>
              </div>
            </form>
        </div>
      </div>
  </div>



    </section>
<!-- end content_wrapper -->

</div>
<!-- end content_wrapper -->