<?php
  include "./header_top.php";
?>


        <div class="row">		

		<div class="container">
					<a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#form_category">Add</a>
			<table class="table table-hover table-striped mt-2">
			    <thead>
			      <tr>
			        <th>SN</th>
			        <th>Categories</th>
			        <th>Status</th>
			        <th>Action</th>
			      </tr>
			    </thead>
	    		<tbody id="get_category">
			     <!--  <tr>
			        <td>1</td>
			        <td>ABGVDS</td>
			        <td><a href="#" class="btn btn-success btn-sm">Active</a></td>
			        <td><a href="#" class="btn btn-danger btn-sm">Delete</a>
			        <a href="#" class="btn btn-info btn-sm">Edit</a></td>
			      </tr> -->
	   		 	</tbody>
  			</table>
		</div>

<?php

include_once("./templates/update_category.php");

?>
<?php
		//category form
		include_once("./templates/category.php");
	?>	


				</div>
	</div>


</div>
</div>

<script type="text/javascript" src="./js/main.js"></script>
		<script type="text/javascript" src="./js/manage1.js"></script>

	</body>
	</html>