<html>

<head>
	<link type="text/css" href="../staging/css/flick/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">

<!--	<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/themes/ui-darkness/jquery-ui.css" rel="stylesheet">-->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>ECAS</title>
<link href="whitetext.css" rel="stylesheet" type="text/css">
<style type="text/css">
.newStyle1 {
	border-radius: 4px;
}
.auto-style1 {
	border-collapse: collapse;
}
.auto-style2 {
	text-align: left;
}
.auto-style3 {
	text-align: left;
}
</style>



<script>
function validateForm()
{
var x=document.forms["Flightrequest"]["SelectFrom"].value;
var x1=document.forms["Flightrequest"]["SelectTo"].value;
if (x==null || x=="--")
  {
  alert("Please enter flight origin");
  return false;
  }
if (x1==null || x1=="--")
  {
  alert("Please enter flight destination");
  return false;
  }

}
</script>



</head>

<body topmargin="0" bottommargin="0" rightmargin="0" leftmargin="0" bgcolor="#669900">

<div align="center">
	<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" id="table1" height="100%">
		<tr>
			<td align="center" bgcolor="#99CC00" height="158">
			<table border="0" cellpadding="0" style="border-collapse: collapse" width="1002" id="table14">
				<tr>
					<td>
					<img border="0" src="images/hd2.jpg" width="820" height="158"></td>
					<td valign="top" background="images/hd4.jpg">
					<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" id="table15">
						<tr>
							<td>
							<img border="0" src="images/hd3.jpg" width="182" height="77"></td>
						</tr>
						<tr>
							<td>
							<table border="0" cellpadding="0" style="border-collapse: collapse; font-family: Arial; font-size: 10pt; color: #FFFFFF" width="71%" id="table16">
								<tr>
									<td><font size="2" face="Arial"><b>Contact 
									Us TODAY!</b> i<a href="mailto:info@flyecas.com">info@flyECAS.com</a></font></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#99CC00" height="40">
			<map name="FPMap0">
			<area href="index.html" shape="rect" coords="63, 13, 106, 28">
			<area href="co_profile.htm" shape="rect" coords="129, 11, 246, 29">
			<area href="services.htm" shape="rect" coords="269, 13, 329, 28">
			<area href="flightsched.htm" shape="rect" coords="352, 10, 475, 29">
			<area href="bookonline.htm" shape="rect" coords="495, 13, 585, 30">
			<area href="investor_relations.htm" shape="rect" coords="608, 12, 742, 29">
			<area href="locations.htm" shape="rect" coords="763, 12, 839, 31">
			<area href="contact_us.htm" shape="rect" coords="861, 13, 943, 29">
			</map>
			<img border="0" src="images/nav1.jpg" width="1002" height="40" usemap="#FPMap0"></td>
		</tr>
		<tr>
			<td align="center" height="532" bgcolor="#99CC00" valign="top" background="images/bg1.jpg">
			<table border="0" cellpadding="0" style="border-collapse: collapse" width="1002" id="table8">
				<tr>
					<td valign="top" bgcolor="#669900" width="26">
					<img border="0" src="images/brdr1.jpg" width="26" height="602"></td>
					<td valign="top" width="200" bgcolor="#79B500">
					<table border="0" cellpadding="0" style="width: 240;" id="table9" class="auto-style1">
						<tr>
												

							<td bgcolor="#009656" style="width: 290px">
							<font size="1">
							<img border="0" src="images/book1.jpg" width="270" height="81"></font></td>
						</tr>
						<tr>
							<td bgcolor="#009656" style="width: 290px">
							<div align="center">
								<table border="0" cellpadding="5" width="85%" id="table17" class="auto-style1">
									<tr>
										<td>

<form action="schedule.php" class="font1" method="post" style="width:230px; height: 418px" name="Flightrequest" onsubmit="return validateForm()" >
		<fieldset name="Group1" style="border-width: 0px; width: 229px; height: 18px" class="newStyle1">
		<div class="auto-style2">
		<input name="Radio1" style="width: 21px" tabindex="1" type="radio" value="One-way" checked="checked" />ONE-WAY&nbsp;&nbsp;&nbsp;
		<input name="Radio1" style="width: 21px" tabindex="1" type="radio" value="Two-way" />ROUND-TRIP<br />
		</div>
		<div class="auto-style3" style="width: 151px">
			<br>&nbsp;Origin<br /><select class="newStyle1" name="SelectFrom" style="width: 142px; height: 26px;">
			<option>--</option>
			<option>Saint Lucia</option>
			<option>Martinique</option>
			<option>Anguilla (AXA)</option>
<option>Antigua (ANU)</option>
<option>Barbados (BGI)</option>
<option>Canouan</option>
<option>Curacao</option>
<option>Dominica - Melville Hall (DOM)</option>
<option>Grenada (GND)</option>
<option>Guadeloupe (PTP)</option>
<option>Guyana (GEO)</option>
<option>Martinique (FDF)</option>
<option>Nevis (NEV)</option>
<option>San Juan PR (SJU)</option>
<option>Santo Domingo (SDQ)</option>
<option>St. Croix (STX)</option>
<option>St. Kitts (SKB)</option>
<option>St. Lucia - George F. Charles (SLU)</option>
<option>St. Maarten (SXM)</option>
<option>St. Thomas (STT)</option>
<option>St. Vincent (SVD)</option>
<option>Tobago (TAB)</option>
<option>Tortola (EIS)</option>
			</select><br><br>&nbsp;<script type="text/javascript">
		/*
		 * jQuery UI Datepicker: Set Date on Page Load
		 * http://salman-w.blogspot.com/2013/01/jquery-ui-datepicker-examples.html
		 */
		$(function() {
		//	$("#datepicker1").datepicker();

			$("#datepicker1").datepicker(
{ dateFormat: 'yy/mm/dd'});


			$("#datepicker1").datepicker("setDate", new Date);
			
						
		//	$("#datepicker1").datepicker.formatDate( "yy-mm-dd", new Date);			
			
		});
	</script>Destination<br class="Formlayout" /><select name="SelectTo" style="width: 142px; height: 26px;" class="newStyle1">
			<option>--</option>
			<option>Martinique</option>
			<option>Saint Lucia</option>
			<option>Anguilla (AXA)</option>
<option>Antigua (ANU)</option>
<option>Barbados (BGI)</option>
<option>Canouan</option>
<option>Curacao</option>
<option>Dominica - Melville Hall (DOM)</option>
<option>Grenada (GND)</option>
<option>Guadeloupe (PTP)</option>
<option>Guyana (GEO)</option>
<option>Martinique (FDF)</option>
<option>Nevis (NEV)</option>
<option>San Juan PR (SJU)</option>
<option>Santo Domingo (SDQ)</option>
<option>St. Croix (STX)</option>
<option>St. Kitts (SKB)</option>
<option>St. Lucia - George F. Charles (SLU)</option>
<option>St. Maarten (SXM)</option>
<option>St. Thomas (STT)</option>
<option>St. Vincent (SVD)</option>
<option>Tobago (TAB)</option>
<option>Tortola (EIS)</option>
			</select> <br><br>Departure Date<br>
			<input id="datepicker1" type="text" class="newStyle1" name="datepicker1" style="height: 26px; width: 148px"><br>
			<br>Return Date<br>
			<input id="datepicker2" type="text" class="newStyle1" name="datepicker2" style="height: 26px; width: 148px">
	<script type="text/javascript">
		/*
		 * jQuery UI Datepicker: Set Date on Page Load
		 * http://salman-w.blogspot.com/2013/01/jquery-ui-datepicker-examples.html
		 */
		$(function() {
		//	$("#datepicker2").datepicker();
		
	$("#datepicker2").datepicker(
{ dateFormat: 'yy/mm/dd'});

			$("#datepicker2").datepicker("setDate", new Date);
		});
	</script>
			<br /><br /><input name="Flexible" type="checkbox" value="Yes" />My dates are 
		flexible<br /><br>&nbsp;Passengers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="Passengers" style="width: 45px" class="newStyle1">
			<option selected="selected">1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			</select><br /><br /><br />&nbsp;<input name="Button1" type="submit" value="Find Flights" />&nbsp;&nbsp;&nbsp;&nbsp; 
		</div>
		</fieldset><br />
		<br><br> </form>


</td>
									</tr>
									<tr>
										<td>

										&nbsp;</td>
									</tr>
								</table>
							</div>
							</td>
						</tr>
						<tr>
							<td bgcolor="#009656" style="width: 290px">&nbsp;</td>
						</tr>
						<tr>
							<td style="width: 290px">
							<img border="0" src="images/joinmail1.jpg" width="270" height="65"></td>
						</tr>
						<tr>
							<td style="width: 290px"><!-- BEGIN: Constant Contact HTML for OptIn Tag  -->

<center>

<form name="ccoptin" action="http://ui.constantcontact.com/d.jsp" target="_blank" method="post">

<table border="0" bordercolor="black" cellpadding="3" cellspacing="0">

<tr><td align="center"><font size=2 face="Verdana,Arial,Helvetica">

<input type=text name="ea" size=28><input type=hidden name="m" value=""><input type=hidden name="p" value="oi"></font><FONT face=Arial 

                  color=#666666 style="font-size: 8pt"> 

                <INPUT type=submit value=Go name=Go style="font-family: Arial; font-size: 8pt"></FONT><font size=2 face="Verdana,Arial,Helvetica">

</font></td></tr>

</table></form></center>

<!-- End: Constant Contact HTML for OptIn Tag --></td>
						</tr>
						<tr>
							<td style="width: 290px">&nbsp;</td>
						</tr>
					</table>
					</td>
					<td valign="top" bgcolor="#FFFFFF">
					
	<?php
				include('confirmdetail.php');
				?>
				
					<table border="0" cellpadding="0" style="border-collapse: collapse" width="100%" id="table11">
						<tr>
													</tr>
									
					</table>
					</td>
					<td valign="top" bgcolor="0" width="1">
					&nbsp;</td>
					<td valign="top" bgcolor="#669900" width="26">
					<img border="0" src="images/brdr2.jpg" width="26" height="602"></td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td align="center" valign="top">
			<div align="center">
				<table border="0" cellpadding="0" style="border-collapse: collapse; font-family:Arial; font-size:8pt; color:#FFFFFF" width="950" id="table4" height="100%">
					<tr>
						<td bgcolor="#006634">
						<img border="0" src="images/bottom1.jpg" width="950" height="18"></td>
					</tr>
					<tr>
						<td bgcolor="#006634">
						<p align="center"><a href="index.html">
						<font color="#FFFFFF">HOME</font></a>&nbsp; |&nbsp;
						<a href="co_profile.htm"><font color="#FFFFFF">COMPANY PROFILE</font></a>&nbsp; |&nbsp;
						<a href="services.htm"><font color="#FFFFFF">SERVICES</font></a>&nbsp; |&nbsp;
						<a href="flightsched.htm"><font color="#FFFFFF">FLIGHT SCHEDULES</font></a>&nbsp; |&nbsp;
						<a href="bookonline.htm"><font color="#FFFFFF">BOOK ONLINE</font></a>&nbsp; |&nbsp;
						<a href="investor_relations.htm"><font color="#FFFFFF">INVESTOR RELATIONS</font></a>&nbsp; |&nbsp;
						<a href="locations.htm"><font color="#FFFFFF">LOCATIONS</font></a>&nbsp; |&nbsp;
						<a href="contact_us.htm"><font color="#FFFFFF">CONTACT US</font></a></p>
						<p align="center">? Copyright ECAS<br>
						Design by
						<a target="_blank" href="http://glacegrafix.com">
						<font color="#FFFFFF">GLACEGRAFIX, LLC</font></a></td>
					</tr>
					<tr>
						<td bgcolor="#006634">&nbsp;</td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
	</table>
</div>

</body>

</html>
