<?php

  include "./header_top.php";

?>
         <div class="row justify-content-center">
           <div class="col-lg-12">
             <div class="single_element">
               <div class="quick_activity">
                 <div class="row">
                   <div class="col-12">
                     <div class="quick_activity_wrap quick_activity_wrap">
                       <div class="single_quick_activity  d-flex">
                         <div class="count_content count_content2">
                           <h3><span class="counter blue_color" id="customer_span">520</span> </h3>
                           <p>Customers</p>
                         </div>
                       </div>
                       
                        <div class="single_quick_activity  d-flex">
                         <div class="count_content count_content2">
                           <h3><span class="counter yellow_color" id="product_span">15</span> </h3>
                           <p>Categories</p>
                         </div>
                       </div>
                       <div class="single_quick_activity d-flex">
                         <div class="count_content count_content2">
                           <h3><span class="counter red_color" id="supplier_span">6969</span> </h3>
                           <p>Suppliers</p>
                         </div>
                       </div>
                       <div class="single_quick_activity  d-flex">
                         <div class="count_content count_content2">
                           <h3><span class="counter yellow_color" id="product_span">10</span> </h3>
                           <p>Products</p>
                         </div>
                       </div>
                       <div class="single_quick_activity  d-flex">
                         <div class="count_content count_content2">
                           <h3><span class="counter green_color" id="sales_span">2110</span> </h3>
                           <p>Sales</p>
                         </div>
                       </div>
                       <div class="single_quick_activity  d-flex">
                         <div class="count_content count_content2">
                           <h3><span class="counter green_color" id="purchase_span">2110</span> </h3>
                           <p>Purchase</p>
                         </div>
                       </div>
                       
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- footer part -->
     <div class="footer_part">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="footer_iner text-center">
               <p>2023 © Ojaswi - Designed by <a style="cursor: pointer;"> <i class="ti-heart"></i> </a><a style="cursor: pointer;"> Ojaswi</a></p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- main content part end -->


  <script>
    $(document).ready(function() {
       var DOMAIN = "http://localhost/ojwaswi";
       //fetch category
      fetch_products();

      function fetch_products() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getProductData: 1
          },
          method: "POST",


          success: function(data) {
            $('#product_span').text($.parseJSON(data).length);
          }

        })
      }

      //fetch suppliers
      fetch_suppliers();
      function fetch_suppliers() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getSupplierData: 1
          },
          method: "POST",


          success: function(data) {
            $('#supplier_span').text($.parseJSON(data).length);
          }

        })
      }

      fetch_customer();

      function fetch_customer() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getCustomerData: 1
          },
          method: "POST",


          success: function(data) {
            $('#customer_span').text($.parseJSON(data).length);
            console.log(data);
          }

        })
      }

      fetch_sales();

      function fetch_sales() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getSalesData: 1
          },
          method: "POST",


          success: function(data) {
            $('#sales_span').text($.parseJSON(data).length);
          }

        })
      }

      fetch_purchase();

      function fetch_purchase() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getPurchaseData: 1
          },
          method: "POST",


          success: function(data) {
            $('#purchase_span').text($.parseJSON(data).length);
          }

        })
      }
       function fetch_salesReturn() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getSalesReturnItem: 1
          },
          method: "POST",


          success: function(data) {
            $('#salesreturn_span').text($.parseJSON(data).length);
          }

        })
      }
       function fetch_purchase() {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          data: {
            getPurchaseData: 1
          },
          method: "POST",


          success: function(data) {
            $('#purchase_span').text($.parseJSON(data).length);
          }

        })
      }

    })
  </script>

 </body>

 </html>