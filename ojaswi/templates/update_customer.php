<!-- Modal -->
<div class="modal fade" id="form_customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Update Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="update_customer_form" onsubmit="return false">
            <div class="mb-3">  
              <label>Customer Name</label>
               <input type="hidden" value="" name="customer_id" id="customer_id"/>
              <input type="text" class="form-control" id="update_customername" name="update_customername">
              <small id="cn_error" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Address</label>
              <input type="text" class="form-control" id="update_customeraddress" name="update_customeraddress">
              <small id="ca_error" class="form-text text-muted"></small>
            </div>
            <div class="mb-3">
              <label>Contact</label>
              <input type="text" class="form-control" id="update_customercontact" name="update_customercontact">
              <small id="cc_error" class="form-text text-muted"></small>
            </div>
             <div class="mb-3">
              <label>PAN No</label>
              <input type="text" class="form-control" id="update_customerpan" name="update_customerpan">
              <small id="cp_error" class="form-text text-muted"></small>
            </div>
 
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>