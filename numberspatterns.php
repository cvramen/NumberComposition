<html>
<body>
<style>
.htable td {padding:6px; border:1px solid #000000; max-width:200px;}
.firstdigitcell {background:#efefef;}
.seconddigitcell {background:#b9b9b9;}
.sum_onecell {background:#beeec4;}
.fusioncell {background:#bec6ee;}
.ratiocell {background:#eebecc;}
</style>
<?php

$mp = 1;
echo "This app goes through digits 1 to 99 and finds values associated with each number. A color key is directly below for reference.<br />";
echo "<table class='htable'><tr><td>Original Number</td><td class='firstdigitcell'>First Digit of Original Number</td><td class='seconddigitcell'>Second Digit of Original Number</td><td class='sum_onecell'>Sum of First Digit and Second Digit</td><td class='fusioncell'>Sum of Original Number, First Digit, and Second Digit</td><td class='ratiocell'>Ratio of Original Number : Sum of First Digit and Second Digit as a Percentage</td></tr></table>";
echo "<table class='htable'>";
while ($mp < 100) {
	$firstdigit = floor($mp / 10);
	$seconddigit = ($mp % 10);
	$sum_one = $firstdigit + $seconddigit;
	$fusion = $sum_one + $mp;
	$ratio = (round(($mp / $fusion), 3)) * 100;
	
	
	echo "<tr>";
	
	echo "<td>";
		echo $mp;
	echo "</td>";
	
	echo "<td class='firstdigitcell'>";
		echo $firstdigit;
	echo "</td>";
	
	echo "<td class='seconddigitcell'>";
		echo $seconddigit;
	echo "</td>";
		
	echo "<td class='sum_onecell'>";
		echo $sum_one;
	echo "</td>";
	
	echo "<td class='fusioncell'>";
		echo $fusion;
	echo "</td>";
	
	echo "<td class='ratiocell'>";
		echo $ratio;
		echo "%";
	echo "</td>";
	
	echo "</tr>";
	$mp++;
	
	if (($mp % 10) == 0) {
		echo "<tr><td colspan='6'>   </td></tr>";
	}	
}


?>
<body>
</html>