<!-- Modal -->

<div class="modal fade" id="form_products" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="product_form"  onsubmit="return false">
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="inputEmail4">Date</label>
                    <input type="text" class="form-control" id="added_date" name="added_date" value="<?php echo date("Y-m-d");  ?>"  placeholder="Date" readonly/>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword4">Product</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required />
                  </div>
              </div>
              <div class="form-group">
                <label>Categories</label>
                <select class="form-control select_cat" id="select_cat_add" name="select_cat" required/>
                  
                </select>
              </div>

              <div class="form-group">
                <label>Brand</label>
                <select class="form-control" id="select_brand_add" name="select_brand" required/>


                </select>
                
              </div>
              <div class="form-group">
                <label>Supplier</label>
                <select class="form-control" id="select_supplier_add" name="select_supplier" required/>


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
              <button type="submit" class="btn btn-success">Add Product</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  //fetch category
	fetch_category();
	function fetch_category(){
		$.ajax({
					url : "/ojaswi/includes/process.php",
					data: {getCategory:1},
					method : "POST",
					

					success : function(data)
					{
					/*	let trimmedResponse = $.trim(data);
						//alert(trimmedResponse);
						
						var choose="<option value=''>Choose Category</option>";
						//console.log("get code after ajax",$('#select_cat').val(trimmedResponse))
						$('#select_cat').val(trimmedResponse);*/
						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Category</option>";
						$("#select_cat_add").html(choose+trimmedResponse);


					}

				})
	}

  //fetch brand
	fetch_brand();
	function fetch_brand(){
		$.ajax({
					url : "/ojaswi/includes/process.php",
					data: {getBrand:1},
					method : "POST",
					

					success : function(data)
					{

						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Brand</option>";
						$("#select_brand_add").html(choose+trimmedResponse);


					}

				})
	}
	//fetch suppliers
	fetch_suppliers();
	function fetch_suppliers(){
		$.ajax({
					url : "/ojaswi/includes/process.php",
					data: {getSuppliers:1},
					method : "POST",
					

					success : function(data)
					{

						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Suppliers</option>";
						$("#select_supplier_add").html(choose+trimmedResponse);


					}

				})
	}
</script>