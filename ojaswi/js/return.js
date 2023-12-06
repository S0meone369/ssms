 $(document).ready(function(){
		var DOMAIN="http://localhost/ojaswi";
addNewRow();
$("#add").click(function(){
	addNewRow();
})

	function addNewRow(){
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : {getSalesReturnItem:1},
			success : function(data){
				let trimmedResponse = $.trim(data);
				$("#invoice_item").append(trimmedResponse);
				var n=0;
				$(".number").each(function(){
					$(this).html(++n);

				})
			}
		})
	}
	$("#remove").click(function(){
	$("#invoice_item").children("tr:last").remove();
	calculate(0,0);
	})
	$("#invoice_item").delegate(".product_id","change",function()
	{
		var product_id=$(this).val();
		var tr=$(this).parent().parent();
		$(".overlay").show();
		$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {getPriceAndQty:1,id:product_id},
			success : function(data){
				tr.find(".tqty").val(data["product_stock"]);
				tr.find(".product_name").val(data["product_name"]);
				tr.find(".qty").val(1);
				tr.find(".price").val(data["product_price"]);
				tr.find(".amt").html(tr.find(".qty").val()*tr.find(".price").val());
				calculate(0,0);
			}
		})
	})
	//Get PAN number and customer name
	$("#get_salesreturn_data").delegate(".select_customer","change",function()	
	{
		var customer_id=$(this).val();
		var abc=$(this);
			$.ajax({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			dataType : "json",
			data : {getPan:1,id:customer_id},
			success : function(data){
				
				$('#customer_pan').val(data["customer_pan"]);
				$('#customer_name').val(data["customer_name"]);
				
				calculate();
			}


		})

	})
	//Validating bill
	$("#invoice_item").delegate(".qty","keyup",function(){
			var qty=$(this);
			var tr=$(this).parent().parent();
			if(isNaN(qty.val()))
			{
				alert("Please enter valid number");
				qty.val(1);
			}
			else
			{
				
					tr.find(".amt").html(qty.val()*tr.find(".price").val());
					calculate();
				
			}
		})

	function calculate()
		{
			var sub_total=0;
			var net_total=0;
			
			
			$(".amt").each(function () {
				sub_total=sub_total+($(this).html()*1);
			})
			net_total=sub_total;
			
			$("#sub_total").val(sub_total);
			
			 
			 $("#net_total").val(net_total);
			
			
	
		

		
		}
		//order accepting
	$("#sales_return_form").click(function(){
		var invoice = $("get_salesreturn_data").serialize();
			if($("#invoice_no").val() === ""){
				alert("please enter invoice no");
			}
			else if
				($("#select_customer").val() === ""){
				alert("please enter customer name");

			}
			else{
				$.ajax
		({
			url : DOMAIN+"/includes/process.php",
			method : "POST",
			data : $("#get_salesreturn_data").serialize(),
			success : function(data)
			{


						let trimmedResponse = $.trim(data);
						if(trimmedResponse<0 )
					{
						alert(trimmedResponse);
					}
					else {
						$("#get_salesreturn_data").trigger("reset");
							if(confirm("DO YOU WANT TO PRINT CREDIT NOTE?"))
							{
							//window.location.href=DOMAIN+"/includes/salesreturn_bill.php?invoice_no="+data+"&"+invoice;
							}
					}
			}
			});
		}
	});
});

