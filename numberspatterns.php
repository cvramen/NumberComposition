<html>
<body>
<style>
.htable td {padding:6px; border:1px solid #000000; max-width:200px;} /* Set padding and borders between table cells */
/* Background colors for the cells */
.firstdigitcell {background:#efefef;}
.seconddigitcell {background:#b9b9b9;}
.sum_onecell {background:#beeec4;}
.fusioncell {background:#bec6ee;}
.ratiocell {background:#eebecc;}
</style>
<?php

$mp = 1; // First number in the series
echo "This app goes through digits 1 to 99 and finds values associated with each number. A color key is directly below for reference.<br />";
echo "<table class='htable'><tr><td>Original Number</td><td class='firstdigitcell'>First Digit of Original Number</td><td class='seconddigitcell'>Second Digit of Original Number</td><td class='sum_onecell'>Sum of First Digit and Second Digit</td><td class='fusioncell'>Sum of Original Number, First Digit, and Second Digit</td><td class='ratiocell'>Ratio of Original Number : Sum of First Digit and Second Digit as a Percentage</td></tr></table>";
echo "<table class='htable'>";
while ($mp < 100) { // Ends the loop at 99
	$firstdigit = floor($mp / 10); // Finds the first digit of the number. For 1 through 9, it's just zero.
	$seconddigit = ($mp % 10); // Finds the second digit of the number by doing modulus division with 10.
	$sum_one = $firstdigit + $seconddigit; // Adds the first and second digit of the number.
	$fusion = $sum_one + $mp; // The original number + (first digit of the original number + second digit of the original number)
	$ratio = (round(($mp / $fusion), 3)) * 100; // The original number / (the original number + (first digit of the original number + second digit of the original number)). The percentage is rounded to 1 decimal place.
	
	
	echo "<tr>";
	
	echo "<td>";
		echo $mp; // Original Number
	echo "</td>";
	
	echo "<td class='firstdigitcell'>";
		echo $firstdigit; // First Digit of Original Number
	echo "</td>";
	
	echo "<td class='seconddigitcell'>";
		echo $seconddigit; // Second Digit of Original Number
	echo "</td>";
		
	echo "<td class='sum_onecell'>";
		echo $sum_one; // Sum of First Digit and Second Digit
	echo "</td>";
	
	echo "<td class='fusioncell'>";
		echo $fusion; // Sum of Original Number, First Digit, and Second Digit
	echo "</td>";
	
	echo "<td class='ratiocell'>";
		echo $ratio; // Ratio of Original Number : Sum of First Digit and Second Digit as a Percentage
		echo "%";
	echo "</td>";
	
	echo "</tr>";
	$mp++;
	
	if (($mp % 10) == 0) {
		echo "<tr><td colspan='6'>   </td></tr>"; // Cuts off table at increments of 10 for aesthetics
	}	
}

?>
<body>
</html>
