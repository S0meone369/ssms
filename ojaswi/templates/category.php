<!-- Modal -->
<script type="text/javascript" src="js/main.js"></script>
<div class="modal fade" id="form_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Categories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="category_form" onsubmit="return false">
            <div class="mb-3">
              <label>Category</label>
              <input type="text" class="form-control" id="cat_name" name="cat_name">
              <!-- <small id="cat_error1" class="form-text text-muted">lmfao</small> -->
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