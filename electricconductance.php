<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script language="javascript" src="js/8916--searchajax.js"></script>

<title>Electric conductance Conversion Online -- </title>
<meta name="keywords" content="Electric conductance, Converter">
<meta name="description" content="Electric conductance Unit Converter Online">

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
	efs["uu"]=new Array();
	exs["uu"]=new Array();
efs["uu"]["uu"] = 1;
efs["uu"]["oq"] = 1000000;
efs["uu"]["0h"] = 1000;
efs["uu"]["64"] = 0.001;
efs["uu"]["9y"] = 1.0E-6;
efs["uu"]["x9"] = 1;
efs["uu"]["um"] = 1;
efs["uu"]["dz"] = 1.0E-6;
efs["uu"]["ff"] = 1.0E-6;
efs["uu"]["d2"] = 1000000000;
efs["uu"]["jb"] = 1.1123470522803E-12;
	efs["oq"]=new Array();
	exs["oq"]=new Array();
efs["oq"]["uu"] = 1.0E-6;
efs["oq"]["oq"] = 1;
efs["oq"]["0h"] = 0.001;
efs["oq"]["64"] = 1.0E-9;
efs["oq"]["9y"] = 1.0E-12;
efs["oq"]["x9"] = 1.0E-6;
efs["oq"]["um"] = 1.0E-6;
efs["oq"]["dz"] = 1.0E-12;
efs["oq"]["ff"] = 1.0E-12;
efs["oq"]["d2"] = 1000;
efs["oq"]["jb"] = 1.1123470522803E-18;
	efs["0h"]=new Array();
	exs["0h"]=new Array();
efs["0h"]["uu"] = 0.001;
efs["0h"]["oq"] = 1000;
efs["0h"]["0h"] = 1;
efs["0h"]["64"] = 1.0E-6;
efs["0h"]["9y"] = 1.0E-9;
efs["0h"]["x9"] = 0.001;
efs["0h"]["um"] = 0.001;
efs["0h"]["dz"] = 1.0E-9;
efs["0h"]["ff"] = 1.0E-9;
efs["0h"]["d2"] = 1000000;
efs["0h"]["jb"] = 1.1123470522803E-15;
	efs["64"]=new Array();
	exs["64"]=new Array();
efs["64"]["uu"] = 1000;
efs["64"]["oq"] = 1000000000;
efs["64"]["0h"] = 1000000;
efs["64"]["64"] = 1;
efs["64"]["9y"] = 0.001;
efs["64"]["x9"] = 1000;
efs["64"]["um"] = 1000;
efs["64"]["dz"] = 0.001;
efs["64"]["ff"] = 0.001;
efs["64"]["d2"] = 1000000000000;
efs["64"]["jb"] = 1.1123470522803E-9;
	efs["9y"]=new Array();
	exs["9y"]=new Array();
efs["9y"]["uu"] = 1000000;
efs["9y"]["oq"] = 1000000000000;
efs["9y"]["0h"] = 1000000000;
efs["9y"]["64"] = 1000;
efs["9y"]["9y"] = 1;
efs["9y"]["x9"] = 1000000;
efs["9y"]["um"] = 1000000;
efs["9y"]["dz"] = 1;
efs["9y"]["ff"] = 1;
efs["9y"]["d2"] = 1.0E+15;
efs["9y"]["jb"] = 1.1123470522803E-6;
	efs["x9"]=new Array();
	exs["x9"]=new Array();
efs["x9"]["uu"] = 1;
efs["x9"]["oq"] = 1000000;
efs["x9"]["0h"] = 1000;
efs["x9"]["64"] = 0.001;
efs["x9"]["9y"] = 1.0E-6;
efs["x9"]["x9"] = 1;
efs["x9"]["um"] = 1;
efs["x9"]["dz"] = 1.0E-6;
efs["x9"]["ff"] = 1.0E-6;
efs["x9"]["d2"] = 1000000000;
efs["x9"]["jb"] = 1.1123470522803E-12;
	efs["um"]=new Array();
	exs["um"]=new Array();
efs["um"]["uu"] = 1;
efs["um"]["oq"] = 1000000;
efs["um"]["0h"] = 1000;
efs["um"]["64"] = 0.001;
efs["um"]["9y"] = 1.0E-6;
efs["um"]["x9"] = 1;
efs["um"]["um"] = 1;
efs["um"]["dz"] = 1.0E-6;
efs["um"]["ff"] = 1.0E-6;
efs["um"]["d2"] = 1000000000;
efs["um"]["jb"] = 1.1123470522803E-12;
	efs["dz"]=new Array();
	exs["dz"]=new Array();
efs["dz"]["uu"] = 1000000;
efs["dz"]["oq"] = 1000000000000;
efs["dz"]["0h"] = 1000000000;
efs["dz"]["64"] = 1000;
efs["dz"]["9y"] = 1;
efs["dz"]["x9"] = 1000000;
efs["dz"]["um"] = 1000000;
efs["dz"]["dz"] = 1;
efs["dz"]["ff"] = 1;
efs["dz"]["d2"] = 1.0E+15;
efs["dz"]["jb"] = 1.1123470522803E-6;
	efs["ff"]=new Array();
	exs["ff"]=new Array();
efs["ff"]["uu"] = 1000000;
efs["ff"]["oq"] = 1000000000000;
efs["ff"]["0h"] = 1000000000;
efs["ff"]["64"] = 1000;
efs["ff"]["9y"] = 1;
efs["ff"]["x9"] = 1000000;
efs["ff"]["um"] = 1000000;
efs["ff"]["dz"] = 1;
efs["ff"]["ff"] = 1;
efs["ff"]["d2"] = 1.0E+15;
efs["ff"]["jb"] = 1.1123470522803E-6;
	efs["d2"]=new Array();
	exs["d2"]=new Array();
efs["d2"]["uu"] = 1.0E-9;
efs["d2"]["oq"] = 0.001;
efs["d2"]["0h"] = 1.0E-6;
efs["d2"]["64"] = 1.0E-12;
efs["d2"]["9y"] = 1.0E-15;
efs["d2"]["x9"] = 1.0E-9;
efs["d2"]["um"] = 1.0E-9;
efs["d2"]["dz"] = 1.0E-15;
efs["d2"]["ff"] = 1.0E-15;
efs["d2"]["d2"] = 1;
efs["d2"]["jb"] = 1.1123470522803E-21;
	efs["jb"]=new Array();
	exs["jb"]=new Array();
efs["jb"]["uu"] = 899000000000;
efs["jb"]["oq"] = 8.99E+17;
efs["jb"]["0h"] = 8.99E+14;
efs["jb"]["64"] = 899000000;
efs["jb"]["9y"] = 899000;
efs["jb"]["x9"] = 899000000000;
efs["jb"]["um"] = 899000000000;
efs["jb"]["dz"] = 899000;
efs["jb"]["ff"] = 899000;
efs["jb"]["d2"] = 8.99E+20;
efs["jb"]["jb"] = 1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['uu'] = 0;
	    idmap['uu'] = "siemens";
	    stat['oq'] = 0;
	    idmap['oq'] = "megasiemens";
	    stat['0h'] = 0;
	    idmap['0h'] = "kilosiemens";
	    stat['64'] = 0;
	    idmap['64'] = "millisiemens";
	    stat['9y'] = 0;
	    idmap['9y'] = "microsiemens";
	    stat['x9'] = 0;
	    idmap['x9'] = "ampere/volt";
	    stat['um'] = 0;
	    idmap['um'] = "mho";
	    stat['dz'] = 0;
	    idmap['dz'] = "gemmho";
	    stat['ff'] = 0;
	    idmap['ff'] = "micromho";
	    stat['d2'] = 0;
	    idmap['d2'] = "abmho";
	    stat['jb'] = 0;
	    idmap['jb'] = "statmho";
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
	    document.getElementById('uu').value='';
	    document.getElementById('oq').value='';
	    document.getElementById('0h').value='';
	    document.getElementById('64').value='';
	    document.getElementById('9y').value='';
	    document.getElementById('x9').value='';
	    document.getElementById('um').value='';
	    document.getElementById('dz').value='';
	    document.getElementById('ff').value='';
	    document.getElementById('d2').value='';
	    document.getElementById('jb').value='';
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

<div class="mtitle">Electric conductance Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;uu2&#39;)" id="uu2" style="color: blue; font-weight: bold;">1.&nbsp;siemens <font color="black"><u><i>[S]</i></u></font>:</div>
<div class="nbox"><input id="uu" onblur="setName(&#39;uu&#39;)" autocomplete="off" onkeyup="convertcal(&#39;uu&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;oq2&#39;)" id="oq2">2.&nbsp;megasiemens <font color="black"><u><i>[MS]</i></u></font>:</div>
<div class="nbox"><input id="oq" onblur="setName(&#39;oq&#39;)" autocomplete="off" onkeyup="convertcal(&#39;oq&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;0h2&#39;)" id="0h2">3.&nbsp;kilosiemens <font color="black"><u><i>[kS]</i></u></font>:</div>
<div class="nbox"><input id="0h" onblur="setName(&#39;0h&#39;)" autocomplete="off" onkeyup="convertcal(&#39;0h&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;642&#39;)" id="642">4.&nbsp;millisiemens <font color="black"><u><i>[mS]</i></u></font>:</div>
<div class="nbox"><input id="64" onblur="setName(&#39;64&#39;)" autocomplete="off" onkeyup="convertcal(&#39;64&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;9y2&#39;)" id="9y2">5.&nbsp;microsiemens <font color="black"><u><i>[uS]</i></u></font>:</div>
<div class="nbox"><input id="9y" onblur="setName(&#39;9y&#39;)" autocomplete="off" onkeyup="convertcal(&#39;9y&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;x92&#39;)" id="x92">6.&nbsp;ampere/volt <font color="black"><u><i>[A/V]</i></u></font>:</div>
<div class="nbox"><input id="x9" onblur="setName(&#39;x9&#39;)" autocomplete="off" onkeyup="convertcal(&#39;x9&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;um2&#39;)" id="um2">7.&nbsp;mho:</div>
<div class="nbox"><input id="um" onblur="setName(&#39;um&#39;)" autocomplete="off" onkeyup="convertcal(&#39;um&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;dz2&#39;)" id="dz2">8.&nbsp;gemmho:</div>
<div class="nbox"><input id="dz" onblur="setName(&#39;dz&#39;)" autocomplete="off" onkeyup="convertcal(&#39;dz&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ff2&#39;)" id="ff2">9.&nbsp;micromho:</div>
<div class="nbox"><input id="ff" onblur="setName(&#39;ff&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ff&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;d22&#39;)" id="d22">10.&nbsp;abmho:</div>
<div class="nbox"><input id="d2" onblur="setName(&#39;d2&#39;)" autocomplete="off" onkeyup="convertcal(&#39;d2&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;jb2&#39;)" id="jb2">11.&nbsp;statmho:</div>
<div class="nbox"><input id="jb" onblur="setName(&#39;jb&#39;)" autocomplete="off" onkeyup="convertcal(&#39;jb&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;x92&#39;)"><u>A/V</u></span>, <span class="selitem" onclick="sel(&#39;0h2&#39;)"><u>kS</u></span>, <span class="selitem" onclick="sel(&#39;oq2&#39;)"><u>MS</u></span>, <span class="selitem" onclick="sel(&#39;642&#39;)"><u>mS</u></span>, <span class="selitem" onclick="sel(&#39;uu2&#39;)"><u>S</u></span>, <span class="selitem" onclick="sel(&#39;9y2&#39;)"><u>uS</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;d22&#39;)" value="d2"><u>abmho</u></span>, <span class="selitem" onclick="sel(&#39;x92&#39;)" value="x9"><u>ampere/volt</u></span>, <span class="selitem" onclick="sel(&#39;dz2&#39;)" value="dz"><u>gemmho</u></span>, <span class="selitem" onclick="sel(&#39;0h2&#39;)" value="0h"><u>kilosiemens</u></span>, <span class="selitem" onclick="sel(&#39;oq2&#39;)" value="oq"><u>megasiemens</u></span>, <span class="selitem" onclick="sel(&#39;um2&#39;)" value="um"><u>mho</u></span>, <span class="selitem" onclick="sel(&#39;ff2&#39;)" value="ff"><u>micromho</u></span>, <span class="selitem" onclick="sel(&#39;9y2&#39;)" value="9y"><u>microsiemens</u></span>, <span class="selitem" onclick="sel(&#39;642&#39;)" value="64"><u>millisiemens</u></span>, <span class="selitem" onclick="sel(&#39;uu2&#39;)" value="uu"><u>siemens</u></span>, <span class="selitem" onclick="sel(&#39;jb2&#39;)" value="jb"><u>statmho</u></span></p>

</div>


<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>