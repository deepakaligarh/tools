<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Digital image resolution Conversion Online --</title>
<meta name="keywords" content="Digital image resolution, Converter">
<meta name="description" content="Digital image resolution Unit Converter Online">
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
	efs["9q"]=new Array();
	exs["9q"]=new Array();
efs["9q"]["9q"] = 1;
efs["9q"]["90"] = 100;
efs["9q"]["sy"] = 1000;
efs["9q"]["t3"] = 1000000;
efs["9q"]["84"] = 1.0936132983377;
efs["9q"]["zf"] = 3.2808398950131;
efs["9q"]["13"] = 39.370078740157;
efs["9q"]["rd"] = 1;
efs["9q"]["2d"] = 100;
efs["9q"]["xc"] = 1000;
efs["9q"]["yq"] = 1000000;
efs["9q"]["7x"] = 1.0936132983377;
efs["9q"]["pf"] = 3.2808398950131;
efs["9q"]["48"] = 39.370078740157;
	efs["90"]=new Array();
	exs["90"]=new Array();
efs["90"]["9q"] = 0.01;
efs["90"]["90"] = 1;
efs["90"]["sy"] = 10;
efs["90"]["t3"] = 10000;
efs["90"]["84"] = 0.010936132983377;
efs["90"]["zf"] = 0.032808398950131;
efs["90"]["13"] = 0.39370078740157;
efs["90"]["rd"] = 0.01;
efs["90"]["2d"] = 1;
efs["90"]["xc"] = 10;
efs["90"]["yq"] = 10000;
efs["90"]["7x"] = 0.010936132983377;
efs["90"]["pf"] = 0.032808398950131;
efs["90"]["48"] = 0.39370078740157;
	efs["sy"]=new Array();
	exs["sy"]=new Array();
efs["sy"]["9q"] = 0.001;
efs["sy"]["90"] = 0.1;
efs["sy"]["sy"] = 1;
efs["sy"]["t3"] = 1000;
efs["sy"]["84"] = 0.0010936132983377;
efs["sy"]["zf"] = 0.0032808398950131;
efs["sy"]["13"] = 0.039370078740157;
efs["sy"]["rd"] = 0.001;
efs["sy"]["2d"] = 0.1;
efs["sy"]["xc"] = 1;
efs["sy"]["yq"] = 1000;
efs["sy"]["7x"] = 0.0010936132983377;
efs["sy"]["pf"] = 0.0032808398950131;
efs["sy"]["48"] = 0.039370078740157;
	efs["t3"]=new Array();
	exs["t3"]=new Array();
efs["t3"]["9q"] = 1.0E-6;
efs["t3"]["90"] = 0.0001;
efs["t3"]["sy"] = 0.001;
efs["t3"]["t3"] = 1;
efs["t3"]["84"] = 1.0936132983377E-6;
efs["t3"]["zf"] = 3.2808398950131E-6;
efs["t3"]["13"] = 3.9370078740157E-5;
efs["t3"]["rd"] = 1.0E-6;
efs["t3"]["2d"] = 0.0001;
efs["t3"]["xc"] = 0.001;
efs["t3"]["yq"] = 1;
efs["t3"]["7x"] = 1.0936132983377E-6;
efs["t3"]["pf"] = 3.2808398950131E-6;
efs["t3"]["48"] = 3.9370078740157E-5;
	efs["84"]=new Array();
	exs["84"]=new Array();
efs["84"]["9q"]=0.9144;
efs["84"]["90"]=91.44;
efs["84"]["sy"]=914.4;
efs["84"]["t3"]=914400;
efs["84"]["84"]=1;
efs["84"]["zf"]=3;
efs["84"]["13"]=36;
efs["84"]["rd"]=0.9144;
efs["84"]["2d"]=91.44;
efs["84"]["xc"]=914.4;
efs["84"]["yq"]=914400;
efs["84"]["7x"]=1;
efs["84"]["pf"]=3;
efs["84"]["48"]=36;
	efs["zf"]=new Array();
	exs["zf"]=new Array();
efs["zf"]["9q"]=0.3048;
efs["zf"]["90"]=30.48;
efs["zf"]["sy"]=304.8;
efs["zf"]["t3"]=304800;
efs["zf"]["84"]=0.33333333333333;
efs["zf"]["zf"]=1;
efs["zf"]["13"]=12;
efs["zf"]["rd"]=0.3048;
efs["zf"]["2d"]=30.48;
efs["zf"]["xc"]=304.8;
efs["zf"]["yq"]=304800;
efs["zf"]["7x"]=0.33333333333333;
efs["zf"]["pf"]=1;
efs["zf"]["48"]=12;
	efs["13"]=new Array();
	exs["13"]=new Array();
efs["13"]["9q"] = 0.0254;
efs["13"]["90"] = 2.54;
efs["13"]["sy"] = 25.4;
efs["13"]["t3"] = 25400;
efs["13"]["84"] = 0.027777777777778;
efs["13"]["zf"] = 0.083333333333333;
efs["13"]["13"] = 1;
efs["13"]["rd"] = 0.0254;
efs["13"]["2d"] = 2.54;
efs["13"]["xc"] = 25.4;
efs["13"]["yq"] = 25400;
efs["13"]["7x"] = 0.027777777777778;
efs["13"]["pf"] = 0.083333333333333;
efs["13"]["48"] = 1;
	efs["rd"]=new Array();
	exs["rd"]=new Array();
efs["rd"]["9q"] = 1;
efs["rd"]["90"] = 100;
efs["rd"]["sy"] = 1000;
efs["rd"]["t3"] = 1000000;
efs["rd"]["84"] = 1.0936132983377;
efs["rd"]["zf"] = 3.2808398950131;
efs["rd"]["13"] = 39.370078740157;
efs["rd"]["rd"] = 1;
efs["rd"]["2d"] = 100;
efs["rd"]["xc"] = 1000;
efs["rd"]["yq"] = 1000000;
efs["rd"]["7x"] = 1.0936132983377;
efs["rd"]["pf"] = 3.2808398950131;
efs["rd"]["48"] = 39.370078740157;
	efs["2d"]=new Array();
	exs["2d"]=new Array();
efs["2d"]["9q"] = 0.01;
efs["2d"]["90"] = 1;
efs["2d"]["sy"] = 10;
efs["2d"]["t3"] = 10000;
efs["2d"]["84"] = 0.010936132983377;
efs["2d"]["zf"] = 0.032808398950131;
efs["2d"]["13"] = 0.39370078740157;
efs["2d"]["rd"] = 0.01;
efs["2d"]["2d"] = 1;
efs["2d"]["xc"] = 10;
efs["2d"]["yq"] = 10000;
efs["2d"]["7x"] = 0.010936132983377;
efs["2d"]["pf"] = 0.032808398950131;
efs["2d"]["48"] = 0.39370078740157;
	efs["xc"]=new Array();
	exs["xc"]=new Array();
efs["xc"]["9q"] = 0.001;
efs["xc"]["90"] = 0.1;
efs["xc"]["sy"] = 1;
efs["xc"]["t3"] = 1000;
efs["xc"]["84"] = 0.0010936132983377;
efs["xc"]["zf"] = 0.0032808398950131;
efs["xc"]["13"] = 0.039370078740157;
efs["xc"]["rd"] = 0.001;
efs["xc"]["2d"] = 0.1;
efs["xc"]["xc"] = 1;
efs["xc"]["yq"] = 1000;
efs["xc"]["7x"] = 0.0010936132983377;
efs["xc"]["pf"] = 0.0032808398950131;
efs["xc"]["48"] = 0.039370078740157;
	efs["yq"]=new Array();
	exs["yq"]=new Array();
efs["yq"]["9q"] = 1.0E-6;
efs["yq"]["90"] = 0.0001;
efs["yq"]["sy"] = 0.001;
efs["yq"]["t3"] = 1;
efs["yq"]["84"] = 1.0936132983377E-6;
efs["yq"]["zf"] = 3.2808398950131E-6;
efs["yq"]["13"] = 3.9370078740157E-5;
efs["yq"]["rd"] = 1.0E-6;
efs["yq"]["2d"] = 0.0001;
efs["yq"]["xc"] = 0.001;
efs["yq"]["yq"] = 1;
efs["yq"]["7x"] = 1.0936132983377E-6;
efs["yq"]["pf"] = 3.2808398950131E-6;
efs["yq"]["48"] = 3.9370078740157E-5;
	efs["7x"]=new Array();
	exs["7x"]=new Array();
efs["7x"]["9q"]=0.9144;
efs["7x"]["90"]=91.44;
efs["7x"]["sy"]=914.4;
efs["7x"]["t3"]=914400;
efs["7x"]["84"]=1;
efs["7x"]["zf"]=3;
efs["7x"]["13"]=36;
efs["7x"]["rd"]=0.9144;
efs["7x"]["2d"]=91.44;
efs["7x"]["xc"]=914.4;
efs["7x"]["yq"]=914400;
efs["7x"]["7x"]=1;
efs["7x"]["pf"]=3;
efs["7x"]["48"]=36;
	efs["pf"]=new Array();
	exs["pf"]=new Array();
efs["pf"]["9q"]=0.3048;
efs["pf"]["90"]=30.48;
efs["pf"]["sy"]=304.8;
efs["pf"]["t3"]=304800;
efs["pf"]["84"]=0.33333333333333;
efs["pf"]["zf"]=1;
efs["pf"]["13"]=12;
efs["pf"]["rd"]=0.3048;
efs["pf"]["2d"]=30.48;
efs["pf"]["xc"]=304.8;
efs["pf"]["yq"]=304800;
efs["pf"]["7x"]=0.33333333333333;
efs["pf"]["pf"]=1;
efs["pf"]["48"]=12;
	efs["48"]=new Array();
	exs["48"]=new Array();
efs["48"]["9q"]=0.0254;
efs["48"]["90"]=2.54;
efs["48"]["sy"]=25.4;
efs["48"]["t3"]=25400;
efs["48"]["84"]=0.027777777777778;
efs["48"]["zf"]=0.083333333333333;
efs["48"]["13"]=1;
efs["48"]["rd"]=0.0254;
efs["48"]["2d"]=2.54;
efs["48"]["xc"]=25.4;
efs["48"]["yq"]=25400;
efs["48"]["7x"]=0.027777777777778;
efs["48"]["pf"]=0.083333333333333;
efs["48"]["48"]=1;
</script>
<script language=javascript>
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['9q'] = 0;
	    idmap['9q'] = "dot/meter";
	    stat['90'] = 0;
	    idmap['90'] = "dot/centimeter";
	    stat['sy'] = 0;
	    idmap['sy'] = "dot/millimeter";
	    stat['t3'] = 0;
	    idmap['t3'] = "dot/micrometer";
	    stat['84'] = 0;
	    idmap['84'] = "dot/yard";
	    stat['zf'] = 0;
	    idmap['zf'] = "dot/foot";
	    stat['13'] = 0;
	    idmap['13'] = "dot/inch";
	    stat['rd'] = 0;
	    idmap['rd'] = "pixel/meter";
	    stat['2d'] = 0;
	    idmap['2d'] = "pixel/centimeter";
	    stat['xc'] = 0;
	    idmap['xc'] = "pixel/millimeter";
	    stat['yq'] = 0;
	    idmap['yq'] = "pixel/micrometer";
	    stat['7x'] = 0;
	    idmap['7x'] = "pixel/yard";
	    stat['pf'] = 0;
	    idmap['pf'] = "pixel/foot";
	    stat['48'] = 0;
	    idmap['48'] = "pixel/inch";
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
	    document.getElementById('9q').value='';
	    document.getElementById('90').value='';
	    document.getElementById('sy').value='';
	    document.getElementById('t3').value='';
	    document.getElementById('84').value='';
	    document.getElementById('zf').value='';
	    document.getElementById('13').value='';
	    document.getElementById('rd').value='';
	    document.getElementById('2d').value='';
	    document.getElementById('xc').value='';
	    document.getElementById('yq').value='';
	    document.getElementById('7x').value='';
	    document.getElementById('pf').value='';
	    document.getElementById('48').value='';
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
</ul></div>

<div class="mtitle">Digital image resolution Conversion</div>
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
<div class="mline"><div class=untitem onClick=sel('9q2') id=9q2>1.&nbsp;dot/meter <font color=black><u><i>[dot/m]</font></i></u>:</div>
<div class=nbox><input id=9q onBlur="setName('9q')" autocomplete="off" onKeyup="convertcal('9q','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('902') id=902>2.&nbsp;dot/centimeter <font color=black><u><i>[dot/cm]</font></i></u>:</div>
<div class=nbox><input id=90 onBlur="setName('90')" autocomplete="off" onKeyup="convertcal('90','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('sy2') id=sy2>3.&nbsp;dot/millimeter <font color=black><u><i>[dot/mm]</font></i></u>:</div>
<div class=nbox><input id=sy onBlur="setName('sy')" autocomplete="off" onKeyup="convertcal('sy','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('t32') id=t32>4.&nbsp;dot/micrometer <font color=black><u><i>[dot/um]</font></i></u>:</div>
<div class=nbox><input id=t3 onBlur="setName('t3')" autocomplete="off" onKeyup="convertcal('t3','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('842') id=842>5.&nbsp;dot/yard <font color=black><u><i>[dot/yd]</font></i></u>:</div>
<div class=nbox><input id=84 onBlur="setName('84')" autocomplete="off" onKeyup="convertcal('84','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('zf2') id=zf2>6.&nbsp;dot/foot <font color=black><u><i>[dot/ft]</font></i></u>:</div>
<div class=nbox><input id=zf onBlur="setName('zf')" autocomplete="off" onKeyup="convertcal('zf','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('132') id=132>7.&nbsp;dot/inch <font color=black><u><i>[dpi]</font></i></u>:</div>
<div class=nbox><input id=13 onBlur="setName('13')" autocomplete="off" onKeyup="convertcal('13','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('rd2') id=rd2>8.&nbsp;pixel/meter <font color=black><u><i>[pixel/m]</font></i></u>:</div>
<div class=nbox><input id=rd onBlur="setName('rd')" autocomplete="off" onKeyup="convertcal('rd','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('2d2') id=2d2>9.&nbsp;pixel/centimeter <font color=black><u><i>[pixel/cm]</font></i></u>:</div>
<div class=nbox><input id=2d onBlur="setName('2d')" autocomplete="off" onKeyup="convertcal('2d','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('xc2') id=xc2>10.&nbsp;pixel/millimeter <font color=black><u><i>[pixel/mm]</font></i></u>:</div>
<div class=nbox><input id=xc onBlur="setName('xc')" autocomplete="off" onKeyup="convertcal('xc','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('yq2') id=yq2>11.&nbsp;pixel/micrometer <font color=black><u><i>[pixel/um]</font></i></u>:</div>
<div class=nbox><input id=yq onBlur="setName('yq')" autocomplete="off" onKeyup="convertcal('yq','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('7x2') id=7x2>12.&nbsp;pixel/yard <font color=black><u><i>[pixel/yd]</font></i></u>:</div>
<div class=nbox><input id=7x onBlur="setName('7x')" autocomplete="off" onKeyup="convertcal('7x','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('pf2') id=pf2>13.&nbsp;pixel/foot <font color=black><u><i>[pixel/ft]</font></i></u>:</div>
<div class=nbox><input id=pf onBlur="setName('pf')" autocomplete="off" onKeyup="convertcal('pf','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('482') id=482>14.&nbsp;pixel/inch <font color=black><u><i>[ppi]</font></i></u>:</div>
<div class=nbox><input id=48 onBlur="setName('48')" autocomplete="off" onKeyup="convertcal('48','')"></div>
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
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('902')><u>dot/cm</u></span>, <span class=selitem onClick=sel('zf2')><u>dot/ft</u></span>, <span class=selitem onClick=sel('9q2')><u>dot/m</u></span>, <span class=selitem onClick=sel('sy2')><u>dot/mm</u></span>, <span class=selitem onClick=sel('t32')><u>dot/um</u></span>, <span class=selitem onClick=sel('842')><u>dot/yd</u></span>, <span class=selitem onClick=sel('132')><u>dpi</u></span>, <span class=selitem onClick=sel('2d2')><u>pixel/cm</u></span>, <span class=selitem onClick=sel('pf2')><u>pixel/ft</u></span>, <span class=selitem onClick=sel('rd2')><u>pixel/m</u></span>, <span class=selitem onClick=sel('xc2')><u>pixel/mm</u></span>, <span class=selitem onClick=sel('yq2')><u>pixel/um</u></span>, <span class=selitem onClick=sel('7x2')><u>pixel/yd</u></span>, <span class=selitem onClick=sel('482')><u>ppi</u></span><br><br>
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('902') value='90'><u>dot/centimeter</u></span>, <span class=selitem onClick=sel('zf2') value='zf'><u>dot/foot</u></span>, <span class=selitem onClick=sel('132') value='13'><u>dot/inch</u></span>, <span class=selitem onClick=sel('9q2') value='9q'><u>dot/meter</u></span>, <span class=selitem onClick=sel('t32') value='t3'><u>dot/micrometer</u></span>, <span class=selitem onClick=sel('sy2') value='sy'><u>dot/millimeter</u></span>, <span class=selitem onClick=sel('842') value='84'><u>dot/yard</u></span>, <span class=selitem onClick=sel('2d2') value='2d'><u>pixel/centimeter</u></span>, <span class=selitem onClick=sel('pf2') value='pf'><u>pixel/foot</u></span>, <span class=selitem onClick=sel('482') value='48'><u>pixel/inch</u></span>, <span class=selitem onClick=sel('rd2') value='rd'><u>pixel/meter</u></span>, <span class=selitem onClick=sel('yq2') value='yq'><u>pixel/micrometer</u></span>, <span class=selitem onClick=sel('xc2') value='xc'><u>pixel/millimeter</u></span>, <span class=selitem onClick=sel('7x2') value='7x'><u>pixel/yard</u></span></p>

</div>

<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>
