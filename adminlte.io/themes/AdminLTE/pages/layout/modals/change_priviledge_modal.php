<div class="modal fade" id="change_priviledge" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteProductModalLabel">
          Change Priviledge Names
        </h4>
      </div>
      <div class="modal-body">

        <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Level 1:</label>
                  <input type="text" class="form-control" name="super" value="<?php 
                  $id=1;
                  foreach($user->get_priviledge($id) as $value){
                    echo $value['name'];
                  } ?>">
                </div>
                <div class="form-group">
                  <label>Level 2:</label>
                  <input type="text" class="form-control" name="admin" value="<?php 
                  $id=2;
                  foreach($user->get_priviledge($id) as $value){
                    echo $value['name'];
                  } ?>">
                </div>
                <div class="form-group">
                  <label>Level 3:</label>
                  <input type="text" class="form-control" name="normal_user" value="<?php 
                  $id=3;
                  foreach($user->get_priviledge($id) as $value){
                    echo $value['name'];
                  } ?>">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="modal-footer">
                <button type="submit" name="submit_priviledge" class="btn btn-primary pull-left">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </form>

      </div>
    </div>
  </div>
</div>