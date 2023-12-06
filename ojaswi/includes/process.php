<?php
include_once("DBOpreration.php");
include_once("manage.php");

if (isset($_POST["getCategory"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("categories");
	foreach ($rows as $row) {
		echo "<option value='" . $row["cat_id"] . "'>" . $row["cat_name"] . "</option>";
	}

	exit();
}

if (isset($_POST["getBrand"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("brands");
	foreach ($rows as $row) {
		echo "<option value='" . $row["brand_id"] . "'>" . $row["brand_name"] . "</option>";
	}

	exit();
}

if (isset($_POST["getSuppliers"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("supplier");
	foreach ($rows as $row) {
		echo "<option value='" . $row["supplier_id"] . "'>" . $row["supplier_name"] . "</option>";
	}

	exit();
}

//Add Categoeirs
if (isset($_POST["cat_name"])) {
	$obj = new DBOpreration();
	$result = $obj->addCategory($_POST["cat_name"]);
	echo $result;
	exit();
}
//Add Brand
if (isset($_POST["brand_name"])) {
	$obj = new DBOpreration();
	$result = $obj->addBrand($_POST["brand_name"]);
	echo $result;
	exit();
}
//Add Supplier 
if (isset($_POST["supplier_name"]) and isset($_POST["supplier_address"]) and isset($_POST["supplier_contact"]) and isset($_POST["supplier_pan"])) {
	$obj = new DBOpreration();
	$result = $obj->addSupplier($_POST["supplier_name"], $_POST["supplier_address"], $_POST["supplier_contact"], $_POST["supplier_pan"]);
	echo $result;
	exit();
}

//Add Product 
if (isset($_POST["added_date"]) and isset($_POST["product_name"])) {
	$obj = new DBOpreration();
	$result = $obj->addProduct(
		$_POST["select_cat"],
		$_POST["select_brand"],
		$_POST["select_supplier"],
		$_POST["product_name"],
		$_POST["product_price"],
		$_POST["product_quantity"],
		$_POST["added_date"]
	);

	echo $result;
	exit();
}
//Add Customer 
if (isset($_POST["customer_name"]) and isset($_POST["customer_address"]) and isset($_POST["customer_contact"]) and isset($_POST["customer_pan"])) {
	$obj = new DBOpreration();
	$result = $obj->addCustomer($_POST["customer_name"], $_POST["customer_address"], $_POST["customer_contact"], $_POST["customer_pan"]);
	echo $result;
	exit();
}
if (isset($_POST["getCustomer"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("customer");
	foreach ($rows as $row) {
		echo "<option value='" . $row["customer_id"] . "'>" . $row["customer_name"] . "</option>";
	}

	exit();
}

//Manage Category
if (isset($_POST["manageCategory"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("categories");
	if (count($rows) > 0) {
		$n = 0;
		foreach ($rows as $row) {
?>
			<tr>
				<td><?php echo ++$n;  ?></td>
				<td><?php echo $row["cat_name"]  ?></td>
				<td><a href="#" class="btn btn-success btn-sm">Active</a></td>
				<td><a href="#" did="<?php echo $row['cat_id'] ?>" class="btn btn-danger btn-sm del_cat">Delete</a>
					<a href="#" eid="<?php echo $row['cat_id'] ?>" class="btn btn-info btn-sm edit_cat" data-bs-toggle="modal" data-bs-target="#form_category1">Edit</a>
				</td>
			</tr>
		<?php

		}

		exit();
	}
}
//Manage Brand
if (isset($_POST["manageBrand"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("brands");
	if (count($rows) > 0) {
		$n = 0;
		foreach ($rows as $row) {
		?>
			<tr>
				<td><?php echo ++$n;  ?></td>
				<td><?php echo $row["brand_name"]  ?></td>
				<td><a href="#" class="btn btn-success btn-sm">Active</a></td>
				<td><a href="#" did="<?php echo $row['brand_id'] ?>" class="btn btn-danger btn-sm del_brand">Delete</a>
					<a href="#" eid="<?php echo $row['brand_id'] ?>" class="btn btn-info btn-sm edit_brand" data-bs-toggle="modal" data-bs-target="#form_brand">Edit</a>
				</td>
			</tr>
		<?php

		}

		exit();
	}
}
//Manage Supplier
if (isset($_POST["manageSupplier"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("supplier");
	if (count($rows) > 0) {
		$n = 0;
		foreach ($rows as $row) {
		?>
			<tr>
				<td><?php echo ++$n;  ?></td>
				<td><?php echo $row["supplier_name"]  ?></td>
				<td><?php echo $row["supplier_address"]  ?></td>
				<td><?php echo $row["supplier_contact"]  ?></td>
				<td><?php echo $row["supplier_pan"]  ?></td>

				<td><a href="#" did="<?php echo $row['supplier_id'] ?>" class="btn btn-danger btn-sm del_supplier">Delete</a>
					<a href="#" eid="<?php echo $row['supplier_id'] ?>" class="btn btn-info btn-sm edit_supplier" data-bs-toggle="modal" data-bs-target="#form_supplier">Edit</a>
				</td>
			</tr>
		<?php

		}

		exit();
	}
}
//Manage Product
if (isset($_POST["manageProduct"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("products");
	if (count($rows) > 0) {
		$n = 0;
		foreach ($rows as $row) {
		?>
			<tr>
				<td><?php echo ++$n;  ?></td>
				<td><?php echo $row["product_name"]  ?></td>
				<td><?php echo $row["cat_name"]  ?></td>
				<td><?php echo $row["brand_name"]  ?></td>
				<td><?php echo $row["supplier_name"]  ?></td>
				<td><?php echo $row["product_price"]  ?></td>
				<td><?php echo $row["product_stock"]  ?></td>
				<td><?php echo $row["product_date"]  ?></td>
				<!-- <td><a href="#" class="btn btn-success btn-sm">Active</a></td> -->
				<td><a href="#" did="<?php echo $row['product_id'] ?>" class="btn btn-danger btn-sm del_product">Delete</a>
					<a href="#" eid="<?php echo $row['product_id'] ?>" class="btn btn-info btn-sm edit_product" data-bs-toggle="modal" data-bs-target="#form_product">Edit</a>
				</td>
			</tr>
		<?php

		}

		exit();
	}
}
//Manage Customer
if (isset($_POST["manageCustomer"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("customer");
	if (count($rows) > 0) {
		$n = 0;
		foreach ($rows as $row) {
		?>
			<tr>
				<td><?php echo ++$n;  ?></td>
				<td><?php echo $row["customer_name"]  ?></td>
				<td><?php echo $row["customer_address"]  ?></td>
				<td><?php echo $row["customer_contact"]  ?></td>
				<td><?php echo $row["customer_pan"]  ?></td>
				<td><a href="#" did="<?php echo $row['customer_id'] ?>" class="btn btn-danger btn-sm del_customer">Delete</a>
					<a href="#" eid="<?php echo $row['customer_id'] ?>" class="btn btn-info btn-sm edit_customer" data-bs-toggle="modal" data-bs-target="#form_customer">Edit</a>
				</td>
			</tr>
	<?php

		}

		exit();
	}
}

//DELETE CATEGORIES
if (isset($_POST["deleteCategory"])) {
	$m = new Manage();
	$result = $m->deleteRecord("categories", "cat_id", $_POST["id"]);
	echo $result;
}
//DELETE BRAND
if (isset($_POST["deleteBrand"])) {
	$m = new Manage();
	$result = $m->deleteRecord("brands", "brand_id", $_POST["id"]);
	echo $result;
}
//DELETE SUPPLIER
if (isset($_POST["deleteSupplier"])) {
	$m = new Manage();
	$result = $m->deleteRecord("supplier", "supplier_id", $_POST["id"]);
	echo $result;
}
//DELETE PRODUCT
if (isset($_POST["deleteProduct"])) {
	$m = new Manage();
	$result = $m->deleteRecord("products", "product_id", $_POST["id"]);
	echo $result;
}

//UPDATE CATEGORIES
if (isset($_POST["updateCategory"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("categories", "cat_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//UPDATE BRAND
if (isset($_POST["updateBrand"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("brands", "brand_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//DELETE CUSTOMER
if (isset($_POST["deleteCustomer"])) {
	$m = new Manage();
	$result = $m->deleteRecord("customer", "customer_id", $_POST["id"]);
	echo $result;
}
//UPDATE SUPPLIER
if (isset($_POST["updateSupplier"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("supplier", "supplier_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//UPDATE PRODUCT
if (isset($_POST["updateProduct"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("products", "product_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//UPDATE CUSTOMER
if (isset($_POST["updateCustomer"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("customer", "customer_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//update category after getting data
if (isset($_POST["update_cat"])) {
	$m = new Manage();
	$id = $_POST["cat_id"];
	$name = $_POST["update_cat"];
	$result = $m->update_record("categories", ["cat_id" => $id], ["cat_name" => $name]);
	echo $result;
}
//update brand after getting data
if (isset($_POST["update_brand"])) {
	$m = new Manage();
	$id = $_POST["brand_id"];
	$name = $_POST["update_brand"];
	$result = $m->update_record("brands", ["brand_id" => $id], ["brand_name" => $name]);
	echo $result;
}
//update supplier after getting data
if (isset($_POST["update_suppliername"]) and isset($_POST["update_supplieraddress"]) and isset($_POST["update_suppliercontact"]) and isset($_POST["update_supplierpan"])) {
	$m = new Manage();
	$id = $_POST["supplier_id"];
	$name = $_POST["update_suppliername"];
	$address = $_POST["update_supplieraddress"];
	$contact = $_POST["update_suppliercontact"];
	$pan = $_POST["update_supplierpan"];

	$result = $m->update_record("supplier", ["supplier_id" => $id], ["supplier_name" => $name, "supplier_address" => $address, "supplier_contact" => $contact, "supplier_pan" => $pan]);
	echo $result;
}
//update product after getting data
if (isset($_POST["update_product"])) {
	$m = new Manage();
	$id = $_POST["product_id"];
	$name = $_POST["update_product"];
	$cat = $_POST["select_cat"];
	$brand = $_POST["select_brand"];
	$supplier = $_POST["select_supplier"];
	$price = $_POST["product_price"];
	$stock = $_POST["product_quantity"];
	$date = $_POST["added_date"];
	$result = $m->update_record("products", ["product_id" => $id], ["cat_id" => $cat, "brand_id" => $brand, "supplier_id" => $supplier, "product_name" => $name, "product_price" => $price, "product_stock" => $stock, "product_date" => $date]);
	echo $result;
}

//update customer after getting data
if (isset($_POST["update_customername"]) and isset($_POST["update_customeraddress"]) and isset($_POST["update_customercontact"]) and isset($_POST["update_customerpan"])) {
	$m = new Manage();
	$id = $_POST["customer_id"];
	$name = $_POST["update_customername"];
	$address = $_POST["update_customeraddress"];
	$contact = $_POST["update_customercontact"];
	$pan = $_POST["update_customerpan"];
	$result = $m->update_record("customer", ["customer_id" => $id], ["customer_name" => $name, "customer_address" => $address, "customer_contact" => $contact, "customer_pan" => $pan]);
	echo $result;
}
//.....................Sales Processing.......
if (isset($_POST["getNewOrderItem"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("products");
	?>
	<tr>
		<td><b class="number">1</b></td>
		<td>
			<select name="product_id" id="product_id" class="product_id" required>
				<option>Choose Product</option>
				<?php
				foreach ($rows as $row) {
				?>

					<option value="<?php echo $row['product_id'];  ?>"><?php echo $row["product_name"]; ?></option>
				<?php
				}
				?>


			</select>
		</td>

		<input type="hidden" readonly name="tqty[]" id="tqty[]" class="form-control form-control-sm tqty"></span><td><input type="text" name="qty[]" id="qty[]" class="form-control form-control-sm qty" required></td>
		<td><input type="text" name="price[]" id="price[]"  class="form-control form-control-sm price">></td>
		<td><span><input type="hidden" name="product_name[]" id="product_name[]" class="product_name"></span>
			Rs.<span class="amt">0</span></td>
	<?php
	exit();
}
//

//Get price and qyantity
if (isset($_POST["getPriceAndQty"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("products", "product_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//Get PAN number
if (isset($_POST["getPan"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("customer", "customer_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}

//SALES PROCESSING

if (isset($_POST["sales_date"]) and isset($_POST["select_customer"])) {
	$sales_date = $_POST["sales_date"];
	$select_customer = $_POST["customer_name"];


	$ar_tqty = $_POST["tqty"];
	$ar_qty = $_POST["qty"];
	$ar_price = $_POST["price"];
	$ar_product_name = $_POST["product_name"];


	$sub_total = $_POST["sub_total"];
	$discount = $_POST["discount"];
	$net_total = $_POST["net_total"];
	$paid = $_POST["paid"];
	$due = $_POST["due"];


	$m = new Manage();

	$result = $m->storeCustomerSalesInvoice($sales_date, $select_customer, $ar_tqty, $ar_qty, $ar_price, $ar_product_name, $sub_total, $discount, $net_total, $paid, $due);

	echo($result);
}
//Purchase Processing

if (isset($_POST["getNewPurchaseItem"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("products");
	?>
	<tr>
		<td><b class="number">1</b></td>
		<td>
			<select name="product_id" id="product_id" class="form-control form-control-sm product_id" required>
				<option>Choose Product</option>
				<?php
				foreach ($rows as $row) {
				?>

					<option value="<?php echo $row['product_id'];  ?>"><?php echo $row["product_name"]; ?></option>
				<?php
				}
				?>



			</select>
		</td>
		<input type="hidden" id="tqty[]" readonly name="tqty[]" class="form-control form-control-sm tqty">
		<td><input type="text" id="qty[]" name="qty[]" class="form-control form-control-sm qty" required /></td>
		<td><input type="text" name="price[]" id="price[]" class="form-control form-control-sm price " readonly></td>
		<td><span><input type="text" name="product_name[]" id="product_name[]" class="form-control form-control-sm product_name"></span>
			Rs.<span class="amt">0</span></td>
	</tr>
<?php
	exit();
}
//

//Get price and qyantity
if (isset($_POST["getPriceAndQty"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("products", "product_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//Get PAN number
if (isset($_POST["getPan"])) {
	$m = new Manage();
	$result = $m->getSingleRecord("supplier", "supplier_id", $_POST["id"]);
	echo json_encode($result);
	exit();
}
//Purchase PROCESSING

if (isset($_POST["purchase_date"]) and isset($_POST["select_supplier"])) {
	$purchase_date = $_POST["purchase_date"];
	$select_supplier = $_POST["select_supplier"];


	$ar_tqty = $_POST["tqty"];
	$ar_qty = $_POST["qty"];
	$ar_price = $_POST["price"];
	$ar_product_name = $_POST["product_name"];


	$sub_total = $_POST["sub_total"];
	$discount = $_POST["discount"];
	$net_total = $_POST["net_total"];
	$paid = $_POST["paid"];
	$due = $_POST["due"];

	$m = new Manage();

	echo $result = $m->storeCustomerPurchaseInvoice($purchase_date, $select_supplier, $ar_tqty, $ar_qty, $ar_price, $ar_product_name, $sub_total, $discount, $net_total, $paid, $due);
}
//sales_return
if (isset($_POST["getSalesReturnItem"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllRecords("products");
?>
	<tr>
		<td><b class="number">1</b></td>
		<td>
			<select name="product_id" id="product_id" class="form-control form-control-sm product_id" required>
				<option>Choose Product</option>
				<?php
				foreach ($rows as $row) {
				?>

					<option value="<?php echo $row['product_id'];  ?>"><?php echo $row["product_name"]; ?></option>
				<?php
				}
				?>


			</select>
		</td>
		<input type=hidden readonly name="tqty[]" id="tqty[]" class="form-control form-control-sm tqty">
		<td><input type="text" name="qty[]" id="qty[]" class="form-control form-control-sm qty" required></td>
		<td><input type="text" name="price[]" id="price[]" class="form-control form-control-sm price"></td>
		<td><span><input type="hidden" name="product_name[]" id="product_name[]" class="form-control form-control-sm product_name"></span>
			Rs.<span class="amt">0</span></td>
	<?php
	exit();
	if (isset($_POST["getPriceAndQty"])) {
		$m = new Manage();
		$result = $m->getSingleRecord("products", "product_id", $_POST["id"]);
		echo json_encode($result);
		exit();
	}



	if (isset($_POST["return_date"]) and isset($_POST["select_customer"])) {
		$return_date = $_POST["return_date"];
		$invoice_no = $_POST["invoice_no"];
		$select_customer = $_POST["select_customer"];


		$ar_tqty = $_POST["tqty"];
		$ar_qty = $_POST["qty"];
		$ar_price = $_POST["price"];
		$ar_product_name = $_POST["product_name"];
	}
	$m = new Manage();
	echo $result = $m->storeSalesReturnInvoice($return_date, $invoice_no, $select_customer, $ar_tqty, $ar_qty, $ar_price, $ar_product_name);
}


if (isset($_POST["getCustomerData"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllCustomers();

	echo json_encode($rows);
}

if (isset($_POST["getProductData"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllProducts();

	echo json_encode($rows);
}

if (isset($_POST["getSalesData"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllSales();
	echo json_encode($rows);
}

if (isset($_POST["getPurchaseData"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllPurchase();

	echo json_encode($rows);
}

if (isset($_POST["getSupplierData"])) {
	$obj = new DBOpreration();
	$rows = $obj->getAllSuppliers();

	echo json_encode($rows);
}
	?>