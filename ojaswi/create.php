 <!DOCTYPE html>
<html>
<head>
	<?php include 'C:\xampp\htdocs\ojaswi\includes\head.php';?>
	<script type="text/javascript" src="./js/main.js"></script>

</head>
<body>
		
		<div class="card mx-auto" style="width: 18rem;">
			<div class="card" style="width: 18rem;">
				
			  <div class="card-body">
				<h5 class="card-title">Sign Up</h5>
					<form id="register_form" action="database/insert.php" method="post"  name="register_form" onsubmit="return false" autocomplete="off" >
							
							  <div class="mb-3">
								<label  class="form-label">First Name </label>
								<input type="text" class="form-control"  name ="fName" id="fName">
								<small id="fn_error" class="form-text text-muted"></small>
								
							  </div>
							  <div class="mb-3">
								<label class="form-label">Last Name</label>
								<input type="text" class="form-control" name="lName" id="lName">
								<small id="ln_error" class="form-text text-muted"></small>
								
							  </div>
							    <div class="mb-3">
								<label  class="form-label">Email address</label>
								<input type="email" class="form-control" name="email" id="email" >
								<small id="e_error" class="form-text text-muted">We'll Not Share your Email.</small>
							  </div>

							  <div cl ass="mb-3">
								<label  class="form-label">Password</label>
								<input type="password" class="form-control" name="password" id="password" />
								<small id="p1_error" class="form-text text-muted"></small>
							 </div>
 								<br>
							  <div cl ass="mb-3">
							  	<label  class="form-label">Confirm Password</label>
								<input type="password" class="form-control" name="cpassword" id="cpassword" />
								<small id="p2_error" class="form-text text-muted"></small>
								</div>
 								<br>
							  <div class="mb-3">
								<label class="form-label">Contact</label>
								<input type="text" class="form-control" name="contact" id="contact">
								<small id="c_error" class="form-text text-muted"></small>
							  </div>
 								<br>
							  <!-- <h5> Role </h5>
							  <div class="mb-3 form-check">
								<input type="radio" id="admin" name="role" value="admin" id="role">
									<label for="admin">Admin</label><br>
									<input type="radio" id="viewer" name="role" value="viewer" id="role">
									<label for="viewer">Customer</label><br>
									<small id="r_error" class="form-text text-muted"></small>								
							  </div> -->
 							
							  <div class="text-center">
							  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
							  <span><a href="index.php" class="btn btn-primary text-center"  >Login</a></span>
							  </div>
							  
					</form>
			   </div>
			</div>
		</div>
		
			
			
</body>
</html>