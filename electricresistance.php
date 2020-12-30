<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script language="javascript" src="js/8916--searchajax.js"></script>

<title>Electric resistance Conversion Online -- </title>
<meta name="keywords" content="Electric resistance, Converter">
<meta name="description" content="Electric resistance Unit Converter Online">

<script language="javascript" src="js/script-geometry.js"></script>

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
</style><script language="javascript">
document.onclick = onClick;
function onClick(ev) 
{
     ev = ev || window.event;
    var target = ev.target || ev.srcElement;
    var dragObj = target.getAttribute('id'); 
	document.getElementById('search_suggest').innerHTML = '';
	document.getElementById('search_id').innerHTML = '';
} 
</script><script language="javascript">
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
</script><script language="javascript">
	var efs = new Array();
	var exs = new Array();
	efs["p6"]=new Array();
	exs["p6"]=new Array();
efs["p6"]["p6"] = 1;
efs["p6"]["dv"] = 1000000;
efs["p6"]["0p"] = 1.0E-6;
efs["p6"]["1g"] = 0.001;
efs["p6"]["q6"] = 1000;
efs["p6"]["nd"] = 1;
efs["p6"]["jf"] = 1;
efs["p6"]["8d"] = 1.0E-9;
efs["p6"]["gg"] = 1.0E-9;
efs["p6"]["vd"] = 900900900900.9;
efs["p6"]["o6"] = 900900900900.9;
	efs["dv"]=new Array();
	exs["dv"]=new Array();
efs["dv"]["p6"] = 1.0E-6;
efs["dv"]["dv"] = 1;
efs["dv"]["0p"] = 1.0E-12;
efs["dv"]["1g"] = 1.0E-9;
efs["dv"]["q6"] = 0.001;
efs["dv"]["nd"] = 1.0E-6;
efs["dv"]["jf"] = 1.0E-6;
efs["dv"]["8d"] = 1.0E-15;
efs["dv"]["gg"] = 1.0E-15;
efs["dv"]["vd"] = 900900.9009009;
efs["dv"]["o6"] = 900900.9009009;
	efs["0p"]=new Array();
	exs["0p"]=new Array();
efs["0p"]["p6"] = 1000000;
efs["0p"]["dv"] = 1000000000000;
efs["0p"]["0p"] = 1;
efs["0p"]["1g"] = 1000;
efs["0p"]["q6"] = 1000000000;
efs["0p"]["nd"] = 1000000;
efs["0p"]["jf"] = 1000000;
efs["0p"]["8d"] = 0.001;
efs["0p"]["gg"] = 0.001;
efs["0p"]["vd"] = 9.009009009009E+17;
efs["0p"]["o6"] = 9.009009009009E+17;
	efs["1g"]=new Array();
	exs["1g"]=new Array();
efs["1g"]["p6"] = 1000;
efs["1g"]["dv"] = 1000000000;
efs["1g"]["0p"] = 0.001;
efs["1g"]["1g"] = 1;
efs["1g"]["q6"] = 1000000;
efs["1g"]["nd"] = 1000;
efs["1g"]["jf"] = 1000;
efs["1g"]["8d"] = 1.0E-6;
efs["1g"]["gg"] = 1.0E-6;
efs["1g"]["vd"] = 9.009009009009E+14;
efs["1g"]["o6"] = 9.009009009009E+14;
	efs["q6"]=new Array();
	exs["q6"]=new Array();
efs["q6"]["p6"] = 0.001;
efs["q6"]["dv"] = 1000;
efs["q6"]["0p"] = 1.0E-9;
efs["q6"]["1g"] = 1.0E-6;
efs["q6"]["q6"] = 1;
efs["q6"]["nd"] = 0.001;
efs["q6"]["jf"] = 0.001;
efs["q6"]["8d"] = 1.0E-12;
efs["q6"]["gg"] = 1.0E-12;
efs["q6"]["vd"] = 900900900.9009;
efs["q6"]["o6"] = 900900900.9009;
	efs["nd"]=new Array();
	exs["nd"]=new Array();
efs["nd"]["p6"] = 1;
efs["nd"]["dv"] = 1000000;
efs["nd"]["0p"] = 1.0E-6;
efs["nd"]["1g"] = 0.001;
efs["nd"]["q6"] = 1000;
efs["nd"]["nd"] = 1;
efs["nd"]["jf"] = 1;
efs["nd"]["8d"] = 1.0E-9;
efs["nd"]["gg"] = 1.0E-9;
efs["nd"]["vd"] = 900900900900.9;
efs["nd"]["o6"] = 900900900900.9;
	efs["jf"]=new Array();
	exs["jf"]=new Array();
efs["jf"]["p6"] = 1;
efs["jf"]["dv"] = 1000000;
efs["jf"]["0p"] = 1.0E-6;
efs["jf"]["1g"] = 0.001;
efs["jf"]["q6"] = 1000;
efs["jf"]["nd"] = 1;
efs["jf"]["jf"] = 1;
efs["jf"]["8d"] = 1.0E-9;
efs["jf"]["gg"] = 1.0E-9;
efs["jf"]["vd"] = 900900900900.9;
efs["jf"]["o6"] = 900900900900.9;
	efs["8d"]=new Array();
	exs["8d"]=new Array();
efs["8d"]["p6"] = 1000000000;
efs["8d"]["dv"] = 1.0E+15;
efs["8d"]["0p"] = 1000;
efs["8d"]["1g"] = 1000000;
efs["8d"]["q6"] = 1000000000000;
efs["8d"]["nd"] = 1000000000;
efs["8d"]["jf"] = 1000000000;
efs["8d"]["8d"] = 1;
efs["8d"]["gg"] = 1;
efs["8d"]["vd"] = 9.009009009009E+20;
efs["8d"]["o6"] = 9.009009009009E+20;
	efs["gg"]=new Array();
	exs["gg"]=new Array();
efs["gg"]["p6"] = 1000000000;
efs["gg"]["dv"] = 1.0E+15;
efs["gg"]["0p"] = 1000;
efs["gg"]["1g"] = 1000000;
efs["gg"]["q6"] = 1000000000000;
efs["gg"]["nd"] = 1000000000;
efs["gg"]["jf"] = 1000000000;
efs["gg"]["8d"] = 1;
efs["gg"]["gg"] = 1;
efs["gg"]["vd"] = 9.009009009009E+20;
efs["gg"]["o6"] = 9.009009009009E+20;
	efs["vd"]=new Array();
	exs["vd"]=new Array();
efs["vd"]["p6"] = 1.11E-12;
efs["vd"]["dv"] = 1.11E-6;
efs["vd"]["0p"] = 1.11E-18;
efs["vd"]["1g"] = 1.11E-15;
efs["vd"]["q6"] = 1.11E-9;
efs["vd"]["nd"] = 1.11E-12;
efs["vd"]["jf"] = 1.11E-12;
efs["vd"]["8d"] = 1.11E-21;
efs["vd"]["gg"] = 1.11E-21;
efs["vd"]["vd"] = 1;
efs["vd"]["o6"] = 1;
	efs["o6"]=new Array();
	exs["o6"]=new Array();
efs["o6"]["p6"] = 1.11E-12;
efs["o6"]["dv"] = 1.11E-6;
efs["o6"]["0p"] = 1.11E-18;
efs["o6"]["1g"] = 1.11E-15;
efs["o6"]["q6"] = 1.11E-9;
efs["o6"]["nd"] = 1.11E-12;
efs["o6"]["jf"] = 1.11E-12;
efs["o6"]["8d"] = 1.11E-21;
efs["o6"]["gg"] = 1.11E-21;
efs["o6"]["vd"] = 1;
efs["o6"]["o6"] = 1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['p6'] = 0;
	    idmap['p6'] = "ohm";
	    stat['dv'] = 0;
	    idmap['dv'] = "megaohm";
	    stat['0p'] = 0;
	    idmap['0p'] = "microohm";
	    stat['1g'] = 0;
	    idmap['1g'] = "milliohm";
	    stat['q6'] = 0;
	    idmap['q6'] = "kiloohm";
	    stat['nd'] = 0;
	    idmap['nd'] = "volt/ampere";
	    stat['jf'] = 0;
	    idmap['jf'] = "reciprocal siemens";
	    stat['8d'] = 0;
	    idmap['8d'] = "abohm";
	    stat['gg'] = 0;
	    idmap['gg'] = "EMU of resistance";
	    stat['vd'] = 0;
	    idmap['vd'] = "statohm";
	    stat['o6'] = 0;
	    idmap['o6'] = "ESU of resistance";
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
	    document.getElementById('p6').value='';
	    document.getElementById('dv').value='';
	    document.getElementById('0p').value='';
	    document.getElementById('1g').value='';
	    document.getElementById('q6').value='';
	    document.getElementById('nd').value='';
	    document.getElementById('jf').value='';
	    document.getElementById('8d').value='';
	    document.getElementById('gg').value='';
	    document.getElementById('vd').value='';
	    document.getElementById('o6').value='';
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

<div class="mtitle">Electric resistance Conversion</div>
<table width="100%">
<tbody><tr>
<td width="200">
<input name="searchid" id="idsearchtxt" class="nbox" onkeyup="idsearch()" autocomplete="off" style="color:#999;width:200px;font-size:17px;font-weight:normal;height:20px;border: 1px solid #9fa4ff;" onmouseover="this.style.color=&#39;red&#39;" onmouseout="if(this.value==&#39;select name&#39;) {this.style.color=&#39;#999&#39;\}" value="select name" onfocus="if(this.value==&#39;select name&#39;) {this.value=&#39;&#39;; style=&#39;color:#ff0000&#39;}" onblur="if(this.value==&#39;&#39;) this.value=&#39;select name&#39;" onclick="document.getElementById(&#39;search_id&#39;).innerHTML = &#39;&#39;" type="hidden">
</td><td align="center">
</td></tr><tr>
<td width="200">
<div id="search_id" style="position:absolute;z-index:100;font-size:14px"></div>
</td><td align="center">
</td></tr></tbody></table>
<div class="mline">
<input style="font-size:14px;width:100px" type="button" name="clear" value="Clear Color" onclick="clearcolor()">
<input style="font-size:14px;width:100px" type="button" name="clear" value="Clear Data" onclick="clearall()">
</div>
<br>
<form name="convert">
<font style="font-size:15px">
<div class="mline"><div class="untitem" onclick="sel(&#39;p62&#39;)" id="p62" style="color: blue; font-weight: bold;">1.&nbsp;ohm <font color="black"><u><i>[ohm]</i></u></font>:</div>
<div class="nbox"><input id="p6" onblur="setName(&#39;p6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;p6&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;dv2&#39;)" id="dv2">2.&nbsp;megaohm <font color="black"><u><i>[Mohm]</i></u></font>:</div>
<div class="nbox"><input id="dv" onblur="setName(&#39;dv&#39;)" autocomplete="off" onkeyup="convertcal(&#39;dv&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;0p2&#39;)" id="0p2">3.&nbsp;microohm <font color="black"><u><i>[uohm]</i></u></font>:</div>
<div class="nbox"><input id="0p" onblur="setName(&#39;0p&#39;)" autocomplete="off" onkeyup="convertcal(&#39;0p&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;1g2&#39;)" id="1g2">4.&nbsp;milliohm <font color="black"><u><i>[mohm]</i></u></font>:</div>
<div class="nbox"><input id="1g" onblur="setName(&#39;1g&#39;)" autocomplete="off" onkeyup="convertcal(&#39;1g&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;q62&#39;)" id="q62">5.&nbsp;kiloohm <font color="black"><u><i>[kohm]</i></u></font>:</div>
<div class="nbox"><input id="q6" onblur="setName(&#39;q6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;q6&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;nd2&#39;)" id="nd2">6.&nbsp;volt/ampere <font color="black"><u><i>[V/A]</i></u></font>:</div>
<div class="nbox"><input id="nd" onblur="setName(&#39;nd&#39;)" autocomplete="off" onkeyup="convertcal(&#39;nd&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;jf2&#39;)" id="jf2">7.&nbsp;reciprocal siemens <font color="black"><u><i>[1/S]</i></u></font>:</div>
<div class="nbox"><input id="jf" onblur="setName(&#39;jf&#39;)" autocomplete="off" onkeyup="convertcal(&#39;jf&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;8d2&#39;)" id="8d2">8.&nbsp;abohm:</div>
<div class="nbox"><input id="8d" onblur="setName(&#39;8d&#39;)" autocomplete="off" onkeyup="convertcal(&#39;8d&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gg2&#39;)" id="gg2">9.&nbsp;EMU of resistance:</div>
<div class="nbox"><input id="gg" onblur="setName(&#39;gg&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gg&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;vd2&#39;)" id="vd2">10.&nbsp;statohm:</div>
<div class="nbox"><input id="vd" onblur="setName(&#39;vd&#39;)" autocomplete="off" onkeyup="convertcal(&#39;vd&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;o62&#39;)" id="o62">11.&nbsp;ESU of resistance:</div>
<div class="nbox"><input id="o6" onblur="setName(&#39;o6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;o6&#39;,&#39;&#39;)"></div>
</div>
</font>
<br>
<div class="mline">
<input style="font-size:14px;width:100px" type="button" name="clear" value="Clear Color" onclick="clearcolor()">
<input style="font-size:14px;width:100px" type="button" name="clear" value="Clear Data" onclick="clearall()">
</div>
</form>
<br>
<hr width="100%">
<p>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;jf2&#39;)"><u>1/S</u></span>, <span class="selitem" onclick="sel(&#39;q62&#39;)"><u>kohm</u></span>, <span class="selitem" onclick="sel(&#39;1g2&#39;)"><u>mohm</u></span>, <span class="selitem" onclick="sel(&#39;dv2&#39;)"><u>Mohm</u></span>, <span class="selitem" onclick="sel(&#39;p62&#39;)"><u>ohm</u></span>, <span class="selitem" onclick="sel(&#39;0p2&#39;)"><u>uohm</u></span>, <span class="selitem" onclick="sel(&#39;nd2&#39;)"><u>V/A</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;8d2&#39;)" value="8d"><u>abohm</u></span>, <span class="selitem" onclick="sel(&#39;gg2&#39;)" value="gg"><u>EMU of resistance</u></span>, <span class="selitem" onclick="sel(&#39;o62&#39;)" value="o6"><u>ESU of resistance</u></span>, <span class="selitem" onclick="sel(&#39;q62&#39;)" value="q6"><u>kiloohm</u></span>, <span class="selitem" onclick="sel(&#39;dv2&#39;)" value="dv"><u>megaohm</u></span>, <span class="selitem" onclick="sel(&#39;0p2&#39;)" value="0p"><u>microohm</u></span>, <span class="selitem" onclick="sel(&#39;1g2&#39;)" value="1g"><u>milliohm</u></span>, <span class="selitem" onclick="sel(&#39;p62&#39;)" value="p6"><u>ohm</u></span>, <span class="selitem" onclick="sel(&#39;jf2&#39;)" value="jf"><u>reciprocal siemens</u></span>, <span class="selitem" onclick="sel(&#39;vd2&#39;)" value="vd"><u>statohm</u></span>, <span class="selitem" onclick="sel(&#39;nd2&#39;)" value="nd"><u>volt/ampere</u></span></p>


</div>
<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>