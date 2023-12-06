<!-- Modal -->
<div class="modal fade" id="form_supplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="update_supplier_form" onsubmit="return false">
            <div class="mb-3">
              <label>Supplier Name</label>
               <input type="hidden" value="" name="supplier_id" id="supplier_id"/>
              <input type="text" class="form-control" id="update_suppliername" name="update_suppliername">
              <small id="sn_error" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Address</label>
              <input type="text" class="form-control" id="update_supplieraddress" name="update_supplieraddress">
              <small id="sa_error" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Contact</label>
              <input type="text" class="form-control" id="update_suppliercontact" name="update_suppliercontact">
              <small id="sc_error" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>supplier pan</label>
              <input type="text" class="form-control" id="update_supplierpan" name="update_supplierpan">
              <small id="sp_error" class="form-text text-muted"></small>
            </div>
            

            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>