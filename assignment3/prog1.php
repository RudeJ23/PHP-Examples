<?php
$temperature = $_REQUEST['num'];
$buttonFtoK = $_REQUEST['buttonFtoK'];
$buttonKtoF = $_REQUEST['buttonKtoF'];

$fahrenheit = ($temperature) * (9/5) - 459.67;
$kelvin = ($temperature + 459.67) * (5/9);   // 9/5*($temperature-273)+32;

if ($buttonFtoK != null)
    echo "<h1>$temperature in Fahrenheit is: " . number_format($kelvin,2) . " in Kelvin</h1>";
else
    echo "<h1>$temperature in Kelvin is: " . number_format($fahrenheit,2) . " in Fahrenheit</h1>";



?>


<form action="prog1.html">
   <input type="submit" value="Return to Input Page">
</form>



<?php
echo "<HR>";
highlight_file("prog1.php");
?>