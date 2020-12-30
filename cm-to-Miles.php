<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>Centimeters to Miles Length Converter</title>
<meta name="keywords" content=" Convert from Centimeters to other Measurements">
<meta name="description" content="Free Online Converters, Calculators ">
<?php include("head.php"); ?>
</head>
<?php include "style.php" ?>
<body>
<?php include("analytics.php"); ?>
<?php include "header.php"?>	
<div class="econtent">
<div class="emain">
<div class="mnav">
<ul>
<li><a href="index.php">Home</a></li>
<li><span>&#187;</span></li>
<li><span>&#187;</span></li>

<li><a href="cm-to-Miles.php">Convert from Cm to Miles</a></li>
</ul>
</div>
<center>
<h1 style="color:Black">Centimeters to Miles Length Converter</h1></center>
<p>Type a value in the Centimeters field to convert the value to Miles:</p>


<div class="mmiddle">
<p>
  <label>Centimeters :-</label>
  <input id="inputcm" type="number" placeholder="cm" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>
<p>Miles : <span id="outputMiles" class="ansbg"></span></p></div>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputMiles").innerHTML=valNum*0.0000062137;
}
</script>

<div class="mtitle">Convert from Centimeters to other Measurements</div>
<div class="hiddenline"><br></div>	
	
	
	
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="cm-to-Feet.php" >Convert from Centimeters to Feet</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="cm-to-Meters.php" >Convert from Centimeters to Meters</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="cm-to-Inches.php" >Convert from Centimeters to Inches</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="cm-to-Yards.php" >Convert from Centimeters to Yards</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="cm-to-Km.php" >Convert from Centimeters to Kilometers</a></div>
	</div>







	

</div>
<?php include "lengthsidebar.php"?>
<?php include "footer.php"?>
</body></html>

