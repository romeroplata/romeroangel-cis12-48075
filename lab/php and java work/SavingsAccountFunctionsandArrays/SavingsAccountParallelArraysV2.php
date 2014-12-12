<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examining Functions with a Savings Account</title>
<?php
function savings($p,$i,$n){
	$sav=$p;
	for($year=1;$year<=$n;$year++){
		$sav*=(1+$i/100);
	}
	return $sav;
}
function svngsTbl($p,$i,$n,&$years,&$save){
	for($year=1;$year<=$n;$year++){
		$years[$year]=$year;
		$save[$year]=
		      number_format(savings($p,$i,$year),2);
	}
}
?>
</head>

<body>
<?php
    //Declare Inputs
	$principle=100;//100 dollars
	$interest=9;//3 per cent
	$years=8;//Number of compounding periods
	//Display Inputs
	echo "<h1>Principle=$$principle</h1>";
	echo "<h1>Interest=$interest%</h1>";
	//Calculate a table containing our savings
	//as a function of years
	//Declare a Table
	$yrs=array();
	$save=array();
	//         Input      Input   Input  Output  Output
	svngsTbl($principle,$interest,$years,$yrs,   $save);
	//Display the Table
	echo "<table border=1>";
	echo "<tr><th>Years</th><th>Savings $</th></tr>";
	for($year=1;$year<=$years;$year++){
		echo "<tr>";
		echo "<td>".$yrs[$year]."</td>";
		echo "<td>".$save[$year]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>