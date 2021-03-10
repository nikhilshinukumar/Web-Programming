<html>
<head>
<title>
Table Format
</title>
</head>
<body bgcolor="lightblue">
<form method="post" action="C5.9studenttable.php">
<h1 style="text-align:center;color:blue"><u>Search and View Data</u></h1>
<table align="center">
<tr>
<td>Enter the ID</td>
<td>:</td>
<td><input type="text" name="search_id" ></td></tr>
<td colspan="2" style="text-align:center"><input type="submit" name="search" value="Search"></td>
<td colspan="2" style="text-align:center"><input type="submit" name="view" value="View"></td></tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","20mca040","2648","20mca040");
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select*from student where id='$id'";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center;color:red"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Branch</th>
<th>Mark</th>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['branch'];?></td>
<td><?php echo $res['mark'];?></td>
</tr>
</table>

<?php
}
if(isset($_POST["view"]))
{
$qry="select*from student";
$data=mysqli_query($con, $qry);
?>

<h1 style="text-align:center;color:green"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>branch</th>
<th>mark</th>
</tr>

<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['branch'];?></td>
<td><?php echo $res['mark'];?></td>


</tr>
<?php
}
}
?>
</table>
</tr>
</body>
</html>