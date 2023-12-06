<?php
include'../includes/head.php';
include'../includes/aa.php';
?><?php 

              /*  $query = 'SELECT ID, t.TYPE
                          FROM users u
                          JOIN type t ON t.TYPE_ID=u.TYPE_ID WHERE ID = '.$_SESSION['MEMBER_ID'].'';
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
                while ($row = mysqli_fetch_assoc($result)) {
                          $Aa = $row['TYPE'];
                   
if ($Aa=='User'){
           
             ?>    <script type="text/javascript">
                      //then it will be redirected
                      alert("Restricted Page! You will be redirected to POS");
                      window.location = "aa.php";
                  </script>
             <?php   }
                         
           
}   */
            ?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              $fname = $_POST['firstname'];
              $add = $_POST['customer_address'];
              $pn = $_POST['phonenumber'];
              $pan = $_POST['customer_pan'];

        
              switch($_GET['action']){
                case 'add':     
                    $query = "INSERT INTO `customer`(`customer_name`, `customer_address`, `customer_contact`, `customer_pan`)
                    VALUES (Null,'{$fname}','{$add}','{$pn}','{$pan}')";
                    mysqli_query($db,$query)or die ('Error in updating Database');
                break;
              }
            ?>
              <script type="text/javascript">
                window.location = "aa.php";
              </script>
          </div>
