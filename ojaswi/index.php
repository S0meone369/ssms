<!DOCTYPE html>
<html>
<head>
	<?php include 'includes\head.php';?>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<br></br>
	<div class="container">
		<div class="card mx-auto" style="width: 18rem;">
		  <img src="./image/sta.jpg" class="card-img-top mx-auto" style="width:90%" alt="Login Icon"/>
			<div class="card-body">
				<form name="login_form" id="login_form"  method = "post"> 
					<div class="mb-3">
					<label for="Email" class="form-label">Username</label>
					<input type="Email" class="form-control" name="log_email" id="log_email" >
					<small id="le_error" class="form-text text-muted"></small>
					</div>
					<div cl ass="mb-3">
						<label for="password" class="form-label">Password</label>
						<div class=" input-group">
							<input type="password" class="form-control" name="Password" id="Password"/>
							
						</div>	
						<small id="lp_error" class="form-text text-muted"></small>
					</div>
					<br></br>
					<div class="center text-center">
						<button type="submit mx-auto" name="submit" class="btn btn-primary" ><i class="fa fa-lock "></i>Login </button><br></br>
									<span><a href='create.php'>Create Account</a></span>
					</div>
				</form>
			</div>
			
		</div>
	</div>

</body>
</html>
