<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examining Functions with a Savings Account</title>
<?php
function savings1($p,$i,$n){
	return $p*pow((1+$i/100),$n);
}
function savings2($p,$i,$n){
	$sav=$p;
	for($year=1;$year<=$n;$year++){
		$sav*=(1+$i/100);
	}
	return $sav;
}
function savings3($p,$i,$n){
	if($n<=0)return $p;
	else return savings3($p,$i,$n-1)*(1+$i/100);
}
function savings4($p,$i,$n){
	return $p*exp($n*log(1+$i/100));
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
	echo "<h1>Years=$years</h1>";
	//Calculate the first output and display
	$balance=savings1($principle,$interest,$years);
	$balance=number_format($balance,2);
	echo "<h1>Using Savings 1 function</h1>";
	echo "<h1>Balance=$$balance</h1>";
	//Calculate the first output and display
	$balance=savings2($principle,$interest,$years);
	$balance=number_format($balance,2);
	echo "<h1>Using Savings 2 function</h1>";
	echo "<h1>Balance=$$balance</h1>";
	//Calculate the first output and display
	$balance=savings3($principle,$interest,$years);
	$balance=number_format($balance,2);
	echo "<h1>Using Savings 3 function</h1>";
	echo "<h1>Balance=$$balance</h1>";
	//Calculate the first output and display
	$balance=savings4($principle,$interest,$years);
	$balance=number_format($balance,2);
	echo "<h1>Using Savings 4 function</h1>";
	echo "<h1>Balance=$$balance</h1>";
?>
</body>
</html>