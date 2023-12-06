<?php
  include "./header_top.php";
?>
      <div class="overlay"><div class="loader"></div></div>

        <div class="row">
          <div class="col-md-11 mx-auto">
            <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
              <div class="card-header">
                <h4> Sales</h4>
              </div>
              <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
     <form name="get_purchasereturn_data" id="get_purchasereturn_data"onsubmit="return false">
                            <div class="card-body">
                              <div class="form-group row">
                                <div class="col-sm-6">
                                <div class="card" >
                                  <div class="card-body">
                               
                                      <div class="form-group row align-items-center">
                                         <label class="col-sm-3 col-form-lable" align="right">Return Date</label>
                                          <div class="col-sm-3">
                                             <input type="text" id="purchasereturn_date" name="purchasereturn_date" readonly class="form-control form-control-sm" value="<?php echo date("y-m-d");?>">
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
                              </div>

                                <div class="card" style="width: 26rem;">
                                   <div class="card-header">
                                   <div class="form-group row">
                                   <label for="sub_total" class="col-sm-5 col-form-lable" align="right">Supplier Name</label>
                                   <div class="col-sm-6">
                                  <select class="select_supplier" id="select_supplier" name="select_supplier" required/>
                                            </select>
                                                        <input type="hidden" name="supplier_name" id="supplier_name" readonly class="supplier_name" value="">
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
                                </div>
                                 
                                  <div class="card">
                                  </div>
                                </div>
                              </div>
                             </div>
                           </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>