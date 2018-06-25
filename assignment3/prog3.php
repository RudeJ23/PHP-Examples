<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$operation = $_REQUEST['operation'];

if ($operation == "Addition")
    echo "<h1>$num1 + $num2 = ". number_format($num1+$num2,2) . "</h1>";
else if ($operation == "Subtraction")
    echo "<h1>$num1 - $num2 = ". number_format($num1-$num2,2) . "</h1>";
else if ($operation == "Multiplication")
    echo "<h1>$num1 * $num2 = ". number_format($num1*$num2,2) . "</h1>";
else if ($operation == "Division")
    echo "<h1>$num1 / $num2 = ". number_format($num1/$num2,2) . "</h1>";
else if ($operation == "Modulus")
    echo "<h1>$num1 % $num2 = ". number_format(fmod($num1,$num2),2) . "</h1>";
    

?>


<form action="prog3.html">
   <input type="submit" value="Return to Input Page">
</form>



<?php
echo "<HR>";
highlight_file("prog3.php");
?>