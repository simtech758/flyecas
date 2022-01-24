<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>

<? 
/* Include Files *********************/

include("../staging/scripts/database.php");


/*************************************/
 ?> 
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>


<table>
  <tr class="table-header0">
    <td align="center" style="height: 23px">BOOKING DATA</td>
  </tr>
  <tr>
    <td>
      <table border="1" class="table-text0">
      <tr>
     <td>Booking#</td>       
	 <td>Flight1#</td>
   
        <td>Flight2#</td>
        <td>#</td>
        <td>Round</td>
        <td>Time</td>
        <td>Name</td>
        <td>email</td>
        <td>Phone</td>   
          <td>Fname</td> 
            <td>Mname</td>      
          <td>Lname</td>
      </tr>
<?
				
$query = "SELECT * FROM Bookings";
				
$result = mysql_query($query);	
//order executes the result is saved
//in the variable of $result
				
while($data = mysql_fetch_row($result)){
  echo("<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td><td>$data[8]</td><td>$data[10]</td><td>$data[11]</td><td>$data[12]</td></tr>");
}
?>
    </table>
  </td>
</tr>
</table>


</body>

</html>
