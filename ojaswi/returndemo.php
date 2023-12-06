<!DOCTYPE html>
<html> 
<head>
  <?php include 'includes\nav.php';?>

<?php include 'includes\head.php';?>
<script type="text/javascript" src="./js/return.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
 <style type="text/css">
       
       table{
        display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
    border-color: grey;
  }
 

 </style>
</head>
    <body>
      <div class="overlay"><div class="loader"></div></div>
      <div class="container">
        <div class="row">
          <div class="col-md-11 mx-auto">
            <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
              <div class="card-header">
                <h4> Sales</h4>
              </div>
              <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">

                            <div class="card-body">
                              <div class="form-group row">
                                <div class="card" style="width: 45rem;">
                                  <div class="card-body">
                                      <div class="form-group row">
                                         <label class="col-sm-2 col-form-lable" align="right">Return Date</label>
                                          <div class="col-sm-3">
                                             <input type="text" id="salesreturn_date" name="salesreturn_date" readonly class="form-control form-control-sm" value="<?php echo date("y-m-d");?>">
                                          </div>
                                      </div>
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th width="5%">S.N</th>
                                            <th width="40%">Item Name</th>
                                            <th width="10%">Quantity</th>
                                            <th width="10%">Price</th>
                                            <th width="10%">Total</th>

                                          </tr>
                                        </thead>
                                        <tbody id="invoice_item">
                                        <!-- <tr>
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
                                        </tr> -->
                                       
                                        </tbody>
                                      </table>
                                      <center style="padding:10px;">
                                      <button id="add" name="add" style="width:150px;" ><i class="fa fa-plus"></i></button>
                                      <button id="remove" style="width:150px;" ><i class="fa fa-trash"></i> </button>
                                      </center>
                                  </div>
                                </div>
                                <div class="card" style="width: 26rem;">
                                   <div class="card-header">
                                   <div class="form-group row">
                                   <label for="sub_total" class="col-sm-5 col-form-lable" align="right">Customer Name</label>
                                   <div class="col-sm-6">
                                  <select class="select_customer" id="select_customer" name="select_customer" required/>
                                            </select>
                                                        <input type="hidden" name="customer_name" id="customer_name" readonly class="customer_name" value="">
                                  </div>
                                  </div></br>
                                    <div class="form-group row">
                                        <label class="col-sm-4" align="right">Invoice no</label>
                                      <div class="col-sm-6">
                                          <!-- <select class="form-control" id="select_customer" name="select_customer">
                                             
                                            </select> -->
                                            <input type="text" name="invoice_no" id="invoice_no"class="form-control invoice_no" value="" required>
                                      </div> 
                                    </div></br>
                                     <center style="padding:10px;">
                                          <input type="submit" id="return_form" style="width:150px;" class="btn btn-info" value="submit">
                                          <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
                                     </center>
                                </div>
                                 
                                  <div class="card">
                                  </div>
                                </div>
                              </div>
                             </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>