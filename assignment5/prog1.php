<form>
<?php
   extract($_REQUEST);
   $today = time();
   $daystring = "$month/$day/$year";
   $ts = strtotime($daystring);

   
   echo <<< HERE
	<h1>Enter Your Birthday</h1>
	<table> 
	    <style>
		table {
		    border: 1px solid black;
		} 
		th {
		    border: 1px solid black;
		}
		td {
		    border: 1px solid black;
		}
	    </style>
		<tr>
		  <th>Month</th>
		  <th>Day</th>
		  <th>Year</th>
		</tr>
		<tr>
		  <td>
		      <input type="radio" name="month" value="1">January<br/>
		      <input type="radio" name="month" value="2">February<br/>
		      <input type="radio" name="month" value="3">March<br/>
		      <input type="radio" name="month" value="4">April<br/>
		      <input type="radio" name="month" value="5">May<br/>
		      <input type="radio" name="month" value="6">June<br/>
		      <input type="radio" name="month" value="7">July<br/>
		      <input type="radio" name="month" value="8">August<br/>
		      <input type="radio" name="month" value="9">September<br/>
		      <input type="radio" name="month" value="10">October<br/>
		      <input type="radio" name="month" value="11">November<br/>
		      <input type="radio" name="month" value="12">December<br/>
		  </td>
		  <td valign="top">
		      <select name="day">
		      <option>1</option>
		      <option>2</option>
		      <option>3</option>
		      <option>4</option>
		      <option>5</option>
		      <option>6</option>
		      <option>7</option>
		      <option>8</option>
		      <option>9</option>
		      <option>10</option>
		      <option>11</option>
		      <option>12</option>
		      <option>13</option>
		      <option>14</option>
		      <option>15</option>
		      <option>16</option>
		      <option>17</option>
		      <option>18</option>
		      <option>19</option>
		      <option>20</option>
		      <option>21</option>
		      <option>22</option>
		      <option>23</option>
		      <option>24</option>
		      <option>25</option>
		      <option>26</option>
		      <option>27</option>
		      <option>28</option>
		      <option>29</option>
		      <option>30</option>
		      <option>31</option>
		      </select>
		  </td>
		  <td valign="top">
		      <input type="number" name="year" value="1995" min="1900" max="2017">
		  </td>
		</tr>
	</table>
	<br>
		
	<h2>What do you want to know about your birthday?</h2>
	<input type="checkbox" name="option1" value="season"> Season of the year<br>
	<input type="checkbox" name="option2" value="zodiac"> Zodiac sign<br>
	<input type="checkbox" name="option3" value="chinese"> Chinese animal sign<br>
	<input type="checkbox" name="option4" value="age"> How old am I?<br>
	<input type="checkbox" name="option5" value="dayOfWeek"> What day of the week was I born?<br>
	<input type="checkbox" name="option6" value="dayOfWeekNext"> What day of the week is my next birthday?<br>
	<input type="checkbox" name="option7" value="daysUntilNext"> How many days until my next birthday?<br>          
	<br>
	<input type="submit" name="button" value="Submit">
	<br><br>
	
	  
	<a href="index.html">Return To Assignment 5 Directory</a>
	<HR>
HERE;
   
   if ($button == "Submit")
   {
      // check for invalid date
      if (checkdate($month,$day,$year))
      {
	  echo "<h1>Information about your ". date("l, F jS, Y",$ts) . " birthday:</h1>";
	  
	  if (isset($option1))
	      echo "<h2>You were born in " . season($month,$day) . "</h2>";
	  if (isset($option2)) 
	      echo "<h2>Your zodiac sign is " . zodiac($month,$day) . "</h2>";
	  if (isset($option3))
	      echo "<h2>You were born in the Chinese year of the " . chinese($year) . "</h2>";
	  if (isset($option4)) 
	      echo "<h2>You are " . age($month,$day,$year) . " years old</h2>";
	  if (isset($option5)) 
	      echo "<h2>You were born on a " . dayOfWeek($month,$day,$year) . "</h2>";
	  if (isset($option6)) 
	      echo "<h2>Your next birthday is on a " . dayOfWeekNext($month,$day) . "</h2>";
	  if (isset($option7)) 
	      echo "<h2>The number of days until your next 
			birthday is " . daysUntilNext($month, $day) . "</h2>";
      }
      else
	  echo "<h3>Not a valid date. Please enter a valid date.</h2>";
   }
   
function season($month,$day) {
    if ($month <= 2 || ($month == 3 && $day < 20) || $month == 12 && $day >= 21)
	    return "Winter";
    else if ( ($month == 3 && $day >= 20) || $month == 4 || 
	      $month == 5 || ($month == 6 && $day < 21))
	    return "Spring";
    else if ( ($month == 6 && $day >= 21) || $month == 7 || $month == 8 ||
	      ($month == 9 && $day < 22) )
	    return "Summer";
    else if ( ($month == 9 && $day >= 22) || $month == 10 || $month == 11 ||
	      ($month == 12 && $day < 21) )
	    return "Fall";
}

function zodiac($month, $day) {
    if ( ($month == 3 && $day >= 21) || ($month == 4 && $day <= 19) )
	return "Aries";
    else if ( ($month == 9 && $day >= 23) || ($month == 10 && $day <= 22) )
	return "Libra";
    else if ( ($month == 4 && $day >= 20) || ($month == 5 && $day <= 20) )
	return "Taurus";
    else if ( ($month == 10 && $day >= 23) || ($month == 11 && $day <= 21) )
	return "Scorpio";
    else if ( ($month == 5 && $day >= 21) || ($month == 6 && $day <= 20) )
	return "Gemini";
    else if ( ($month == 11 && $day >= 22) || ($month == 12 && $day <= 21) )
	return "Sagittarius";
    else if ( ($month == 6 && $day >= 21) || ($month == 7 && $day <= 22) )
	return "Cancer";
    else if ( ($month == 12 && $day >= 22) || ($month == 1 && $day <= 19) )
	return "Capricorn";
    else if ( ($month == 7 && $day >= 23) || ($month == 8 && $day <= 22) )
	return "Leo";
    else if ( ($month == 1 && $day >= 20) || ($month == 2 && $day <= 18) )
	return "Aquarius";
    else if ( ($month == 8 && $day >= 23) || ($month == 9 && $day <= 22) )
	return "Virgo";
    else if ( ($month == 2 && $day >= 19) || ($month == 3 && $day <= 20) )
	return "Pisces";
}

function chinese($year) {
    switch (($year - 4) % 12) 
        {
            case  0: $zodiac = 'Rat';       break;
            case  1: $zodiac = 'Ox';        break;
            case  2: $zodiac = 'Tiger';     break;
            case  3: $zodiac = 'Rabbit';    break;
            case  4: $zodiac = 'Dragon';    break;
            case  5: $zodiac = 'Snake';     break;
            case  6: $zodiac = 'Horse';     break;
            case  7: $zodiac = 'Goat';      break;
            case  8: $zodiac = 'Monkey';    break;
            case  9: $zodiac = 'Rooster';   break;
            case 10: $zodiac = 'Dog';       break;
            case 11: $zodiac = 'Pig';       break;
        }
    return $zodiac;
}

function age($month, $day, $year) {
    $currentYear = date("Y");
    $currentMonth = date("m");
    $currentDay = date("j");
    $age = $currentYear - $year;
    if ( ($currentMonth < $month) || ($currentMonth == $month && $currentDay < $day) )
	$age--;
    return $age;
}

function dayOfWeek($month, $day, $year) {
    $daystring = "$month/$day/$year";
    $ts = strtotime($daystring);
    return date("l",$ts);
}

function dayOfWeekNext($month, $day) {
    $currentYear = date("Y");
    $currentMonth = date("m");
    $currentDay = date("j");
    
    $curYearDate = "$month/$day/$currentYear";
    $curYearString = strtotime($curYearDate);
   
    if ($currentMonth < $month || ($currentMonth == $month && $currentDay < $day) )
    {
	// if this year's birthday hasn't happened yet
	return date("l", $curYearString);
    }
    else
    {
	// if this year's birthday has already happened
	$theDay = date("w", $curYearString);
	$theDay += 1; //add one to the day of the week
	if ($theDay == 1)
	    return "Monday";
	else if ($theDay == 2)
	    return "Tuesday";
	else if ($theDay == 3)
	    return "Wednesday";
	else if ($theDay == 4)
	    return "Thursday";
	else if ($theDay == 5)
	    return "Friday";
	else if ($theDay == 6)
	    return "Saturday";
	else if ($theDay == 7)
	    return "Sunday";
     }
}

function daysUntilNext($month, $day) {
    $today = time();
    $bday = mktime(0,0,0,$month,$day);
    $days = floor(($bday-$today)/86400)+1;
    if ($days < 0)
	$days = $days + 365;
    return $days;
}


?>
</form>

<?php
echo "<HR>";
highlight_file("prog1.php");
?>