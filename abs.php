<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<title>Absolute Value Calculator -- </title>
<meta name="keywords" content="Absolute Value Calculator">
<meta name="description" content="Absolute Value Calculator">

<script language="javascript" src="js/script-geometry.js"></script>


<?php include("head.php"); ?>
</head>
<script language="javascript">
var sg1 = new Array();
var sg2 = new Array();
var curr = 0;
var un = 0;
var re = 0;
sg1[curr] = "";
sg2[curr] = "";
sres[curr] = "";

function csclear()
{
     document.cs.a.value = '';
     document.cs.b.value = '';
	 
	 var ss = document.getElementById('output');
     ss.innerHTML = '';	 
	 
     document.cs.a.focus();
}

function csclear2()
{
     document.cs.a.value = '';
     document.cs.b.value = '';
	 
     document.cs.a.focus();
}

function csclear3()
{
     document.cs2.g1.value = '';
     document.cs2.g2.value = '';
     document.cs2.g1.focus();
}

function isNum(args)
{
	args = args.toString();

	if (args.length == 0)
	return false;

	for (var i = 0;  i<args.length;  i++)
	{
		if ((args.substring(i,i+1) < "0" || args.substring(i, i+1) > "9") && args.substring(i, i+1) !="."&& args.substring(i, i+1) != "-")
		{
			return false;
		}
	}

	return true;
}
function cscheck(i)
{
    var a = document.cs.a.value;
	if (i == "1" && !isNum(a))
	{
		  a = a.substring(0,a.length-1);
		  document.cs.a.value = a;
		  return;	   
	}
}
		
function calcs2()
{
     var g1 = document.cs2.g1.value;
 	 var arr1 = new Array;
	 var res="";
	 
	 if (g1 == "") return;
	 
	if (g1.indexOf("\r\n") != -1){arr1 = g1.split("\r\n");}
	else if (g1.indexOf("\n") != -1){arr1 = g1.split("\n");}
	else if (g1.indexOf(",") != -1){arr1 = g1.split(",");}
	else if (g1.indexOf("\t") != -1){arr1 = g1.split("\t");}
	else{arr1 = g1.split(" ");}
	
	for (var ii=0; ii<arr1.length; ii++)
	{
		 var tp2 = Math.abs(arr1[ii]);
		 tp2 = lfix(tp2);
		 res += tp2 + "\r\n";
	}	
	document.cs2.g2.value = res;
	 
	curr = curr + 1;
	sg1[curr] = g1;
	sg2[curr] = res;
	un = curr;
    document.cs2.undo2.disabled = false;
   return;
}

function undo()
{
   un = un -1;
   if (un <= 0)
   {
      un = 0;
	  document.cs2.undo2.disabled = true;
	  
   }
   
   re = un;
   document.cs2.redo2.disabled = false;
   
   document.cs2.g1.value = sg1[un];
   document.cs2.g2.value = sg2[un];
}

function redo()
{
   re = re + 1;
   if (re >= sg1.length-1)
   {
      re = sg1.length-1;
	  document.cs2.redo2.disabled = true;
   }
   
   un = re;
   document.cs2.undo2.disabled = false;
   
   document.cs2.g1.value = sg1[un];
   document.cs2.g2.value = sg2[un];
}
function calcs()
{
     var a = document.cs.a.value;
  
	 if (a == "") {return;}
	 a = 1 * a;
	 

	b = Math.abs(a);
	
	b = lfix(b);
	
	document.cs.b.value = b;
	 
	 var ss = document.getElementById('output');
	 
	 var str = ss.innerHTML;
	 if (str == "")
	 {
	     str = "<br><center><font style=\"font-size:15px\"><table class=countrytable><tbody>";
	 }
	 else
	 {
		str =str.replace("","");
	    str = str.replace("<TBODY>","<tbody>");
		str =str.replace("","");
	 }
	var str2 = "<tbody><tr><td width=285 align=right>Number: "+ a + "&nbsp;<td width=285 align=left>&nbsp;Absolute Value:&nbsp;" + b +  "";
	str = str.replace("<tbody>",str2);
	str += "";

	ss.innerHTML = str;
}
</script><style type="text/css">
bl{color: blue;}
rd{color: red;}
gr{color: green;}
.forminput{width:290px;margin-left:5px;float:left;}
.forminput textarea{width:280px;height:300px;border: 1px solid #9FA4FF;background-color: #FFFFff;}
.cal input{
width:90px;
height:28px;
font-size:15px;
}
.mline input{
font-size:15px;
height:26px;
width:200px;
border: 1px solid #9FA4FF;
}
@media screen and (max-width:1000px)
{	.forminput{width:46%;margin-left:1%;}
	.forminput textarea{width:98%; border: 1px solid #9FA4FF;}
}
@media screen and (max-width:650px)
{
.homeintro, .hiddenline{display:none;}
}
@media screen and (max-width:480px)
{

}
</style>

<body onload="document.cs.a.focus()">
<?php include("analytics.php"); ?>
<?php include "header.php"?>
<div class="econtent">
<div class="emain">
<div class="mnav">
<ul><li><a href="index.php">Home</a></li>
<li><span>»</span></li>
<li><a href="math.php">Math</a></li>
<li><span>»</span></li>
<li><a href="abs.php">Absolute Value Calculator</a></li>
</ul></div>

<div class="mtitle">Absolute Value Calculator</div>
<br><form name="cs">

<div class="mline">
<div class="mlabel">
<font style="font-size:18px">Number :</font>
</div>
<div class="mbox">
<input autocomplete="off" onkeyup="cscheck(1)" name="a"></div>
</div>



<div class="mline">
<div class="mlabel">
<font style="font-size:18px">Absolute Value :</font>
</div>
<div class="mbox">
<input style="font-size:20px;color:blue;background-color:#cccccc" name="b"></div>
</div>

<div class="mcalc">
<div class="mlabel"></div>
<div class="mbox">
<input onclick="calcs()" type="button" name="Calculate" value="Calculate"><input onclick="csclear2()" type="button" name="reset" value="Clear"></div></div>

</form>
<br><div id="output" style="font-size:16px;"></div>
<hr width="100%" style="float:left" class="hiddenline"><div class="mtitle">Absolute Value Caculator in Batch</div>
<br><form name="cs2">
<div class="mline">
<div class="forminput">
<font style="font-size:16px">Numbers:</font>
<textarea name="g1" cols="1" rows="10" value="" style="color:#000000"></textarea></div>


<div class="forminput">
<font style="font-size:16px">Absolute Values:</font>
<textarea name="g2" style="color:blue;background-color:#eeeedd" cols="1" rows="10" value=""></textarea></div>
</div>
<br><div class="cal">
<input onclick="calcs2()" type="button" name="Calculate" value="Calculate"><input onclick="csclear3()" type="button" name="reset" value="Reset All"></div>

<br><div class="cal">
<input disabled onclick="undo()" type="button" name="undo2" value="Undo"><input disabled onclick="redo()" type="button" name="redo2" value="Redo"></div>
</form>

<br><hr width="100%" style="float:left"><font style="color:black;font-size:15px">
<p>
<img src="images/pic-note.png">  Absolute value of a number is its non-negative value.<br></p><ul><li><b class="r">|-a|</b> = a; a &gt; 0;<br></li><li><b class="r">|a|</b> = a; a &gt; 0;<br></li><li><b class="r">|0|</b> = 0;<br></li></ul>
      For Example:<br><ul><li><b class="r">|-4|</b> = 4; Absolute value of -4 is 4<br></li><li><b class="r">|-3.2|</b> = 3.2; Absolute value of -3.2 is 3.2<br></li><li><b class="r">|20|</b> = 20; Absolute value of 20 is 20<br></li></ul></font>
</div>

<?php include "rightsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>