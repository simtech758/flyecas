<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

					<? 
/* Include Files *********************/

include("../staging/scripts/database.php");

/*************************************/ 

?> 
</head>

<body>


<span class="page-header0">


<strong> Itinerary Confirmation</strong></span>
<br/>

 <table style="width: 400px" class="table-text2">
	 <tr>
		 <td style="width: 37px">&nbsp;</td>
		 <td class="table-text0">&nbsp;

 <?php
 
 
$Flight=$_POST['Flight'];
$FlyFrom=$_POST['FlyFrom'];
$FlyTo=$_POST['FlyTo'];
$Date=$_POST['Date'];
 

$FlightOut=$_POST['FlightOut'];
$FlightIn=$_POST['FlightIn'];
$Roundtrip=$_POST['RoundTrip'];
$Passengers=$_POST['Passengers'];
 

$Fname1=$_POST['Fname1'];
$Mname1=$_POST['Mname1'];
$Lname1=$_POST['Lname1'];

$Fname2=$_POST['Fname2'];
$Mname2=$_POST['Mname2'];
$Lname2=$_POST['Lname2'];

$Fname3=$_POST['Fname3'];
$Mname3=$_POST['Mname3'];
$Lname3=$_POST['Lname3'];

$Fname4=$_POST['Fname4'];
$Mname4=$_POST['Mname4'];
$Lname4=$_POST['Lname4'];

$Fname5=$_POST['Fname5'];
$Mname5=$_POST['Mname5'];
$Lname5=$_POST['Lname5'];

$Country1=$_POST['Country1'];
$Country2=$_POST['Country2'];
$Country3=$_POST['Country3'];
$Country4=$_POST['Country4'];
$Country5=$_POST['Country5'];

$Adult1=$_POST['RadioAdult1'];
$Adult2=$_POST['RadioAdult2'];
$Adult3=$_POST['RadioAdult3'];
$Adult4=$_POST['RadioAdult4'];
$Adult5=$_POST['RadioAdult5'];

$Sex1=$_POST['Sex1'];
$Sex2=$_POST['Sex2'];
$Sex3=$_POST['Sex3'];
$Sex4=$_POST['Sex4'];
$Sex5=$_POST['Sex5'];


echo "<br/>Flight #".$FlightOut." <br/>";

echo "From ".$FlyFrom. " to ".$FlyTo."<br/>"; 

echo   $Roundtrip." <br/>";

if (trim($Roundtrip)=="Two-way"){
echo "Return flight# ".$FlightIn." <br/>";
echo "From ".$FlyTo. " to ".$FlyFrom; 
}

echo "<br/> Number of Passengers: ".$Passengers." <br/><br/>";



for ( $counter = 1; $counter <= $Passengers; $counter += 1) {
echo "Passenger Name: ".$_POST['Fname'.trim($counter)]." ".$_POST['Mname'.trim($counter)]." ".$_POST['Lname'.trim($counter)];

 echo "<br/>";

echo $_POST['RadioAdult'.$counter]."  ".$_POST['Sex'.$counter]."<br/>";
echo "Country: ".$_POST['Country'.$counter];



echo "<br/><br/>";
 
 
}

 echo "<br/>";
 echo "Contact Name: ".$_POST['ContactName'];
  echo "<br/>";
 echo "Contact#: ".$_POST['ContactNo'];
  echo "<br/>";
 echo "Contact Email: ".$_POST['ContactEmail'];;
   echo "<br/><br/>";
   
   


$querya = "INSERT INTO Bookings (Flight1,Flight2,Passengercount,Roundtrip,Contactname,Contactemail,Contactno,	Fname1, 	Mname1, 	Lname1, 	Adult1, 	Sex1, 	Country1, 	Fname2, 	Mname2, 	Lname2, 	Adult2, 	Sex2, 	Country2, 	Fname3, 	Mname3, 	Lname3, 	Adult3, 	Sex3, 	Country3, 	Fname4, 	Mname4, 	Lname4, 	Adult4, 	Sex4, 	Country4, 	Fname5, 	Mname5, 	Lname5, 	Adult5, 	Sex5, 	Country5)"; 

$queryb=" VALUES ('".$FlightOut."','".$FlightIn."','".$Passengers."','".$Roundtrip."', '".$_POST['ContactName']."','".$_POST['ContactEmail']."','".$_POST['ContactNo'];

$queryc="";

for ( $i=1; $i<=5; $i+= 1) {


$queryc=$queryc."','".$_POST["Fname".$i]."', '";
$queryc=$queryc.$_POST["Mname".$i]."', '";
$queryc=$queryc.$_POST["Lname".$i]."', '";

$queryc=$queryc.$_POST["Adult".$i]."', '";
$queryc=$queryc.$_POST["Sex".$i]."', '";
$queryc=$queryc.$_POST["Country".$i];


}
$queryc=$queryc."')";


echo "<br/>";
$query=$querya.$queryb.$queryc;	
//echo $query;
echo "</br> >>";
 
 mysql_query($query);
  
mysql_close($conn);



/*
$to = $_POST['Email'];

$subject = "Book request Recieved";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
*/

?> 
</td>
	 </tr>
	
	<tr>

	<td>

	</td>
	<td>
	Thank you, your booking has been received
	</td>
	</tr>
</table>



<p>&nbsp;</p>

</body>

</html>
