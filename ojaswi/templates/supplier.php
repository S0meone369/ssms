<!-- Modal -->

<div class="modal fade" id="form_suppliers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="supplier_form" onsubmit="return false">
            <div class="mb-3">
              <label>Supplier Name</label>
              <input type="text" class="form-control" id="supplier_name" name="supplier_name">
              <small id="sn_error1" class="form-text text-muted"></small>
            </div>  
            <div class="mb-3">
              <label>Address</label>
              <input type="text" class="form-control" id="supplier_address" name="supplier_address">
              <small id="sa_error1" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Contact</label>
              <input type="text" class="form-control" id="supplier_contact" name="supplier_contact">
              <small id="sc_error1" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>supplier pan</label>
              <input type="text" class="form-control" id="supplier_pan" name="supplier_pan">
              <small id="sp_error1" class="form-text text-muted"></small>
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
