<html>

<?php

$Passengers=3;

for ( $counter = 1; $counter <= $Passengers; $counter += 1) {

echo "<tr><td style=\"height: 42px; width: 48px;\">";
echo	$counter."</td>";
echo  "		<td style=\"height: 42px; width: 81px;\">";

echo"			<input name=\"RadioAdult".$counter."\" type=\"radio\" value=\"Adult\" checked=\"checked\"  />Adult<br />";
echo"			<input name=\"RadioAdult".$counter."\" type=\"radio\" value=\"Child\" />Child</td>";
echo"		<td style=\"height: 42px; width: 81px;\">";
echo"			<input name=\"Sex1\" type=\"radio\" value=\"Male\" />Male<br />";
echo"			<input name=\"Sex1\" type=\"radio\" value=\"Female\" />Female</td>";
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

</html>