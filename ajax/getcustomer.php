<?php
$q=isset($_GET["q"]) ? strtolower($_GET["q"]) : '';
if (empty($q)) {
	echo '请选择一个网站';
	exit;
}
$con=mysqli_connect('localhost','root','360360');
if (!$con) {
	die('Could not connect：'. mysqli_error($con));
}
//选择数据库
mysqli_select_db($con,"test");
//设置编码，防止中文乱码
mysqli_set_charset($con,"utf8");
$sql="SELECT * FROM customers WHERE CustomerID = '".$q."'";
$result = mysqli_query($con,$sql);
echo "<table border='1'>
<tr>
	<td>CustomerID</td>
	<td>CompanyName</td>
	<td>ContactName</td>
	<td>Address</td>
	<td>City</td>
	<td>PostalCode</td>
	<td>Country</td>
</tr>";
while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['CustomerID'] . "</td>";
	echo "<td>" . $row['CompanyName'] . "</td>";
	echo "<td>" . $row['ContactName'] . "</td>";
	echo "<td>" . $row['Address'] . "</td>";
	echo "<td>" . $row['City'] . "</td>";
	echo "<td>" . $row['PostalCode'] . "</td>";
	echo "<td>" . $row['Country'] . "</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>