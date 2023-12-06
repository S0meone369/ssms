<!-- Modal -->
<div class="modal fade" id="form_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="update_product_form"  onsubmit="return false">
              <div class="form-row">
                  <div class="form-group col-md-4">
                     <input type="hidden" value="" name="product_id" id="product_id"/>
                    <label for="inputEmail4">Date</label>
                    <input type="text" class="form-control" id="added_date" name="added_date" value="<?php echo date("Y-m-d");  ?>"  placeholder="Date" readonly/>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword4">Product Name</label>
                    <input type="text" class="form-control" id="update_product" name="update_product" placeholder="Enter Product Name" required/>
                    <small id="pro_error" class="form-text text-muted"></small>
                  </div>
              </div>
              <div class="form-group">
                <label>Categories</label>
                <select class="form-control select_cat" id="select_cat" name="select_cat" required/>
                  
                </select>
              </div>

              <div class="form-group">
                <label>Brand</label>
                <select class="form-control" id="select_brand" name="select_brand" required/>


                </select>
                
              </div>
              <div class="form-group">
                <label>Supplier</label>
                <select class="form-control" id="select_supplier" name="select_supplier" required/>


                </select>
                
              </div>
              <div class="form-group">
                  <label>Product Price</label>
                  <input type="text" class="form-control" id="product_price" name="product_price">
              </div>
              <div class="form-group">
                  <label>Product Quantity</label>
                   <input type="text" class="form-control" id="product_quantity" name="product_quantity">
              </div><br></br>
              <button type="submit" class="btn btn-success">Update Product</button>
              
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>