<?php
$con=mysqli_connect("localhost","20mca040","2648","20mca040");
$id=$_GET["id"];
if($con)
{

$qry1="delete from student where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data Removed<br>";
} 
}
?>