<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Dna length Conversion Online -- </title>
<meta name="keywords" content="Dna length, Converter">
<meta name="description" content="Dna length Unit Converter Online">
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
	efs["c7"]=new Array();
	exs["c7"]=new Array();
efs["c7"]["c7"] = 1;
efs["c7"]["tf"] = 1000;
efs["c7"]["oi"] = 1000000;
efs["c7"]["5i"] = 1000000000;
efs["c7"]["ag"] = 3;
efs["c7"]["5m"] = 3;
	efs["tf"]=new Array();
	exs["tf"]=new Array();
efs["tf"]["c7"] = 0.001;
efs["tf"]["tf"] = 1;
efs["tf"]["oi"] = 1000;
efs["tf"]["5i"] = 1000000;
efs["tf"]["ag"] = 0.003;
efs["tf"]["5m"] = 0.003;
	efs["oi"]=new Array();
	exs["oi"]=new Array();
efs["oi"]["c7"] = 1.0E-6;
efs["oi"]["tf"] = 0.001;
efs["oi"]["oi"] = 1;
efs["oi"]["5i"] = 1000;
efs["oi"]["ag"] = 3.0E-6;
efs["oi"]["5m"] = 3.0E-6;
	efs["5i"]=new Array();
	exs["5i"]=new Array();
efs["5i"]["c7"] = 1.0E-9;
efs["5i"]["tf"] = 1.0E-6;
efs["5i"]["oi"] = 0.001;
efs["5i"]["5i"] = 1;
efs["5i"]["ag"] = 3.0E-9;
efs["5i"]["5m"] = 3.0E-9;
	efs["ag"]=new Array();
	exs["ag"]=new Array();
efs["ag"]["c7"]=0.33333333333333;
efs["ag"]["tf"]=333.33333333333;
efs["ag"]["oi"]=333333.33333333;
efs["ag"]["5i"]=333333333.33333;
efs["ag"]["ag"]=1;
efs["ag"]["5m"]=1;
	efs["5m"]=new Array();
	exs["5m"]=new Array();
efs["5m"]["c7"]=0.33333333333333;
efs["5m"]["tf"]=333.33333333333;
efs["5m"]["oi"]=333333.33333333;
efs["5m"]["5i"]=333333333.33333;
efs["5m"]["ag"]=1;
efs["5m"]["5m"]=1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['c7'] = 0;
	    idmap['c7'] = "basepair";
	    stat['tf'] = 0;
	    idmap['tf'] = "kilobasepair";
	    stat['oi'] = 0;
	    idmap['oi'] = "megabasepair";
	    stat['5i'] = 0;
	    idmap['5i'] = "gigabasepair";
	    stat['ag'] = 0;
	    idmap['ag'] = "amino acid";
	    stat['5m'] = 0;
	    idmap['5m'] = "codon";
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
	    document.getElementById('c7').value='';
	    document.getElementById('tf').value='';
	    document.getElementById('oi').value='';
	    document.getElementById('5i').value='';
	    document.getElementById('ag').value='';
	    document.getElementById('5m').value='';
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

<div class="mtitle">Dna length Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;c72&#39;)" id="c72" style="color: blue; font-weight: bold;">basepair <font color="black"><u><i>[bp]</i></u></font>:</div>
<div class="nbox"><input id="c7" onblur="setName(&#39;c7&#39;)" autocomplete="off" onkeyup="convertcal(&#39;c7&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;tf2&#39;)" id="tf2">kilobasepair <font color="black"><u><i>[kb]</i></u></font>:</div>
<div class="nbox"><input id="tf" onblur="setName(&#39;tf&#39;)" autocomplete="off" onkeyup="convertcal(&#39;tf&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;oi2&#39;)" id="oi2">megabasepair <font color="black"><u><i>[Mb]</i></u></font>:</div>
<div class="nbox"><input id="oi" onblur="setName(&#39;oi&#39;)" autocomplete="off" onkeyup="convertcal(&#39;oi&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;5i2&#39;)" id="5i2">gigabasepair <font color="black"><u><i>[Gb]</i></u></font>:</div>
<div class="nbox"><input id="5i" onblur="setName(&#39;5i&#39;)" autocomplete="off" onkeyup="convertcal(&#39;5i&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ag2&#39;)" id="ag2">amino acid <font color="black"><u><i>[aa]</i></u></font>:</div>
<div class="nbox"><input id="ag" onblur="setName(&#39;ag&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ag&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;5m2&#39;)" id="5m2">codon:</div>
<div class="nbox"><input id="5m" onblur="setName(&#39;5m&#39;)" autocomplete="off" onkeyup="convertcal(&#39;5m&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;ag2&#39;)"><u>aa</u></span>, <span class="selitem" onclick="sel(&#39;c72&#39;)"><u>bp</u></span>, <span class="selitem" onclick="sel(&#39;5i2&#39;)"><u>Gb</u></span>, <span class="selitem" onclick="sel(&#39;tf2&#39;)"><u>kb</u></span>, <span class="selitem" onclick="sel(&#39;oi2&#39;)"><u>Mb</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;ag2&#39;)" value="ag"><u>amino acid</u></span>, <span class="selitem" onclick="sel(&#39;c72&#39;)" value="c7"><u>basepair</u></span>, <span class="selitem" onclick="sel(&#39;5m2&#39;)" value="5m"><u>codon</u></span>, <span class="selitem" onclick="sel(&#39;5i2&#39;)" value="5i"><u>gigabasepair</u></span>, <span class="selitem" onclick="sel(&#39;tf2&#39;)" value="tf"><u>kilobasepair</u></span>, <span class="selitem" onclick="sel(&#39;oi2&#39;)" value="oi"><u>megabasepair</u></span></p>
<br><hr width="100%">
<font style="color:#444444;font-size:15px">
<a href="http://www.endmemo.com/sconvert/basepair.php">»&nbsp;Basepair Conversions</a><br><br> <a href="http://www.endmemo.com/sconvert/kilobasepair.php">»&nbsp;Kilobasepair Conversions</a><br><br> <a href="http://www.endmemo.com/sconvert/megabasepair.php">»&nbsp;Megabasepair Conversions</a><br><br> <a href="http://www.endmemo.com/sconvert/gigabasepair.php">»&nbsp;Gigabasepair Conversions</a><br><br> </font>
</div>


<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>