<div class="modal fade" id="edit_supplier<?php echo $row['id']; ?>" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteProductModalLabel">
          Edit
          <b style="color: green;"><?php $id=$row['id'];
         foreach($supplier->get_specific_supplier($id) as $value){
            echo $value['name'];
            ?>
         </b> Details..
        </h4>
      </div>
      <div class="modal-body">

        <!-- form start -->
            <form role="form" action="" method="POST">
              <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Supplier Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $value['name']; ?>">
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" name="phone" value="<?php echo $value['phone_number']; ?>">
                </div>
                <div class="form-group">
                  <label>Location</label>
                  <input type="text" class="form-control" name="location" value="<?php echo $value['location']; ?>">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address" value="<?php echo $value['address']; ?>">
                </div>
                <div class="form-group">
                  <label>Other Details</label>
                  <textarea class="form-control" name="comment"><?php echo $value['comment']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="modal-footer">
                <button type="submit" name="edit_supp" class="btn btn-primary pull-left">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </form>

            <?php
            } ?>
      </div>
    </div>
  </div>
</div>