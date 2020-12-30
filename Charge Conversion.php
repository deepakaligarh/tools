
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Charge Conversion Online -- EndMemo</title>

<meta name="keywords" content="Charge, Converter">
<meta name="description" content="Charge Unit Converter Online">
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
	efs["6t"]=new Array();
	exs["6t"]=new Array();
efs["6t"]["6t"] = 1;
efs["6t"]["dp"] = 1000;
efs["6t"]["qi"] = 0.001;
efs["6t"]["2a"] = 1.0E-6;
efs["6t"]["qs"] = 1.0E-9;
efs["6t"]["we"] = 1.0E-12;
efs["6t"]["t1"] = 1.6E-19;
efs["6t"]["5c"] = 96153.846153846;
efs["6t"]["v0"] = 10;
efs["6t"]["77"] = 3.3400000000534E-10;
efs["6t"]["pe"] = 3.3400000000534E-10;
efs["6t"]["li"] = 1000000;
efs["6t"]["h6"] = 3.3400000000534E-10;
efs["6t"]["ye"] = 10;
efs["6t"]["zj"] = 3600;
efs["6t"]["q8"] = 60;
efs["6t"]["cv"] = 1;
	efs["dp"]=new Array();
	exs["dp"]=new Array();
efs["dp"]["6t"] = 0.001;
efs["dp"]["dp"] = 1;
efs["dp"]["qi"] = 1.0E-6;
efs["dp"]["2a"] = 1.0E-9;
efs["dp"]["qs"] = 1.0E-12;
efs["dp"]["we"] = 1.0E-15;
efs["dp"]["t1"] = 1.6E-22;
efs["dp"]["5c"] = 96.153846153846;
efs["dp"]["v0"] = 0.01;
efs["dp"]["77"] = 3.3400000000534E-13;
efs["dp"]["pe"] = 3.3400000000534E-13;
efs["dp"]["li"] = 1000;
efs["dp"]["h6"] = 3.3400000000534E-13;
efs["dp"]["ye"] = 0.01;
efs["dp"]["zj"] = 3.6;
efs["dp"]["q8"] = 0.06;
efs["dp"]["cv"] = 0.001;
	efs["qi"]=new Array();
	exs["qi"]=new Array();
efs["qi"]["6t"] = 1000;
efs["qi"]["dp"] = 1000000;
efs["qi"]["qi"] = 1;
efs["qi"]["2a"] = 0.001;
efs["qi"]["qs"] = 1.0E-6;
efs["qi"]["we"] = 1.0E-9;
efs["qi"]["t1"] = 1.6E-16;
efs["qi"]["5c"] = 96153846.153846;
efs["qi"]["v0"] = 10000;
efs["qi"]["77"] = 3.3400000000534E-7;
efs["qi"]["pe"] = 3.3400000000534E-7;
efs["qi"]["li"] = 1000000000;
efs["qi"]["h6"] = 3.3400000000534E-7;
efs["qi"]["ye"] = 10000;
efs["qi"]["zj"] = 3600000;
efs["qi"]["q8"] = 60000;
efs["qi"]["cv"] = 1000;
	efs["2a"]=new Array();
	exs["2a"]=new Array();
efs["2a"]["6t"] = 1000000;
efs["2a"]["dp"] = 1000000000;
efs["2a"]["qi"] = 1000;
efs["2a"]["2a"] = 1;
efs["2a"]["qs"] = 0.001;
efs["2a"]["we"] = 1.0E-6;
efs["2a"]["t1"] = 1.6E-13;
efs["2a"]["5c"] = 96153846153.846;
efs["2a"]["v0"] = 10000000;
efs["2a"]["77"] = 0.00033400000000534;
efs["2a"]["pe"] = 0.00033400000000534;
efs["2a"]["li"] = 1000000000000;
efs["2a"]["h6"] = 0.00033400000000534;
efs["2a"]["ye"] = 10000000;
efs["2a"]["zj"] = 3600000000;
efs["2a"]["q8"] = 60000000;
efs["2a"]["cv"] = 1000000;
	efs["qs"]=new Array();
	exs["qs"]=new Array();
efs["qs"]["6t"] = 1000000000;
efs["qs"]["dp"] = 1000000000000;
efs["qs"]["qi"] = 1000000;
efs["qs"]["2a"] = 1000;
efs["qs"]["qs"] = 1;
efs["qs"]["we"] = 0.001;
efs["qs"]["t1"] = 1.6E-10;
efs["qs"]["5c"] = 96153846153846;
efs["qs"]["v0"] = 10000000000;
efs["qs"]["77"] = 0.33400000000534;
efs["qs"]["pe"] = 0.33400000000534;
efs["qs"]["li"] = 1.0E+15;
efs["qs"]["h6"] = 0.33400000000534;
efs["qs"]["ye"] = 10000000000;
efs["qs"]["zj"] = 3600000000000;
efs["qs"]["q8"] = 60000000000;
efs["qs"]["cv"] = 1000000000;
	efs["we"]=new Array();
	exs["we"]=new Array();
efs["we"]["6t"] = 1000000000000;
efs["we"]["dp"] = 1.0E+15;
efs["we"]["qi"] = 1000000000;
efs["we"]["2a"] = 1000000;
efs["we"]["qs"] = 1000;
efs["we"]["we"] = 1;
efs["we"]["t1"] = 1.6E-7;
efs["we"]["5c"] = 9.6153846153846E+16;
efs["we"]["v0"] = 10000000000000;
efs["we"]["77"] = 334.00000000534;
efs["we"]["pe"] = 334.00000000534;
efs["we"]["li"] = 1.0E+18;
efs["we"]["h6"] = 334.00000000534;
efs["we"]["ye"] = 10000000000000;
efs["we"]["zj"] = 3.6E+15;
efs["we"]["q8"] = 60000000000000;
efs["we"]["cv"] = 1000000000000;
	efs["t1"]=new Array();
	exs["t1"]=new Array();
efs["t1"]["6t"] = 6.25E+18;
efs["t1"]["dp"] = 6.25E+21;
efs["t1"]["qi"] = 6.25E+15;
efs["t1"]["2a"] = 6250000000000;
efs["t1"]["qs"] = 6250000000;
efs["t1"]["we"] = 6250000;
efs["t1"]["t1"] = 1;
efs["t1"]["5c"] = 6.0096153846154E+23;
efs["t1"]["v0"] = 6.25E+19;
efs["t1"]["77"] = 2087500000.0334;
efs["t1"]["pe"] = 2087500000.0334;
efs["t1"]["li"] = 6.25E+24;
efs["t1"]["h6"] = 2087500000.0334;
efs["t1"]["ye"] = 6.25E+19;
efs["t1"]["zj"] = 2.25E+22;
efs["t1"]["q8"] = 3.75E+20;
efs["t1"]["cv"] = 6.25E+18;
	efs["5c"]=new Array();
	exs["5c"]=new Array();
efs["5c"]["6t"] = 1.04E-5;
efs["5c"]["dp"] = 0.0104;
efs["5c"]["qi"] = 1.04E-8;
efs["5c"]["2a"] = 1.04E-11;
efs["5c"]["qs"] = 1.04E-14;
efs["5c"]["we"] = 1.04E-17;
efs["5c"]["t1"] = 1.664E-24;
efs["5c"]["5c"] = 1;
efs["5c"]["v0"] = 0.000104;
efs["5c"]["77"] = 3.4736000000556E-15;
efs["5c"]["pe"] = 3.4736000000556E-15;
efs["5c"]["li"] = 10.4;
efs["5c"]["h6"] = 3.4736000000556E-15;
efs["5c"]["ye"] = 0.000104;
efs["5c"]["zj"] = 0.03744;
efs["5c"]["q8"] = 0.000624;
efs["5c"]["cv"] = 1.04E-5;
	efs["v0"]=new Array();
	exs["v0"]=new Array();
efs["v0"]["6t"] = 0.1;
efs["v0"]["dp"] = 100;
efs["v0"]["qi"] = 0.0001;
efs["v0"]["2a"] = 1.0E-7;
efs["v0"]["qs"] = 1.0E-10;
efs["v0"]["we"] = 1.0E-13;
efs["v0"]["t1"] = 1.6E-20;
efs["v0"]["5c"] = 9615.3846153846;
efs["v0"]["v0"] = 1;
efs["v0"]["77"] = 3.3400000000534E-11;
efs["v0"]["pe"] = 3.3400000000534E-11;
efs["v0"]["li"] = 100000;
efs["v0"]["h6"] = 3.3400000000534E-11;
efs["v0"]["ye"] = 1;
efs["v0"]["zj"] = 360;
efs["v0"]["q8"] = 6;
efs["v0"]["cv"] = 0.1;
	efs["77"]=new Array();
	exs["77"]=new Array();
efs["77"]["6t"]=2994011976;
efs["77"]["dp"]=2994011976000;
efs["77"]["qi"]=2994011.976;
efs["77"]["2a"]=2994.011976;
efs["77"]["qs"]=2.994011976;
efs["77"]["we"]=0.002994011976;
efs["77"]["t1"]=4.7904191616E-10;
efs["77"]["5c"]=2.8788576692308E+14;
efs["77"]["v0"]=29940119760;
efs["77"]["77"]=1;
efs["77"]["pe"]=1;
efs["77"]["li"]=2.994011976E+15;
efs["77"]["h6"]=1;
efs["77"]["ye"]=29940119760;
efs["77"]["zj"]=10778443113600;
efs["77"]["q8"]=179640718560;
efs["77"]["cv"]=2994011976;
	efs["pe"]=new Array();
	exs["pe"]=new Array();
efs["pe"]["6t"] = 2994011976;
efs["pe"]["dp"] = 2994011976000;
efs["pe"]["qi"] = 2994011.976;
efs["pe"]["2a"] = 2994.011976;
efs["pe"]["qs"] = 2.994011976;
efs["pe"]["we"] = 0.002994011976;
efs["pe"]["t1"] = 4.7904191616E-10;
efs["pe"]["5c"] = 2.8788576692308E+14;
efs["pe"]["v0"] = 29940119760;
efs["pe"]["77"] = 1;
efs["pe"]["pe"] = 1;
efs["pe"]["li"] = 2.994011976E+15;
efs["pe"]["h6"] = 1;
efs["pe"]["ye"] = 29940119760;
efs["pe"]["zj"] = 10778443113600;
efs["pe"]["q8"] = 179640718560;
efs["pe"]["cv"] = 2994011976;
	efs["li"]=new Array();
	exs["li"]=new Array();
efs["li"]["6t"] = 1.0E-6;
efs["li"]["dp"] = 0.001;
efs["li"]["qi"] = 1.0E-9;
efs["li"]["2a"] = 1.0E-12;
efs["li"]["qs"] = 1.0E-15;
efs["li"]["we"] = 1.0E-18;
efs["li"]["t1"] = 1.6E-25;
efs["li"]["5c"] = 0.096153846153846;
efs["li"]["v0"] = 1.0E-5;
efs["li"]["77"] = 3.3400000000534E-16;
efs["li"]["pe"] = 3.3400000000534E-16;
efs["li"]["li"] = 1;
efs["li"]["h6"] = 3.3400000000534E-16;
efs["li"]["ye"] = 1.0E-5;
efs["li"]["zj"] = 0.0036;
efs["li"]["q8"] = 6.0E-5;
efs["li"]["cv"] = 1.0E-6;
	efs["h6"]=new Array();
	exs["h6"]=new Array();
efs["h6"]["6t"]=2994011976;
efs["h6"]["dp"]=2994011976000;
efs["h6"]["qi"]=2994011.976;
efs["h6"]["2a"]=2994.011976;
efs["h6"]["qs"]=2.994011976;
efs["h6"]["we"]=0.002994011976;
efs["h6"]["t1"]=4.7904191616E-10;
efs["h6"]["5c"]=2.8788576692308E+14;
efs["h6"]["v0"]=29940119760;
efs["h6"]["77"]=1;
efs["h6"]["pe"]=1;
efs["h6"]["li"]=2.994011976E+15;
efs["h6"]["h6"]=1;
efs["h6"]["ye"]=29940119760;
efs["h6"]["zj"]=10778443113600;
efs["h6"]["q8"]=179640718560;
efs["h6"]["cv"]=2994011976;
	efs["ye"]=new Array();
	exs["ye"]=new Array();
efs["ye"]["6t"] = 0.1;
efs["ye"]["dp"] = 100;
efs["ye"]["qi"] = 0.0001;
efs["ye"]["2a"] = 1.0E-7;
efs["ye"]["qs"] = 1.0E-10;
efs["ye"]["we"] = 1.0E-13;
efs["ye"]["t1"] = 1.6E-20;
efs["ye"]["5c"] = 9615.3846153846;
efs["ye"]["v0"] = 1;
efs["ye"]["77"] = 3.3400000000534E-11;
efs["ye"]["pe"] = 3.3400000000534E-11;
efs["ye"]["li"] = 100000;
efs["ye"]["h6"] = 3.3400000000534E-11;
efs["ye"]["ye"] = 1;
efs["ye"]["zj"] = 360;
efs["ye"]["q8"] = 6;
efs["ye"]["cv"] = 0.1;
	efs["zj"]=new Array();
	exs["zj"]=new Array();
efs["zj"]["6t"]=0.00027777777777778;
efs["zj"]["dp"]=0.27777777777778;
efs["zj"]["qi"]=2.7777777777778E-7;
efs["zj"]["2a"]=2.7777777777778E-10;
efs["zj"]["qs"]=2.7777777777778E-13;
efs["zj"]["we"]=2.7777777777778E-16;
efs["zj"]["t1"]=4.4444444444444E-23;
efs["zj"]["5c"]=26.709401709402;
efs["zj"]["v0"]=0.0027777777777778;
efs["zj"]["77"]=9.2777777779262E-14;
efs["zj"]["pe"]=9.2777777779262E-14;
efs["zj"]["li"]=277.77777777778;
efs["zj"]["h6"]=9.2777777779262E-14;
efs["zj"]["ye"]=0.0027777777777778;
efs["zj"]["zj"]=1;
efs["zj"]["q8"]=0.016666666666667;
efs["zj"]["cv"]=0.00027777777777778;
	efs["q8"]=new Array();
	exs["q8"]=new Array();
efs["q8"]["6t"]=0.016666666666667;
efs["q8"]["dp"]=16.666666666667;
efs["q8"]["qi"]=1.6666666666667E-5;
efs["q8"]["2a"]=1.6666666666667E-8;
efs["q8"]["qs"]=1.6666666666667E-11;
efs["q8"]["we"]=1.6666666666667E-14;
efs["q8"]["t1"]=2.6666666666667E-21;
efs["q8"]["5c"]=1602.5641025641;
efs["q8"]["v0"]=0.16666666666667;
efs["q8"]["77"]=5.5666666667557E-12;
efs["q8"]["pe"]=5.5666666667557E-12;
efs["q8"]["li"]=16666.666666667;
efs["q8"]["h6"]=5.5666666667557E-12;
efs["q8"]["ye"]=0.16666666666667;
efs["q8"]["zj"]=60;
efs["q8"]["q8"]=1;
efs["q8"]["cv"]=0.016666666666667;
	efs["cv"]=new Array();
	exs["cv"]=new Array();
efs["cv"]["6t"] = 1;
efs["cv"]["dp"] = 1000;
efs["cv"]["qi"] = 0.001;
efs["cv"]["2a"] = 1.0E-6;
efs["cv"]["qs"] = 1.0E-9;
efs["cv"]["we"] = 1.0E-12;
efs["cv"]["t1"] = 1.6E-19;
efs["cv"]["5c"] = 96153.846153846;
efs["cv"]["v0"] = 10;
efs["cv"]["77"] = 3.3400000000534E-10;
efs["cv"]["pe"] = 3.3400000000534E-10;
efs["cv"]["li"] = 1000000;
efs["cv"]["h6"] = 3.3400000000534E-10;
efs["cv"]["ye"] = 10;
efs["cv"]["zj"] = 3600;
efs["cv"]["q8"] = 60;
efs["cv"]["cv"] = 1;
</script>
<script language=javascript>
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['6t'] = 0;
	    idmap['6t'] = "coulomb";
	    stat['dp'] = 0;
	    idmap['dp'] = "kilocoulomb";
	    stat['qi'] = 0;
	    idmap['qi'] = "millicoulomb";
	    stat['2a'] = 0;
	    idmap['2a'] = "microcoulomb";
	    stat['qs'] = 0;
	    idmap['qs'] = "nanocoulomb";
	    stat['we'] = 0;
	    idmap['we'] = "picocoulomb";
	    stat['t1'] = 0;
	    idmap['t1'] = "elementary charge";
	    stat['5c'] = 0;
	    idmap['5c'] = "farady (C12)";
	    stat['v0'] = 0;
	    idmap['v0'] = "EMU of charge";
	    stat['77'] = 0;
	    idmap['77'] = "ESU of charge";
	    stat['pe'] = 0;
	    idmap['pe'] = "franklin";
	    stat['li'] = 0;
	    idmap['li'] = "megacoulomb";
	    stat['h6'] = 0;
	    idmap['h6'] = "statcoulomb";
	    stat['ye'] = 0;
	    idmap['ye'] = "abcoulomb";
	    stat['zj'] = 0;
	    idmap['zj'] = "ampere-hour";
	    stat['q8'] = 0;
	    idmap['q8'] = "ampere-minute";
	    stat['cv'] = 0;
	    idmap['cv'] = "ampere-second";
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
	    document.getElementById('6t').value='';
	    document.getElementById('dp').value='';
	    document.getElementById('qi').value='';
	    document.getElementById('2a').value='';
	    document.getElementById('qs').value='';
	    document.getElementById('we').value='';
	    document.getElementById('t1').value='';
	    document.getElementById('5c').value='';
	    document.getElementById('v0').value='';
	    document.getElementById('77').value='';
	    document.getElementById('pe').value='';
	    document.getElementById('li').value='';
	    document.getElementById('h6').value='';
	    document.getElementById('ye').value='';
	    document.getElementById('zj').value='';
	    document.getElementById('q8').value='';
	    document.getElementById('cv').value='';
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
<li><span>»</span></li>
<li><a href="Charge Conversion.php">Charge Conversion</a></li>
</ul>
</div>
<br>
<div class="mtitle">Charge Conversion</div>
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
<div class="mline"><div class=untitem onClick=sel('6t2') id=6t2>1.&nbsp;coulomb <font color=black><u><i>[C]</font></i></u>:</div>
<div class=nbox><input id=6t onBlur="setName('6t')" autocomplete="off" onKeyup="convertcal('6t','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('dp2') id=dp2>2.&nbsp;kilocoulomb <font color=black><u><i>[kC]</font></i></u>:</div>
<div class=nbox><input id=dp onBlur="setName('dp')" autocomplete="off" onKeyup="convertcal('dp','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('qi2') id=qi2>3.&nbsp;millicoulomb <font color=black><u><i>[mC]</font></i></u>:</div>
<div class=nbox><input id=qi onBlur="setName('qi')" autocomplete="off" onKeyup="convertcal('qi','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('2a2') id=2a2>4.&nbsp;microcoulomb <font color=black><u><i>[uC]</font></i></u>:</div>
<div class=nbox><input id=2a onBlur="setName('2a')" autocomplete="off" onKeyup="convertcal('2a','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('qs2') id=qs2>5.&nbsp;nanocoulomb <font color=black><u><i>[nC]</font></i></u>:</div>
<div class=nbox><input id=qs onBlur="setName('qs')" autocomplete="off" onKeyup="convertcal('qs','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('we2') id=we2>6.&nbsp;picocoulomb <font color=black><u><i>[pC]</font></i></u>:</div>
<div class=nbox><input id=we onBlur="setName('we')" autocomplete="off" onKeyup="convertcal('we','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('t12') id=t12>7.&nbsp;elementary charge <font color=black><u><i>[e]</font></i></u>:</div>
<div class=nbox><input id=t1 onBlur="setName('t1')" autocomplete="off" onKeyup="convertcal('t1','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('5c2') id=5c2>8.&nbsp;farady (C12):</div>
<div class=nbox><input id=5c onBlur="setName('5c')" autocomplete="off" onKeyup="convertcal('5c','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('v02') id=v02>9.&nbsp;EMU of charge:</div>
<div class=nbox><input id=v0 onBlur="setName('v0')" autocomplete="off" onKeyup="convertcal('v0','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('772') id=772>10.&nbsp;ESU of charge:</div>
<div class=nbox><input id=77 onBlur="setName('77')" autocomplete="off" onKeyup="convertcal('77','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('pe2') id=pe2>11.&nbsp;franklin <font color=black><u><i>[Fr]</font></i></u>:</div>
<div class=nbox><input id=pe onBlur="setName('pe')" autocomplete="off" onKeyup="convertcal('pe','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('li2') id=li2>12.&nbsp;megacoulomb <font color=black><u><i>[MC]</font></i></u>:</div>
<div class=nbox><input id=li onBlur="setName('li')" autocomplete="off" onKeyup="convertcal('li','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('h62') id=h62>13.&nbsp;statcoulomb <font color=black><u><i>[stC]</font></i></u>:</div>
<div class=nbox><input id=h6 onBlur="setName('h6')" autocomplete="off" onKeyup="convertcal('h6','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('ye2') id=ye2>14.&nbsp;abcoulomb <font color=black><u><i>[abC]</font></i></u>:</div>
<div class=nbox><input id=ye onBlur="setName('ye')" autocomplete="off" onKeyup="convertcal('ye','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('zj2') id=zj2>15.&nbsp;ampere-hour <font color=black><u><i>[A.h]</font></i></u>:</div>
<div class=nbox><input id=zj onBlur="setName('zj')" autocomplete="off" onKeyup="convertcal('zj','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('q82') id=q82>16.&nbsp;ampere-minute <font color=black><u><i>[A.min]</font></i></u>:</div>
<div class=nbox><input id=q8 onBlur="setName('q8')" autocomplete="off" onKeyup="convertcal('q8','')"></div>
</div>
<div class="mline"><div class=untitem onClick=sel('cv2') id=cv2>17.&nbsp;ampere-second <font color=black><u><i>[A.s]</font></i></u>:</div>
<div class=nbox><input id=cv onBlur="setName('cv')" autocomplete="off" onKeyup="convertcal('cv','')"></div>
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
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('zj2')><u>A.h</u></span>, <span class=selitem onClick=sel('q82')><u>A.min</u></span>, <span class=selitem onClick=sel('cv2')><u>A.s</u></span>, <span class=selitem onClick=sel('ye2')><u>abC</u></span>, <span class=selitem onClick=sel('6t2')><u>C</u></span>, <span class=selitem onClick=sel('t12')><u>e</u></span>, <span class=selitem onClick=sel('pe2')><u>Fr</u></span>, <span class=selitem onClick=sel('dp2')><u>kC</u></span>, <span class=selitem onClick=sel('li2')><u>MC</u></span>, <span class=selitem onClick=sel('qi2')><u>mC</u></span>, <span class=selitem onClick=sel('qs2')><u>nC</u></span>, <span class=selitem onClick=sel('we2')><u>pC</u></span>, <span class=selitem onClick=sel('h62')><u>stC</u></span>, <span class=selitem onClick=sel('2a2')><u>uC</u></span><br><br>
<font color=#444444><B>Click to Select:</B></font> <span class=selitem onClick=sel('ye2') value='ye'><u>abcoulomb</u></span>, <span class=selitem onClick=sel('zj2') value='zj'><u>ampere-hour</u></span>, <span class=selitem onClick=sel('q82') value='q8'><u>ampere-minute</u></span>, <span class=selitem onClick=sel('cv2') value='cv'><u>ampere-second</u></span>, <span class=selitem onClick=sel('6t2') value='6t'><u>coulomb</u></span>, <span class=selitem onClick=sel('t12') value='t1'><u>elementary charge</u></span>, <span class=selitem onClick=sel('v02') value='v0'><u>EMU of charge</u></span>, <span class=selitem onClick=sel('772') value='77'><u>ESU of charge</u></span>, <span class=selitem onClick=sel('5c2') value='5c'><u>farady (C12)</u></span>, <span class=selitem onClick=sel('pe2') value='pe'><u>franklin</u></span>, <span class=selitem onClick=sel('dp2') value='dp'><u>kilocoulomb</u></span>, <span class=selitem onClick=sel('li2') value='li'><u>megacoulomb</u></span>, <span class=selitem onClick=sel('2a2') value='2a'><u>microcoulomb</u></span>, <span class=selitem onClick=sel('qi2') value='qi'><u>millicoulomb</u></span>, <span class=selitem onClick=sel('qs2') value='qs'><u>nanocoulomb</u></span>, <span class=selitem onClick=sel('we2') value='we'><u>picocoulomb</u></span>, <span class=selitem onClick=sel('h62') value='h6'><u>statcoulomb</u></span></p>






</div>





<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>
