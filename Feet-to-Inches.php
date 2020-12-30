<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>Feet to Inches Length Converter</title>
<meta name="keywords" content=" Convert from Feet to other Measurements">
<meta name="description" content="Free Online Converters, Calculators and Tutorials">
<?php include("head.php"); ?>
</head>
<style type="text/css" media="screen">
.cmline{
	width:100%;
	padding-top:4px;
	padding-bottom:28px;
	font-size:17px;
}

.cmline a:hover{text-decoration:underline;}

.cmleft{
    width:50%;
	   float:left;
	   text-align:left;
}
.cmright{
    width:50%;
	   float:left;
	   text-align:left;
}

@media screen and (max-width:900px)
{
	.cmline{
		font-size:14px;
	}
}
@media screen and (max-width:800px)
{
	.cmline{
		font-size:14px;
	}
}
@media screen and (max-width:480px)
{
.cmleft{width:100%;padding-top:10px;}
.cmright{width:100%;padding-top:10px;}
	.cmline{
		font-size:15px;
	}
	.hiddenline{display:none;}		
}
</style>
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

<li><a href="Feet-to-Inches.php">Convert from Feet to Inches</a></li>
</ul>
</div>
<center>
<h1 style="color:Black">Feet to Inches Length Converter</h1></center>
<p>Type a value in the Feet field to convert the value to Inches:</p>


<div class="mmiddle">
<p>
  <label>Feet :-</label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">

</p>
<p>Inches : <span id="outputInches" class="ansbg"></span></p></div>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputInches").innerHTML=valNum*12;
}
</script>

<div class="mtitle">Convert from Feet to other Measurements</div>
<div class="hiddenline"><br></div>	
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="Feet-to-Meters.php">Convert from Feet to Meters</a></div>
	</div>
	
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="Feet-to-cm.php">Convert from Feet to cm</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="Feet-to-Yards.php">Convert from Feet to Yards</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="Feet-to-km.php">Convert from Feet to Kilometers</a></div>
	</div>
	<div class="cmline"><div class="cmleft">
	&#187;&nbsp;<A href="Feet-to-Miles.php">Convert from Feet to Miles</a></div>
	</div>

</div>
<?php include "lengthsidebar.php"?>
<?php include "footer.php"?>
</body></html>

