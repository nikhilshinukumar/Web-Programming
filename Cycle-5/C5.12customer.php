<html>
<head></head>
<title>customer information</title>
<body bgcolor="Yellow" font-color="red">
<h1 style="text-align:center"><u>CUSTOMER INFORMATION</u></h1>
<form method="post" action="C5.12customer.php">
<table align="center">
<tr>
<td>Customer Number</td>
<td>:</td>
<td><input type="text" name="c_no"></td></tr>
<tr>
<td>Name of the Customer</td>
<td>:</td>
<td><input type="text" name="c_name"></td></tr>
<tr>
<td>Item Purchased</td>
<td>:</td>
<td><input type="text" name="item_purchased"></td></tr>
<tr>
<td>Mobile Number</td>
<td>:</td>
<td><input type="text" name="mob_no"></td></tr>
<tr>
<td colspan="2" style="text-align:center"><input type="submit" name="insert" value="Insert"></td>

<td colspan="2" style="text-align:center"><input type="submit" name="view" value="View"</td></tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","20mca040","2648","20mca040");
if(isset($_POST["insert"]))
{
if($con)
{
$c_no=$_POST["c_no"];
$c_name=$_POST["c_name"];
$item_purchased=$_POST["item_purchased"];
$mob_no=$_POST["mob_no"];

$qry="INSERT INTO customer(c_no,c_name,item_purchased,mob_no) values('$c_no','$c_name','$item_purchased','$mob_no')";
if(mysqli_query($con,$qry))
{
echo "inserted";
}
}
}
if(isset($_POST["view"]))
{
$qry="select*from customer";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>CUSTOMER DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>Customer Number</th>
<th>Customer Name</th>
<th>Item Purchased</th>
<th>Mobile Number</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res[0];?></td>
<td><?php echo $res[1];?></td>
<td><?php echo $res[2];?></td>
<td><?php echo $res[3];?></td>
</tr>
<?php
}
}
?>
</body>
</html>