<!--Program to develop student registration form and display all the submitted data on another page-->
<html>
<head>
<title>Insert data in form</title>
</head>
<body>
<form action = "C5.4getdata.php" method = "POST">
Name:
<input type = "text" name = "txtname">
<br><br>
Roll Number.:
<input type = "text" name = "txtr_no">
<br><br>
Address:
<textarea name = "add" type = "textarea"></textarea>
<br><br>
Contact Number:
<input type = "text" name = "txtc_no">
<br><br>
Email ID:
<input type = "text" name = "txteid">
<br><br>
<input type = "Submit" name = "insert" value = "Save">
<input type = "Reset" value = "Cancel">
</form>
</body>
</html>