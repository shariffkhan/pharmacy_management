
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel<?php 
    // get notification 
     if(isset($_GET['check'])){
    $check=$_GET['check'];
    echo $check;
  }
   ?></small>
        <small style="color: red;"></small>
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
        <a  href="#1a" data-toggle="tab">Register Supplier</a>
      </li>
      <li><a href="#3a" data-toggle="tab">Register Medicine Category</a>
      </li>
      <li><a href="#2a" data-toggle="tab">Register Medicine</a>
      </li>
      <!-- <li><a href="#4a" data-toggle="tab">Background color</a>
      </li> -->
    </ul>

      <div class="tab-content clearfix">
        <!-- start tab one -->
        <div class="tab-pane active" id="1a">
         <!--  start form for supplier -->
            <div class="box-header with-border">
              <h3 class="box-title">Register New Supplier</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="POST">
              <div class="box-body" >
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Supplier Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Supplier Name">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Mobile</label>

                  <div class="col-sm-10">
                    <input type="text" name="mobile" class="form-control" id="inputPassword3" placeholder="Mobile">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Location</label>

                  <div class="col-sm-10">
                    <input type="text" name="location" class="form-control" id="inputEmail3" placeholder="Location">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Address">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Other Details</label>

                  <div class="col-sm-10">
                    <textarea rows="4" name="details" class="form-control" id="inputEmail3" placeholder="Other Details"></textarea>
                  </div>
                </div>
                
                <button type="submit" name="add_supplier" class="btn btn-block bg-purple">Register</button>
              </div>
            </form>
          <!-- End New supplier -->
        </div>
        
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
            <form class="form-horizontal" action="" method="POST">
              <div class="box-body" >
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Supplier Name">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Other Description</label>

                  <div class="col-sm-10">
                    <textarea rows="4" name="details" class="form-control" id="inputEmail3" placeholder="Other Details"></textarea>
                  </div>
                </div>
                
                <button type="submit" name="add_category" class="btn btn-block bg-purple">Register</button>
              </div>
            </form>
        </div>
        <!-- end tab one -->
       <!--  =
        =
        =
        =
        =
        = -->
        <!-- start second tab -->
        <div class="tab-pane" id="2a">
                   <!--  start form for supplier -->
            <div class="box-header with-border">
              <h3 class="box-title">Register New Medicine</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="POST">
              <div class="box-body" >
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Medicine Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Medicine Name">
                  </div>
                </div>
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Medicine Category</label>

                  <div class="col-sm-10">
                       <select name="category" class="form-control">
                  <?php 
                  
                    foreach($medicine->get_category() as $value){
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

                <div class="form-group" id="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Reorder Level</label>

                  <div class="col-sm-10">
                    <input type="text" name="reorder" class="form-control" placeholder="Reorder">
                  </div>
                </div>

                <div class="form-group" id="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Unit of Measurement</label>

                  <div class="col-sm-10">
                    <input type="text" name="measurement" class="form-control" placeholder="Measurement">
                  </div>
                </div>
                
                <div class="form-group" id="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Other Description</label>

                  <div class="col-sm-10">
                    <textarea rows="4" name="details" class="form-control" id="inputEmail3" placeholder="Other Details"></textarea>
                  </div>
                </div>
                
                <button type="submit" name="add_medicine" class="btn btn-block bg-purple">Register</button>
              </div>
            </form>
        </div>
        <!-- end second tab -->
          <!-- <div class="tab-pane" id="4a">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
        </div> -->
      </div>
  </div>


<!-- 
<hr></hr>
<div class="container"><h2>Example tab 2 (using standard nav-tabs)</h2></div>

<div id="exTab2" class="container"> 
<ul class="nav nav-tabs">
      <li class="active">
        <a  href="#1" data-toggle="tab">Overview</a>
      </li>
      <li><a href="#2" data-toggle="tab">Without clearfix</a>
      </li>
      <li><a href="#3" data-toggle="tab">Solution</a>
      </li>
    </ul>

      <div class="tab-content ">
        <div class="tab-pane active" id="1">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
        </div>
        <div class="tab-pane" id="2">
          <h3>Notice the gap between the content and tab after applying a background color</h3>
        </div>
        <div class="tab-pane" id="3">
          <h3>add clearfix to tab-content (see the css)</h3>
        </div>
      </div>
  </div>

<hr></hr>

<div class="container"><h2>Example 3 </h2></div>
<div id="exTab3" class="container"> 
<ul  class="nav nav-pills">
      <li class="active">
        <a  href="#1b" data-toggle="tab">Overview</a>
      </li>
      <li><a href="#2b" data-toggle="tab">Using nav-pills</a>
      </li>
      <li><a href="#3b" data-toggle="tab">Applying clearfix</a>
      </li>
      <li><a href="#4a" data-toggle="tab">Background color</a>
      </li>
    </ul>

      <div class="tab-content clearfix">
        <div class="tab-pane active" id="1b">
          <h3>Same as example 1 but we have now styled the tab's corner</h3>
        </div>
        <div class="tab-pane" id="2b">
          <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
        </div>
        <div class="tab-pane" id="3b">
          <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
        </div>
          <div class="tab-pane" id="4b">
          <h3>We use css to change the background color of the content to be equal to the tab</h3>
        </div>
      </div>
  </div> -->


    </section>
<!-- end content_wrapper -->
</div>
<!-- end content_wrapper -->