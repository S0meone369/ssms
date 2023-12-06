<?php
  include "./header_top.php";
?>

        <div class="row">
          <div class="col-md-11 mx-auto">
            <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
              <div class="card-header">
                <h4> Purchase</h4>
              </div>
              <form name="get_purchase_data" id="get_purchase_data"onsubmit="return false">
              <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">

                            <div class="card-body">
                              <div class="form-group row">
                                    <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">

                                      <div class="form-group row">

                                         <label class="col-sm-3 col-form-lable" align="right">Purchase Date</label>
                                          <div class="col-sm-3">
                                           <input type="text" id="purchase_date" name="purchase_date" readonly class="form-control form-control-sm" value="<?php echo date("y-m-d");?>">
                                          </div>
                                      </div>
                                      <table class="table">
                                        <thead>
                                          <tr>
                                             <th width="5%">S.N</th>
                                            <th width="20%">Item Name</th>
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
                                      <button id="add" class="btn btn-success" name="add" style="width:150px;" >Create</button>
                                      <button id="remove" class="btn btn-danger" style="width:150px;" >Delete</button>
                                      </center>
                                  </div>
                                </div>
                              </div>
                                <div class="card" style="width: 26rem;">
                                   <div class="card-header">
                                   <div class="form-group row">
                                   <label for="sub_total" class="col-sm-5 col-form-lable" align="right">Supplier Name</label>
                                   <div class="col-sm-6">
                                         <select class="form-control select_supplier" id="select_supplier" name="select_supplier" required/>
                       
                                          </select>
                                  </div>
                                  </div></br>
                                </div>
                                 <div class="card-body">
                                  <div class="form-group row">
                                   <label for="sub_total" class="col-sm-3 col-form-lable" align="right">Sub Total</label>
                                   <div class="col-sm-6">
                                  <input type="text" name="sub_total" class="form-control form-control-sm" id="sub_total" required/>
                                  </div>
                                  </div></br>
                                  <div class="form-group row">
                                   <label for="discount" class="col-sm-3 col-form-lable" align="right">Discount</label>
                                   <div class="col-sm-6">
                                  <input type="text" name="discount" class="form-control form-control-sm" id="discount" required/>
                                  </div>
                                  </div></br>
                                  <div class="form-group row">
                                   <label for="net_total" class="col-sm-3 col-form-lable" align="right">Net Total</label>
                                   <div class="col-sm-6">
                                  <input type="text" name="net_total" class="form-control form-control-sm" id="net_total" required/>
                                  </div>
                                 </div></br>
                                 <div class="form-group row">
                                   <label for="paid" class="col-sm-3 col-form-lable" align="right">Paid</label>
                                   <div class="col-sm-6">
                                  <input type="text" name="paid" class="form-control form-control-sm" id="paid" required/>
                                  </div>
                                 </div></br>
                                 <div class="form-group row">
                                   <label for="due" class="col-sm-3 col-form-lable" align="right">Due</label>
                                   <div class="col-sm-6">
                                  <input type="text" name="due" class="form-control form-control-sm" id="due" required/>
                                  </div>
                                 </div>
                                 <center style="padding:10px;">
                                  <input type="submit" id="purchase_form" style="width:150px;" class="btn btn-info" value="purchase">
                                  <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
                                 </center>
                               </div>
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
      <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/manage1.js"></script>
      <script type="text/javascript" src="./js/purchase.js"></script>
      <script type="text/javascript" src="./js/purchase_return.js"></script>
    </body>
</html>