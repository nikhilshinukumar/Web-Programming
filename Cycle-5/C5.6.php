<!--Write a program that keeps track of how many times a visitor has
loaded the page.-->
<html>
<head>
<title>
Number of time visitor loaded the page.
</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['counter']))
{
 $_SESSION['counter'] += 1;
}
else
{
 $_SESSION['counter'] = 1;
}
echo "You have visited this page ".$_SESSION['counter']." time in this session";
 ?>
</body>
</html>