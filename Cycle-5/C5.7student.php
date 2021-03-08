<!--Php program to insert , update , and view student details using mysql-->
<html>
<head></head>
<body bgcolor="Yellow" font-color="red">
<div align="center">
<h1 style="text-align:center"><u>Insert Data</u></h1>
<form method="post" action="C5.7student.php" >
Name : <input type="text" name="name"><br><br>
Branch : <input type="text" name="branch"><br><br>
Mark : <input type="text" name="mark"><br><br>


<input type="submit" value="Submit" name=submit>
</form>
</div>
<div align="center">
<form method="post" action="C5.7student.php">
<h1 style="text-align:center"><u>UPDATE DATA</u></h1>
<input type="text" name="search_id" >
<input type="submit" name="search" value="Search">
<input type="submit" name="view" value="View">
</form>
</div>
<?php
$con=mysqli_connect("localhost","20mca040","2648","20mca040");
if(isset($_POST["submit"]))
{
if($con)
{
echo $name=$_POST["name"];
echo $branch=$_POST["branch"];
echo $mark=$_POST["mark"];
$qry="INSERT INTO student(name,branch,mark) VALUES ('$name','$branch','$mark')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
}
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select*from student where id='$id'";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
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
<td><a href="C5.7student_update.php?id=<?php echo $res['id'];?>">Update</a></td>
<td><a href="C5.7student_delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from student";
$data=mysqli_query($con, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
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
</body>
</html>
