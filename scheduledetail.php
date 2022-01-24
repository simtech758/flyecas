<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Date</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

					<? 
/* Include Files *********************/

include("../staging/scripts/database.php");



//set_include_path('/usr/lib/pear')
/*************************************/
 ?> 					
							<img border="0" src="images/flighthd1.jpg" width="400" height="47">
<form action="passengers.php" method="post" style="width: 650px; height: 600px" name="step1">

<div>
	<div class="auto-style1">
<?php 
      
$SelectFrom=$_POST['SelectFrom'];
$SelectTo=  $_POST['SelectTo'];
$Passengers=$_POST['Passengers'];
$FromDate=$_POST['datepicker1'];
$ToDate=$_POST['datepicker2'];
$RoundTrip=$_POST['Radio1'];




if ($_POST['Flexible']=="Yes")
  {

$FromDateFlex1=date('Y-m-d',strtotime($FromDate." -3 days"));
$FromDateFlex2=date('Y-m-d',strtotime($FromDate." +3 days"));
$ToDateFlex1=date('Y-m-d',strtotime($ToDate." -3 days"));
$ToDateFlex2=date('Y-m-d',strtotime($ToDate." +3 days"));

}
else
{
$FromDateFlex1=$FromDate;
$FromDateFlex2=$FromDate;
$ToDateFlex1=$ToDate;
$ToDateFlex2=$ToDate;
}


$query="SELECT * FROM schedule where FlyFrom= ";

$query=$query . "'".$_POST['SelectFrom']."'";

$query=$query ." and FlyTo ="."'".$_POST['SelectTo']."'";

//$query=$query ." and (Date ="."'".$FromDate."' OR Date='".$FromDateFlex1."' OR Date='".$FromDateFlex2."')" ;
$query=$query ." and (Date ="."'".$FromDate."' OR (Date>='".$FromDateFlex1."' AND Date<='".$FromDateFlex2."')) ORDER BY Date ASC " ;

	echo "<br />";
	
//echo $query;

	echo "<br />";
	
$result1 = mysql_query ($query,$conn);

$num_rows=mysql_num_rows($result1);

?>

	<strong>
	
<?php



echo " Found ";
echo  $num_rows;
echo " Outboud flight(s) matching your schedule";
echo "<br />";
echo "<br />";


//Array or records stored in $row
?>
	</strong>
	
	
	</div>
	
	
	<table style="width: 100%" align="center">

		<tr class="table-header0">
			<td class="table-header" style="width: 5px">&nbsp;</td>
			<td class="table-header">Date &nbsp;</td>
			<td class="table-header">Flight#&nbsp;</td>
			<td class="table-header">From&nbsp;</td>
			<td class="table-header">To&nbsp;</td>
			<td class="table-header">Departure&nbsp;</td>
			<td class="table-header">Arrival&nbsp;</td>
			<td class="table-header">Adult (US$)&nbsp;</td>
			<td class="table-header">Child (US$)&nbsp;</td>
			
		</tr>





<?php 

while($row = mysql_fetch_array($result1)){

	echo "<tr class=\"table-text0\"><td>";
	
echo "<input name=\"FlightOut\" checked=\"false\"  value=\"".$row['RecordIndex']."\" type=\"radio\">";	
	echo "</td>";

	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Flight']."</td>"; 
	
	echo "<td>".$row['FlyFrom']."</td>";

	echo "<td>".$row['FlyTo']."</td>";
	
	echo "<td>".$row['Departure']."</td>";

	echo "<td>".$row['Arrival']."</td>";

	echo "<td>".$row['Adult']."</td>";
	
	echo "<td>".$row['Child']."</td>"."</tr>";

}
?>

	</table>



 
</div>


<p><br></p>


<hr style="width: 80%" >
<br>


<!--QUERY FOR RETURN FLIGHT................-->

	<strong>

<?php 

if ($RoundTrip=="Two-way"){

$query="SELECT * FROM schedule where FlyFrom= ";

$query=$query . "'".$_POST['SelectTo']."'";

$query=$query ." and FlyTo ="."'".$_POST['SelectFrom']."'";

$query=$query ." and (Date ="."'".$ToDate."' OR Date='".$ToDateFlex1."' OR Date='".$ToDateFlex2."')" ;
	echo "<br />";
	
//echo $query;


	
$result1 = mysql_query ($query,$conn);

$num_rows=mysql_num_rows($result1);

echo " Found ";
echo  $num_rows;
echo " Return flight(s) matching your schedule";
echo "<br /><br /></strong>";


//Array or records stored in $row
	echo "<table style=\"width: 100%\" align=\"center\">";


	echo "<tr class=\"table-header0\">			<td><b></b></td>";
	echo"		<td><b>";
	echo"		Date </b></td>";
	echo"		<td><b>Flight# </b></td>";
	echo"	<td><b>From </b></td>";
	echo"		<td><b>To </b></td>";
	echo"	<td><b>Departure </b></td>";
	echo"		<td><b>Arrival </b></td>";
	echo"		<td><b>Adult (US$)</b></td>";
	echo"		<td><b>Child (US$) </b></td>";
			
echo "		</tr>";



while($row = mysql_fetch_array($result1)){

	echo "<tr class=\"table-text0\"><td>";
	
echo "<input name=\"FlightIn\" checked=\"false\"  value=\"".$row['RecordIndex']."\" type=\"radio\">";	
	echo "</td>";

	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Flight']."</td>"; 
	
	echo "<td>".$row['FlyFrom']."</td>";

	echo "<td>".$row['FlyTo']."</td>";
	
	echo "<td>".$row['Departure']."</td>";

	echo "<td>".$row['Arrival']."</td>";

	echo "<td>".$row['Adult']."</td>";
	
	echo "<td>".$row['Child']."</td>"."</tr>";

}

echo "</table>";

}

echo "<br>";

echo "<input name=\"Passengers\"  value=\"".$Passengers."\" type=\"hidden\"> ";



echo "<br>";

echo "<input name=\"RoundTrip\"  value=\"".$RoundTrip."\" type=\"hidden\"> ";




//echo "<INPUT disabled name=\"Passengers\" value=\"".$Passengers."\"> ";
//echo "<INPUT disabled name=\"RoundTrip\" value=\"".$RoundTrip."\"> ".$RoundTrip;


?>







 


	<p><br>&nbsp;&nbsp;&nbsp; <input name="Enter" type="submit" value="Enter Passengers"></p>




</strong>
</form>


</body>

</html>
