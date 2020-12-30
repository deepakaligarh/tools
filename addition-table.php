<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/defaultm.css" rel="stylesheet" type="text/css" />
<link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
<title>Addition Table (+)</title>

<meta name="keywords" content=" Addition table chart. ">

<meta name="description" content="Addition table chart.">
<style>









	.outcell { 
			background:#ccc;
			width:38px;
			height:20px;
			padding:5px;
			border:0px #ccc solid;
			text-align:center;
			font-family:Arial, Helvetica, sans-serif;
			font-size: 1.2em; }
	.outcell button { 
			font-size:1em;
			font-family: Arial;
			background:#eee;
			width:36px;
			height:26px }
	.incell { 
			background:#fff;
			width:38px;
			height:20px;
			padding:5px;
			border: 1px #ccc solid;
			text-align:center;
			font-family:Arial, Helvetica, sans-serif;
			font-size: 1.2em; }
	.hovcell { 
			background:#ddffdd;
			width:38px;
			height:20px;
			padding:5px;
			border: 1px #ccc solid;
			text-align:center;
			font-family:Arial, Helvetica, sans-serif;
			font-size: 1.2em; }
	.rescell { 
			/*background-color:#F8ECD6;*/
			background:#aaffaa;
			width:38px;
			height:20px;
			padding:4px;
			border: 1px #ccc solid;
			text-align:center;
			font-family:Arial, Helvetica, sans-serif;
			font-weight:bold;
			font-size: 1.2em; }
	.outcell2 { background:#F8ECD6;
			width:20px;
			padding:5px;
			border: 1px #ccc solid;
			text-align:center;
			font-family:Arial, Helvetica, sans-serif;
			font-size: 0.7em; }
	.incell2 { 
			background:#fff;
			width:20px;
			padding:5px;
			border: 1px #ccc solid;
			text-align:center;
			font-family:Arial, Helvetica, sans-serif;
			font-size: 0.7em; }
	
	.up { border-style:outset; }
	.dn	{ border-style:inset; background:#ddd; font-weight:bold;}
	
	#table3 input[type=text] { font-family: Arial; width:100px; background:#eeffee; text-align:center; }
	.up { border-style:outset; }
	.dn	{ border-style:inset; background:#ddd; font-weight:bold;}
	.mathsymbol { font-family: "Times New Roman"; font-size: 1.2em;  font-weight: normal; }
.math { font-family: "Times New Roman"; font-size: 1.6em; padding-left: 6px; font-weight: normal;}
	
	@media only screen and (max-width:799px) {
	.btn { font-size: 1.2em; padding:7px; }
}
@media only screen and (min-width:800px) {
	.btn { font-size: 1.2em; padding:4px; }
}

</style>
<!-- #EndEditable -->

</head>

<body>
<?php include "header.php"?>	
<div class="econtent">
<div class="mnav">
<ul>
<li><a href="index.php">Home</a></li>
<li><span>&#187;</span></li>
<li><a href="addition-table.php">Addition Table</a></li>
</ul>
</div>





	<!-- #BeginEditable "doctext" -->

<h1 style="color:Black" >Addition Table</h1>
	<p>Use the interactive addition table chart to quickly add two numbers.</p>
	<p>Press on a <i>column button</i> and a <em>row button</em> below to get addtion result:</p>
	<table id="table2" class="table2" style="border: 1px #ccc solid; border-collapse: collapse">
		<tr>
			<td class="outcell"><b>+</b></td>
			<td class="outcell"><button value="1" onclick="OnButton(this,2)">1</button></td>
			<td class="outcell"><button value="2" onclick="OnButton(this,2)">2</button></td>
			<td class="outcell"><button value="3" onclick="OnButton(this,2)">3</button></td>
			<td class="outcell"><button value="4" onclick="OnButton(this,2)">4</button></td>
			<td class="outcell"><button value="5" onclick="OnButton(this,2)">5</button></td>
			<td class="outcell"><button value="6" onclick="OnButton(this,2)">6</button></td>
			<td class="outcell"><button value="7" onclick="OnButton(this,2)">7</button></td>
			<td class="outcell"><button value="8" onclick="OnButton(this,2)">8</button></td>
			<td class="outcell"><button value="9" onclick="OnButton(this,2)">9</button></td>
			<td class="outcell"><button value="10" onclick="OnButton(this,2)">10</button></td>
			<td class="outcell"><button value="11" onclick="OnButton(this,2)">11</button></td>
			<td class="outcell"><button value="12" onclick="OnButton(this,2)">12</button></td>
		</tr>
		<tr>
			<td class="outcell"><button value="1" onclick="OnButton(this,1)">1</button></td>
			<td class="incell">2</td>
			<td class="incell">3</td>
			<td class="incell">4</td>
			<td class="incell">5</td>
			<td class="incell">6</td>
			<td class="incell">7</td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
		</tr>
		<tr>
			<td class="outcell"><button value="2" onclick="OnButton(this,1)">2</button></td>
			<td class="incell">3</td>
			<td class="incell">4</td>
			<td class="incell">5</td>
			<td class="incell">6</td>
			<td class="incell">7</td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
		</tr>
		<tr>
			<td class="outcell"><button value="3" onclick="OnButton(this,1)">3</button></td>
			<td class="incell">4</td>
			<td class="incell">5</td>
			<td class="incell">6</td>
			<td class="incell">7</td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
		</tr>
		<tr>
			<td class="outcell"><button value="4" onclick="OnButton(this,1)">4</button></td>
			<td class="incell">5</td>
			<td class="incell">6</td>
			<td class="incell">7</td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
		</tr>
		<tr>
			<td class="outcell"><button value="5" onclick="OnButton(this,1)">5</button></td>
			<td class="incell">6</td>
			<td class="incell">7</td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
		</tr>
		<tr>
			<td class="outcell"><button value="6" onclick="OnButton(this,1)">6</button></td>
			<td class="incell">7</td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
		</tr>
		<tr>
			<td class="outcell"><button value="7" onclick="OnButton(this,1)">7</button></td>
			<td class="incell">8</td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
			<td class="incell">19</td>
		</tr>
		<tr>
			<td class="outcell"><button value="8" onclick="OnButton(this,1)">8</button></td>
			<td class="incell">9</td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
			<td class="incell">19</td>
			<td class="incell">20</td>
		</tr>
		<tr>
			<td class="outcell"><button value="9" onclick="OnButton(this,1)">9</button></td>
			<td class="incell">10</td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
			<td class="incell">19</td>
			<td class="incell">20</td>
			<td class="incell">21</td>
		</tr>
		<tr>
			<td class="outcell"><button value="10" onclick="OnButton(this,1)">10</button></td>
			<td class="incell">11</td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
			<td class="incell">19</td>
			<td class="incell">20</td>
			<td class="incell">21</td>
			<td class="incell">22</td>
		</tr>
		<tr>
			<td class="outcell"><button value="11" onclick="OnButton(this,1)">11</button></td>
			<td class="incell">12</td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
			<td class="incell">19</td>
			<td class="incell">20</td>
			<td class="incell">21</td>
			<td class="incell">22</td>
			<td class="incell">23</td>
		</tr>
		<tr>
			<td class="outcell"><button value="12" onclick="OnButton(this,1)">12</button></td>
			<td class="incell">13</td>
			<td class="incell">14</td>
			<td class="incell">15</td>
			<td class="incell">16</td>
			<td class="incell">17</td>
			<td class="incell">18</td>
			<td class="incell">19</td>
			<td class="incell">20</td>
			<td class="incell">21</td>
			<td class="incell">22</td>
			<td class="incell">23</td>
			<td class="incell">24</td>
		</tr>
	</table><br>
	 <form name="calcform" autocomplete="off">
	<table id="table3" style="margin:5px 150px; border-style:none">
		<tr>
			<td class="mathsymbol"><input type="text" name="num1" size="2" class="math" style="width:60px; background:#e0f0e0; text-align:center" readonly="readonly"></td>
			<td class="math"><b>+</b></td>
			<td class="mathsymbol"><input type="text" name="num2" id="num2" size="2" class="math" style="background:#e0f0e0; width:60px; text-align:center" readonly="readonly"></td>
			<td class="math">=</td>
			<td class="mathsymbol"><input type="text" name="result" size="2" class="math" style="background:#e0f0e0; width:80px; text-align:center" readonly="readonly"></td>
			<td class="mathsymbol"><input type="reset" value="Clear" onclick="OnReset()" class="btn" ></td>
		</tr>
	</table>
	</form>
	<p>&nbsp;</p>
	
	
		
	<script>
		var on1=0,on2=0,res=0,xres=0,yres=0;
		window.onload = function()
		{
			var table = document.getElementsByTagName("table")[0];
			var cells = table.getElementsByTagName("td"); // 
			
			for(var i = 1; i < cells.length; i++){
			    // Cell Object
			    var cell = cells[i];
			    // Track with onclick
			    cell.onclick = function(){
			        var cellIndex  = this.cellIndex;  
			        var rowIndex = this.parentNode.rowIndex;
			        if( cellIndex==0 || rowIndex==0 ) return;
			        xres = cellIndex;
			        yres = rowIndex;
					for(k=1; k<=12; k++)
						for(j=1; j<=12; j++)
						{
							res = document.getElementById("table2").rows[k].cells[j];
							res.className = "incell";
						}
					for(k=1; k<=rowIndex-1; k++)
					{
						res = document.getElementById("table2").rows[k].cells[cellIndex];
						res.className = "hovcell";
					}
					for(j=1; j<=cellIndex-1; j++)
					{
						res = document.getElementById("table2").rows[rowIndex].cells[j];
						res.className = "hovcell";
					}
					res = document.getElementById("table2").rows[rowIndex].cells[cellIndex];
					res.className = "rescell";
					res = document.getElementById("table2").rows[rowIndex].cells[0];
					res = res.getElementsByTagName("button")[0];
					res.className = "dn";
					if( res!=on1 )
					{
						on1.className = "up";
						on1 = res;
					}
					res = document.getElementById("table2").rows[0].cells[cellIndex];
					res = res.getElementsByTagName("button")[0];
					res.className = "dn";
					if( res!=on2 )
					{
						on2.className = "up";
						on2 = res;
					}
					res = this;
					document.calcform.num1.value = rowIndex;
					document.calcform.num2.value = cellIndex;
					document.calcform.result.value = rowIndex+cellIndex; 
			    }
			    cell.onmouseover = function(){
			        var cellIndex  = this.cellIndex;  
			        var rowIndex = this.parentNode.rowIndex;
			        if( cellIndex==0 || rowIndex==0 ) return;
			        this.className = 'rescell';
			    }
			    cell.onmouseout = function(){
			        var cellIndex  = this.cellIndex;  
			        var rowIndex = this.parentNode.rowIndex;
			        if( cellIndex==0 || rowIndex==0 ) return;
			        //if( this==res ) return;
			        if( cellIndex==xres && rowIndex==yres )
				    	this.className = 'rescell';
			        //else if( cellIndex<=xres && rowIndex<=yres )
			        else if( (cellIndex==xres && rowIndex<=yres) || (rowIndex==yres && cellIndex<=xres) )
				    	this.className = 'hovcell';
				    else
					    this.className = 'incell';
			    }
			}			
		}
		function OnButton(obj,num)
		{
			obj.blur();
			//setState(obj);
			if( num==1 )
			{
				document.calcform.num1.value = obj.value;
				if(obj != on1)  
				{
					if(on1) on1.className = "up";
					obj.className = "dn";
					on1 = obj;
				}
			}
			else
			{
				document.calcform.num2.value = obj.value;
				if(obj != on2)  
				{
					if(on2) on2.className = "up";
					obj.className = "dn";
					on2 = obj;
				}
			}
			
			if( on1!=0 && on2!=0 )
			{
				num1 = parseInt(document.calcform.num1.value);
				num2 = parseInt(document.calcform.num2.value);
				if( res!=0 ) res.className = "incell";
				res = document.getElementById("table2").rows[num1].cells[num2]
				res.className = "rescell";
				document.calcform.result.value = num1 + num2; 
		        
		        xres = num2;
		        yres = num1;
				for(k=1; k<=12; k++)
					for(j=1; j<=12; j++)
					{
						res = document.getElementById("table2").rows[k].cells[j];
						res.className = "incell";
					}
				for(k=1; k<=yres-1; k++)
				{
					res = document.getElementById("table2").rows[k].cells[xres];
					res.className = "hovcell";
				}
				for(j=1; j<=xres-1; j++)
				{
					res = document.getElementById("table2").rows[yres].cells[j];
					res.className = "hovcell";
				}
				res = document.getElementById("table2").rows[yres].cells[xres];
				res.className = "rescell";
			}

		}
		function OnReset()
		{
			if( res!=0 ) res.className = "incell";
			if( on1!=0 ) on1.className = "up";
			if( on2!=0 ) on2.className = "up";
			res=on1=on2=0;
			xres=yres=0;
			for(k=1; k<=12; k++)
				for(j=1; j<=12; j++)
				{
					res = document.getElementById("table2").rows[k].cells[j];
					res.className = "incell";
				}
		}
		function setState(el) {
			if(el != on)  {
				if(on) on.className = "up";
				el.className = "dn";
				on = el;
			}
		}
	</script> 











<?php include "footer.php"?>
</body></html>