<html>
<head>
<title<Student Registration</title>
</head>
<body bgcolor="Yellow" font-color="red">
<?php 
 $id=$_GET['id'];
$con=mysqli_connect("localhost","20mca040","2648","20mca040");
$qry="select*from student where id='$id'";
$res=mysqli_query($con, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="C5.7student_update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="id" value="<?php echo $r['id'];?>"></td></tr>
<tr>
<td>Name of the Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['name'];?>"></td></tr>
<tr>
<td>Mark of the Student</td>
<td>:</td>
<td><input type="text" name="mark" value="<?php echo $r['mark'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="Update" name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
$id=$_POST["id"];
$name=$_POST["name"];
$mark=$_POST["mark"];
$qry1="update student set name='$name' , mark='$mark' where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data updated successfully<br>";
}
}
?>
</body>
</html>