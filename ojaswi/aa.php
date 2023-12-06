<!-- Main Sidebar Container -->
<!DOCTYPE html>
<html>
<head>
  <?php //include 'includes\head.php';?>
  <link rel="stylesheet" href="CSS/style.css">
  <script type="text/javascript" src="./js/main.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>


   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <link rel="stylesheet" href="CSS/style.css">
<nav class="main-header navbar navbar-expand navbar-white navbar-light"  >
  <div class="container-fluid" >
    <a class="navbar-brand" href="dashboard.php">Bidyarthi Pustak Pasal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fa fa-home"></i>Home</a>
          

        </li>
        <div>
          <li class="nav-item"  >
          <a class="nav-link active" aria-current="page" href="index.php" style="padding-right:200px;"><i class="fa fa-home"></i>logout</a>
          

        </li>
        </div>
        
     
       
      </div>
      <div class="jumbotron" style="text-align:right;">
          <h4>WELCOME ADMIN </h4>         
        </div>

        
        <!-- <li>
      <a class="nav-link active" href="index.php" ><i class="fa fa-sign-out"></i>log out</a>
      </li> -->
    </ul>
    </div>
  </div>

</nav>



  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      
      <span class="brand-text font-weight-light">Bidyarthi Pustak Pasal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
       

      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
        <!-- Categories  -->
          <li class="nav-item">
            <a href="manage_category.php" class="nav-link">
              
            Categories
            </a>
           
           
          </li>
           <!-- Brand -->
           <li class="nav-item">
            <a href="manage_brand.php" class="nav-link">
              
              
                Brand
               
            </a>
            
          </li>
          <!-- Supplier -->
           <li class="nav-item">
            <a href="manage_supplier.php" class="nav-link">
              
              
                Supplier
               
            </a>
            
          </li>
          
            <!-- Customer -->
            <li class="nav-item">
            <a href="manage_customer.php" class="nav-link">
              
              
                Customer
               
            </a>
            
          </li>
          
           <!-- Product -->
             <li class="nav-item">
            <a href="manage_product.php" class="nav-link">
              
              
               Product
               
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="salesdemo.php" class="nav-link">
              
              <p>Sales</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="purchasedemo.php" class="nav-link">
              
              <p>Purchase</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="returndemo.php" class="nav-link">
              
              <p>Sales Return</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="purchasereturn.php" class="nav-link">
              
              <p>Purchase Return</p>
            </a>
          </li>
            <!-- Invoice -->
         
           
              <li class="nav-item">
                <a href="display.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale Details</p>
                </a>
               
                
              </li>
              <li class="nav-item">
                  <a href="purchase_details.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Details</p>
                </a>
               
              </li>
               <li class="nav-item">
                <a href="salesreturn_details.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale Return Details</p>
                </a>
               
                
              </li>
               <li class="nav-item">
                <a href="purchasereturn_details.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Return Details</p>
                </a>
               
                
              </li>

              
            
          </li>
              
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Aakash Karki</h1>
          </div><!-- /.col -->
          <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                  <h3 class="card-title"><u>Categories</u> <i class="fa fa-list-alt"></i></h3>
                     <?php
                           require 'connection.php';
                           $query="SELECT cat_id FROM categories ORDER BY cat_id";
                           $query_run=mysqli_query($conn,$query);
                           $row=mysqli_num_rows($query_run);
                           echo'<h5>You have '.$row.' categories</h5>';
                        ?>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card" >
               <div class="card-body">
                     <h3 class="card-title"><u>Brands</u>  <i class="fa fa-500px"></i></h3>
                        <?php
                           require 'connection.php';
                           $query="SELECT brand_id FROM brands ORDER BY brand_id";
                           $query_run=mysqli_query($conn,$query);
                           $row=mysqli_num_rows($query_run);
                           echo'<h5>You have '.$row.' brands</h5>';
                        ?>
               </div>
            </div>
         </div>   
         <div class="col-md-4">
            <div class="card">
               <div class="card-body">
                     <h3 class="card-title"><u>Supplier</u>  <i class="fa fa-industry"></i></h3>
                        <?php
                           require 'connection.php';
                           $query="SELECT supplier_id FROM supplier ORDER BY supplier_id";
                           $query_run=mysqli_query($conn,$query);
                           $row=mysqli_num_rows($query_run);
                           echo'<h5>You have '.$row.' Supplier</h5>';
                        ?>
               </div>
            </div>
         </div>
      </div>
   </div></br>

         <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-body">
                              <h3 class="card-title"><u>Products</u>  <i class="fa fa-cart-arrow-down"></i></h3>
                                 <?php
                                    require 'connection.php';
                                    $query="SELECT product_id FROM products ORDER BY product_id";
                                    $query_run=mysqli_query($conn,$query);
                                    $row=mysqli_num_rows($query_run);
                                    echo'<h5>You have '.$row.' Products</h5>';
                                 ?>
                        </div>
                     </div>
                  </div>   

                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-body">
                              <h3 class="card-title"><u>Customers</u>  <i class="fa fa-user"></i></h3>
                                 <?php
                                    require 'connection.php';
                                    $query="SELECT customer_id FROM customer ORDER BY customer_id";
                                    $query_run=mysqli_query($conn,$query);
                                    $row=mysqli_num_rows($query_run);
                                    echo'<h5>You have '.$row.' Customers</h5>';
                                 ?>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-body">
                              <h3 class="card-title"><u>Orders</u>  <i class=""></i></h3>
                                 <?php
                                    require 'connection.php';
                                    $query="SELECT invoice_no FROM invoice ORDER BY invoice_no";
                                    $query_run=mysqli_query($conn,$query);
                                    $row=mysqli_num_rows($query_run);
                                    echo'<h5>You have '.$row.' Orders</h5>';
                                 ?>
                        </div>
                     </div>
                  </div>

          </div>
      </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    </div>
    <!-- /.content -->
  </div>
  </div>

</body>
</html>