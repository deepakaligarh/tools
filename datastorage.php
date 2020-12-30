<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Data storage Conversion Online --</title>
<meta name="keywords" content="Data storage, Converter">
<meta name="description" content="Data storage Unit Converter Online">
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
	efs["72"]=new Array();
	exs["72"]=new Array();
efs["72"]["72"] = 1;
efs["72"]["mj"] = 4;
efs["72"]["v7"] = 8;
efs["72"]["un"] = 8;
efs["72"]["id"] = 1024;
efs["72"]["z1"] = 8192;
efs["72"]["40"] = 1048576;
efs["72"]["1s"] = 8388608;
efs["72"]["gx"] = 1073741824;
efs["72"]["y4"] = 8589934592;
efs["72"]["5l"] = 1100000000000;
efs["72"]["fo"] = 8800000000000;
efs["72"]["m4"] = 1.13E+15;
efs["72"]["k9"] = 9.01E+15;
efs["72"]["gv"] = 1.15E+18;
efs["72"]["5d"] = 9.22E+18;
	efs["mj"]=new Array();
	exs["mj"]=new Array();
efs["mj"]["72"]=0.25;
efs["mj"]["mj"]=1;
efs["mj"]["v7"]=2;
efs["mj"]["un"]=2;
efs["mj"]["id"]=256;
efs["mj"]["z1"]=2048;
efs["mj"]["40"]=262144;
efs["mj"]["1s"]=2097152;
efs["mj"]["gx"]=268435456;
efs["mj"]["y4"]=2147483648;
efs["mj"]["5l"]=275000000000;
efs["mj"]["fo"]=2200000000000;
efs["mj"]["m4"]=2.825E+14;
efs["mj"]["k9"]=2.2525E+15;
efs["mj"]["gv"]=2.875E+17;
efs["mj"]["5d"]=2.305E+18;
	efs["v7"]=new Array();
	exs["v7"]=new Array();
efs["v7"]["72"]=0.125;
efs["v7"]["mj"]=0.5;
efs["v7"]["v7"]=1;
efs["v7"]["un"]=1;
efs["v7"]["id"]=128;
efs["v7"]["z1"]=1024;
efs["v7"]["40"]=131072;
efs["v7"]["1s"]=1048576;
efs["v7"]["gx"]=134217728;
efs["v7"]["y4"]=1073741824;
efs["v7"]["5l"]=137500000000;
efs["v7"]["fo"]=1100000000000;
efs["v7"]["m4"]=1.4125E+14;
efs["v7"]["k9"]=1.12625E+15;
efs["v7"]["gv"]=1.4375E+17;
efs["v7"]["5d"]=1.1525E+18;
	efs["un"]=new Array();
	exs["un"]=new Array();
efs["un"]["72"]=0.125;
efs["un"]["mj"]=0.5;
efs["un"]["v7"]=1;
efs["un"]["un"]=1;
efs["un"]["id"]=128;
efs["un"]["z1"]=1024;
efs["un"]["40"]=131072;
efs["un"]["1s"]=1048576;
efs["un"]["gx"]=134217728;
efs["un"]["y4"]=1073741824;
efs["un"]["5l"]=137500000000;
efs["un"]["fo"]=1100000000000;
efs["un"]["m4"]=1.4125E+14;
efs["un"]["k9"]=1.12625E+15;
efs["un"]["gv"]=1.4375E+17;
efs["un"]["5d"]=1.1525E+18;
	efs["id"]=new Array();
	exs["id"]=new Array();
efs["id"]["72"]=0.0009765625;
efs["id"]["mj"]=0.00390625;
efs["id"]["v7"]=0.0078125;
efs["id"]["un"]=0.0078125;
efs["id"]["id"]=1;
efs["id"]["z1"]=8;
efs["id"]["40"]=1024;
efs["id"]["1s"]=8192;
efs["id"]["gx"]=1048576;
efs["id"]["y4"]=8388608;
efs["id"]["5l"]=1074218750;
efs["id"]["fo"]=8593750000;
efs["id"]["m4"]=1103515625000;
efs["id"]["k9"]=8798828125000;
efs["id"]["gv"]=1.123046875E+15;
efs["id"]["5d"]=9.00390625E+15;
	efs["z1"]=new Array();
	exs["z1"]=new Array();
efs["z1"]["72"]=0.0001220703125;
efs["z1"]["mj"]=0.00048828125;
efs["z1"]["v7"]=0.0009765625;
efs["z1"]["un"]=0.0009765625;
efs["z1"]["id"]=0.125;
efs["z1"]["z1"]=1;
efs["z1"]["40"]=128;
efs["z1"]["1s"]=1024;
efs["z1"]["gx"]=131072;
efs["z1"]["y4"]=1048576;
efs["z1"]["5l"]=134277343.75;
efs["z1"]["fo"]=1074218750;
efs["z1"]["m4"]=137939453125;
efs["z1"]["k9"]=1099853515625;
efs["z1"]["gv"]=1.40380859375E+14;
efs["z1"]["5d"]=1.12548828125E+15;
	efs["40"]=new Array();
	exs["40"]=new Array();
efs["40"]["72"]=9.5367431640625E-7;
efs["40"]["mj"]=3.814697265625E-6;
efs["40"]["v7"]=7.62939453125E-6;
efs["40"]["un"]=7.62939453125E-6;
efs["40"]["id"]=0.0009765625;
efs["40"]["z1"]=0.0078125;
efs["40"]["40"]=1;
efs["40"]["1s"]=8;
efs["40"]["gx"]=1024;
efs["40"]["y4"]=8192;
efs["40"]["5l"]=1049041.7480469;
efs["40"]["fo"]=8392333.984375;
efs["40"]["m4"]=1077651977.5391;
efs["40"]["k9"]=8592605590.8203;
efs["40"]["gv"]=1096725463867.2;
efs["40"]["5d"]=8792877197265.6;
	efs["1s"]=new Array();
	exs["1s"]=new Array();
efs["1s"]["72"]=1.1920928955078E-7;
efs["1s"]["mj"]=4.7683715820312E-7;
efs["1s"]["v7"]=9.5367431640625E-7;
efs["1s"]["un"]=9.5367431640625E-7;
efs["1s"]["id"]=0.0001220703125;
efs["1s"]["z1"]=0.0009765625;
efs["1s"]["40"]=0.125;
efs["1s"]["1s"]=1;
efs["1s"]["gx"]=128;
efs["1s"]["y4"]=1024;
efs["1s"]["5l"]=131130.21850586;
efs["1s"]["fo"]=1049041.7480469;
efs["1s"]["m4"]=134706497.19238;
efs["1s"]["k9"]=1074075698.8525;
efs["1s"]["gv"]=137090682983.4;
efs["1s"]["5d"]=1099109649658.2;
	efs["gx"]=new Array();
	exs["gx"]=new Array();
efs["gx"]["72"]=9.3132257461548E-10;
efs["gx"]["mj"]=3.7252902984619E-9;
efs["gx"]["v7"]=7.4505805969238E-9;
efs["gx"]["un"]=7.4505805969238E-9;
efs["gx"]["id"]=9.5367431640625E-7;
efs["gx"]["z1"]=7.62939453125E-6;
efs["gx"]["40"]=0.0009765625;
efs["gx"]["1s"]=0.0078125;
efs["gx"]["gx"]=1;
efs["gx"]["y4"]=8;
efs["gx"]["5l"]=1024.454832077;
efs["gx"]["fo"]=8195.6386566162;
efs["gx"]["m4"]=1052394.5093155;
efs["gx"]["k9"]=8391216.3972855;
efs["gx"]["gv"]=1071020960.8078;
efs["gx"]["5d"]=8586794137.9547;
	efs["y4"]=new Array();
	exs["y4"]=new Array();
efs["y4"]["72"]=1.1641532182693E-10;
efs["y4"]["mj"]=4.6566128730774E-10;
efs["y4"]["v7"]=9.3132257461548E-10;
efs["y4"]["un"]=9.3132257461548E-10;
efs["y4"]["id"]=1.1920928955078E-7;
efs["y4"]["z1"]=9.5367431640625E-7;
efs["y4"]["40"]=0.0001220703125;
efs["y4"]["1s"]=0.0009765625;
efs["y4"]["gx"]=0.125;
efs["y4"]["y4"]=1;
efs["y4"]["5l"]=128.05685400963;
efs["y4"]["fo"]=1024.454832077;
efs["y4"]["m4"]=131549.31366444;
efs["y4"]["k9"]=1048902.0496607;
efs["y4"]["gv"]=133877620.10098;
efs["y4"]["5d"]=1073349267.2443;
	efs["5l"]=new Array();
	exs["5l"]=new Array();
efs["5l"]["72"]=9.0909090909091E-13;
efs["5l"]["mj"]=3.6363636363636E-12;
efs["5l"]["v7"]=7.2727272727273E-12;
efs["5l"]["un"]=7.2727272727273E-12;
efs["5l"]["id"]=9.3090909090909E-10;
efs["5l"]["z1"]=7.4472727272727E-9;
efs["5l"]["40"]=9.5325090909091E-7;
efs["5l"]["1s"]=7.6260072727273E-6;
efs["5l"]["gx"]=0.00097612893090909;
efs["5l"]["y4"]=0.0078090314472727;
efs["5l"]["5l"]=1;
efs["5l"]["fo"]=8;
efs["5l"]["m4"]=1027.2727272727;
efs["5l"]["k9"]=8190.9090909091;
efs["5l"]["gv"]=1045454.5454545;
efs["5l"]["5d"]=8381818.1818182;
	efs["fo"]=new Array();
	exs["fo"]=new Array();
efs["fo"]["72"]=1.1363636363636E-13;
efs["fo"]["mj"]=4.5454545454545E-13;
efs["fo"]["v7"]=9.0909090909091E-13;
efs["fo"]["un"]=9.0909090909091E-13;
efs["fo"]["id"]=1.1636363636364E-10;
efs["fo"]["z1"]=9.3090909090909E-10;
efs["fo"]["40"]=1.1915636363636E-7;
efs["fo"]["1s"]=9.5325090909091E-7;
efs["fo"]["gx"]=0.00012201611636364;
efs["fo"]["y4"]=0.00097612893090909;
efs["fo"]["5l"]=0.125;
efs["fo"]["fo"]=1;
efs["fo"]["m4"]=128.40909090909;
efs["fo"]["k9"]=1023.8636363636;
efs["fo"]["gv"]=130681.81818182;
efs["fo"]["5d"]=1047727.2727273;
	efs["m4"]=new Array();
	exs["m4"]=new Array();
efs["m4"]["72"]=8.8495575221239E-16;
efs["m4"]["mj"]=3.5398230088496E-15;
efs["m4"]["v7"]=7.0796460176991E-15;
efs["m4"]["un"]=7.0796460176991E-15;
efs["m4"]["id"]=9.0619469026549E-13;
efs["m4"]["z1"]=7.2495575221239E-12;
efs["m4"]["40"]=9.2794336283186E-10;
efs["m4"]["1s"]=7.4235469026549E-9;
efs["m4"]["gx"]=9.5021400353982E-7;
efs["m4"]["y4"]=7.6017120283186E-6;
efs["m4"]["5l"]=0.00097345132743363;
efs["m4"]["fo"]=0.007787610619469;
efs["m4"]["m4"]=1;
efs["m4"]["k9"]=7.9734513274336;
efs["m4"]["gv"]=1017.6991150442;
efs["m4"]["5d"]=8159.2920353982;
	efs["k9"]=new Array();
	exs["k9"]=new Array();
efs["k9"]["72"]=1.1098779134295E-16;
efs["k9"]["mj"]=4.4395116537181E-16;
efs["k9"]["v7"]=8.8790233074362E-16;
efs["k9"]["un"]=8.8790233074362E-16;
efs["k9"]["id"]=1.1365149833518E-13;
efs["k9"]["z1"]=9.0921198668147E-13;
efs["k9"]["40"]=1.1637913429523E-10;
efs["k9"]["1s"]=9.3103307436182E-10;
efs["k9"]["gx"]=1.1917223351831E-7;
efs["k9"]["y4"]=9.533778681465E-7;
efs["k9"]["5l"]=0.00012208657047725;
efs["k9"]["fo"]=0.00097669256381798;
efs["k9"]["m4"]=0.12541620421754;
efs["k9"]["k9"]=1;
efs["k9"]["gv"]=127.6359600444;
efs["k9"]["5d"]=1023.307436182;
	efs["gv"]=new Array();
	exs["gv"]=new Array();
efs["gv"]["72"]=8.695652173913E-19;
efs["gv"]["mj"]=3.4782608695652E-18;
efs["gv"]["v7"]=6.9565217391304E-18;
efs["gv"]["un"]=6.9565217391304E-18;
efs["gv"]["id"]=8.904347826087E-16;
efs["gv"]["z1"]=7.1234782608696E-15;
efs["gv"]["40"]=9.118052173913E-13;
efs["gv"]["1s"]=7.2944417391304E-12;
efs["gv"]["gx"]=9.336885426087E-10;
efs["gv"]["y4"]=7.4695083408696E-9;
efs["gv"]["5l"]=9.5652173913043E-7;
efs["gv"]["fo"]=7.6521739130435E-6;
efs["gv"]["m4"]=0.00098260869565217;
efs["gv"]["k9"]=0.0078347826086957;
efs["gv"]["gv"]=1;
efs["gv"]["5d"]=8.0173913043478;
	efs["5d"]=new Array();
	exs["5d"]=new Array();
efs["5d"]["72"]=1.0845986984816E-19;
efs["5d"]["mj"]=4.3383947939262E-19;
efs["5d"]["v7"]=8.6767895878525E-19;
efs["5d"]["un"]=8.6767895878525E-19;
efs["5d"]["id"]=1.1106290672451E-16;
efs["5d"]["z1"]=8.885032537961E-16;
efs["5d"]["40"]=1.137284164859E-13;
efs["5d"]["1s"]=9.098273318872E-13;
efs["5d"]["gx"]=1.1645789848156E-10;
efs["5d"]["y4"]=9.3166318785249E-10;
efs["5d"]["5l"]=1.1930585683297E-7;
efs["5d"]["fo"]=9.5444685466377E-7;
efs["5d"]["m4"]=0.00012255965292842;
efs["5d"]["k9"]=0.00097722342733189;
efs["5d"]["gv"]=0.12472885032538;
efs["5d"]["5d"]=1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['72'] = 0;
	    idmap['72'] = "bit";
	    stat['mj'] = 0;
	    idmap['mj'] = "nibble";
	    stat['v7'] = 0;
	    idmap['v7'] = "byte";
	    stat['un'] = 0;
	    idmap['un'] = "character";
	    stat['id'] = 0;
	    idmap['id'] = "kilobit";
	    stat['z1'] = 0;
	    idmap['z1'] = "kilobyte";
	    stat['40'] = 0;
	    idmap['40'] = "megabit";
	    stat['1s'] = 0;
	    idmap['1s'] = "megabyte";
	    stat['gx'] = 0;
	    idmap['gx'] = "gigabit";
	    stat['y4'] = 0;
	    idmap['y4'] = "gigabyte";
	    stat['5l'] = 0;
	    idmap['5l'] = "terabit";
	    stat['fo'] = 0;
	    idmap['fo'] = "terabyte";
	    stat['m4'] = 0;
	    idmap['m4'] = "petabit";
	    stat['k9'] = 0;
	    idmap['k9'] = "petabyte";
	    stat['gv'] = 0;
	    idmap['gv'] = "exabit";
	    stat['5d'] = 0;
	    idmap['5d'] = "exabyte";
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
	    document.getElementById('72').value='';
	    document.getElementById('mj').value='';
	    document.getElementById('v7').value='';
	    document.getElementById('un').value='';
	    document.getElementById('id').value='';
	    document.getElementById('z1').value='';
	    document.getElementById('40').value='';
	    document.getElementById('1s').value='';
	    document.getElementById('gx').value='';
	    document.getElementById('y4').value='';
	    document.getElementById('5l').value='';
	    document.getElementById('fo').value='';
	    document.getElementById('m4').value='';
	    document.getElementById('k9').value='';
	    document.getElementById('gv').value='';
	    document.getElementById('5d').value='';
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
<div class="mtitle">Data storage Conversion</div>
<table width="100%">
<tbody><tr>
<td width="200">
<input name="searchid" id="idsearchtxt" class="nbox" onkeyup="idsearch()" autocomplete="off" style="color:#999;width:200px;font-size:17px;font-weight:normal;height:20px;border: 1px solid #9fa4ff;" onmouseover="this.style.color=&#39;red&#39;" onmouseout="if(this.value==&#39;select name&#39;) {this.style.color=&#39;#999&#39;\}" value="select name" onfocus="if(this.value==&#39;select name&#39;) {this.value=&#39;&#39;; style=&#39;color:#ff0000&#39;}" onblur="if(this.value==&#39;&#39;) this.value=&#39;select name&#39;" onclick="document.getElementById(&#39;search_id&#39;).innerHTML = &#39;&#39;" type="text">
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
<div class="mline"><div class="untitem" onclick="sel(&#39;722&#39;)" id="722" style="color: blue; font-weight: bold;">1.&nbsp;bit <font color="black"><u><i>[b]</i></u></font>:</div>
<div class="nbox"><input id="72" onblur="setName(&#39;72&#39;)" autocomplete="off" onkeyup="convertcal(&#39;72&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;mj2&#39;)" id="mj2">2.&nbsp;nibble:</div>
<div class="nbox"><input id="mj" onblur="setName(&#39;mj&#39;)" autocomplete="off" onkeyup="convertcal(&#39;mj&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;v72&#39;)" id="v72">3.&nbsp;byte <font color="black"><u><i>[B]</i></u></font>:</div>
<div class="nbox"><input id="v7" onblur="setName(&#39;v7&#39;)" autocomplete="off" onkeyup="convertcal(&#39;v7&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;un2&#39;)" id="un2">4.&nbsp;character:</div>
<div class="nbox"><input id="un" onblur="setName(&#39;un&#39;)" autocomplete="off" onkeyup="convertcal(&#39;un&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;id2&#39;)" id="id2">5.&nbsp;kilobit <font color="black"><u><i>[kb]</i></u></font>:</div>
<div class="nbox"><input id="id" onblur="setName(&#39;id&#39;)" autocomplete="off" onkeyup="convertcal(&#39;id&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;z12&#39;)" id="z12">6.&nbsp;kilobyte <font color="black"><u><i>[kB]</i></u></font>:</div>
<div class="nbox"><input id="z1" onblur="setName(&#39;z1&#39;)" autocomplete="off" onkeyup="convertcal(&#39;z1&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;402&#39;)" id="402">7.&nbsp;megabit <font color="black"><u><i>[Mb]</i></u></font>:</div>
<div class="nbox"><input id="40" onblur="setName(&#39;40&#39;)" autocomplete="off" onkeyup="convertcal(&#39;40&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;1s2&#39;)" id="1s2">8.&nbsp;megabyte <font color="black"><u><i>[MB]</i></u></font>:</div>
<div class="nbox"><input id="1s" onblur="setName(&#39;1s&#39;)" autocomplete="off" onkeyup="convertcal(&#39;1s&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gx2&#39;)" id="gx2">9.&nbsp;gigabit <font color="black"><u><i>[Gb]</i></u></font>:</div>
<div class="nbox"><input id="gx" onblur="setName(&#39;gx&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gx&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;y42&#39;)" id="y42">10.&nbsp;gigabyte <font color="black"><u><i>[GB]</i></u></font>:</div>
<div class="nbox"><input id="y4" onblur="setName(&#39;y4&#39;)" autocomplete="off" onkeyup="convertcal(&#39;y4&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;5l2&#39;)" id="5l2">11.&nbsp;terabit <font color="black"><u><i>[Tb]</i></u></font>:</div>
<div class="nbox"><input id="5l" onblur="setName(&#39;5l&#39;)" autocomplete="off" onkeyup="convertcal(&#39;5l&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;fo2&#39;)" id="fo2">12.&nbsp;terabyte <font color="black"><u><i>[TB]</i></u></font>:</div>
<div class="nbox"><input id="fo" onblur="setName(&#39;fo&#39;)" autocomplete="off" onkeyup="convertcal(&#39;fo&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;m42&#39;)" id="m42">13.&nbsp;petabit <font color="black"><u><i>[Pb]</i></u></font>:</div>
<div class="nbox"><input id="m4" onblur="setName(&#39;m4&#39;)" autocomplete="off" onkeyup="convertcal(&#39;m4&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;k92&#39;)" id="k92">14.&nbsp;petabyte <font color="black"><u><i>[PB]</i></u></font>:</div>
<div class="nbox"><input id="k9" onblur="setName(&#39;k9&#39;)" autocomplete="off" onkeyup="convertcal(&#39;k9&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gv2&#39;)" id="gv2">15.&nbsp;exabit <font color="black"><u><i>[Eb]</i></u></font>:</div>
<div class="nbox"><input id="gv" onblur="setName(&#39;gv&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gv&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;5d2&#39;)" id="5d2">16.&nbsp;exabyte <font color="black"><u><i>[EB]</i></u></font>:</div>
<div class="nbox"><input id="5d" onblur="setName(&#39;5d&#39;)" autocomplete="off" onkeyup="convertcal(&#39;5d&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;722&#39;)"><u>b</u></span>, <span class="selitem" onclick="sel(&#39;v72&#39;)"><u>B</u></span>, <span class="selitem" onclick="sel(&#39;gv2&#39;)"><u>Eb</u></span>, <span class="selitem" onclick="sel(&#39;5d2&#39;)"><u>EB</u></span>, <span class="selitem" onclick="sel(&#39;y42&#39;)"><u>GB</u></span>, <span class="selitem" onclick="sel(&#39;gx2&#39;)"><u>Gb</u></span>, <span class="selitem" onclick="sel(&#39;z12&#39;)"><u>kB</u></span>, <span class="selitem" onclick="sel(&#39;id2&#39;)"><u>kb</u></span>, <span class="selitem" onclick="sel(&#39;402&#39;)"><u>Mb</u></span>, <span class="selitem" onclick="sel(&#39;1s2&#39;)"><u>MB</u></span>, <span class="selitem" onclick="sel(&#39;k92&#39;)"><u>PB</u></span>, <span class="selitem" onclick="sel(&#39;m42&#39;)"><u>Pb</u></span>, <span class="selitem" onclick="sel(&#39;fo2&#39;)"><u>TB</u></span>, <span class="selitem" onclick="sel(&#39;5l2&#39;)"><u>Tb</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;722&#39;)" value="72"><u>bit</u></span>, <span class="selitem" onclick="sel(&#39;v72&#39;)" value="v7"><u>byte</u></span>, <span class="selitem" onclick="sel(&#39;un2&#39;)" value="un"><u>character</u></span>, <span class="selitem" onclick="sel(&#39;gv2&#39;)" value="gv"><u>exabit</u></span>, <span class="selitem" onclick="sel(&#39;5d2&#39;)" value="5d"><u>exabyte</u></span>, <span class="selitem" onclick="sel(&#39;gx2&#39;)" value="gx"><u>gigabit</u></span>, <span class="selitem" onclick="sel(&#39;y42&#39;)" value="y4"><u>gigabyte</u></span>, <span class="selitem" onclick="sel(&#39;id2&#39;)" value="id"><u>kilobit</u></span>, <span class="selitem" onclick="sel(&#39;z12&#39;)" value="z1"><u>kilobyte</u></span>, <span class="selitem" onclick="sel(&#39;402&#39;)" value="40"><u>megabit</u></span>, <span class="selitem" onclick="sel(&#39;1s2&#39;)" value="1s"><u>megabyte</u></span>, <span class="selitem" onclick="sel(&#39;mj2&#39;)" value="mj"><u>nibble</u></span>, <span class="selitem" onclick="sel(&#39;m42&#39;)" value="m4"><u>petabit</u></span>, <span class="selitem" onclick="sel(&#39;k92&#39;)" value="k9"><u>petabyte</u></span>, <span class="selitem" onclick="sel(&#39;5l2&#39;)" value="5l"><u>terabit</u></span>, <span class="selitem" onclick="sel(&#39;fo2&#39;)" value="fo"><u>terabyte</u></span></p>

</div>


<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>