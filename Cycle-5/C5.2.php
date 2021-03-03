<!--Program to find the maximum of three numbers-->
<html>
<title> max of three numbers
</title>
<body>
<?php
 $a = 4;
 $b = 6;
 $c = 3;
 if($a > $b)
 {
 if($a > $c)
 echo "Maximum number a = $a";
 else
 echo "Maximum number c = $c";
 }
 else
 {
 if($c > $b)
 echo "Maximum number c = $c";
else
 echo "Maximum number b = $b";
 }
?>
</body>
</html>