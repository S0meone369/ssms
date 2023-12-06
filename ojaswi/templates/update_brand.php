<!-- Modal -->
<div class="modal fade" id="form_brand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="update_brand_form" onsubmit="return false">
            <div class="mb-3">
              <label>Brand</label>
               <input type="hidden" value="" name="brand_id" id="brand_id"/>
              <input type="text" class="form-control" id="update_brand" name="update_brand">
              <small id="brand_error" class="form-text text-muted"></small>
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