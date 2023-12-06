
$(document).ready(function(){
	var DOMAIN="http://localhost/ojaswi";
	



	$("#register_form").on("submit",function(){
			
		var fName=$("#fName");
		var lName=$("#lName");
		var email=$("#email");
		var password=$("#password");
		var cpassword=$("#cpassword");
		var contact=$("#contact");
		var p_patt = /^\d{10}$/;
		var e_patt= new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
		//var status=1;
		
	
		if(fName.val()=="" || fName.val().length<2){
			fName.addClass("border-danger");
			$("#fn_error").html("<span class='text-danger'>Please Enter First Name </span>");
			s1=1;
			
		}else{
			fName.removeClass("border-danger");
			$("#fn_error").html("");
			s1=0;
		
		}
		if(lName.val()=="" || lName.val().length<2){
			lName.addClass("border-danger");
			$("#ln_error").html("<span class='text-danger'>Please Enter Last Name </span>");
			s2=1;

		}else{
			lName.removeClass("border-danger");
			$("#ln_error").html("");
			s2=0;
		
		}
		if(!e_patt.test(email.val())){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address </span>");
			s3=1;
		}else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			s3=0;
			
		}
		
		if(!p_patt.test(contact.val())){
			contact.addClass("border-danger");
			$("#c_error").html("<span class='text-danger'>Please Enter your Valid Contact No of 10 digits</span>");
			s4=1;
		}else{
			contact.removeClass("border-danger");
			$("#c_error").html("");
			s4=0;
		}

		if(password.val() =="" ||password.val().length<8){
			password.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>Password Must Contain 8 Charecters </span>");
			s5=1;
		}else{
			password.removeClass("border-danger");
			$("#p1_error").html("");
			s5=0;
		
		}
		if(cpassword.val()!=password.val()) {
			cpassword.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Both Password Should Match </span>");
			s6=1;
			

		}else{
				
			cpassword.removeClass("border-danger");
			$("#p2_error").html("");
			s6=0;
				
		}


		if(s1==0 && s2==0 && s3==0 && s4==0 && s5==0 && s6==0){
			
			
				$.ajax({
					data:  $("#register_form").serialize(),
					type : "POST",
					url : DOMAIN+"/database/insert.php",
					
					//data: $("#register_form").serialize(),
					success : function(data){
						alert(data);
						}
				})
			//alert(status.val());
		}
	})

	$("#login_form").on("submit",function(event){
		event.preventDefault();
		var log_email = $("#log_email"); 
		var password=$("#Password");
	 	var status=false;
	 	if(log_email.val()==""){
	 		log_email.addClass("border-danger");
	 		$("#le_error").html("<span class='text-danger'>Please Enter  Email Address </span>");
	 		s1=1;
	 	}else{
			log_email.removeClass("border-danger");
	 		$("#le_error").html("");
	 		s1=0;
	 	}
	 	if(password.val()==""){
	 		password.addClass("border-danger");
	 		$("#lp_error").html("<span class='text-danger'>Please Enter Password </span>");
	 		s2=1;
	 	}else{
	 		password.removeClass("border-danger");
	 		$("#lp_error").html("");
	 		s2=0;
	 	}

	 	if (s1==0 && s2==0){

				$.ajax({
					data: $("#login_form").serialize(),
					method : "POST",
					url : "/ojaswi/database/login.php",

					success : function(response){
						let trimmedResponse = $.trim(response);
						//alert(trimmedResponse);
						//alert(typeof trimmedResponse);
						
							if(trimmedResponse == 'true'){
								window.location.href="/ojaswi/dashboard.php";

							} if(trimmedResponse == 'false'){
								$("#le_error").html("<span class='text-danger'>wrong email or password </span>");
							}
							
						}
				})
	 	}
	 })
	//fetch category
	fetch_category();
	function fetch_category(){
		$.ajax({
					url : DOMAIN+"/includes/process.php",
					data: {getCategory:1},
					method : "POST",
					

					success : function(data)
					{
					/*	let trimmedResponse = $.trim(data);
						//alert(trimmedResponse);
						
						var choose="<option value=''>Choose Category</option>";
						//console.log("get code after ajax",$('#select_cat').val(trimmedResponse))
						$('#select_cat').val(trimmedResponse);*/
						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Category</option>";
						$(".select_cat").html(choose+trimmedResponse);


					}

				})
	}
	//fetch brand
	fetch_brand();
	function fetch_brand(){
		$.ajax({
					url : DOMAIN+"/includes/process.php",
					data: {getBrand:1},
					method : "POST",
					

					success : function(data)
					{

						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Brand</option>";
						$("#select_brand").html(choose+trimmedResponse);


					}

				})
	}
	//fetch suppliers
	fetch_suppliers();
	function fetch_suppliers(){
		$.ajax({
					url : DOMAIN+"/includes/process.php",
					data: {getSuppliers:1},
					method : "POST",
					

					success : function(data)
					{

						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Suppliers</option>";
						$("#select_supplier").html(choose+trimmedResponse);


					}

				})
	}


fetch_customer();
	function fetch_customer(){
		$.ajax({
					url : DOMAIN+"/includes/process.php",
					data: {getCustomer:1},
					method : "POST",
					

					success : function(data)
					{

						let trimmedResponse = $.trim(data);
						var choose="<option value=''>Choose Customer</option>";
						$("#select_customer").html(choose+trimmedResponse);


					}

				})
	}
	//ADD CATEGORIES

	$("#category_form").on("submit",function(){
		var cat_name = $("#cat_name"); 
		if(cat_name.val()=="")
		{
			//alert("hsjkfhkds");
	 		cat_name.addClass("border-danger");
	 		$("#cat_error1").html("<span class='text-danger'>Please Enter Category </span>");

	 	}
	 	else
	 	{
	 		$.ajax
	 		({
				data: $("#category_form").serialize(),
				method : "POST",
				url : DOMAIN+"/includes/process.php",

				success : function(data)

				{
					let trimmedResponse = $.trim(data);
					alert(trimmedResponse);
					if(trimmedResponse=="CATEGORY_ADDED")
					{
						cat_name.removeClass("border-danger");
		 				$("#cat_error").html("<span class='text-success'>New Category added Successfully </span>");
		 				//$("#cat_name").val("");
		 				fetch_category();
					}
					else
					{
						alert(trimmedResponse);

					}
				}
			})

	 	}
	})
	// Add brand

	$("#brand_form").on("submit",function(){
	var brand_name = $("#brand_name"); 
		if(brand_name.val()=="")
		{
				brand_name.addClass("border-danger");
				$("#brand_error1").html("<span class='text-danger'>Please Enter Brand </span>");

		}
 		else{
	 		$.ajax({
			
	 		method:"POST",
	 		data:$("#brand_form").serialize(),
	 		url:DOMAIN+"/includes/process.php",
	 		success:function(data)
	 			{
	 				let trimmedResponse = $.trim(data);
					if(trimmedResponse=="BRAND_ADDED")
					{
						brand_name.removeClass("border-danger");
						$("#brand_error1").html("<span class='text-success'>New Brand added successfully </span>");
						/*$("#brand_name").val("");*/
						fetch_brand();
					}
				else
					{
					alert(trimmedResponse);
					}
				}

	 })
	}

 })
	//add supplier
$("#supplier_form").on("submit",function(){
	var supplier_name = $("#supplier_name"); 
	var supplier_address = $("#supplier_address"); 
	var supplier_contact = $("#supplier_contact"); 
	var supplier_pan= $("#supplier_pan");
	var p_patt1 = /^\d{10}$/;
	var p_patt4 = /^\d{9}$/;
	
		if(supplier_name.val()=="")
		{
				supplier_name.addClass("border-danger");
				$("#sn_error1").html("<span class='text-danger'>Please Enter Supplier Name </span>");
				s1=1;
		}
		else{
			supplier_name.removeClass("border-danger");
			$("#sn_error1").html("");
			s1=0;
		}
		if(supplier_address.val()=="")
		{
				supplier_address.addClass("border-danger");
				$("#sa_error1").html("<span class='text-danger'>Please Enter Supplier Address </span>");
				s2=1;

		}
		else{
			supplier_address.removeClass("border-danger");
			$("#sa_error1").html("");
			s2=0;
		}
		if(!p_patt1.test(supplier_contact.val())){
			supplier_contact.addClass("border-danger");
			$("#sc_error1").html("<span class='text-danger'>Please Enter your Valid Contact No:</span>");
			s3=1;
			
		}else{
			supplier_contact.removeClass("border-danger");
			$("#sc_error1").html("");
			s3=0;
			
		}
			if(!p_patt4.test(supplier_pan.val())){
			supplier_pan.addClass("border-danger");
			$("#sp_error1").html("<span class='text-danger'>Please Enter your Valid PAN No:</span>");
			s4=1;
			
		}else{
			supplier_pan.removeClass("border-danger");
			$("#sp_error1").html("");
			s4=0;
			
		}

 		if(s1==0 && s2==0 && s3==0 && s4==0 ){
	 		$.ajax({
			
	 		method:"POST",
	 		data:$("#supplier_form").serialize(),
	 		url:DOMAIN+"/includes/process.php",
	 		success:function(data)
	 			{
	 				let trimmedResponse = $.trim(data);
					if(trimmedResponse=="SUPPLIER_ADDED")
					{
						supplier_name.removeClass("border-danger");
						$("#sn_error1").html("<span class='text-success'>New Supplier added successfully </span>");
						/*$("#brand_name").val("");*/
						fetch_suppliers();
					}
				else
					{
					alert(trimmedResponse);
					}
				}

	 })
	}

 })
//addCustomer
$("#customer_form").on("submit",function(){
	var customer_name = $("#customer_name"); 
	var customer_address = $("#customer_address"); 
	var customer_contact = $("#customer_contact"); 
	var customer_pan = $("#customer_pan"); 
	var p_patt2 = /^\d{10}$/;
	var p_patt3 = /^\d{9}$/;
		if(customer_name.val()=="")
		{
				customer_name.addClass("border-danger");
				$("#cn_error1").html("<span class='text-danger'>Please Enter Customer Name </span>");
				s1=1;
		}
		else{
			customer_name.removeClass("border-danger");
			$("#cn_error1").html("");
			s1=0;
		}
		if(customer_address.val()=="")
		{
				customer_address.addClass("border-danger");
				$("#ca_error1").html("<span class='text-danger'>Please Enter Customer Address </span>");
				s2=1;

		}
		else{
			customer_address.removeClass("border-danger");
			$("#ca_error1").html("");
			s2=0;
		}
		if(!p_patt2.test(customer_contact.val())){
			customer_contact.addClass("border-danger");
			$("#cc_error1").html("<span class='text-danger'>Please Enter your Valid Mobile No of 10 digits.</span>");
			s3=1;
			
		}else{
			customer_contact.removeClass("border-danger");
			$("#cc_error1").html("");
			s3=0;
			
		}
		if(!p_patt3.test(customer_pan.val())){
			customer_pan.addClass("border-danger");
			$("#cp_error1").html("<span class='text-danger'>Please Enter your Valid PAN No of 9 digits.</span>");
			s4=1;
			
		}else{
			customer_pan.removeClass("border-danger");
			$("#cp_error1").html("");
			s4=0;
			
		}

 		if(s1==0 && s2==0 && s3==0 && s4==0 ){
	 		$.ajax({
			
	 		method:"POST",
	 		data:$("#customer_form").serialize(),
	 		url:DOMAIN+"/includes/process.php",
	 		success:function(data)
	 			{
	 				let trimmedResponse = $.trim(data);
					if(trimmedResponse=="CUSTOMER_ADDED")
					{
						customer_name.removeClass("border-danger");
						$("#cn_error1").html("<span class='text-success'>New Customer added successfully </span>");
					}
				else
					{
					alert(trimmedResponse);
					}
				}

	 })
	}

 })

$("#product_form").on("submit",function(){
	
		$.ajax
		({
				
		 		method:"POST",
		 		data:$("#product_form").serialize(),
		 		url:DOMAIN+"/includes/process.php",
		 		success:function(data)
		 			{
		 				let trimmedResponse = $.trim(data);
						if(trimmedResponse=="PRODUCT_ADDED")
						{
							alert("New Product Added Successfully");
							$("#select_cat").val("");
							$("#select_brand").val("");
							$("#select_supplier").val("");
							$("#product_name").val("");
							$("#product_price").val("");
							$("#product_quantity").val("");

						}
					else
						{
						alert(trimmedResponse);
						}
					}

	 	})

	})
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


})