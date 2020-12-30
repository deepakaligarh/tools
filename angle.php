
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Angle Conversion Online -- </title>
<meta name="keywords" content="Angle, Converter">
<meta name="description" content="Angle Unit Converter Online">
<script language=javascript src="js/accangular.js"></script>
<link href="/defaultm.css" rel="stylesheet" type="text/css" />

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
	efs["xs"]=new Array();
	exs["xs"]=new Array();
efs["xs"]["xs"] = 1;
efs["xs"]["pv"] = 57.295777937149;
efs["xs"]["tt"] = 0.9;
efs["xs"]["hs"] = 0.9;
efs["xs"]["ki"] = 0.016666666666667;
efs["xs"]["hp"] = 0.00027777777777778;
efs["xs"]["qy"] = 30;
efs["xs"]["iy"] = 0.05625;
efs["xs"]["dr"] = 360;
efs["xs"]["wr"] = 360;
efs["xs"]["sm"] = 360;
efs["xs"]["u8"] = 90;
efs["xs"]["lh"] = 90;
efs["xs"]["iq"] = 60;
	efs["pv"]=new Array();
	exs["pv"]=new Array();
efs["pv"]["xs"] = 0.017453293;
efs["pv"]["pv"] = 1;
efs["pv"]["tt"] = 0.0157079637;
efs["pv"]["hs"] = 0.0157079637;
efs["pv"]["ki"] = 0.00029088821666667;
efs["pv"]["hp"] = 4.8481369444444E-6;
efs["pv"]["qy"] = 0.52359879;
efs["pv"]["iy"] = 0.00098174773125;
efs["pv"]["dr"] = 6.28318548;
efs["pv"]["wr"] = 6.28318548;
efs["pv"]["sm"] = 6.28318548;
efs["pv"]["u8"] = 1.57079637;
efs["pv"]["lh"] = 1.57079637;
efs["pv"]["iq"] = 1.04719758;
	efs["tt"]=new Array();
	exs["tt"]=new Array();
efs["tt"]["xs"]=1.1111111111111;
efs["tt"]["pv"]=63.661975485721;
efs["tt"]["tt"]=1;
efs["tt"]["hs"]=1;
efs["tt"]["ki"]=0.018518518518519;
efs["tt"]["hp"]=0.00030864197530864;
efs["tt"]["qy"]=33.333333333333;
efs["tt"]["iy"]=0.0625;
efs["tt"]["dr"]=400;
efs["tt"]["wr"]=400;
efs["tt"]["sm"]=400;
efs["tt"]["u8"]=100;
efs["tt"]["lh"]=100;
efs["tt"]["iq"]=66.666666666667;
	efs["hs"]=new Array();
	exs["hs"]=new Array();
efs["hs"]["xs"]=1.1111111111111;
efs["hs"]["pv"]=63.661975485721;
efs["hs"]["tt"]=1;
efs["hs"]["hs"]=1;
efs["hs"]["ki"]=0.018518518518519;
efs["hs"]["hp"]=0.00030864197530864;
efs["hs"]["qy"]=33.333333333333;
efs["hs"]["iy"]=0.0625;
efs["hs"]["dr"]=400;
efs["hs"]["wr"]=400;
efs["hs"]["sm"]=400;
efs["hs"]["u8"]=100;
efs["hs"]["lh"]=100;
efs["hs"]["iq"]=66.666666666667;
	efs["ki"]=new Array();
	exs["ki"]=new Array();
efs["ki"]["xs"] = 60;
efs["ki"]["pv"] = 3437.7466762289;
efs["ki"]["tt"] = 54;
efs["ki"]["hs"] = 54;
efs["ki"]["ki"] = 1;
efs["ki"]["hp"] = 0.016666666666667;
efs["ki"]["qy"] = 1800;
efs["ki"]["iy"] = 3.375;
efs["ki"]["dr"] = 21600;
efs["ki"]["wr"] = 21600;
efs["ki"]["sm"] = 21600;
efs["ki"]["u8"] = 5400;
efs["ki"]["lh"] = 5400;
efs["ki"]["iq"] = 3600;
	efs["hp"]=new Array();
	exs["hp"]=new Array();
efs["hp"]["xs"] = 3600;
efs["hp"]["pv"] = 206264.80057374;
efs["hp"]["tt"] = 3240;
efs["hp"]["hs"] = 3240;
efs["hp"]["ki"] = 60;
efs["hp"]["hp"] = 1;
efs["hp"]["qy"] = 108000;
efs["hp"]["iy"] = 202.5;
efs["hp"]["dr"] = 1296000;
efs["hp"]["wr"] = 1296000;
efs["hp"]["sm"] = 1296000;
efs["hp"]["u8"] = 324000;
efs["hp"]["lh"] = 324000;
efs["hp"]["iq"] = 216000;
	efs["qy"]=new Array();
	exs["qy"]=new Array();
efs["qy"]["xs"]=0.033333333333333;
efs["qy"]["pv"]=1.9098592645716;
efs["qy"]["tt"]=0.03;
efs["qy"]["hs"]=0.03;
efs["qy"]["ki"]=0.00055555555555556;
efs["qy"]["hp"]=9.2592592592593E-6;
efs["qy"]["qy"]=1;
efs["qy"]["iy"]=0.001875;
efs["qy"]["dr"]=12;
efs["qy"]["wr"]=12;
efs["qy"]["sm"]=12;
efs["qy"]["u8"]=3;
efs["qy"]["lh"]=3;
efs["qy"]["iq"]=2;
	efs["iy"]=new Array();
	exs["iy"]=new Array();
efs["iy"]["xs"]=17.777777777778;
efs["iy"]["pv"]=1018.5916077715;
efs["iy"]["tt"]=16;
efs["iy"]["hs"]=16;
efs["iy"]["ki"]=0.2962962962963;
efs["iy"]["hp"]=0.0049382716049383;
efs["iy"]["qy"]=533.33333333333;
efs["iy"]["iy"]=1;
efs["iy"]["dr"]=6400;
efs["iy"]["wr"]=6400;
efs["iy"]["sm"]=6400;
efs["iy"]["u8"]=1600;
efs["iy"]["lh"]=1600;
efs["iy"]["iq"]=1066.6666666667;
	efs["dr"]=new Array();
	exs["dr"]=new Array();
efs["dr"]["xs"]=0.0027777777777778;
efs["dr"]["pv"]=0.1591549387143;
efs["dr"]["tt"]=0.0025;
efs["dr"]["hs"]=0.0025;
efs["dr"]["ki"]=4.6296296296296E-5;
efs["dr"]["hp"]=7.716049382716E-7;
efs["dr"]["qy"]=0.083333333333333;
efs["dr"]["iy"]=0.00015625;
efs["dr"]["dr"]=1;
efs["dr"]["wr"]=1;
efs["dr"]["sm"]=1;
efs["dr"]["u8"]=0.25;
efs["dr"]["lh"]=0.25;
efs["dr"]["iq"]=0.16666666666667;
	efs["wr"]=new Array();
	exs["wr"]=new Array();
efs["wr"]["xs"]=0.0027777777777778;
efs["wr"]["pv"]=0.1591549387143;
efs["wr"]["tt"]=0.0025;
efs["wr"]["hs"]=0.0025;
efs["wr"]["ki"]=4.6296296296296E-5;
efs["wr"]["hp"]=7.716049382716E-7;
efs["wr"]["qy"]=0.083333333333333;
efs["wr"]["iy"]=0.00015625;
efs["wr"]["dr"]=1;
efs["wr"]["wr"]=1;
efs["wr"]["sm"]=1;
efs["wr"]["u8"]=0.25;
efs["wr"]["lh"]=0.25;
efs["wr"]["iq"]=0.16666666666667;
	efs["sm"]=new Array();
	exs["sm"]=new Array();
efs["sm"]["xs"]=0.0027777777777778;
efs["sm"]["pv"]=0.1591549387143;
efs["sm"]["tt"]=0.0025;
efs["sm"]["hs"]=0.0025;
efs["sm"]["ki"]=4.6296296296296E-5;
efs["sm"]["hp"]=7.716049382716E-7;
efs["sm"]["qy"]=0.083333333333333;
efs["sm"]["iy"]=0.00015625;
efs["sm"]["dr"]=1;
efs["sm"]["wr"]=1;
efs["sm"]["sm"]=1;
efs["sm"]["u8"]=0.25;
efs["sm"]["lh"]=0.25;
efs["sm"]["iq"]=0.16666666666667;
	efs["u8"]=new Array();
	exs["u8"]=new Array();
efs["u8"]["xs"]=0.011111111111111;
efs["u8"]["pv"]=0.63661975485721;
efs["u8"]["tt"]=0.01;
efs["u8"]["hs"]=0.01;
efs["u8"]["ki"]=0.00018518518518519;
efs["u8"]["hp"]=3.0864197530864E-6;
efs["u8"]["qy"]=0.33333333333333;
efs["u8"]["iy"]=0.000625;
efs["u8"]["dr"]=4;
efs["u8"]["wr"]=4;
efs["u8"]["sm"]=4;
efs["u8"]["u8"]=1;
efs["u8"]["lh"]=1;
efs["u8"]["iq"]=0.66666666666667;
	efs["lh"]=new Array();
	exs["lh"]=new Array();
efs["lh"]["xs"]=0.011111111111111;
efs["lh"]["pv"]=0.63661975485721;
efs["lh"]["tt"]=0.01;
efs["lh"]["hs"]=0.01;
efs["lh"]["ki"]=0.00018518518518519;
efs["lh"]["hp"]=3.0864197530864E-6;
efs["lh"]["qy"]=0.33333333333333;
efs["lh"]["iy"]=0.000625;
efs["lh"]["dr"]=4;
efs["lh"]["wr"]=4;
efs["lh"]["sm"]=4;
efs["lh"]["u8"]=1;
efs["lh"]["lh"]=1;
efs["lh"]["iq"]=0.66666666666667;
	efs["iq"]=new Array();
	exs["iq"]=new Array();
efs["iq"]["xs"]=0.016666666666667;
efs["iq"]["pv"]=0.95492963228582;
efs["iq"]["tt"]=0.015;
efs["iq"]["hs"]=0.015;
efs["iq"]["ki"]=0.00027777777777778;
efs["iq"]["hp"]=4.6296296296296E-6;
efs["iq"]["qy"]=0.5;
efs["iq"]["iy"]=0.0009375;
efs["iq"]["dr"]=6;
efs["iq"]["wr"]=6;
efs["iq"]["sm"]=6;
efs["iq"]["u8"]=1.5;
efs["iq"]["lh"]=1.5;
efs["iq"]["iq"]=1;
</script>
<script language=javascript>
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['xs'] = 0;
	    idmap['xs'] = "degree";
	    stat['pv'] = 0;
	    idmap['pv'] = "radian";
	    stat['tt'] = 0;
	    idmap['tt'] = "grad";
	    stat['hs'] = 0;
	    idmap['hs'] = "gon";
	    stat['ki'] = 0;
	    idmap['ki'] = "minute";
	    stat['hp'] = 0;
	    idmap['hp'] = "second";
	    stat['qy'] = 0;
	    idmap['qy'] = "sign";
	    stat['iy'] = 0;
	    idmap['iy'] = "mil";
	    stat['dr'] = 0;
	    idmap['dr'] = "revolution";
	    stat['wr'] = 0;
	    idmap['wr'] = "circle";
	    stat['sm'] = 0;
	    idmap['sm'] = "turn";
	    stat['u8'] = 0;
	    idmap['u8'] = "quadrant";
	    stat['lh'] = 0;
	    idmap['lh'] = "right angle";
	    stat['iq'] = 0;
	    idmap['iq'] = "sextant";
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
	    document.getElementById('xs').value='';
	    document.getElementById('pv').value='';
	    document.getElementById('tt').value='';
	    document.getElementById('hs').value='';
	    document.getElementById('ki').value='';
	    document.getElementById('hp').value='';
	    document.getElementById('qy').value='';
	    document.getElementById('iy').value='';
	    document.getElementById('dr').value='';
	    document.getElementById('wr').value='';
	    document.getElementById('sm').value='';
	    document.getElementById('u8').value='';
	    document.getElementById('lh').value='';
	    document.getElementById('iq').value='';
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
</ul>
<li><span>»</span></li>
<li><a href="angle.php">Angle Conversion</a></li>
</ul>
</div>
<div class="mtitle">Angle Conversion</div>
<table width=100%>
<tr>
<td width=200>
<input name=searchid id='idsearchtxt' class="nbox" onkeyup="idsearch()" autocomplete="off" style="color:#999;width:200px;font-size:17px;font-weight:normal;height:20px;border: 1px solid #9fa4ff;" onMouseOver="this.style.color='red'" onMouseOut="if(this.value=='select name') {this.style.color='#999'\}" value="select name" style="color:#999" onfocus="if(this.value=='select name') {this.value=''; style='color:#ff0000'}" onblur="if(this.value=='') this.value='select name'" onclick="document.getElementById('search_id').innerHTML = ''" type=text></input>
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
<div class="mline"><div class=untitem onClick=sel('xs2') id=xs2>1.&nbsp;degree:</div>
<div class=nbox><input id=xs onBlur="setName('xs')" autocomplete="off" onKeyup="convertcal('xs','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('pv2') id=pv2>2.&nbsp;radian <font color=black><u><i>[rad]</font></i></u>:</div>
<div class=nbox><input id=pv onBlur="setName('pv')" autocomplete="off" onKeyup="convertcal('pv','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('tt2') id=tt2>3.&nbsp;grad:</div>
<div class=nbox><input id=tt onBlur="setName('tt')" autocomplete="off" onKeyup="convertcal('tt','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('hs2') id=hs2>4.&nbsp;gon:</div>
<div class=nbox><input id=hs onBlur="setName('hs')" autocomplete="off" onKeyup="convertcal('hs','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('ki2') id=ki2>5.&nbsp;minute:</div>
<div class=nbox><input id=ki onBlur="setName('ki')" autocomplete="off" onKeyup="convertcal('ki','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('hp2') id=hp2>6.&nbsp;second:</div>
<div class=nbox><input id=hp onBlur="setName('hp')" autocomplete="off" onKeyup="convertcal('hp','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('qy2') id=qy2>7.&nbsp;sign:</div>
<div class=nbox><input id=qy onBlur="setName('qy')" autocomplete="off" onKeyup="convertcal('qy','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('iy2') id=iy2>8.&nbsp;mil:</div>
<div class=nbox><input id=iy onBlur="setName('iy')" autocomplete="off" onKeyup="convertcal('iy','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('dr2') id=dr2>9.&nbsp;revolution <font color=black><u><i>[r]</font></i></u>:</div>
<div class=nbox><input id=dr onBlur="setName('dr')" autocomplete="off" onKeyup="convertcal('dr','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('wr2') id=wr2>10.&nbsp;circle:</div>
<div class=nbox><input id=wr onBlur="setName('wr')" autocomplete="off" onKeyup="convertcal('wr','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('sm2') id=sm2>11.&nbsp;turn:</div>
<div class=nbox><input id=sm onBlur="setName('sm')" autocomplete="off" onKeyup="convertcal('sm','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('u82') id=u82>12.&nbsp;quadrant:</div>
<div class=nbox><input id=u8 onBlur="setName('u8')" autocomplete="off" onKeyup="convertcal('u8','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('lh2') id=lh2>13.&nbsp;right angle:</div>
<div class=nbox><input id=lh onBlur="setName('lh')" autocomplete="off" onKeyup="convertcal('lh','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('iq2') id=iq2>14.&nbsp;sextant:</div>
<div class=nbox><input id=iq onBlur="setName('iq')" autocomplete="off" onKeyup="convertcal('iq','')"></div>
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
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('dr2')><u>r</u></span>, <span class=selitem onClick=sel('pv2')><u>rad</u></span><br><br>
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('wr2') value='wr'><u>circle</u></span>, <span class=selitem onClick=sel('xs2') value='xs'><u>degree</u></span>, <span class=selitem onClick=sel('hs2') value='hs'><u>gon</u></span>, <span class=selitem onClick=sel('tt2') value='tt'><u>grad</u></span>, <span class=selitem onClick=sel('iy2') value='iy'><u>mil</u></span>, <span class=selitem onClick=sel('ki2') value='ki'><u>minute</u></span>, <span class=selitem onClick=sel('u82') value='u8'><u>quadrant</u></span>, <span class=selitem onClick=sel('pv2') value='pv'><u>radian</u></span>, <span class=selitem onClick=sel('dr2') value='dr'><u>revolution</u></span>, <span class=selitem onClick=sel('lh2') value='lh'><u>right angle</u></span>, <span class=selitem onClick=sel('hp2') value='hp'><u>second</u></span>, <span class=selitem onClick=sel('iq2') value='iq'><u>sextant</u></span>, <span class=selitem onClick=sel('qy2') value='qy'><u>sign</u></span>, <span class=selitem onClick=sel('sm2') value='sm'><u>turn</u></span></p>



</div>
<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>


