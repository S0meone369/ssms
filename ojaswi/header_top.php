 <!Doctype html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <?php
    include 'includes\head.php';
    ?>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="CSS/just.css">
   <link rel="stylesheet" href="CSS/dashboard.css">
 </head>

 <body class="crm_body_bg">

   <?php $class = 'active'; ?>


   <!-- main content part here -->

   <!-- sidebar  -->
   <!-- sidebar part here -->
   <nav class="sidebar">
     <div class="logo d-flex justify-content-between">
       <h3><span class="lab la-accusoft"></span> SSMS</h3>
       <div class="sidebar_close_icon d-lg-none">
         <i class="ti-close"></i>
       </div>
     </div>
     <ul id="sidebar_menu" class="metismenu">
       <li class="mm-active">
         <ul class="mm-collapse mm-show">
           <li><a class=" <?php echo ($class); ?> " href="/ojaswi/dashboard.php">Dashboard</a></li>
           <li><a href="/ojaswi/manage_category.php">Categories</a></li>
           <li><a href="/ojaswi/manage_brand.php">Brand</a></li>
           <li><a href="/ojaswi/manage_product.php">Product</a></li>
           <li><a href="/ojaswi/manage_supplier.php">Supplier</a></li>
           <li><a href="/ojaswi/manage_customer.php">Customer</a></li>
           <li><a href="/ojaswi/sales.php">Sales</a></li>
            <li><a href="/ojaswi/purchasedemo.php">Purchase</a></li>
            
             
         </ul>

       </li>

     </ul>

   </nav>
   <!-- sidebar part end -->
   <!--/ sidebar  -->


   <section class="main_content dashboard_part">
     <!-- menu  -->
     <div class="container-fluid no-gutters">
       <div class="row">
         <div class="col-lg-12 p-0">
           <div class="header_iner d-flex justify-content-between align-items-center">
             <div class="sidebar_icon d-lg-none">
               <i class="ti-menu"></i>
             </div>

             <div class="header_right d-flex justify-content-between align-items-center" style="width: 100%;;">
               <div class="header_notification_warp d-flex align-items-center">
                 <li>
                   <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                 </li>
                 <li>
                   <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                 </li>
               </div>
               <div class="profile_info">
                 <img src="image/2.jpg" alt="#">
                 <div class="profile_info_iner">
                   
                   <h5>Ojaswi Niraula</h5>
                   <div class="profile_info_details">
                     <!-- <a href="#">My Profile <i class="ti-user"></i></a>
                     <a href="#">Settings <i class="ti-settings"></i></a> -->
                     <a href="index.php">Log Out <i class="ti-shift-left"></i></a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!--/ menu  -->
     <div class="main_content_iner ">
       <div class="container-fluid p-0">