<div class="modal fade" id="add_user" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteProductModalLabel">
          Add New User
        </h4>
      </div>
      <div class="modal-body">

        <!-- form start -->
            <form role="form" action="" method="POST">
              <input type="hidden" name="id" value="">
              <div class="box-body">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="fname" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" class="form-control" name="uname" placeholder="User name">
                </div>
                <div class="form-group">
                  <label>Phone number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Contactt">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Location/Address">
                </div>
                <div class="form-group">
                  <label>Position/Priviledge</label>
                  <select name="priviledge" class="form-control">
                    <?php foreach($user->get_all_priviledge() as $value){
                      ?>
                    <option value="<?php echo $value['id']; ?>">
                      <?php echo $value['name']; ?>
                    </option>
                    <?php
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Other Details</label>
                  <textarea class="form-control" name="details" placeholder="Details"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="modal-footer">
                <button type="submit" name="submit_user" class="btn btn-primary pull-left">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </form>

      </div>
    </div>
  </div>
</div>