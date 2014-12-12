<script type="text/javascript">
	/*
		Dr. Mark E. Lehr
		Sept 15th, 2014
		Purpose:  Loop construct - for
	*/
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Retirement Account</title>
</head>

<body>
<h1>Retirement Table</h1>
<script type="text/javascript">
	//Setup the savings table
	var balance = 0;//unit = $'s
	var intRate = 7;//unit = percentage rate per annum
	var deposit = 7500;//unit = $'s
	var str="";
	//Declare your arrays
	var years=[];
	var savings=[];
	var interest=[];
	var yearDep=[];
	//Initialize the first element
	years[0]=0;
	savings[0]=balance;
	interest[0]=0;
	yearDep[0]=0;
	//Populate the arrays
	for(var year=1;year<=50;++year){
		years[year]=year;
		//Calculate the balance
		//balance=balance*(1+intRate/100);
		interest[year]=savings[year-1]*intRate/100;
		yearDep[year]=deposit;
		savings[year]=savings[year-1]+interest[year]+yearDep[year];
	}
	//output the initial conditions
	document.write("<p>Initial Balance = $"+balance+"</P>");
	document.write("<p>Interest Rate = $"+intRate+"%</P>");
	document.write("<p>Yearly Deposit = $"+Deposit+"</P>");
		
	//Output the initial conditions
	
	
</script>

<table width="200" border="1">
<tr>
<th>Year</th>
<th>Saving $</th>
<th>Interest $</th>
<th>Deposit $</th>
<tr>


<script type="text/javascript">
	//Display the table
for(var year=1; year<=50; ++year){
	str+="<tr>";
	str+=("<td>"+years[year].to.fix(2)+"</td>");
	str+=("<td>"+savings[year].to.fix(2)+"</td>");
	str+=("<td>"+interest[year].to.fix(2)+"</td>");
	str+=("<td>"+yearDep[year].to.fix(2)+"</td>");
	str+="<tr>";
}
document.write(str);
</script>
</table>
</body>
</html>