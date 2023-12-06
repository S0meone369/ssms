<!DOCTYPE html>

<html>
<head>
<title>Table with database</title>

</head>
<body>
	<?php include 'includes\head.php';?>
	

<table class="table">
<tr>
<th>invoice no</th>
<th>customer_name</th>
<th>sales_date</th>
<th>sub_total</th>
<th>discount</th>
<th>net_total</th>
<th>paid</th>
<th>due</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "admin", "ssms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `invoice_no`, `customer_name`, `sales_date`, `sub_total`, `discount`, `net_total`, `paid`, `due` FROM `invoice` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["invoice_no"]. "</td><td>" . $row["customer_name"] ."</td><td>"
. $row["sales_date"]. "</td><td>". $row["sub_total"]."</td><td>" . $row["discount"]. "</td><td>" . $row["net_total"] ."</td><td>"
. $row["paid"]. "</td><td>". $row["due"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>