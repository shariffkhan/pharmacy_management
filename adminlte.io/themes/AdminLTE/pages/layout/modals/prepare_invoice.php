<div class="modal fade" id="invoice" role="dialog" >
  <div class="modal-dialog" style="width: 60%;">
    <div class="modal-content" >
      <div class="modal-header" style="background: deepskyblue; ">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteProductModalLabel">Invoice</h4>
      </div>
      <div class="modal-body" style="padding: 2% 4%;" id="sell-product-invoice-modal-content-container">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn bg-light-blue" href="?delete_id=<?php echo $id; ?>" ><i class="icon-check"></i>Print</a>
        
      </div>
    </div>
  </div>
</div>