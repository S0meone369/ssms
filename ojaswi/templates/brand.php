<!-- Modal -->
<div class="modal fade" id="form_brands" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="brand_form" onsubmit="return false">
            <div class="mb-3">
              <label>Brand</label>
              <input type="text" class="form-control" id="brand_name" name="brand_name">
              <small id="brand_error1" class="form-text text-muted"></small>
            </div>

            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>