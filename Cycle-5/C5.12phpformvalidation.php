<html>
<head></head>
<title<Student Registration</title>
<body bgcolor="yellow">
<style>
.error {color: #FF0000;}
</style>
<?php
$id=$name=$branch=$mark="";
if(isset($_POST["submit"]))
{
if(empty($_POST["id"]))
{
$iderror="Student id required";
}
elseif($_POST["id"]>100)
{
$iderror1="Enter a value less than 100";
} 
else
{
$id=$_POST["id"];
}
if(empty($_POST["name"]))
{
$nameerror="Student name required";
}
else
{
$name=$_POST["name"];
}
if(empty($_POST["branch"]))
{
$brancherror="Branch required";
}
else
{
$branch=$_POST["branch"];
}
if(empty($_POST["mark"]))
{
$markerror="Enter your mark";
}
elseif($_POST["mark"]>1200)
{
$markerror1="Enter a valid value";
}
else
{
$mark=$_POST["mark"];
}
}
?>
<form method="post" action="C5.12phpformvalidation.php" >
<h1 style="text-align:center;color:red"><u>STUDENT REGISTRATION FORM</u></h1>

<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="id"><span class="error">*<?php echo $iderror; echo $iderror1;?></span></td></tr>

<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name"><span class="error">*<?php echo $nameerror; ?></span></td></tr>
<tr>
<td>BRANCH</td>
<td>:</td>
<td><input type="text" name="branch"><span class="error">*<?php echo $brancherror; ?></span></td></tr>
<tr>
<td>MARKS OBTAINED</td>
<td>:</td>
<td><input type="text" name="mark"><span class="error">*<?php echo $markerror;echo $markerror1; ?></span></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="Submit" name="submit"></td></tr>
</table>
</form>


</body>
</html>