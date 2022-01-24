<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<? 
/* Include Files *********************/



include("../staging/scripts/database.php");


/*************************************/
 ?> 



<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style3 {
	text-align: left;
}
.auto-style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #008000;
}
.auto-style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: large;
	color: #008000;
}
.auto-style6 {
	text-align: left;
	color: #008000;
}
</style>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<p><strong><span class="auto-style5">Passenger Information</span><br class="auto-style4" />
</strong></p>

<form method="post" action="confirm.php" name="info">


<?php 



$FlightOut1=$_POST['FlightOut'];
$FlightIn1=$_POST['FlightIn'];
$Roundtrip1=$_POST['RoundTrip'];
$Passengers1=$_POST['Passengers'];


$query1="SELECT * FROM schedule where RecordIndex=";

$query1=$query1.$FlightOut1;


//echo $query1;


$result1 = mysql_query ($query1,$conn);



$row = mysql_fetch_array($result1);
echo "<br/>";
echo "Passenger infomation for embarking Flight# " .$row['Flight']. " on ".$row['Date'];
echo "<br/>";
echo "Departure from: ".$row['FlyFrom'];

echo "		to ".$row['FlyTo'];
echo "<br/>";

echo "<br/>";

?>


	&nbsp;<br />
<table style="width: 600px">
	<tr class="table-header0">
		<td style="height: 23px; width: 48px;">&nbsp;</td>
		<td style="height: 23px; width: 81px;">Adult</td>
		<td style="height: 23px; width: 81px;">Sex</td>
		<td style="height: 23px; width: 81px;"><strong>First Name</strong></td>
		<td style="height: 23px; width: 139px;"><strong>Middle Name</strong></td>
		<td style="height: 23px"><strong>Last Name</strong></td>
		<td style="height: 23px; width: 13px"><strong class="table-header0">Country</strong></td>
	</tr>
	<tr class="table-text0">
		<td style="height: 42px; width: 48px;">
			1</td>
		<td style="height: 42px; width: 81px;">
			<input name="RadioAdult1" type="radio" value="Adult" checked="checked"  />Adult<br />
			<input name="RadioAdult1" type="radio" value="Child" />Child</td>
		<td style="height: 42px; width: 81px;">
			<input name="Sex1" type="radio" value="Male" />Male<br />
			<input name="Sex1" type="radio" value="Female" />Female</td>
		<td style="height: 42px; width: 81px;">
		<input class="auto-style1" name="Fname1" type="text" style="width: 113px" /></td>
		<td style="height: 42px; width: 139px;">
		<input class="auto-style1" name="Mname1" type="text" style="width: 117px" /></td>
		<td style="height: 42px">
		<input class="auto-style1" name="Lname1" type="text" style="width: 112px" /></td>
		<td style="width: 13px; height: 42px">
		<select name="Country1">
		<option></option>
		<option>Saint Lucia</option>
		<option>US</option>
		<option>Barbados</option>
		</select></td>
	</tr>
	<tr>
		<td style="height: 42px; width: 48px;">
			&nbsp;</td>
		<td style="height: 42px; width: 81px;">
			&nbsp;</td>
		<td style="height: 42px; width: 81px;">
			&nbsp;</td>
		<td style="height: 42px; width: 81px;">
			&nbsp;</td>
		<td style="height: 42px; width: 139px;">
			&nbsp;</td>
		<td style="height: 42px">
		</td>
		<td style="width: 13px; height: 42px"></td>
	</tr>
</table>

	<br />
	<br />
	<br />

	
	<strong class="auto-style6"><em>Primary Contact Information</em></strong>

<table style="width: 600px">
	<tr class="table-header0">
		<td style="height: 23px"></td>
		<td style="height: 23px; width: 218px;" class="auto-style2"><strong>
		Contact Name</strong></td>
		<td style="height: 23px; width: 185px;" class="auto-style2">Contact 
		Email</td>
		<td style="height: 23px" class="auto-style2">Contact Number</td>
		<td style="height: 23px; width: 13px">&nbsp;</td>
	</tr>
	<tr>
		<td style="height: 42px" class="auto-style2">
		&nbsp;</td>
		<td style="height: 42px; width: 218px;" class="auto-style2">
		<input class="auto-style1" name="ContactName" type="text" /></td>
		<td style="height: 42px; width: 185px;" class="auto-style2">
		<input class="auto-style1" name="ContactEmail" type="text" /></td>
		<td style="height: 42px" class="auto-style2">
		<input class="auto-style1" name="ContactNo" type="text" /></td>
		<td style="width: 13px; height: 42px" class="auto-style2">
		&nbsp;</td>
	</tr>
	</table>

	<br />
	<br />
		<input name="Button1" type="submit" value="Submit" /><br />
</form>

</body>

</html>
