<div class="modal fade" id="delete_supplier<?php echo $row['id']; ?>" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteProductModalLabel">Confirm Delete</h4>
      </div>
      <div class="modal-body">

        Are you sure want to delete <b style="color: green;"><?php
        $id=$row['id'];
         foreach($supplier->get_specific_supplier($id) as $sname){
            echo $sname['name'];
         } ?></b> from list
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" href="?delete_id=<?php echo $id; ?>" ><i class="icon-check"></i>Yes</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
               
      </div>
    </div>
  </div>
</div>