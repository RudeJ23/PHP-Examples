<?php
   extract($_REQUEST);
   
   displayform();
   
   if ($button == "Submit")
   {
      // check for invalid date
      if (checkdate($month1,$day1,$year1) and checkdate($month2,$day2,$year2))
      {
	  $cost = 0;
	  $years = $year2 - $year1;
	  $months = $month2 - $month1;
	  $days = $day2 - $day1;
	  $hours = $hour2 - $hour1;
	  $minutes = $minute2 - $minute1;
	  
	  // change to positive numbers if needed
	  if ($months < 0)
	      $months = ($months) * (-1);
	  if ($days < 0)
	      $days = ($days) * (-1);
	  if ($hours < 0)
	      $hours = ($hours) * (-1);
	  if ($minutes < 0)
	      $minutes = ($minutes) * (-1);
	  
	  $date1 = mktime($hour1,$minute1,0,$month1,$day1,$year1);
	  $date2 = mktime($hour2,$minute2,0,$month2,$day2,$year2);
	  $totalSeconds = $date2 - $date1;
	  $totalMinutes = $totalSeconds / 60;
	  $totalHours = $totalMinutes / 60;
	  $totalDays = $totalSeconds / 86400;
	  $totalWeeks = $totalDays / 7;
// 	  echo "minutes: " .$totalMinutes;
// 	  echo "   hours: ". $totalHours;
// 	  echo "   days: " . $totalDays;
// 	  echo "   weeks: " . $totalWeeks;
	  
	  // do math for rates
	  if ($parktype == "short")
	  // 	  Short: $1 for each 30 minutes/$18 maximum daily rate
	  {
	      // if parked more than 1 day
	      if ($totalDays >= 1)
	      {
		  // max daily
		  $cost = (floor($totalDays)) * (18);
		  // whole hourly rate
		  $cost += (2) * ($hours);
		  // minute rate 
		  if ($minutes >= 30)
		      $cost += 1;
	      }
	      // if parked just for today
	      else
	      {
		  // hourly rate
		  $cost += (2) * ($hours);
		  // minute rate
		  if ($minutes >= 30)
		      $cost += 1;
		  // check for daily max
		  if ($cost > 18)
		  {
		      $cost = 18;
		  }
	      }
	  }
	  
	  elseif ($parktype == "long")
	  // 	  Long: $1 for each 30 minutes/$8 maximum daily rate/$48 maximum weekly rate
	  {
	      // if parked more than 1 day
	      if ($totalDays >= 1)
	      {
		  // if parked at least 1 week
		  if ($totalWeeks >= 1)
		  {
		      // account for the weeks
		      $cost = (floor($totalWeeks)) * (48);
		      // account for leftover days
		      $cost += ( (floor($totalDays)) % (7) ) * (8);
		      
		      // whole hourly rate
		      $cost += (2) * ($hours);
		      // minute rate 
		      if ($minutes >= 30)
			  $cost += 1;
		      }
		  // if parked less than 1 week
		  else
		  {
		      // max daily
		      $cost += (floor($totalDays)) * (8);
		      // whole hourly rate
		      $cost += (2) * ($hours);
		      // minute rate 
		      if ($minutes >= 30)
		      {
			  $cost += 1;
		      }
		      // max weekly cap
		      if ($cost > 48)
		      {
			  $cost = 48;
		      }
		  }
		  
	      }
	      // if parked just for today
	      else
	      {
		  // hourly rate
		  $cost += (2) * ($hours);
		  // minute rate
		  if ($minutes >= 30)
		      $cost += 1;
		  // check for daily max
		  if ($cost > 8)
		  {
		      $cost = 8;
		  }
	      }
	  }
	  elseif ($parktype == "economy")
	  // 	  Economy: $1 for each 30 minutes/$6 maximum daily rate/$36 maximum weekly
	  {
	      // if parked more than 1 day
	      if ($totalDays >= 1)
	      {
		  // if parked at least 1 week
		  if ($totalWeeks >= 1)
		  {
		      // account for the weeks
		      $cost = (floor($totalWeeks)) * (36);
		      // account for leftover days
		      $cost += ( (floor($totalDays)) % (7) ) * (6);
		      
		      // whole hourly rate
		      $cost += (2) * ($hours);
		      // minute rate 
		      if ($minutes >= 30)
			  $cost += 1;
		      }
		  // if parked less than 1 week
		  else
		  {
		      // max daily
		      $cost += (floor($totalDays)) * (6);
		      // whole hourly rate
		      $cost += (2) * ($hours);
		      // minute rate 
		      if ($minutes >= 30)
		      {
			  $cost += 1;
		      }
		      // max weekly cap
		      if ($cost > 36)
		      {
			  $cost = 36;
		      }
		  }
		  
	      }
	      // if parked just for today
	      else
	      {
		  // hourly rate
		  $cost += (2) * ($hours);
		  // minute rate
		  if ($minutes >= 30)
		      $cost += 1;
		  // check for daily max
		  if ($cost > 6)
		  {
		      $cost = 6;
		  }
	      }
	  }
	  echo "<h2>Your parking cost is: $$cost</h2>";
	  echo "<h3>Your start date was: $month1/$day1/$year1 Hour:$hour1 Minute:$minute1</h3>";
	  echo "<h3>Your end date was: $month2/$day2/$year2 Hour:$hour2 Minute:$minute2</h3>";

      }
      else
	  echo "<h3>Not a valid date. Please enter a valid date.</h2>";
   }
   echo <<< HERE
   <a href="index.html">Return To Assignment 8 Directory</a>
HERE;


// ****************************
// functions

function displayform()
{
   echo "<form>";
   
   echo <<< HERE
   <h2>Enter start date (Month,Day,Year,Hour,Minute)</h2>
HERE;
   selectNum("month1",1,12);
   selectNum("day1",1,31);
   selectNum("year1",2013,2023);
   selectNum("hour1",0,23);
   selectNum("minute1",0,59);
   
   echo <<< HERE
   <h2>Enter end date (Month,Day,Year,Hour,Minute)</h2>
HERE;
   selectNum("month2",1,12);
   selectNum("day2",1,31);
   selectNum("year2",2013,2023);
   selectNum("hour2",0,23);
   selectNum("minute2",0,59);
   
   echo <<< HERE
   <h2>Select parking rate</h2>
   <input type="radio" name="parktype" value="short" checked>Short-Term Parking<br/>
   <input type="radio" name="parktype" value="long">Long-Term Parking<br/>
   <input type="radio" name="parktype" value="economy">Economy Parking<br/>
HERE;
   
   echo <<< HERE
   <br>
   <input type="submit" name="button" value="Submit"><br><br>
HERE;

   echo "</form>";
}

function selectNum($name,$first,$last)
{
   echo "<select name=\"$name\">";
   for ($i=$first; $i<=$last; $i++)
      echo "<option>$i</option>";
   echo "</select>";
}

?>

<?php
echo "<HR>";
highlight_file("prog1.php");
?>