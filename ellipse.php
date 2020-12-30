<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script language="javascript" src="js/6282--searchajax.js"></script>

<title>Ellipse Area Circumference Foci Calculator -- </title>
<meta name="keywords" content="Ellipse Equation Calculator, Calculator of Ellipse Area, Circumference, Foci, Eccentricity and Center to Focus Distance">
<meta name="description" content="Ellipse Equation Calculator, Calculator of Ellipse Area, Circumference, Foci, Eccentricity and Center to Focus Distance">
<!--<script language=javascript src="script/geometry.js"></script>-->
<?php include("head.php"); ?>
</head>
<script language="javascript">
function clearellipse()
{
    document.cs.length.value="";
    document.cs.width.value="";
    document.cs.area.value="";
    document.cs.parameter.value="";
	
	document.cs.length.focus();
}

function isNum(args)
{
	args = args.toString();

	if (args.length == 0)
	return false;

	for (var i = 0;  i<args.length;  i++)
	{
		if ((args.substring(i,i+1) < "0" || args.substring(i, i+1) > "9") && args.substring(i, i+1) != "."&& args.substring(i, i+1) != "-")
		{
			return false;
		}
	}

	return true;
}

function cscheck(i)
{
     var l = document.cs.length.value;
     var w = document.cs.width.value;
	 //alert(c);
 	if (i == "1" && !isNum(l))
	{
		  l = l.substring(0,l.length-1);
		  document.cs.length.value = l;
		  return;	   
	}
 	if (i == "2" && !isNum(w))
	{
		  w = w.substring(0,w.length-1);
		  document.cs.width.value = w;
		  return;	   
	}
}
function calcs()
{
     var l = document.cs.length.value;
     var w = document.cs.width.value;
	 if (l == "" && w== "") {return;}
	 
	 l = 1 * l;
	 w = 1 * w;
	 
	 l = Math.abs(l);
	 w = Math.abs(w);
	 
	var area = Math.PI * l * w;
	var parameter = 2 * Math.PI * Math.sqrt(0.5 * (l * l + w * w));
	
	//area = lfix(area);
	//parameter = lfix(parameter);
	
	if (area % 1 != 0)
	{
	area= area.toFixed(6);
	area= area.replace(/0+$/,"");
	area= area.replace(/\.$/,"");
	}
	if (parameter % 1 != 0)
	{
	parameter= parameter.toFixed(6);
	parameter= parameter.replace(/0+$/,"");
	parameter= parameter.replace(/\.$/,"");
	} 
	
	document.cs.area.value = area;
	document.cs.parameter.value = parameter;
}
</script><script language="javascript">
function csclear2()
{
     document.cs2.a.value = '';
     document.cs2.b.value = '';
     document.cs2.x0.value = '';
     document.cs2.y0.value = '';
     document.cs2.res.value = '';
     document.cs2.res3.value = '';
     document.cs2.res4.value = '';
     document.cs2.res5.value = '';
     document.cs2.res2.value = '';
     document.cs2.res6.value = '';
	 
     document.cs2.x0.focus();
}

function cscheck2(i)
{
     var x0 = document.cs2.x0.value;
     var y0 = document.cs2.y0.value;
     var a = document.cs2.a.value;
     var b = document.cs2.b.value;
	//alert(c);
 	if (i == "1" && !isNum(x0))
	{
		  x0 = x0.substring(0,x0.length-1);
		  document.cs2.x0.value = x0;
		  return;	   
	}
 	if (i == "2" && !isNum(y0))
	{
		  y0 = y0.substring(0,y0.length-1);
		  document.cs2.y0.value = y0;
		  return;	   
	}
 	if (i == "3" && !isNum(a))
	{
		  a = a.substring(0,a.length-1);
		  document.cs2.a.value = a;
		  return;	   
	}
 	if (i == "4" && !isNum(b))
	{
		  b = b.substring(0,b.length-1);
		  document.cs2.b.value = b;
		  return;	   
	}
}
function calcs2()
{
     var a = document.cs2.a.value;
     var b = document.cs2.b.value;
     var x0 = document.cs2.x0.value;
     var y0 = document.cs2.y0.value;
	 if (a == "" || b== "" || x0 == "" || y0 == "") {return;}
	 
	 a = Math.abs(1 * a);
	 b = Math.abs(1 * b);
	 x0 = 1 * x0;
	 y0 = 1 * y0;
	 
	 if (a < b)
	 {
	     tp = b;
		 b = a;
		 a = tp;
	 }

	 var ecc = Math.sqrt(a * a - b * b) / a;
	 var fx = x0 + Math.sqrt(a * a - b * b);
	 var fy = y0;
	 var f2x = x0 - Math.sqrt(a * a - b * b);
	 var f2y = y0;
	 
	 
	 //fx = fixed(fx,6);
	 //f2x = fixed(f2x,6);
	 //ecc = fixed(ecc,6);

	if (fx % 1 != 0)
	{
	fx= fx.toFixed(6);
	fx= fx.replace(/0+$/,"");
	fx= fx.replace(/\.$/,"");
	}

	if (f2x % 1 != 0)
	{
	f2x= f2x.toFixed(6);
	f2x= f2x.replace(/0+$/,"");
	f2x= f2x.replace(/\.$/,"");
	} 
	 var res = "( " + fx + ", " + fy + " )";
     var res5 = "( " + f2x + ", " + f2y + " )";
	 

	var area = Math.PI * a * b;
	var parameter = 2 * Math.PI * Math.sqrt(0.5 * (a * a + b * b));
	
	//area = lfix(area);
	//parameter = lfix(parameter);
	 
	 var res3 = area; 
	 var res4 = parameter; 
	 
	 var dis = Math.sqrt(a * a - b * b);
	 
	 //dis = lfix(dis);
	if (ecc % 1 != 0)
	{
	ecc= ecc.toFixed(6);
	ecc= ecc.replace(/0+$/,"");
	ecc= ecc.replace(/\.$/,"");
	} 
	if (dis % 1 != 0)
	{
	dis= dis.toFixed(6);
	dis= dis.replace(/0+$/,"");
	dis= dis.replace(/\.$/,"");
	}
	 //alert(ecc);
	if (res3 % 1 != 0)
	{
	res3= res3.toFixed(6);
	res3= res3.replace(/0+$/,"");
	res3= res3.replace(/\.$/,"");
	} 

	if (res4 % 1 != 0)
	{
	res4= res4.toFixed(6);
	res4= res4.replace(/0+$/,"");
	res4= res4.replace(/\.$/,"");
	} 
 
	 document.cs2.res.value=res;
	 document.cs2.res2.value=ecc;
	 document.cs2.res3.value=res3;
	 document.cs2.res4.value=res4;
	 document.cs2.res5.value=res5;
	 document.cs2.res6.value=dis;
	 
	 document.cs2.x0.focus();
}
</script>
<body onload="document.cs.g1.focus()">

<?php include("analytics.php"); ?>
<?php include "header.php"?>
<div class="econtent">
<div class="emain">
<div class="mnav">
<ul><li><a href="index.php">Home</a></li>
<li><span>»</span></li>
<li><a href="math.php">Math</a></li>
<li><span>»</span></li>
<li><a href="ellipse.php">Ellipse Calculator</a></li>
</ul></div>
<div class="mtitle">Ellipse Calculator</div>

<form name="cs">
<div class="mline">
<div class="mlabel">Semi-Major Axis:
</div>
<div class="mbox">
<input autocomplete="off" type="text" onkeyup="cscheck(1)" name="length" value=""></div>
</div>

<div class="mline">
<div class="mlabel">Semi-Minor Axis:
</div>
<div class="mbox">
<input autocomplete="off" type="text" onkeyup="cscheck(2)" name="width" value=""></div>
</div>

<div class="mcalc">
<div class="mlabel">
</div>
<div class="mbox">
<input type="button" onclick="calcs()" name="ellipsesubmit" value="Calculate"><input onclick="clearellipse()" type="button" value="Clear"></div></div>

<div class="mline">
<div class="mlabel">Area:
</div>
<div class="mbox">
<input style="font-size:20px;width:240px;background-color:#dcdcdc" type="text" name="area" value=""></div>
</div>

<div class="mline">
<div class="mlabel">Circumference:
</div>
<div class="mbox">
<input style="font-size:20px;width:240px;background-color:#dcdcdc" type="text" name="parameter" value=""></div>
</div>

</form>
<br><hr width="100%" style="float:left"><form name="cs2">
<center><img src="images/pic-ellipse.png"><img src="images/pic-ellipse_pic.png"><br></center>
<font color="black">
Ellipse equation and graph with center C(x<sub>0</sub>, y<sub>0</sub>) and major axis parallel to x axis. If the major axis is parallel to the y axis, interchange x and y during your calculation.
</font>
<br><hr width="100%" style="float:left"><div class="mtitle">Ellipse Equation Calculator</div>
<br><div class="mline">
<div class="mlabel">x<sub>0</sub>:
</div>
<div class="mbox">
<input autocomplete="off" onfocus="afocus('x0')" onkeyup="cscheck2(1)" name="x0"></div>
</div>

<div class="mline">
<div class="mlabel">y<sub>0</sub>:
</div>
<div class="mbox">
<input autocomplete="off" onfocus="afocus('y0')" onkeyup="cscheck2(2)" name="y0"></div>
</div>

<div class="mline">
<div class="mlabel">a:
</div>
<div class="mbox">
<input autocomplete="off" onfocus="afocus('a')" onkeyup="cscheck2(3)" name="a"></div>
</div>

<div class="mline">
<div class="mlabel">b:
</div>
<div class="mbox">
<input autocomplete="off" onfocus="afocus('b')" onkeyup="cscheck2(4)" name="b"></div>
</div>

<div class="mcalc">
<div class="mlabel">
</div>
<div class="mbox">
<input onclick="calcs2()" type="button" name="Calculate" value="Calculate"><input onclick="csclear2()" type="button" name="reset" value="Reset All"></div></div>

<div class="mline">
<div class="mlabel">Ellipse Focus F:
</div>
<div class="mbox">
<input style="color:blue;background-color:#cccccc" name="res"></div>
</div>

<div class="mline">
<div class="mlabel">Ellipse Focus F':
</div>
<div class="mbox">
<input style="color:blue;background-color:#cccccc" name="res5"></div>
</div>

<div class="mline">
<div class="mlabel">Ellipse Eccentricity :
</div>
<div class="mbox">
<input style="color:blue;background-color:#cccccc" name="res2"></div>
</div>

<div class="mline">
<div class="mlabel">Area :
</div>
<div class="mbox">
<input style="color:blue;background-color:#cccccc" name="res3"></div>
</div>

<div class="mline">
<div class="mlabel">Circumference :
</div>
<div class="mbox">
<input style="color:blue;background-color:#cccccc" name="res4"></div>
</div>

<div class="mline">
<div class="mlabel">Center to Focus Distance :
</div>
<div class="mbox">
<input style="color:blue;background-color:#cccccc" name="res6"></div>
</div>

</form>

<div id="output" style="font-size:16px;width:580px"></div>
<br><br><div class="mline"></div>
<hr width="100%" style="float:left"><p><font class="desc">
Ellipse calculator formulas:<br><br>
   Ellipse Foci F X Coordinate  =  x<sub>0</sub> + √<span style="TEXT-DECORATION: overline">(a * a - b * b)</span><br>
   Ellipse Foci F Y Coordinate  =  y<sub>0</sub><br>
   Ellipse Focus F' X Coordinate  =  x<sub>0</sub> - √<span style="TEXT-DECORATION: overline">(a * a - b * b)</span><br>
   Ellipse Focus F' Y Coordinate  =  y<sub>0</sub><br>
   Ellipse Eccentricity  =  √<span style="TEXT-DECORATION: overline">(a * a - b * b)</span> / a<br>
   Distance from Center to Focus  =  √<span style="TEXT-DECORATION: overline">(a * a - b * b)</span><br><br>
   Area = PI * Semi-Major Axis * Semi-Minor Axis<br>
   Circumference = PI * √<span style="TEXT-DECORATION: overline">(a * a - b * b) * 2</span>
</font></p>
</div>




<?php include "rightsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>