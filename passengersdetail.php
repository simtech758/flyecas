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

<script>
function validateForm2()
{
var x=document.forms["info"]["ContactName"].value;
var y=document.forms["info"]["ContactEmail"].value;
var z=document.forms["info"]["ContactNo"].value;
if (x==null || x=="")
  {
  alert("Please enter primary contact  name");
  return false;
  }
if (y==null || y=="")
  {
  alert("Please enter primary contact  email");
  return false;
  }
if (z==null || z=="")
  {
  alert("Please enter primary contact  number");
  return false;
  }

}
</script>

</head>

<body>

<p><strong><span class="auto-style5">Passenger Information</span><br class="auto-style4" />
</strong></p>

<form method="post" action="confirm.php" name="info" onsubmit="return validateForm2()">





<?php 



$FlightOut1=$_POST['FlightOut'];
$FlightIn1=$_POST['FlightIn'];
$Roundtrip1=$_POST['RoundTrip'];
$Passengers1=$_POST['Passengers'];


echo "<input name=\"Passengers\"  value=\"".$Passengers1."\" type=\"hidden\"> ";
echo "<input name=\"FlightOut\"  value=\"".$FlightOut1."\" type=\"hidden\"> ";
echo "<input name=\"FlightIn\"  value=\"".$FlightIn1."\" type=\"hidden\"> ";
echo "<input name=\"RoundTrip\"  value=\"".$Roundtrip1."\" type=\"hidden\"> ";




$query1="SELECT * FROM schedule where RecordIndex=";

$query1=$query1.$FlightOut1;


//echo $query1;


$result1 = mysql_query ($query1,$conn);



$row = mysql_fetch_array($result1);
echo "<br/><strong>";
echo "Passenger infomation for embarking Flight# " .$row['Flight']. " on ".$row['Date'];
echo "<br/>";
echo "Departure from: ".$row['FlyFrom'];

echo "		to ".$row['FlyTo'];
echo "</strong><br/>";

echo "<br/>";

echo "<input name=\"FlyFrom\"  value=\"".$FlyFrom."\" type=\"hidden\"> ";
echo "<input name=\"FlyTo\"  value=\"".$FlyTo."\" type=\"hidden\"> ";
echo "<input name=\"Flight\"  value=\"".$Flight."\" type=\"hidden\"> ";
echo "<input name=\"Date\"  value=\"".$Date."\" type=\"hidden\"> ";
echo "<input name=\"FlyTo\"  value=\"".$row['FlyTo']."\" type=\"hidden\"> ";
echo "<input name=\"FlyFrom\"  value=\"".$row['FlyFrom']."\" type=\"hidden\"> ";



?>
<strong class="auto-style6"><em>Passenger Information</em></strong>


<table style="width: 600px">
	<tr class="table-header0">
		<td style="height: 23px; width: 81px;"></td>
		<td style="height: 23px; width: 81px;">Adult</td>
		<td style="height: 23px; width: 81px;">Sex</td>
		<td style="height: 23px; width: 81px;"><strong>First Name</strong></td>
		<td style="height: 23px; width: 139px;"><strong>Middle Name</strong></td>
		<td style="height: 23px"><strong>Last Name</strong></td>
		<td style="height: 23px; width: 13px"><strong class="table-header0">Country</strong></td>
	</tr>
	
	
	<?php



for ( $counter = 1; $counter <= $Passengers1; $counter += 1) {

echo "<tr class=\"table-text0\"><td style=\"height: 42px; width: 48px;\">";
echo	"<strong>&nbsp".trim($counter)."</strong></td>";
echo  "		<td style=\"height: 42px; width: 90px;\">";

echo"			<input name=\"RadioAdult".$counter."\" type=\"radio\" value=\"Adult\" checked=\"checked\"  />Adult<br />";
echo"			<input name=\"RadioAdult".$counter."\" type=\"radio\" value=\"Child\" />Child</td>";
echo"		<td style=\"height: 42px; width: 100px;\">";
echo"			<input name=\"Sex".$counter."\" type=\"radio\" value=\"Male  \" />Male<br />";
echo"			<input name=\"Sex".$counter."\" type=\"radio\" value=\"Female\" />Female</td>";
echo"		<td style=\"height: 42px; width: 81px;\">";
echo"		<input class=\"auto-style1\" name=\"Fname".$counter."\" type=\"text\" style=\"width: 113px\" /></td>";
echo"		<td style=\"height: 42px; width: 139px;\">";
echo"		<input class=\"auto-style1\" name=\"Mname".$counter."\" type=\"text\" style=\"width: 117px\" /></td>";
echo"		<td style=\"height: 42px\">";
echo"		<input class=\"auto-style1\" name=\"Lname".$counter."\" type=\"text\" style=\"width: 112px\" /></td>";
echo"		<td style=\"width: 13px; height: 42px\">";
echo"		<select name=\"Country".$counter."\">";
echo"		<option></option>		<option>Saint Lucia</option>		<option>US</option>		<option>Barbados</option>";
echo"		</select></td></tr>";


}
?>

	
	
</table>

	<br />
	<br />
	
	
	<strong class="auto-style6"><em>Primary Contact</em></strong>

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
		<input name="Button1" type="submit" value="Submit" /><br />
</form>

</body>

</html>
