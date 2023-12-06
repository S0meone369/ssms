<!-- Modal -->
<div class="modal fade" id="form_customers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="customer_form" onsubmit="return false">
            <div class="mb-3">
              <label>Customer Name</label>
              <input type="text" class="form-control" id="customer_name" name="customer_name">
              <small id="cn_error1" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Address</label>
              <input type="text" class="form-control" id="customer_address" name="customer_address">
              <small id="ca_error1" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Contact</label>
              <input type="text" class="form-control" id="customer_contact" name="customer_contact">
              <small id="cc_error1" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>PAN No:</label>
              <input type="text" class="form-control" id="customer_pan" name="customer_pan">
              <small id="cp_error1" class="form-text text-muted"></small>
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