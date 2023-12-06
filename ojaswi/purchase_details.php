<!DOCTYPE html>

<html>
<head>
<title>Table with database</title>

</head>
<body>
  <?php include 'includes\head.php';?>
 

<table class="table">
<tr>
<th>id</th>
<th>bill_no</th>
<th>product_name</th>
<th>price</th>
<th>qty</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ssms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `id`, `bill_no`, `product_name`, `price`, `qty` FROM `purchase_details`  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["bill_no"] ."</td><td>"
. $row["product_name"]. "</td><td>". $row["price"]."</td><td>" . $row["qty"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>