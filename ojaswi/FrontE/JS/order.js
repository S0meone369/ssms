$(document).ready(function(){
		var DOMAIN="http://localhost/ojaswi/FrontE";

		function addNewRow(){
			$.ajax({
				url: DOMAIN+"/include/Process.php",
				method : "POST",
				data : {getNewOrder:1},
				success : function(data){
					alert(data);
				}
			})
		}


});