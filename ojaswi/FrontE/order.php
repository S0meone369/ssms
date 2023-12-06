 <!DOCTYPE html>
 <head>
 
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stationery Shop Management System </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- JavaScript;Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
      <script type="text/javascript" src="./js/order.js"></script>

  </head>
  <body>
    <div class="form-group row">
    <label class="col-sm-3 col-form-lable" align="right">Order Date</label>
    <div class="col-sm-6">
    <input type="text" id="order_date" name="order_date"readonly class="form-control form-control-sm" value="<?php echo date("y-m-d");?>">
    </div>
    </div></br>

     <table align="center" style="width:800px;">
    <thead>
    <tr>
    <th></th>
    <th style="text-align:centre;">Item Name</th>
    <th style="text-align:centre;">Quantity</th>
    <th style="text-align:centre;">Price</th>
    <th style="text-align:centre;">Total</th>
    </tr>
    </thead>

    <tbody id="order_item">
    <tr>
    <td><b id="number">1</b></td>
    <td>
    <select name="product_id" required class="form-control form-control-sm">
    <option>Choose Product</option>
    </select>
    </td>
    <td><input type="text" name="tqty[]" readonly class="form-control form-control-sm"></td>
    <td><input type="text" name="qty[]" class="form-control form-control-sm"></td>
    <td><input type="text" name="price[]" class="form-control form-control-sm"></td>
    <td>Rs.1540</td>
    </tr> 

   
    </tbody>
    </table>
     <center style="padding:10px;">
    <button id="add" name="add" style="width:150px;" class="btn btn-success"><i class="fa fa-plus"></i></button>
    <button id="remove" style="width:150px;" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
    </center>



  </body>









     
