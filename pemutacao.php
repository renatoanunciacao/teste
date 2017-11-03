<?php

 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];

 $num1 = substr($num1, ".");
 $divide = explode("", $num1);
 
 echo "<br>". $divide[0];
 echo "<br>".  $divide[1];
 echo "<br>".  $divide[2];
 echo "<br>". $divide[3];
 

?>