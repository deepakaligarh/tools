
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Computer speed Conversion Online -- </title>
<meta name="keywords" content="Computer speed, Converter">
<meta name="description" content="Computer speed Unit Converter Online">
<script language=javascript src="js/accangular.js"></script>
<?php include("head.php"); ?>

</head>
<style type="text/css" media="screen">
    .untitem:hover
	{
	    	background-color: #bbbbbb;
            cursor: pointer;
	}
.suggest_link{
background-color: #fbfbfe;
padding: 0px 0px 0px 0px;
border:1px solid #9FA4FF;
border-top:none;
}
.suggest_link_over{
background-color: #D1E0A4;
cursor: pointer;
border:1px solid #9FA4FF;
border-top:none;
}
.msch input{
	margin-top:3px;
	padding-bottom:5px;
	font-size:28px;
	width:400px;
	height:28px;
	border: 1px solid #9FA4FF;
}
.mschsuggest {
  z-index:200;
  position:absolute;
  font-size:16px;
  width:402px;
}
.nbox{
	float:left;
	width:310px;
}
.nbox input{
	border: 1px solid #9FA4FF;
	font-size:16px;
	width:308px;
	margin-top:4px;
}
.untitem{
	font-size:16px;
	width:280px;
	font-weight:normal;
	float:left;
	face:Arial;
	margin-top:4px;
}
.selitem{
	font-size:15px;
	face:Arial;
	cursor:pointer;
}
@media screen and (max-width:1000px)
{
    .msch input{
		width:60%;
	}
	.mschsuggest{
	    width:60.5%;
	}
	.nbox{width:180px;}
	.nbox input{width:180px;}
}
@media screen and (max-width:800px)
{
	.nbox{width:310px;}
	.nbox input{width:308px;}
}
@media screen and (max-width:700px)
{
	.nbox{width:182px;}
	.nbox input{width:180px;}
	.mtitle{margin-bottom:10px;}
	.selitem{
	font-size:16px;
	}
}
@media screen and (max-width:480px)
{
    .untitem{width:100%;}
	.nbox{width:100%;}
	.nbox input{width:80%;}
    .msch input{
		padding-top:3px;
		padding-bottom:4px;
		font-size:20px;
	}
	.mschsuggest{
	    width:71%;
		font-size:15px;
	}
}
@media screen and (max-width:320px)
{
    .msch input{
		width:55%;
	}
	.mschsuggest{
	    width:91%;
		font-size:13px;
	}
}
</style>
<script language = "javascript" >
document.onclick = onClick;
function onClick(ev) 
{
     ev = ev || window.event;
    var target = ev.target || ev.srcElement;
    var dragObj = target.getAttribute('id'); 
	document.getElementById('search_suggest').innerHTML = '';
	document.getElementById('search_id').innerHTML = '';
} 
</script >
<script language=javascript>
function isNum(args)
{
	args = args.toString();
	if (args.length == 0)
	return false;
	for (var i = 0;  i<args.length;  i++)
	{
		if ((args.substring(i,i+1) < "0" || args.substring(i, i+1) > "9") && args.substring(i, i+1) != "." && args.substring(i, i+1) != "-" && args.substring(i, i+1) != "e" && args.substring(i, i+1) != "E")
		{
			return false;
		}
	}
	return true;
}
</script>
<script language=javascript>
	var efs = new Array();
	var exs = new Array();
	efs["75"]=new Array();
	exs["75"]=new Array();
efs["75"]["75"] = 1;
efs["75"]["tm"] = 1000;
efs["75"]["p4"] = 1000000;
efs["75"]["zb"] = 1000000000;
efs["75"]["ar"] = 1000000000000;
efs["75"]["3j"] = 1.0E+15;
efs["75"]["p2"] = 1.0E+18;
	efs["tm"]=new Array();
	exs["tm"]=new Array();
efs["tm"]["75"]=0.001;
efs["tm"]["tm"]=1;
efs["tm"]["p4"]=1000;
efs["tm"]["zb"]=1000000;
efs["tm"]["ar"]=1000000000;
efs["tm"]["3j"]=1000000000000;
efs["tm"]["p2"]=1.0E+15;
	efs["p4"]=new Array();
	exs["p4"]=new Array();
efs["p4"]["75"]=1.0E-6;
efs["p4"]["tm"]=0.001;
efs["p4"]["p4"]=1;
efs["p4"]["zb"]=1000;
efs["p4"]["ar"]=1000000;
efs["p4"]["3j"]=1000000000;
efs["p4"]["p2"]=1000000000000;
	efs["zb"]=new Array();
	exs["zb"]=new Array();
efs["zb"]["75"]=1.0E-9;
efs["zb"]["tm"]=1.0E-6;
efs["zb"]["p4"]=0.001;
efs["zb"]["zb"]=1;
efs["zb"]["ar"]=1000;
efs["zb"]["3j"]=1000000;
efs["zb"]["p2"]=1000000000;
	efs["ar"]=new Array();
	exs["ar"]=new Array();
efs["ar"]["75"]=1.0E-12;
efs["ar"]["tm"]=1.0E-9;
efs["ar"]["p4"]=1.0E-6;
efs["ar"]["zb"]=0.001;
efs["ar"]["ar"]=1;
efs["ar"]["3j"]=1000;
efs["ar"]["p2"]=1000000;
	efs["3j"]=new Array();
	exs["3j"]=new Array();
efs["3j"]["75"]=1.0E-15;
efs["3j"]["tm"]=1.0E-12;
efs["3j"]["p4"]=1.0E-9;
efs["3j"]["zb"]=1.0E-6;
efs["3j"]["ar"]=0.001;
efs["3j"]["3j"]=1;
efs["3j"]["p2"]=1000;
	efs["p2"]=new Array();
	exs["p2"]=new Array();
efs["p2"]["75"]=1.0E-18;
efs["p2"]["tm"]=1.0E-15;
efs["p2"]["p4"]=1.0E-12;
efs["p2"]["zb"]=1.0E-9;
efs["p2"]["ar"]=1.0E-6;
efs["p2"]["3j"]=0.001;
efs["p2"]["p2"]=1;
</script>
<script language=javascript>
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['75'] = 0;
	    idmap['75'] = "floating point operations per second";
	    stat['tm'] = 0;
	    idmap['tm'] = "kiloflop";
	    stat['p4'] = 0;
	    idmap['p4'] = "megaflop";
	    stat['zb'] = 0;
	    idmap['zb'] = "gigaflop";
	    stat['ar'] = 0;
	    idmap['ar'] = "teraflop";
	    stat['3j'] = 0;
	    idmap['3j'] = "petaflop";
	    stat['p2'] = 0;
	    idmap['p2'] = "exaflop";
function setName(id)
{
   cur_name = id;
}
function clearcolor()
{
	for (var id in stat)
	{
		var id2 = id + "2";
		var elem = document.getElementById(id);
		elem.style.fontWeight = "normal";
		elem.style.fontSize = "15px";
		elem.style.color = "black";
		obj = document.getElementById(id2);
		obj.style.color = "black";
		obj.style.fontWeight = "normal";
	    document.getElementById('idsearchtxt').value = 'select name';
		document.getElementById(cur_name).focus();
	}
}
function clearall()
{
	    document.getElementById('75').value='';
	    document.getElementById('tm').value='';
	    document.getElementById('p4').value='';
	    document.getElementById('zb').value='';
	    document.getElementById('ar').value='';
	    document.getElementById('3j').value='';
	    document.getElementById('p2').value='';
		document.getElementById('search_id').innerHTML = '';
	    document.getElementById('idsearchtxt').value = 'select name';
		document.getElementById(cur_name).focus();
}
function convertcal(p,val)
{
	var obj = document.getElementById(p);   if (val == "") val = obj.value;
	else obj.value = val;
	var p2 = p + "2";
	if (val == "")
	{
		var elem = document.getElementById(p);
		elem.style.fontWeight = "bold";
		elem.style.fontSize = "16px";
		elem.style.color = "blue";
		obj = document.getElementById(p2);
		obj.style.color = "blue";
		obj.style.fontWeight = "bold";
		elem.focus();
		return;
	}
	if (!isNum(val))
	{
		  val = val.substring(0,val.length-1);
		  obj.value = val;
		  return;
	}
	for (var id in efs[p])
	{
		 if (id != p)
		 {
		    var id2 = id + "2";
			var extra = 0;
			if (id in exs[p])
			{
				 extra = exs[p][id];
		    }
			var v = (val - extra) / efs[p][id];
			obj = document.getElementById(id);
			v = lfix(v);
			obj.value = v;
		}
	}
	stat[p] = 1;
	var elem = document.getElementById(p);
	elem.style.fontWeight = "bold";
	elem.style.fontSize = "16px";
	elem.style.color = "blue";
	obj = document.getElementById(p2);
	obj.style.color = "blue";
	obj.style.fontWeight = "bold";
	elem.focus();
}
	function suggestOverId(div_value)
	{
		div_value.className = 'suggest_link_over';
	}
	
	function suggestOutId(div_value)
	{	div_value.className = 'suggest_link';}
	 
	function idsearch()
	{
	   var obj = document.getElementById('idsearchtxt');
	   var q = obj.value;
	   if (q.length < 2) {return;}
		var ss = document.getElementById('search_id');
		ss.innerHTML = '';
	   for (var key in idmap)
	   {
		   if (idmap[key].indexOf(q) != -1)
		   {
		        var key2 = key + "2";
				var suggest = '<div onmouseover="javascript:suggestOverId(this);" ';
				suggest += 'onmouseout="javascript:suggestOutId(this);" ';
				suggest += 'onclick="javascript:sel(\'';
				suggest += key2;
				suggest += '\');" ';
				suggest += 'class="suggest_link" style="width:200px;height:24px;font-size:16px;padding-left:3px;">';			
				suggest += idmap[key];         
				suggest +=	'</div>';
				ss.innerHTML += suggest;
		   }
	   }
	}				
					
function sel(p)
{
	var p2  = p;
	var p = p2.replace(/2$/,"");
	var obj;
	var elem;
	elem = document.getElementById(p);
	if (stat[p] == 0)
	{
		elem.style.fontWeight = "bold";
		elem.style.fontSize = "16px";
		elem.style.color = "blue";
		elem.focus();
		obj = document.getElementById(p2);
		obj.style.fontWeight = "bold";
		obj.style.color = "blue";
        stat[p] = 1;
	}
	else
	{
		elem.style.fontWeight = "normal";
		elem.style.fontSize = "15px";
		elem.style.color = "black";
		elem.focus();
		obj = document.getElementById(p2);
		obj.style.fontWeight = "normal";
		obj.style.color = "black";
        stat[p] = 0;
	}
	document.getElementById('search_id').innerHTML='';
	document.getElementById('idsearchtxt').value = 'select name';
}
</script>
<body>
<?php include("analytics.php"); ?>
<?php include "header.php"?>	
<div class="econtent">
<div class="emain">
<div class="mnav">
<ul><li><a href="index.php">Home</a></li>
<li><span>»</span></li>
<li><a href="convert.php">Unit</a></li>
</ul><ul>
</div>

<div class="mtitle">Computer speed Conversion</div>
<table width=100%>
<tr>
<td width=200>
<input name=searchid id='idsearchtxt' class="nbox" onkeyup="idsearch()" autocomplete="off" style="color:#999;width:200px;font-size:17px;font-weight:normal;height:20px;border: 1px solid #9fa4ff;" onMouseOver="this.style.color='red'" onMouseOut="if(this.value=='select name') {this.style.color='#999'\}" value="select name" style="color:#999" onfocus="if(this.value=='select name') {this.value=''; style='color:#ff0000'}" onblur="if(this.value=='') this.value='select name'" onclick="document.getElementById('search_id').innerHTML = ''" type=hidden></input>
<td align=center>
<tr>
<td width=200>
<div id="search_id" style="position:absolute;z-index:100;font-size:14px"></div>
<td align=center>
</table>
<div class="mline">
<input style="font-size:14px;width:100px" type=button name=clear value="Clear Color" onClick="clearcolor()">
<input style="font-size:14px;width:100px" type=button name=clear value="Clear Data" onClick="clearall()">
</div>
<br>
<form name=convert>
<font style="font-size:15px">
<div class="mline"><div class=untitem onClick=sel('752') id=752>floating point operations per second:</div>
<div class=nbox><input id=75 onBlur="setName('75')" autocomplete="off" onKeyup="convertcal('75','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('tm2') id=tm2>kiloflop:</div>
<div class=nbox><input id=tm onBlur="setName('tm')" autocomplete="off" onKeyup="convertcal('tm','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('p42') id=p42>megaflop:</div>
<div class=nbox><input id=p4 onBlur="setName('p4')" autocomplete="off" onKeyup="convertcal('p4','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('zb2') id=zb2>gigaflop:</div>
<div class=nbox><input id=zb onBlur="setName('zb')" autocomplete="off" onKeyup="convertcal('zb','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('ar2') id=ar2>teraflop:</div>
<div class=nbox><input id=ar onBlur="setName('ar')" autocomplete="off" onKeyup="convertcal('ar','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('3j2') id=3j2>petaflop:</div>
<div class=nbox><input id=3j onBlur="setName('3j')" autocomplete="off" onKeyup="convertcal('3j','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('p22') id=p22>exaflop:</div>
<div class=nbox><input id=p2 onBlur="setName('p2')" autocomplete="off" onKeyup="convertcal('p2','')"></div>
</div>
</font>
<br>
<div class="mline">
<input style="font-size:14px;width:100px" type=button name=clear value="Clear Color" onClick="clearcolor()">
<input style="font-size:14px;width:100px" type=button name=clear value="Clear Data" onClick="clearall()">
</div>
</form>
<br>
<hr width=100%>
<p>
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('752')><u>flop</u></span><br><br>
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('p22') value='p2'><u>exaflop</u></span>, <span class=selitem onClick=sel('752') value='75'><u>floating point operations per second</u></span>, <span class=selitem onClick=sel('zb2') value='zb'><u>gigaflop</u></span>, <span class=selitem onClick=sel('tm2') value='tm'><u>kiloflop</u></span>, <span class=selitem onClick=sel('p42') value='p4'><u>megaflop</u></span>, <span class=selitem onClick=sel('3j2') value='3j'><u>petaflop</u></span>, <span class=selitem onClick=sel('ar2') value='ar'><u>teraflop</u></span></p>
</div>



<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>

