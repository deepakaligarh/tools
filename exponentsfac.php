<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<title>Exponents with Fractions (Rational Exponents) Calculator -- </title>
<meta name="keywords" content="Exponents with Fractions Calculator, Rational Exponents Calculator">
<meta name="description" content="Exponents with Fractions Calculator, Rational Exponents Calculator">

<?php include("head.php"); ?>
</head>
<style type="text/css">
bl{color: blue;}
rd{color: red;}
gr{color: green;}
</style>
<script language="javascript">
function csclear()
{
     document.cs.a.value = '';
     document.cs.b.value = '';
     document.cs.c.value = '';
     document.cs.d.value = '';
	 
	 var ss = document.getElementById('output');
     ss.innerHTML = '';	 
	 
     document.cs.a.focus();
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
     var a = document.cs.a.value;
     var b = document.cs.b.value;
     var c = document.cs.c.value;
	//alert(c);
 	if (i == "1" && !isNum(a))
	{
		  a = a.substring(0,a.length-1);
		  document.cs.a.value = a;
		  return;	   
	}
 	if (i == "2" && !isNum(b))
	{
		  b = b.substring(0,b.length-1);
		  document.cs.b.value = b;
		  return;	   
	}
 	if (i == "3" && !isNum(c))
	{
		  c = c.substring(0,c.length-1);
		  document.cs.c.value = c;
		  return;	   
	}
}
function calcs()
{
     var a = document.cs.a.value;
     var b = document.cs.b.value;
     var c = document.cs.c.value;
	 
	 var res = Math.pow(a,b/c);
	 

	 if (res % 1 != 0)
	 {
	    res = res.toFixed(6);
		res = res.replace(/0+$/,"");
		res = res.replace(/\.$/,"");
	 }
	 var ss = document.getElementById('output');
	 
	 var str = ss.innerHTML;
	str = "<div class=\"mline\">&#8226;&nbsp;<gr>" + a  + "<sup>"+ b + "/" + c + "&nbsp;=&nbsp;<rd>" + res +  "" + str;

	 
	ss.innerHTML = str;

	document.cs.d.value=res;
}
</script><style type="text/css">
input{
border: 1px solid #9FA4FF;
}

.res{
    height:24px;
	width:150px;
}
@media screen and (max-width:650px)
{
}
</style><body onload="document.cs.a.focus()">

<?php include("analytics.php"); ?>
<?php include "header.php"?>
<div class="econtent">
<div class="emain">
<div class="mnav">
<ul><li><a href="index.php">Home</a></li>
<li><span>»</span></li>
<li><a href="math.php">Math</a></li>
<li><span>»</span></li>
<li><a href="exponentsfac.php">Exponents 
</a></li>
</ul></div>
<div class="mtitle">Exponents with Fractions Calculator</div>
		<br><form name="cs"> 
			<table bgcolor="#ffffff" width="100%"><tbody><tr><td width="80">
				</td>
				<td width="20">
				</td>
				<td align="center" width="80" style="BORDER-BOTTOM: #000000 2px solid">				
				<input class="forminputcontent" style="width:80px;font-size:20px" autocomplete="off" onkeyup="cscheck(1)" size="6" name="b"></td>
				<td width="20">
				</td>
				<td width="300">				
				</td>							
				</tr><tr><td width="80">
				<input style="width:80px;font-size:20px" autocomplete="off" onkeyup="cscheck(2)" name="a"></td>
				<td width="20">
				<font size="5"> ^ </font>
				</td>
				<td align="center" width="80">				
				<input style="width:80px;font-size:20px" autocomplete="off" onkeyup="cscheck(3)" name="c"></td>
				<td width="20">
				<font size="5"> = </font>
				</td>
				<td width="300">				
				<input class="res" style="color:blue;background-color:#cccccc;font-size:20px" name="d"></td>							
				</tr><tr height="3"></tr></tbody></table><table><tbody><tr height="10"></tr><tr><td width="120"></td>
			 <td>
			 <input style="font-size: 16px" onclick="calcs()" type="button" name="Calculate" value="Calculate"><input style="font-size: 16px" onclick="csclear()" type="button" name="reset" value="Reset"></td>
			 </tr></tbody></table></form> 
	<br><div id="output" style="font-size:16px;width:580px"></div>

<hr style="width:100%;float:left"><p><font class="desc">
	Fractional (Rational) Exponents is defined in the form of A<sup><i>m/n</i></sup>, where A is a real number, m, n are natural numbers (n&gt;=2).
<br><br>
A<sup><i>m/n</i></sup> is equivalent to its Radical Notation form (<sup><i>n</i></sup>√<span style="TEXT-DECORATION: overline">A</span>)<sup>m</sup>.	
<br><br>
For Example:<br><br>
   9<sup><i>3/2</i></sup> = (√<span style="TEXT-DECORATION: overline">9</span>)<sup><i>3</i></sup> = 3<sup><i>3</i></sup> = 27. <br>
   8<sup><i>4/3</i></sup> = (<sup><i>3</i></sup>√<span style="TEXT-DECORATION: overline">8</span>)<sup><i>4</i></sup> = 2<sup><i>4</i></sup> = 16. <br>
   5<sup><i>2/3</i></sup> = (<sup><i>3</i></sup>√<span style="TEXT-DECORATION: overline">5</span>)<sup><i>2</i></sup> = (1.71)<sup><i>2</i></sup> = 2.924. <br></font></p>



		<br></div>
		
<?php include "rightsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>