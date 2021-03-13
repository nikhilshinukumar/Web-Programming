<html>
<head></head>
<body bgcolor="green" font-color="red">
<div align="center">
<h1 style="text-align:center"><u>Student Registration</u></h1>
<form method="post" action="C5.10studentrecord.php" >
Roll Number : <input type="text" name="roll_no"><br><br>
Name : <input type="text" name="name"><br><br>
Gender : <input type="text" name="gender"><br><br>
Address : <input type="text" name="address"><br><br>


<input type="submit" value="Submit" name=submit>
<input type="submit" name="view" value="View">
</form>

<?php
$con=mysqli_connect("localhost","20mca040","2648","20mca040");
if(isset($_POST["submit"]))
{
if($con)
{
echo $roll_no=$_POST["roll_no"];
echo $name=$_POST["name"];
echo $gender=$_POST["gender"];
echo $address=$_POST["address"];
$qry="INSERT INTO studentrecord(roll_no,name,gender,address) VALUES ('$roll_no','$name','$gender','$address')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
}
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select*from studentrecord where id='$id'";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Roll No</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>

</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['roll_no'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['gender'];?></td>
<td><?php echo $res['address'];?></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from studentrecord";
$data=mysqli_query($con, $qry);
?>

<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Roll No</th>
<th>Name</th>
<th>Gender</th>
<th>Address</th>

</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['roll_no'];?></td>
<td><?php echo $res['name'];?></td>
<td><?php echo $res['gender'];?></td>
<td><?php echo $res['address'];?></td>


</tr>
<?php
}
}
?>
</table>
</body>
</html>
