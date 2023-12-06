$(document).ready(function(){
		var DOMAIN="http://localhost/ojaswi";
//Manage Category
manageCategory();
function manageCategory(){
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			data:{manageCategory:1},
			success:function(data)
			{
				let trimmedResponse = $.trim(data);
				$("#get_category").html(trimmedResponse);
				//alert(trimmedResponse);
					

			}
		})
	}
//Manage Brand
manageBrand();
function manageBrand(){
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			data:{manageBrand:1},
			success:function(data)
			{
				let trimmedResponse = $.trim(data);
				$("#get_brand").html(trimmedResponse);
				//alert(trimmedResponse);
					

			}
		})
	}
	//Manage Supplier
manageSupplier();
function manageSupplier(){
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			data:{manageSupplier:1},
			success:function(data)
			{
				let trimmedResponse = $.trim(data);
				$("#get_supplier").html(trimmedResponse);
				//alert(trimmedResponse);
					

			}
		})
	}
	//Manage Product
manageProduct();
function manageProduct(){
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			data:{manageProduct:1},
			success:function(data)
			{
				let trimmedResponse = $.trim(data);
				$("#get_product").html(trimmedResponse);
				//alert(trimmedResponse);
					

			}
		})
	}
	//Manage Customer
manageCustomer();
function manageCustomer(){
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			data:{manageCustomer:1},
			success:function(data)
			{
				let trimmedResponse = $.trim(data);
				$("#get_customer").html(trimmedResponse);
				//alert(trimmedResponse);
					

			}
		})
	}
//DELETE CATEGORIES
$("body").delegate(".del_cat","click",function(){
		var did=$(this).attr("did");
		if(confirm("are you sure want to delete categories?"))
		{
			$.ajax
			({
				url:DOMAIN+"/includes/process.php",
				method:"POST",
				data:{deleteCategory:1,id:did},
				success:function(data)
				{
					let trimmedResponse = $.trim(data);
					if(trimmedResponse=="CATEGORY_DELETED")
					{
						alert ("CATEGORY DELETED SUCESSFULLY");
						manageCategory();
					}
					else
					{
						alert(trimmedResponse);
					}
				}
			})
		}
	})
//DELETE BRAND
$("body").delegate(".del_brand","click",function(){
		var did=$(this).attr("did");
		if(confirm("are you sure want to delete brand?"))
		{
			$.ajax
			({
				url:DOMAIN+"/includes/process.php",
				method:"POST",
				data:{deleteBrand:1,id:did},
				success:function(data)
				{
					let trimmedResponse = $.trim(data);
					if(trimmedResponse=="BRAND_DELETED")
					{
						alert ("BRAND DELETED SUCESSFULLY");
						manageBrand();
					}
					else
					{
						alert(trimmedResponse);
					}
				}
			})
		}
	})
//DELETE SUPPLIER
$("body").delegate(".del_supplier","click",function(){
		var did=$(this).attr("did");
		if(confirm("are you sure want to delete supplier?"))
		{
			$.ajax
			({
				url:DOMAIN+"/includes/process.php",
				method:"POST",
				data:{deleteSupplier:1,id:did},
				success:function(data)
				{
					let trimmedResponse = $.trim(data);
					if(trimmedResponse=="SUPPLIER_DELETED")
					{
						alert ("SUPPLIER DELETED SUCESSFULLY");
						manageSupplier();
					}
					else
					{
						alert(trimmedResponse);
					}
				}
			})
		}
	})
//DELETE PRODUCT
$("body").delegate(".del_product","click",function(){
		var did=$(this).attr("did");
		if(confirm("are you sure want to delete product?"))
		{
			$.ajax
			({
				url:DOMAIN+"/includes/process.php",
				method:"POST",
				data:{deleteProduct:1,id:did},
				success:function(data)
				{
					let trimmedResponse = $.trim(data);
					if(trimmedResponse=="PRODUCT_DELETED")
					{
						alert ("PRODUCT DELETED SUCESSFULLY");
						manageProduct();
					}
					else
					{
						alert(trimmedResponse);
					}
				}
			})
		}
	})
//DELETE CUSTOMER
$("body").delegate(".del_customer","click",function(){
		var did=$(this).attr("did");
		if(confirm("are you sure want to delete customer?"))
		{
			$.ajax
			({
				url:DOMAIN+"/includes/process.php",
				method:"POST",
				data:{deleteCustomer:1,id:did},
				success:function(data)
				{
					let trimmedResponse = $.trim(data);
					if(trimmedResponse=="CUSTOMER_DELETED")
					{
						alert ("CUSTOMER DELETED SUCESSFULLY");
						manageCustomer();
					}
					else
					{
						alert(trimmedResponse);
					}
				}
			})
		}
	})
//UPDATE CATEGORIES
$("body").delegate(".edit_cat","click",function(){
		var eid=$(this).attr("eid");
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			dataType:"json",
			data:{updateCategory:1,id:eid},
			success:function(data)
			{
				//let trimmedResponse = $.trim(data);
				//console.log(data);
				$("#cat_id").val(data["cat_id"]);
				$("#update_cat").val(data["cat_name"]);
			}
		})

		
	})
//UPDATE CATEGORIES
$("#update_category_form").on("submit",function(){
		var update_cat = $("#update_cat"); 
		if(update_cat.val()=="")
		{
	 		update_cat.addClass("border-danger");
	 		$("#cat_error").html("<span class='text-danger'>Please Enter Category </span>");

	 	}
	 	else
	 	{
	 		$.ajax
	 		({
				data: $("#update_category_form").serialize(),
				method : "POST",
				url : DOMAIN+"/includes/process.php",

				success : function(data)

				{
					let trimmedResponse = $.trim(data);

					/*alert(trimmedResponse);*/
					$("#cat_error").html("<span class='text-success'> Category updated successfully </span>");
					manageCategory();
					
				}
			})

	 	}

	})
//UPDATE BRANDS
$("body").delegate(".edit_brand","click",function(){
		var eid=$(this).attr("eid");
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			dataType:"json",
			data:{updateBrand:1,id:eid},
			success:function(data)
			{
				//let trimmedResponse = $.trim(data);
				//console.log(data);
				$("#brand_id").val(data["brand_id"]);
				$("#update_brand").val(data["brand_name"]);
			}
		})

		
	})
//UPDATE PRODUCT
$("body").delegate(".edit_product","click",function(){
		var eid=$(this).attr("eid");
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			dataType:"json",
			data:{updateProduct:1,id:eid},
			success:function(data)
			{
				//let trimmedResponse = $.trim(data);
				//console.log(data);
				$("#product_id").val(data["product_id"]);
				$("#update_product").val(data["product_name"]);
				$("#select_cat").val(data["cat_id"]);
				$("#select_brand").val(data["brand_id"]);
				$("#select_supplier").val(data["supplier_id"]);
				$("#product_price").val(data["product_price"]);
				$("#product_quantity").val(data["product_stock"]);

			}
		})

		
	})
//UPDATE BRAND AFTER DATA GIVEN
$("#update_brand_form").on("submit",function(){
		var update_brand = $("#update_brand"); 
		if(update_brand.val()=="")
		{
	 		update_brand.addClass("border-danger");
	 		$("#brand_error").html("<span class='text-danger'>Please Enter Brand </span>");

	 	}
	 	else
	 	{
	 		$.ajax
	 		({
				data: $("#update_brand_form").serialize(),
				method : "POST",
				url : DOMAIN+"/includes/process.php",

				success : function(data)

				{
					let trimmedResponse = $.trim(data);
					//window.location.href="";
					$("#brand_error").html("<span class='text-success'> Brand updated successfully </span>");
					manageBrand();
					
				}
			})

	 	}
	})//UPDATE BRAND AFTER DATA GIVEN
$("#update_brand_form").on("submit",function(){
		var update_brand = $("#update_brand"); 
		if(update_brand.val()=="")
		{
	 		update_cat.addClass("border-danger");
	 		$("#brand_error").html("<span class='text-danger'>Please Enter Brand </span>");

	 	}
	 	else
	 	{
	 		$.ajax
	 		({
				data: $("#update_brand_form").serialize(),
				method : "POST",
				url : DOMAIN+"/includes/process.php",

				success : function(data)

				{
					let trimmedResponse = $.trim(data);
					//window.location.href="";
					$("#brand_error").html("<span class='text-success'> Brand updated successfully </span>");
					manageBrand();
					
				}
			})

	 	}
	})
//UPDATE SUPPLIERS
$("body").delegate(".edit_supplier","click",function(){
		var eid=$(this).attr("eid");
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			dataType:"json",
			data:{updateSupplier:1,id:eid},
			success:function(data)
			{
				//let trimmedResponse = $.trim(data);
				//console.log(data);
				$("#supplier_id").val(data["supplier_id"]);
				$("#update_suppliername").val(data["supplier_name"]);
				$("#update_supplieraddress").val(data["supplier_address"]);
				$("#update_suppliercontact").val(data["supplier_contact"]);
				$("#update_supplierpan").val(data["supplier_pan"]);
			
			}
		})

		
	})
//UPDATE CUSTOMER
$("body").delegate(".edit_customer","click",function(){
		var eid=$(this).attr("eid");
		$.ajax({
			url:DOMAIN+"/includes/process.php",
			method:"POST",
			dataType:"json",
			data:{updateCustomer:1,id:eid},
			success:function(data)
			{
				//let trimmedResponse = $.trim(data);
				//console.log(data);
				$("#customer_id").val(data["customer_id"]);
				$("#update_customername").val(data["customer_name"]);
				$("#update_customeraddress").val(data["customer_address"]);
				$("#update_customercontact").val(data["customer_contact"]);
				$("#update_customerpan").val(data["customer_pan"]);
			}
		})

		
	})

//UPDATE SUPPLIER AFTER DATA GIVEN
$("#update_supplier_form").on("submit",function(){
		var update_suppliername = $("#update_suppliername"); 
		var update_supplieraddress = $("#update_supplieraddress"); 
		var update_suppliercontact = $("#update_suppliercontact");
		var update_supplierpan = $("#update_supplierpan");

		var p_patt1 = /^\d{10}$/;
		var p_patt4 = /^\d{9}$/;
		if(update_suppliername.val()=="")
		{
				update_suppliername.addClass("border-danger");
				$("#sn_error").html("<span class='text-danger'>Please Enter Supplier Name </span>");
				s1=1;
		}
		else{
			update_suppliername.removeClass("border-danger");
			$("#sn_error").html("");
			s1=0;
		}
		if(update_supplieraddress.val()=="")
		{
				update_supplieraddress.addClass("border-danger");
				$("#sa_error").html("<span class='text-danger'>Please Enter Supplier Address </span>");
				s2=1;

		}
		else{
			update_supplieraddress.removeClass("border-danger");
			$("#sa_error").html("");
			s2=0;
		}
		if(!p_patt1.test(update_suppliercontact.val())){
			update_suppliercontact.addClass("border-danger");
			$("#sc_error").html("<span class='text-danger'>Please Enter your Valid Contact No:</span>");
			s3=1;
			
		}else{
			update_suppliercontact.removeClass("border-danger");
			$("#sc_error").html("");
			s3=0;
			
		}
		if(!p_patt4.test(update_supplierpan.val())){
			update_supplierpan.addClass("border-danger");
			$("#sp_error").html("<span class='text-danger'>Please Enter your Valid PAN No:</span>");
			s4=1;
			
		}else{
			update_supplierpan.removeClass("border-danger");
			$("#sp_error").html("");
			s4=0;
			
		}
	 	if(s1==0 && s2==0 && s3==0 && s4==0 )
	 	{
	 		$.ajax
	 		({
				data: $("#update_supplier_form").serialize(),
				method : "POST",
				url : DOMAIN+"/includes/process.php",

				success : function(data)

				{
					let trimmedResponse = $.trim(data);
					//window.location.href="";
					$("#sn_error").html("<span class='text-success'> Supplier updated successfully </span>");
					manageSupplier();
					
				}
			})

	 	}
	})
//UPDATE PRODUCT AFTER DATA GIVEN
$("#update_product_form").on("submit",function(){
	
	 $.ajax
	 	({
			data: $("#update_product_form").serialize(),
			method : "POST",
			url : DOMAIN+"/includes/process.php",

			success : function(data)

			{
				let trimmedResponse = $.trim(data);
				if(trimmedResponse=="UPDATED")
				{
				//window.location.href="";
				$("#pro_error").html("<span class='text-success'> Product updated successfully </span>");
				manageProduct();
				}
			
					
			}
		})

	 	
	})
//UPDATE CUSTOMER AFTER DATA GIVEN
$("#update_customer_form").on("submit",function(){
		var update_customername = $("#update_customername"); 
		var update_customeraddress = $("#update_customeraddress"); 
		var update_customercontact = $("#update_customercontact"); 
		var update_customerpan = $("#update_customerpan"); 
		var p_patt1 = /^\d{10}$/;
		var p_patt2 = /^\d{9}$/;
		if(update_customername.val()=="")
		{
				update_customername.addClass("border-danger");
				$("#cn_error").html("<span class='text-danger'>Please Enter Customer Name </span>");
				s1=1;
		}
		else{
			update_customername.removeClass("border-danger");
			$("#cn_error").html("");
			s1=0;
		}
		if(update_customeraddress.val()=="")
		{
				update_customeraddress.addClass("border-danger");
				$("#ca_error").html("<span class='text-danger'>Please Enter Customer Address </span>");
				s2=1;

		}
		else{
			update_customeraddress.removeClass("border-danger");
			$("#ca_error").html("");
			s2=0;
		}
		if(!p_patt1.test(update_customercontact.val())){
			update_customercontact.addClass("border-danger");
			$("#cc_error").html("<span class='text-danger'>Please Enter your Valid Mobile No:</span>");
			s3=1;
			
		}else{
			update_customercontact.removeClass("border-danger");
			$("#cc_error").html("");
			s3=0;
			
		}
		if(!p_patt2.test(update_customerpan.val())){
			update_customerpan.addClass("border-danger");
			$("#cp_error").html("<span class='text-danger'>Please Enter your Valid PAN No:</span>");
			s4=1;
			
		}else{
			update_customerpan.removeClass("border-danger");
			$("#cp_error").html("");
			s4=0;
			
		}
		if(s1==0 && s2==0 && s3==0 && s4==0 )
	 	{
	 		$.ajax
	 		({
				data: $("#update_customer_form").serialize(),
				method : "POST",
				url : DOMAIN+"/includes/process.php",

				success : function(data)

				{
					let trimmedResponse = $.trim(data);
					//window.location.href="";
					$("#cn_error").html("<span class='text-success'> Customer updated successfully </span>");
					manageCustomer();
					
				}
			})

	 	}
	})
})