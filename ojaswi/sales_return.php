<?php
  include "./header_top.php";
?>

<div class="row">
<div class="col-md-10 mx-auto">
<div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
 <div class="card-header">
  <h4> Sales</h4>  
 </div>
 <div class="card-body">
  <form name="get_salesreturn_data" id="get_salesreturn_data"onsubmit="return false">
  <div class="form-group row">
    <label class="col-sm-3 col-form-lable" align="right">Sales Return Date</label>
    <div class="col-sm-6">
    <input type="text" id="salesreturn_date" name="salesreturn_date"readonly class="form-control form-control-sm" value="<?php echo date("y-m-d");?>">
    </div>
    </div></br>
     <div class="form-group row">
    <label class="col-sm-3" align="right">Invoice no:</label>
    <div class="col-sm-6">
    <!-- <select class="form-control" id="select_customer" name="select_customer">
                 
                </select> -->
                <input type="text" name="invoice_no" id="invoice_no"class="form-control invoice_no" value="" required>
    </div> 
   </div></br>
    <div class="form-group row">
    <label class="col-sm-3 col-form-lable" align="right">Customer Name</label>
    <div class="col-sm-6">
    <select class="form-control select_customer" id="select_customer" name="select_customer" required/>
                 
                </select>
    </div>
    </div></br>
   
    <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
    <div class="card-body">
    <h3>sales return list</h3>
    <table align="center" style="width:800px;">
    <thead>
    <tr>
    <th>#</th>
    <th style="text-align:centre;">Item Name</th>
    
    <th style="text-align:centre;">Quantity</th>
    <th style="text-align:centre;">Price</th>
    <th style="text-align:centre;">Total</th>
    </tr>
    </thead>
    <tbody id="invoice_item">
   
    <!--  <tr>
    <td><b id="number">1</b></td>
     <td>
    <select name="produtc_id" required class="form-control form-control-sm">
    <option>Choose Product</option>
    </select>
    </td> 
    <td><input type="text" name="tqty[]" readonly class="form-control form-control-sm"></td>
    <td><input type="text" name="qty[]" class="form-control form-control-sm"></td>
    <td><input type="text" name="price[]" class="form-control form-control-sm"></td>
    <td>Rs.1540</td>
    </tr>  -->
    </tbody>
    </table>
    <center style="padding:10px;">
    <button id="add" name="add" style="width:150px;" class="btn btn-success"><i class="fa fa-plus"></i></button>
    <button id="remove" style="width:150px;" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
    </center>
    </div>
    </div>
    <center style="padding:10px;">
    <input type="submit" id="sales_return_form" style="width:150px;" class="btn btn-info" value="submit">
    <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
   </center>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
