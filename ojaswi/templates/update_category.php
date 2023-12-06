<!-- Modal -->
<div class="modal fade" id="form_category1" name="form_category"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Categories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="update_category_form" onsubmit="return false">
            <div class="mb-3">
              <label>Category</label>
              <input type="hidden" value="" name="cat_id" id="cat_id"/>
              <input type="text" class="form-control" id="update_cat" name="update_cat">
              <small id="cat_error" class="form-text text-muted"></small>
            </div>

            <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Category</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>