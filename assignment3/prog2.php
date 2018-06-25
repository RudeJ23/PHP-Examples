<?php
$num = $_REQUEST['num'];
$type = $_REQUEST['type'];
$operation = $_REQUEST['operation'];

if ($type == "Inches")
    {
	if ($operation == "Inches")
	    echo "<h1>$num Inches = ". number_format($num,2) . " Inches</h1>";
	if ($operation == "Feet")
	    echo "<h1>$num Inches = ". number_format($num/12,2) . " Feet</h1>";
	if ($operation == "Miles")
	    echo "<h1>$num Inches = ". number_format($num/12/5280,2) . " Miles</h1>";
	if ($operation == "Centimeters")
	    echo "<h1>$num Inches = ". number_format($num*2.54,2) . " Centimeters</h1>";
	if ($operation == "Meters")
	    echo "<h1>$num Inches = ". number_format($num*2.54/100,2) . " Meters</h1>";
	if ($operation == "Kilometers")
	    echo "<h1>$num Inches = ". number_format($num*2.54/100/1000,2) . " Kilometers</h1>";
    }
else if ($type == "Feet")
    {
	if ($operation == "Inches")
	    echo "<h1>$num Feet = ". number_format($num*12,2) . " Inches</h1>";
	if ($operation == "Feet")
	    echo "<h1>$num Feet = ". number_format($num,2) . " Feet</h1>";
	if ($operation == "Miles")
	    echo "<h1>$num Feet = ". number_format($num/5280,2) . " Miles</h1>";
	if ($operation == "Centimeters")
	    echo "<h1>$num Feet = ". number_format($num*12*2.54,2) . " Centimeters</h1>";
	if ($operation == "Meters")
	    echo "<h1>$num Feet = ". number_format($num*12*2.54/100,2) . " Meters</h1>";
	if ($operation == "Kilometers")
	    echo "<h1>$num Feet = ". number_format($num*12*2.54/100/1000,2) . " Kilometers</h1>";
    }
else if ($type == "Miles")
    {
	if ($operation == "Inches")
	    echo "<h1>$num Miles = ". number_format($num*12*5280,2) . " Inches</h1>";
	if ($operation == "Feet")
	    echo "<h1>$num Miles = ". number_format($num*5280,2) . " Feet</h1>";
	if ($operation == "Miles")
	    echo "<h1>$num Miles = ". number_format($num,2) . " Miles</h1>";
	if ($operation == "Centimeters")
	    echo "<h1>$num Miles = ". number_format($num*12*5280*2.54,2) . " Centimeters</h1>";
	if ($operation == "Meters")
	    echo "<h1>$num Miles = ". number_format($num*12*5280*2.54/100,2) . " Meters</h1>";
	if ($operation == "Kilometers")
	    echo "<h1>$num Miles = ". number_format($num*12*5280*2.54/100/1000,2) . " Kilometers</h1>";
    }
else if ($type == "Centimeters")
    {
	if ($operation == "Inches")
	    echo "<h1>$num Centimeters = ". number_format($num/2.54,2) . " Inches</h1>";
	if ($operation == "Feet")
	    echo "<h1>$num Centimeters = ". number_format($num/2.54/12,2) . " Feet</h1>";
	if ($operation == "Miles")
	    echo "<h1>$num Centimeters = ". number_format($num/2.54/12/5280,2) . " Miles</h1>";
	if ($operation == "Centimeters")
	    echo "<h1>$num Centimeters = ". number_format($num,2) . " Centimeters</h1>";
	if ($operation == "Meters")
	    echo "<h1>$num Centimeters = ". number_format($num/100,2) . " Meters</h1>";
	if ($operation == "Kilometers")
	    echo "<h1>$num Centimeters = ". number_format($num/100/1000,2) . " Kilometers</h1>";
    }
else if ($type == "Meters")
    {
	if ($operation == "Inches")
	    echo "<h1>$num Meters = ". number_format($num/2.54*100,2) . " Inches</h1>";
	if ($operation == "Feet")
	    echo "<h1>$num Meters = ". number_format($num/2.54*100/12,2) . " Feet</h1>";
	if ($operation == "Miles")
	    echo "<h1>$num Meters = ". number_format($num/2.54*100/12/5280,2) . " Miles</h1>";
	if ($operation == "Centimeters")
	    echo "<h1>$num Meters = ". number_format($num*100,2) . " Centimeters</h1>";
	if ($operation == "Meters")
	    echo "<h1>$num Meters = ". number_format($num,2) . " Meters</h1>";
	if ($operation == "Kilometers")
	    echo "<h1>$num Meters = ". number_format($num/1000,2) . " Kilometers</h1>";
    }
else if ($type == "Kilometers")
    {
	if ($operation == "Inches")
	    echo "<h1>$num Kilometers = ". number_format($num/2.54*100*1000,2) . " Inches</h1>";
	if ($operation == "Feet")
	    echo "<h1>$num Kilometers = ". number_format($num/2.54*100*1000/12,2) . " Feet</h1>";
	if ($operation == "Miles")
	    echo "<h1>$num Kilometers = ". number_format($num/2.54*100*1000/12/5280,2) . " Miles</h1>";
	if ($operation == "Centimeters")
	    echo "<h1>$num Kilometers = ". number_format($num*1000*100,2) . " Centimeters</h1>";
	if ($operation == "Meters")
	    echo "<h1>$num Kilometers = ". number_format($num*1000,2) . " Meters</h1>";
	if ($operation == "Kilometers")
	    echo "<h1>$num Kilometers = ". number_format($num,2) . " Kilometers</h1>";
    }
    
    
?>


<form action="prog2.html">
   <input type="submit" value="Return to Input Page">
</form>



<?php
echo "<HR>";
highlight_file("prog2.php");
?>