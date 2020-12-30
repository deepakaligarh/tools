<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script language="javascript" src="js/8916--searchajax.js"></script>

<title>Electric potential Conversion Online -- </title>
<meta name="keywords" content="Electric potential, Converter">
<meta name="description" content="Electric potential Unit Converter Online">

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
	efs["wc"]=new Array();
	exs["wc"]=new Array();
efs["wc"]["wc"] = 1;
efs["wc"]["zd"] = 1;
efs["wc"]["to"] = 1000;
efs["wc"]["uh"] = 1000000;
efs["wc"]["s5"] = 0.001;
efs["wc"]["jx"] = 1.0E-6;
efs["wc"]["61"] = 1.0E-8;
efs["wc"]["hg"] = 1.0E-8;
efs["wc"]["mi"] = 299.79254355986;
efs["wc"]["4i"] = 299.79254355986;
	efs["zd"]=new Array();
	exs["zd"]=new Array();
efs["zd"]["wc"] = 1;
efs["zd"]["zd"] = 1;
efs["zd"]["to"] = 1000;
efs["zd"]["uh"] = 1000000;
efs["zd"]["s5"] = 0.001;
efs["zd"]["jx"] = 1.0E-6;
efs["zd"]["61"] = 1.0E-8;
efs["zd"]["hg"] = 1.0E-8;
efs["zd"]["mi"] = 299.79254355986;
efs["zd"]["4i"] = 299.79254355986;
	efs["to"]=new Array();
	exs["to"]=new Array();
efs["to"]["wc"] = 0.001;
efs["to"]["zd"] = 0.001;
efs["to"]["to"] = 1;
efs["to"]["uh"] = 1000;
efs["to"]["s5"] = 1.0E-6;
efs["to"]["jx"] = 1.0E-9;
efs["to"]["61"] = 1.0E-11;
efs["to"]["hg"] = 1.0E-11;
efs["to"]["mi"] = 0.29979254355986;
efs["to"]["4i"] = 0.29979254355986;
	efs["uh"]=new Array();
	exs["uh"]=new Array();
efs["uh"]["wc"] = 1.0E-6;
efs["uh"]["zd"] = 1.0E-6;
efs["uh"]["to"] = 0.001;
efs["uh"]["uh"] = 1;
efs["uh"]["s5"] = 1.0E-9;
efs["uh"]["jx"] = 1.0E-12;
efs["uh"]["61"] = 1.0E-14;
efs["uh"]["hg"] = 1.0E-14;
efs["uh"]["mi"] = 0.00029979254355986;
efs["uh"]["4i"] = 0.00029979254355986;
	efs["s5"]=new Array();
	exs["s5"]=new Array();
efs["s5"]["wc"] = 1000;
efs["s5"]["zd"] = 1000;
efs["s5"]["to"] = 1000000;
efs["s5"]["uh"] = 1000000000;
efs["s5"]["s5"] = 1;
efs["s5"]["jx"] = 0.001;
efs["s5"]["61"] = 1.0E-5;
efs["s5"]["hg"] = 1.0E-5;
efs["s5"]["mi"] = 299792.54355986;
efs["s5"]["4i"] = 299792.54355986;
	efs["jx"]=new Array();
	exs["jx"]=new Array();
efs["jx"]["wc"] = 1000000;
efs["jx"]["zd"] = 1000000;
efs["jx"]["to"] = 1000000000;
efs["jx"]["uh"] = 1000000000000;
efs["jx"]["s5"] = 1000;
efs["jx"]["jx"] = 1;
efs["jx"]["61"] = 0.01;
efs["jx"]["hg"] = 0.01;
efs["jx"]["mi"] = 299792543.55986;
efs["jx"]["4i"] = 299792543.55986;
	efs["61"]=new Array();
	exs["61"]=new Array();
efs["61"]["wc"] = 100000000;
efs["61"]["zd"] = 100000000;
efs["61"]["to"] = 100000000000;
efs["61"]["uh"] = 1.0E+14;
efs["61"]["s5"] = 100000;
efs["61"]["jx"] = 100;
efs["61"]["61"] = 1;
efs["61"]["hg"] = 1;
efs["61"]["mi"] = 29979254355.986;
efs["61"]["4i"] = 29979254355.986;
	efs["hg"]=new Array();
	exs["hg"]=new Array();
efs["hg"]["wc"] = 100000000;
efs["hg"]["zd"] = 100000000;
efs["hg"]["to"] = 100000000000;
efs["hg"]["uh"] = 1.0E+14;
efs["hg"]["s5"] = 100000;
efs["hg"]["jx"] = 100;
efs["hg"]["61"] = 1;
efs["hg"]["hg"] = 1;
efs["hg"]["mi"] = 29979254355.986;
efs["hg"]["4i"] = 29979254355.986;
	efs["mi"]=new Array();
	exs["mi"]=new Array();
efs["mi"]["wc"] = 0.00333564;
efs["mi"]["zd"] = 0.00333564;
efs["mi"]["to"] = 3.33564;
efs["mi"]["uh"] = 3335.64;
efs["mi"]["s5"] = 3.33564E-6;
efs["mi"]["jx"] = 3.33564E-9;
efs["mi"]["61"] = 3.33564E-11;
efs["mi"]["hg"] = 3.33564E-11;
efs["mi"]["mi"] = 1;
efs["mi"]["4i"] = 1;
	efs["4i"]=new Array();
	exs["4i"]=new Array();
efs["4i"]["wc"] = 0.00333564;
efs["4i"]["zd"] = 0.00333564;
efs["4i"]["to"] = 3.33564;
efs["4i"]["uh"] = 3335.64;
efs["4i"]["s5"] = 3.33564E-6;
efs["4i"]["jx"] = 3.33564E-9;
efs["4i"]["61"] = 3.33564E-11;
efs["4i"]["hg"] = 3.33564E-11;
efs["4i"]["mi"] = 1;
efs["4i"]["4i"] = 1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['wc'] = 0;
	    idmap['wc'] = "volt";
	    stat['zd'] = 0;
	    idmap['zd'] = "watt/ampere";
	    stat['to'] = 0;
	    idmap['to'] = "kilovolt";
	    stat['uh'] = 0;
	    idmap['uh'] = "megavolt";
	    stat['s5'] = 0;
	    idmap['s5'] = "millivolt";
	    stat['jx'] = 0;
	    idmap['jx'] = "microvolt";
	    stat['61'] = 0;
	    idmap['61'] = "abvolt";
	    stat['hg'] = 0;
	    idmap['hg'] = "EMU of electric potential";
	    stat['mi'] = 0;
	    idmap['mi'] = "statvolt";
	    stat['4i'] = 0;
	    idmap['4i'] = "ESU of electric potential";
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
	    document.getElementById('wc').value='';
	    document.getElementById('zd').value='';
	    document.getElementById('to').value='';
	    document.getElementById('uh').value='';
	    document.getElementById('s5').value='';
	    document.getElementById('jx').value='';
	    document.getElementById('61').value='';
	    document.getElementById('hg').value='';
	    document.getElementById('mi').value='';
	    document.getElementById('4i').value='';
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

<div class="mtitle">Electric potential Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;wc2&#39;)" id="wc2" style="color: blue; font-weight: bold;">1.&nbsp;volt <font color="black"><u><i>[V]</i></u></font>:</div>
<div class="nbox"><input id="wc" onblur="setName(&#39;wc&#39;)" autocomplete="off" onkeyup="convertcal(&#39;wc&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;zd2&#39;)" id="zd2">2.&nbsp;watt/ampere <font color="black"><u><i>[W/A]</i></u></font>:</div>
<div class="nbox"><input id="zd" onblur="setName(&#39;zd&#39;)" autocomplete="off" onkeyup="convertcal(&#39;zd&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;to2&#39;)" id="to2">3.&nbsp;kilovolt <font color="black"><u><i>[kV]</i></u></font>:</div>
<div class="nbox"><input id="to" onblur="setName(&#39;to&#39;)" autocomplete="off" onkeyup="convertcal(&#39;to&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;uh2&#39;)" id="uh2">4.&nbsp;megavolt <font color="black"><u><i>[MV]</i></u></font>:</div>
<div class="nbox"><input id="uh" onblur="setName(&#39;uh&#39;)" autocomplete="off" onkeyup="convertcal(&#39;uh&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;s52&#39;)" id="s52">5.&nbsp;millivolt <font color="black"><u><i>[mV]</i></u></font>:</div>
<div class="nbox"><input id="s5" onblur="setName(&#39;s5&#39;)" autocomplete="off" onkeyup="convertcal(&#39;s5&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;jx2&#39;)" id="jx2">6.&nbsp;microvolt <font color="black"><u><i>[uV]</i></u></font>:</div>
<div class="nbox"><input id="jx" onblur="setName(&#39;jx&#39;)" autocomplete="off" onkeyup="convertcal(&#39;jx&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;612&#39;)" id="612">7.&nbsp;abvolt <font color="black"><u><i>[abV]</i></u></font>:</div>
<div class="nbox"><input id="61" onblur="setName(&#39;61&#39;)" autocomplete="off" onkeyup="convertcal(&#39;61&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;hg2&#39;)" id="hg2">8.&nbsp;EMU of electric potential:</div>
<div class="nbox"><input id="hg" onblur="setName(&#39;hg&#39;)" autocomplete="off" onkeyup="convertcal(&#39;hg&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;mi2&#39;)" id="mi2">9.&nbsp;statvolt <font color="black"><u><i>[stV]</i></u></font>:</div>
<div class="nbox"><input id="mi" onblur="setName(&#39;mi&#39;)" autocomplete="off" onkeyup="convertcal(&#39;mi&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;4i2&#39;)" id="4i2">10.&nbsp;ESU of electric potential:</div>
<div class="nbox"><input id="4i" onblur="setName(&#39;4i&#39;)" autocomplete="off" onkeyup="convertcal(&#39;4i&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;612&#39;)"><u>abV</u></span>, <span class="selitem" onclick="sel(&#39;to2&#39;)"><u>kV</u></span>, <span class="selitem" onclick="sel(&#39;s52&#39;)"><u>mV</u></span>, <span class="selitem" onclick="sel(&#39;uh2&#39;)"><u>MV</u></span>, <span class="selitem" onclick="sel(&#39;mi2&#39;)"><u>stV</u></span>, <span class="selitem" onclick="sel(&#39;jx2&#39;)"><u>uV</u></span>, <span class="selitem" onclick="sel(&#39;wc2&#39;)"><u>V</u></span>, <span class="selitem" onclick="sel(&#39;zd2&#39;)"><u>W/A</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;612&#39;)" value="61"><u>abvolt</u></span>, <span class="selitem" onclick="sel(&#39;hg2&#39;)" value="hg"><u>EMU of electric potential</u></span>, <span class="selitem" onclick="sel(&#39;4i2&#39;)" value="4i"><u>ESU of electric potential</u></span>, <span class="selitem" onclick="sel(&#39;to2&#39;)" value="to"><u>kilovolt</u></span>, <span class="selitem" onclick="sel(&#39;uh2&#39;)" value="uh"><u>megavolt</u></span>, <span class="selitem" onclick="sel(&#39;jx2&#39;)" value="jx"><u>microvolt</u></span>, <span class="selitem" onclick="sel(&#39;s52&#39;)" value="s5"><u>millivolt</u></span>, <span class="selitem" onclick="sel(&#39;mi2&#39;)" value="mi"><u>statvolt</u></span>, <span class="selitem" onclick="sel(&#39;wc2&#39;)" value="wc"><u>volt</u></span>, <span class="selitem" onclick="sel(&#39;zd2&#39;)" value="zd"><u>watt/ampere</u></span></p>
</div>

<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>