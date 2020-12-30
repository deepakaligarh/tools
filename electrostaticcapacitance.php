<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script language="javascript" src="js/8916--searchajax.js"></script>

<title>Electrostatic capacitance Conversion Online -- </title>
<meta name="keywords" content="Electrostatic capacitance, Converter">
<meta name="description" content="Electrostatic capacitance Unit Converter Online">

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
	efs["i2"]=new Array();
	exs["i2"]=new Array();
efs["i2"]["i2"] = 1;
efs["i2"]["kr"] = 1.0E+18;
efs["i2"]["tc"] = 1.0E+15;
efs["i2"]["x7"] = 1000000000000;
efs["i2"]["s5"] = 1000000000;
efs["i2"]["zv"] = 1000000;
efs["i2"]["rj"] = 1000;
efs["i2"]["ry"] = 100;
efs["i2"]["b9"] = 10;
efs["i2"]["gb"] = 0.1;
efs["i2"]["2n"] = 0.01;
efs["i2"]["oy"] = 0.001;
efs["i2"]["t7"] = 1.0E-6;
efs["i2"]["i9"] = 1.0E-9;
efs["i2"]["ei"] = 1.0E-12;
efs["i2"]["2v"] = 1.0E-15;
efs["i2"]["vv"] = 1.0E-18;
efs["i2"]["zd"] = 1;
efs["i2"]["2s"] = 1000000000;
efs["i2"]["gy"] = 1000000000;
efs["i2"]["p8"] = 1.1123470522803E-12;
efs["i2"]["8u"] = 1.1123470522803E-12;
	efs["kr"]=new Array();
	exs["kr"]=new Array();
efs["kr"]["i2"] = 1.0E-18;
efs["kr"]["kr"] = 1;
efs["kr"]["tc"] = 0.001;
efs["kr"]["x7"] = 1.0E-6;
efs["kr"]["s5"] = 1.0E-9;
efs["kr"]["zv"] = 1.0E-12;
efs["kr"]["rj"] = 1.0E-15;
efs["kr"]["ry"] = 1.0E-16;
efs["kr"]["b9"] = 1.0E-17;
efs["kr"]["gb"] = 1.0E-19;
efs["kr"]["2n"] = 1.0E-20;
efs["kr"]["oy"] = 1.0E-21;
efs["kr"]["t7"] = 1.0E-24;
efs["kr"]["i9"] = 1.0E-27;
efs["kr"]["ei"] = 1.0E-30;
efs["kr"]["2v"] = 1.0E-33;
efs["kr"]["vv"] = 1.0E-36;
efs["kr"]["zd"] = 1.0E-18;
efs["kr"]["2s"] = 1.0E-9;
efs["kr"]["gy"] = 1.0E-9;
efs["kr"]["p8"] = 1.1123470522803E-30;
efs["kr"]["8u"] = 1.1123470522803E-30;
	efs["tc"]=new Array();
	exs["tc"]=new Array();
efs["tc"]["i2"] = 1.0E-15;
efs["tc"]["kr"] = 1000;
efs["tc"]["tc"] = 1;
efs["tc"]["x7"] = 0.001;
efs["tc"]["s5"] = 1.0E-6;
efs["tc"]["zv"] = 1.0E-9;
efs["tc"]["rj"] = 1.0E-12;
efs["tc"]["ry"] = 1.0E-13;
efs["tc"]["b9"] = 1.0E-14;
efs["tc"]["gb"] = 1.0E-16;
efs["tc"]["2n"] = 1.0E-17;
efs["tc"]["oy"] = 1.0E-18;
efs["tc"]["t7"] = 1.0E-21;
efs["tc"]["i9"] = 1.0E-24;
efs["tc"]["ei"] = 1.0E-27;
efs["tc"]["2v"] = 1.0E-30;
efs["tc"]["vv"] = 1.0E-33;
efs["tc"]["zd"] = 1.0E-15;
efs["tc"]["2s"] = 1.0E-6;
efs["tc"]["gy"] = 1.0E-6;
efs["tc"]["p8"] = 1.1123470522803E-27;
efs["tc"]["8u"] = 1.1123470522803E-27;
	efs["x7"]=new Array();
	exs["x7"]=new Array();
efs["x7"]["i2"] = 1.0E-12;
efs["x7"]["kr"] = 1000000;
efs["x7"]["tc"] = 1000;
efs["x7"]["x7"] = 1;
efs["x7"]["s5"] = 0.001;
efs["x7"]["zv"] = 1.0E-6;
efs["x7"]["rj"] = 1.0E-9;
efs["x7"]["ry"] = 1.0E-10;
efs["x7"]["b9"] = 1.0E-11;
efs["x7"]["gb"] = 1.0E-13;
efs["x7"]["2n"] = 1.0E-14;
efs["x7"]["oy"] = 1.0E-15;
efs["x7"]["t7"] = 1.0E-18;
efs["x7"]["i9"] = 1.0E-21;
efs["x7"]["ei"] = 1.0E-24;
efs["x7"]["2v"] = 1.0E-27;
efs["x7"]["vv"] = 1.0E-30;
efs["x7"]["zd"] = 1.0E-12;
efs["x7"]["2s"] = 0.001;
efs["x7"]["gy"] = 0.001;
efs["x7"]["p8"] = 1.1123470522803E-24;
efs["x7"]["8u"] = 1.1123470522803E-24;
	efs["s5"]=new Array();
	exs["s5"]=new Array();
efs["s5"]["i2"] = 1.0E-9;
efs["s5"]["kr"] = 1000000000;
efs["s5"]["tc"] = 1000000;
efs["s5"]["x7"] = 1000;
efs["s5"]["s5"] = 1;
efs["s5"]["zv"] = 0.001;
efs["s5"]["rj"] = 1.0E-6;
efs["s5"]["ry"] = 1.0E-7;
efs["s5"]["b9"] = 1.0E-8;
efs["s5"]["gb"] = 1.0E-10;
efs["s5"]["2n"] = 1.0E-11;
efs["s5"]["oy"] = 1.0E-12;
efs["s5"]["t7"] = 1.0E-15;
efs["s5"]["i9"] = 1.0E-18;
efs["s5"]["ei"] = 1.0E-21;
efs["s5"]["2v"] = 1.0E-24;
efs["s5"]["vv"] = 1.0E-27;
efs["s5"]["zd"] = 1.0E-9;
efs["s5"]["2s"] = 1;
efs["s5"]["gy"] = 1;
efs["s5"]["p8"] = 1.1123470522803E-21;
efs["s5"]["8u"] = 1.1123470522803E-21;
	efs["zv"]=new Array();
	exs["zv"]=new Array();
efs["zv"]["i2"] = 1.0E-6;
efs["zv"]["kr"] = 1000000000000;
efs["zv"]["tc"] = 1000000000;
efs["zv"]["x7"] = 1000000;
efs["zv"]["s5"] = 1000;
efs["zv"]["zv"] = 1;
efs["zv"]["rj"] = 0.001;
efs["zv"]["ry"] = 0.0001;
efs["zv"]["b9"] = 1.0E-5;
efs["zv"]["gb"] = 1.0E-7;
efs["zv"]["2n"] = 1.0E-8;
efs["zv"]["oy"] = 1.0E-9;
efs["zv"]["t7"] = 1.0E-12;
efs["zv"]["i9"] = 1.0E-15;
efs["zv"]["ei"] = 1.0E-18;
efs["zv"]["2v"] = 1.0E-21;
efs["zv"]["vv"] = 1.0E-24;
efs["zv"]["zd"] = 1.0E-6;
efs["zv"]["2s"] = 1000;
efs["zv"]["gy"] = 1000;
efs["zv"]["p8"] = 1.1123470522803E-18;
efs["zv"]["8u"] = 1.1123470522803E-18;
	efs["rj"]=new Array();
	exs["rj"]=new Array();
efs["rj"]["i2"] = 0.001;
efs["rj"]["kr"] = 1.0E+15;
efs["rj"]["tc"] = 1000000000000;
efs["rj"]["x7"] = 1000000000;
efs["rj"]["s5"] = 1000000;
efs["rj"]["zv"] = 1000;
efs["rj"]["rj"] = 1;
efs["rj"]["ry"] = 0.1;
efs["rj"]["b9"] = 0.01;
efs["rj"]["gb"] = 0.0001;
efs["rj"]["2n"] = 1.0E-5;
efs["rj"]["oy"] = 1.0E-6;
efs["rj"]["t7"] = 1.0E-9;
efs["rj"]["i9"] = 1.0E-12;
efs["rj"]["ei"] = 1.0E-15;
efs["rj"]["2v"] = 1.0E-18;
efs["rj"]["vv"] = 1.0E-21;
efs["rj"]["zd"] = 0.001;
efs["rj"]["2s"] = 1000000;
efs["rj"]["gy"] = 1000000;
efs["rj"]["p8"] = 1.1123470522803E-15;
efs["rj"]["8u"] = 1.1123470522803E-15;
	efs["ry"]=new Array();
	exs["ry"]=new Array();
efs["ry"]["i2"] = 0.01;
efs["ry"]["kr"] = 1.0E+16;
efs["ry"]["tc"] = 10000000000000;
efs["ry"]["x7"] = 10000000000;
efs["ry"]["s5"] = 10000000;
efs["ry"]["zv"] = 10000;
efs["ry"]["rj"] = 10;
efs["ry"]["ry"] = 1;
efs["ry"]["b9"] = 0.1;
efs["ry"]["gb"] = 0.001;
efs["ry"]["2n"] = 0.0001;
efs["ry"]["oy"] = 1.0E-5;
efs["ry"]["t7"] = 1.0E-8;
efs["ry"]["i9"] = 1.0E-11;
efs["ry"]["ei"] = 1.0E-14;
efs["ry"]["2v"] = 1.0E-17;
efs["ry"]["vv"] = 1.0E-20;
efs["ry"]["zd"] = 0.01;
efs["ry"]["2s"] = 10000000;
efs["ry"]["gy"] = 10000000;
efs["ry"]["p8"] = 1.1123470522803E-14;
efs["ry"]["8u"] = 1.1123470522803E-14;
	efs["b9"]=new Array();
	exs["b9"]=new Array();
efs["b9"]["i2"] = 0.1;
efs["b9"]["kr"] = 1.0E+17;
efs["b9"]["tc"] = 1.0E+14;
efs["b9"]["x7"] = 100000000000;
efs["b9"]["s5"] = 100000000;
efs["b9"]["zv"] = 100000;
efs["b9"]["rj"] = 100;
efs["b9"]["ry"] = 10;
efs["b9"]["b9"] = 1;
efs["b9"]["gb"] = 0.01;
efs["b9"]["2n"] = 0.001;
efs["b9"]["oy"] = 0.0001;
efs["b9"]["t7"] = 1.0E-7;
efs["b9"]["i9"] = 1.0E-10;
efs["b9"]["ei"] = 1.0E-13;
efs["b9"]["2v"] = 1.0E-16;
efs["b9"]["vv"] = 1.0E-19;
efs["b9"]["zd"] = 0.1;
efs["b9"]["2s"] = 100000000;
efs["b9"]["gy"] = 100000000;
efs["b9"]["p8"] = 1.1123470522803E-13;
efs["b9"]["8u"] = 1.1123470522803E-13;
	efs["gb"]=new Array();
	exs["gb"]=new Array();
efs["gb"]["i2"] = 10;
efs["gb"]["kr"] = 1.0E+19;
efs["gb"]["tc"] = 1.0E+16;
efs["gb"]["x7"] = 10000000000000;
efs["gb"]["s5"] = 10000000000;
efs["gb"]["zv"] = 10000000;
efs["gb"]["rj"] = 10000;
efs["gb"]["ry"] = 1000;
efs["gb"]["b9"] = 100;
efs["gb"]["gb"] = 1;
efs["gb"]["2n"] = 0.1;
efs["gb"]["oy"] = 0.01;
efs["gb"]["t7"] = 1.0E-5;
efs["gb"]["i9"] = 1.0E-8;
efs["gb"]["ei"] = 1.0E-11;
efs["gb"]["2v"] = 1.0E-14;
efs["gb"]["vv"] = 1.0E-17;
efs["gb"]["zd"] = 10;
efs["gb"]["2s"] = 10000000000;
efs["gb"]["gy"] = 10000000000;
efs["gb"]["p8"] = 1.1123470522803E-11;
efs["gb"]["8u"] = 1.1123470522803E-11;
	efs["2n"]=new Array();
	exs["2n"]=new Array();
efs["2n"]["i2"] = 100;
efs["2n"]["kr"] = 1.0E+20;
efs["2n"]["tc"] = 1.0E+17;
efs["2n"]["x7"] = 1.0E+14;
efs["2n"]["s5"] = 100000000000;
efs["2n"]["zv"] = 100000000;
efs["2n"]["rj"] = 100000;
efs["2n"]["ry"] = 10000;
efs["2n"]["b9"] = 1000;
efs["2n"]["gb"] = 10;
efs["2n"]["2n"] = 1;
efs["2n"]["oy"] = 0.1;
efs["2n"]["t7"] = 0.0001;
efs["2n"]["i9"] = 1.0E-7;
efs["2n"]["ei"] = 1.0E-10;
efs["2n"]["2v"] = 1.0E-13;
efs["2n"]["vv"] = 1.0E-16;
efs["2n"]["zd"] = 100;
efs["2n"]["2s"] = 100000000000;
efs["2n"]["gy"] = 100000000000;
efs["2n"]["p8"] = 1.1123470522803E-10;
efs["2n"]["8u"] = 1.1123470522803E-10;
	efs["oy"]=new Array();
	exs["oy"]=new Array();
efs["oy"]["i2"] = 1000;
efs["oy"]["kr"] = 1.0E+21;
efs["oy"]["tc"] = 1.0E+18;
efs["oy"]["x7"] = 1.0E+15;
efs["oy"]["s5"] = 1000000000000;
efs["oy"]["zv"] = 1000000000;
efs["oy"]["rj"] = 1000000;
efs["oy"]["ry"] = 100000;
efs["oy"]["b9"] = 10000;
efs["oy"]["gb"] = 100;
efs["oy"]["2n"] = 10;
efs["oy"]["oy"] = 1;
efs["oy"]["t7"] = 0.001;
efs["oy"]["i9"] = 1.0E-6;
efs["oy"]["ei"] = 1.0E-9;
efs["oy"]["2v"] = 1.0E-12;
efs["oy"]["vv"] = 1.0E-15;
efs["oy"]["zd"] = 1000;
efs["oy"]["2s"] = 1000000000000;
efs["oy"]["gy"] = 1000000000000;
efs["oy"]["p8"] = 1.1123470522803E-9;
efs["oy"]["8u"] = 1.1123470522803E-9;
	efs["t7"]=new Array();
	exs["t7"]=new Array();
efs["t7"]["i2"] = 1000000;
efs["t7"]["kr"] = 1.0E+24;
efs["t7"]["tc"] = 1.0E+21;
efs["t7"]["x7"] = 1.0E+18;
efs["t7"]["s5"] = 1.0E+15;
efs["t7"]["zv"] = 1000000000000;
efs["t7"]["rj"] = 1000000000;
efs["t7"]["ry"] = 100000000;
efs["t7"]["b9"] = 10000000;
efs["t7"]["gb"] = 100000;
efs["t7"]["2n"] = 10000;
efs["t7"]["oy"] = 1000;
efs["t7"]["t7"] = 1;
efs["t7"]["i9"] = 0.001;
efs["t7"]["ei"] = 1.0E-6;
efs["t7"]["2v"] = 1.0E-9;
efs["t7"]["vv"] = 1.0E-12;
efs["t7"]["zd"] = 1000000;
efs["t7"]["2s"] = 1.0E+15;
efs["t7"]["gy"] = 1.0E+15;
efs["t7"]["p8"] = 1.1123470522803E-6;
efs["t7"]["8u"] = 1.1123470522803E-6;
	efs["i9"]=new Array();
	exs["i9"]=new Array();
efs["i9"]["i2"] = 1000000000;
efs["i9"]["kr"] = 1.0E+27;
efs["i9"]["tc"] = 1.0E+24;
efs["i9"]["x7"] = 1.0E+21;
efs["i9"]["s5"] = 1.0E+18;
efs["i9"]["zv"] = 1.0E+15;
efs["i9"]["rj"] = 1000000000000;
efs["i9"]["ry"] = 100000000000;
efs["i9"]["b9"] = 10000000000;
efs["i9"]["gb"] = 100000000;
efs["i9"]["2n"] = 10000000;
efs["i9"]["oy"] = 1000000;
efs["i9"]["t7"] = 1000;
efs["i9"]["i9"] = 1;
efs["i9"]["ei"] = 0.001;
efs["i9"]["2v"] = 1.0E-6;
efs["i9"]["vv"] = 1.0E-9;
efs["i9"]["zd"] = 1000000000;
efs["i9"]["2s"] = 1.0E+18;
efs["i9"]["gy"] = 1.0E+18;
efs["i9"]["p8"] = 0.0011123470522803;
efs["i9"]["8u"] = 0.0011123470522803;
	efs["ei"]=new Array();
	exs["ei"]=new Array();
efs["ei"]["i2"] = 1000000000000;
efs["ei"]["kr"] = 1.0E+30;
efs["ei"]["tc"] = 1.0E+27;
efs["ei"]["x7"] = 1.0E+24;
efs["ei"]["s5"] = 1.0E+21;
efs["ei"]["zv"] = 1.0E+18;
efs["ei"]["rj"] = 1.0E+15;
efs["ei"]["ry"] = 1.0E+14;
efs["ei"]["b9"] = 10000000000000;
efs["ei"]["gb"] = 100000000000;
efs["ei"]["2n"] = 10000000000;
efs["ei"]["oy"] = 1000000000;
efs["ei"]["t7"] = 1000000;
efs["ei"]["i9"] = 1000;
efs["ei"]["ei"] = 1;
efs["ei"]["2v"] = 0.001;
efs["ei"]["vv"] = 1.0E-6;
efs["ei"]["zd"] = 1000000000000;
efs["ei"]["2s"] = 1.0E+21;
efs["ei"]["gy"] = 1.0E+21;
efs["ei"]["p8"] = 1.1123470522803;
efs["ei"]["8u"] = 1.1123470522803;
	efs["2v"]=new Array();
	exs["2v"]=new Array();
efs["2v"]["i2"] = 1.0E+15;
efs["2v"]["kr"] = 1.0E+33;
efs["2v"]["tc"] = 1.0E+30;
efs["2v"]["x7"] = 1.0E+27;
efs["2v"]["s5"] = 1.0E+24;
efs["2v"]["zv"] = 1.0E+21;
efs["2v"]["rj"] = 1.0E+18;
efs["2v"]["ry"] = 1.0E+17;
efs["2v"]["b9"] = 1.0E+16;
efs["2v"]["gb"] = 1.0E+14;
efs["2v"]["2n"] = 10000000000000;
efs["2v"]["oy"] = 1000000000000;
efs["2v"]["t7"] = 1000000000;
efs["2v"]["i9"] = 1000000;
efs["2v"]["ei"] = 1000;
efs["2v"]["2v"] = 1;
efs["2v"]["vv"] = 0.001;
efs["2v"]["zd"] = 1.0E+15;
efs["2v"]["2s"] = 1.0E+24;
efs["2v"]["gy"] = 1.0E+24;
efs["2v"]["p8"] = 1112.3470522803;
efs["2v"]["8u"] = 1112.3470522803;
	efs["vv"]=new Array();
	exs["vv"]=new Array();
efs["vv"]["i2"] = 1.0E+18;
efs["vv"]["kr"] = 1.0E+36;
efs["vv"]["tc"] = 1.0E+33;
efs["vv"]["x7"] = 1.0E+30;
efs["vv"]["s5"] = 1.0E+27;
efs["vv"]["zv"] = 1.0E+24;
efs["vv"]["rj"] = 1.0E+21;
efs["vv"]["ry"] = 1.0E+20;
efs["vv"]["b9"] = 1.0E+19;
efs["vv"]["gb"] = 1.0E+17;
efs["vv"]["2n"] = 1.0E+16;
efs["vv"]["oy"] = 1.0E+15;
efs["vv"]["t7"] = 1000000000000;
efs["vv"]["i9"] = 1000000000;
efs["vv"]["ei"] = 1000000;
efs["vv"]["2v"] = 1000;
efs["vv"]["vv"] = 1;
efs["vv"]["zd"] = 1.0E+18;
efs["vv"]["2s"] = 1.0E+27;
efs["vv"]["gy"] = 1.0E+27;
efs["vv"]["p8"] = 1112347.0522803;
efs["vv"]["8u"] = 1112347.0522803;
	efs["zd"]=new Array();
	exs["zd"]=new Array();
efs["zd"]["i2"] = 1;
efs["zd"]["kr"] = 1.0E+18;
efs["zd"]["tc"] = 1.0E+15;
efs["zd"]["x7"] = 1000000000000;
efs["zd"]["s5"] = 1000000000;
efs["zd"]["zv"] = 1000000;
efs["zd"]["rj"] = 1000;
efs["zd"]["ry"] = 100;
efs["zd"]["b9"] = 10;
efs["zd"]["gb"] = 0.1;
efs["zd"]["2n"] = 0.01;
efs["zd"]["oy"] = 0.001;
efs["zd"]["t7"] = 1.0E-6;
efs["zd"]["i9"] = 1.0E-9;
efs["zd"]["ei"] = 1.0E-12;
efs["zd"]["2v"] = 1.0E-15;
efs["zd"]["vv"] = 1.0E-18;
efs["zd"]["zd"] = 1;
efs["zd"]["2s"] = 1000000000;
efs["zd"]["gy"] = 1000000000;
efs["zd"]["p8"] = 1.1123470522803E-12;
efs["zd"]["8u"] = 1.1123470522803E-12;
	efs["2s"]=new Array();
	exs["2s"]=new Array();
efs["2s"]["i2"] = 1.0E-9;
efs["2s"]["kr"] = 1000000000;
efs["2s"]["tc"] = 1000000;
efs["2s"]["x7"] = 1000;
efs["2s"]["s5"] = 1;
efs["2s"]["zv"] = 0.001;
efs["2s"]["rj"] = 1.0E-6;
efs["2s"]["ry"] = 1.0E-7;
efs["2s"]["b9"] = 1.0E-8;
efs["2s"]["gb"] = 1.0E-10;
efs["2s"]["2n"] = 1.0E-11;
efs["2s"]["oy"] = 1.0E-12;
efs["2s"]["t7"] = 1.0E-15;
efs["2s"]["i9"] = 1.0E-18;
efs["2s"]["ei"] = 1.0E-21;
efs["2s"]["2v"] = 1.0E-24;
efs["2s"]["vv"] = 1.0E-27;
efs["2s"]["zd"] = 1.0E-9;
efs["2s"]["2s"] = 1;
efs["2s"]["gy"] = 1;
efs["2s"]["p8"] = 1.1123470522803E-21;
efs["2s"]["8u"] = 1.1123470522803E-21;
	efs["gy"]=new Array();
	exs["gy"]=new Array();
efs["gy"]["i2"] = 1.0E-9;
efs["gy"]["kr"] = 1000000000;
efs["gy"]["tc"] = 1000000;
efs["gy"]["x7"] = 1000;
efs["gy"]["s5"] = 1;
efs["gy"]["zv"] = 0.001;
efs["gy"]["rj"] = 1.0E-6;
efs["gy"]["ry"] = 1.0E-7;
efs["gy"]["b9"] = 1.0E-8;
efs["gy"]["gb"] = 1.0E-10;
efs["gy"]["2n"] = 1.0E-11;
efs["gy"]["oy"] = 1.0E-12;
efs["gy"]["t7"] = 1.0E-15;
efs["gy"]["i9"] = 1.0E-18;
efs["gy"]["ei"] = 1.0E-21;
efs["gy"]["2v"] = 1.0E-24;
efs["gy"]["vv"] = 1.0E-27;
efs["gy"]["zd"] = 1.0E-9;
efs["gy"]["2s"] = 1;
efs["gy"]["gy"] = 1;
efs["gy"]["p8"] = 1.1123470522803E-21;
efs["gy"]["8u"] = 1.1123470522803E-21;
	efs["p8"]=new Array();
	exs["p8"]=new Array();
efs["p8"]["i2"] = 899000000000;
efs["p8"]["kr"] = 8.99E+29;
efs["p8"]["tc"] = 8.99E+26;
efs["p8"]["x7"] = 8.99E+23;
efs["p8"]["s5"] = 8.99E+20;
efs["p8"]["zv"] = 8.99E+17;
efs["p8"]["rj"] = 8.99E+14;
efs["p8"]["ry"] = 89900000000000;
efs["p8"]["b9"] = 8990000000000;
efs["p8"]["gb"] = 89900000000;
efs["p8"]["2n"] = 8990000000;
efs["p8"]["oy"] = 899000000;
efs["p8"]["t7"] = 899000;
efs["p8"]["i9"] = 899;
efs["p8"]["ei"] = 0.899;
efs["p8"]["2v"] = 0.000899;
efs["p8"]["vv"] = 8.99E-7;
efs["p8"]["zd"] = 899000000000;
efs["p8"]["2s"] = 8.99E+20;
efs["p8"]["gy"] = 8.99E+20;
efs["p8"]["p8"] = 1;
efs["p8"]["8u"] = 1;
	efs["8u"]=new Array();
	exs["8u"]=new Array();
efs["8u"]["i2"] = 899000000000;
efs["8u"]["kr"] = 8.99E+29;
efs["8u"]["tc"] = 8.99E+26;
efs["8u"]["x7"] = 8.99E+23;
efs["8u"]["s5"] = 8.99E+20;
efs["8u"]["zv"] = 8.99E+17;
efs["8u"]["rj"] = 8.99E+14;
efs["8u"]["ry"] = 89900000000000;
efs["8u"]["b9"] = 8990000000000;
efs["8u"]["gb"] = 89900000000;
efs["8u"]["2n"] = 8990000000;
efs["8u"]["oy"] = 899000000;
efs["8u"]["t7"] = 899000;
efs["8u"]["i9"] = 899;
efs["8u"]["ei"] = 0.899;
efs["8u"]["2v"] = 0.000899;
efs["8u"]["vv"] = 8.99E-7;
efs["8u"]["zd"] = 899000000000;
efs["8u"]["2s"] = 8.99E+20;
efs["8u"]["gy"] = 8.99E+20;
efs["8u"]["p8"] = 1;
efs["8u"]["8u"] = 1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['i2'] = 0;
	    idmap['i2'] = "farad";
	    stat['kr'] = 0;
	    idmap['kr'] = "exafarad";
	    stat['tc'] = 0;
	    idmap['tc'] = "petafarad";
	    stat['x7'] = 0;
	    idmap['x7'] = "terafarad";
	    stat['s5'] = 0;
	    idmap['s5'] = "gigafarad";
	    stat['zv'] = 0;
	    idmap['zv'] = "megafarad";
	    stat['rj'] = 0;
	    idmap['rj'] = "kilofarad";
	    stat['ry'] = 0;
	    idmap['ry'] = "hectofarad";
	    stat['b9'] = 0;
	    idmap['b9'] = "dekafarad";
	    stat['gb'] = 0;
	    idmap['gb'] = "decifarad";
	    stat['2n'] = 0;
	    idmap['2n'] = "centifarad";
	    stat['oy'] = 0;
	    idmap['oy'] = "millifarad";
	    stat['t7'] = 0;
	    idmap['t7'] = "microfarad";
	    stat['i9'] = 0;
	    idmap['i9'] = "nanofarad";
	    stat['ei'] = 0;
	    idmap['ei'] = "picofarad";
	    stat['2v'] = 0;
	    idmap['2v'] = "femtofarad";
	    stat['vv'] = 0;
	    idmap['vv'] = "attofarad";
	    stat['zd'] = 0;
	    idmap['zd'] = "coulomb/volt";
	    stat['2s'] = 0;
	    idmap['2s'] = "abfarad";
	    stat['gy'] = 0;
	    idmap['gy'] = "EMU of capacitance";
	    stat['p8'] = 0;
	    idmap['p8'] = "statfarad";
	    stat['8u'] = 0;
	    idmap['8u'] = "ESU of capacitance";
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
	    document.getElementById('i2').value='';
	    document.getElementById('kr').value='';
	    document.getElementById('tc').value='';
	    document.getElementById('x7').value='';
	    document.getElementById('s5').value='';
	    document.getElementById('zv').value='';
	    document.getElementById('rj').value='';
	    document.getElementById('ry').value='';
	    document.getElementById('b9').value='';
	    document.getElementById('gb').value='';
	    document.getElementById('2n').value='';
	    document.getElementById('oy').value='';
	    document.getElementById('t7').value='';
	    document.getElementById('i9').value='';
	    document.getElementById('ei').value='';
	    document.getElementById('2v').value='';
	    document.getElementById('vv').value='';
	    document.getElementById('zd').value='';
	    document.getElementById('2s').value='';
	    document.getElementById('gy').value='';
	    document.getElementById('p8').value='';
	    document.getElementById('8u').value='';
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

<div class="mtitle">Electrostatic capacitance Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;i22&#39;)" id="i22" style="color: blue; font-weight: bold;">1.&nbsp;farad <font color="black"><u><i>[F]</i></u></font>:</div>
<div class="nbox"><input id="i2" onblur="setName(&#39;i2&#39;)" autocomplete="off" onkeyup="convertcal(&#39;i2&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;kr2&#39;)" id="kr2">2.&nbsp;exafarad <font color="black"><u><i>[EF]</i></u></font>:</div>
<div class="nbox"><input id="kr" onblur="setName(&#39;kr&#39;)" autocomplete="off" onkeyup="convertcal(&#39;kr&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;tc2&#39;)" id="tc2">3.&nbsp;petafarad <font color="black"><u><i>[PF]</i></u></font>:</div>
<div class="nbox"><input id="tc" onblur="setName(&#39;tc&#39;)" autocomplete="off" onkeyup="convertcal(&#39;tc&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;x72&#39;)" id="x72">4.&nbsp;terafarad <font color="black"><u><i>[TF]</i></u></font>:</div>
<div class="nbox"><input id="x7" onblur="setName(&#39;x7&#39;)" autocomplete="off" onkeyup="convertcal(&#39;x7&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;s52&#39;)" id="s52">5.&nbsp;gigafarad <font color="black"><u><i>[GF]</i></u></font>:</div>
<div class="nbox"><input id="s5" onblur="setName(&#39;s5&#39;)" autocomplete="off" onkeyup="convertcal(&#39;s5&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;zv2&#39;)" id="zv2">6.&nbsp;megafarad <font color="black"><u><i>[MF]</i></u></font>:</div>
<div class="nbox"><input id="zv" onblur="setName(&#39;zv&#39;)" autocomplete="off" onkeyup="convertcal(&#39;zv&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;rj2&#39;)" id="rj2">7.&nbsp;kilofarad <font color="black"><u><i>[kF]</i></u></font>:</div>
<div class="nbox"><input id="rj" onblur="setName(&#39;rj&#39;)" autocomplete="off" onkeyup="convertcal(&#39;rj&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ry2&#39;)" id="ry2">8.&nbsp;hectofarad <font color="black"><u><i>[hF]</i></u></font>:</div>
<div class="nbox"><input id="ry" onblur="setName(&#39;ry&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ry&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;b92&#39;)" id="b92">9.&nbsp;dekafarad <font color="black"><u><i>[daF]</i></u></font>:</div>
<div class="nbox"><input id="b9" onblur="setName(&#39;b9&#39;)" autocomplete="off" onkeyup="convertcal(&#39;b9&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gb2&#39;)" id="gb2">10.&nbsp;decifarad <font color="black"><u><i>[dF]</i></u></font>:</div>
<div class="nbox"><input id="gb" onblur="setName(&#39;gb&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gb&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;2n2&#39;)" id="2n2">11.&nbsp;centifarad <font color="black"><u><i>[cF]</i></u></font>:</div>
<div class="nbox"><input id="2n" onblur="setName(&#39;2n&#39;)" autocomplete="off" onkeyup="convertcal(&#39;2n&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;oy2&#39;)" id="oy2">12.&nbsp;millifarad <font color="black"><u><i>[mF]</i></u></font>:</div>
<div class="nbox"><input id="oy" onblur="setName(&#39;oy&#39;)" autocomplete="off" onkeyup="convertcal(&#39;oy&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;t72&#39;)" id="t72">13.&nbsp;microfarad <font color="black"><u><i>[uF]</i></u></font>:</div>
<div class="nbox"><input id="t7" onblur="setName(&#39;t7&#39;)" autocomplete="off" onkeyup="convertcal(&#39;t7&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;i92&#39;)" id="i92">14.&nbsp;nanofarad <font color="black"><u><i>[nF]</i></u></font>:</div>
<div class="nbox"><input id="i9" onblur="setName(&#39;i9&#39;)" autocomplete="off" onkeyup="convertcal(&#39;i9&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ei2&#39;)" id="ei2">15.&nbsp;picofarad <font color="black"><u><i>[pF]</i></u></font>:</div>
<div class="nbox"><input id="ei" onblur="setName(&#39;ei&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ei&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;2v2&#39;)" id="2v2">16.&nbsp;femtofarad <font color="black"><u><i>[fF]</i></u></font>:</div>
<div class="nbox"><input id="2v" onblur="setName(&#39;2v&#39;)" autocomplete="off" onkeyup="convertcal(&#39;2v&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;vv2&#39;)" id="vv2">17.&nbsp;attofarad <font color="black"><u><i>[aF]</i></u></font>:</div>
<div class="nbox"><input id="vv" onblur="setName(&#39;vv&#39;)" autocomplete="off" onkeyup="convertcal(&#39;vv&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;zd2&#39;)" id="zd2">18.&nbsp;coulomb/volt <font color="black"><u><i>[C/V]</i></u></font>:</div>
<div class="nbox"><input id="zd" onblur="setName(&#39;zd&#39;)" autocomplete="off" onkeyup="convertcal(&#39;zd&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;2s2&#39;)" id="2s2">19.&nbsp;abfarad <font color="black"><u><i>[abF]</i></u></font>:</div>
<div class="nbox"><input id="2s" onblur="setName(&#39;2s&#39;)" autocomplete="off" onkeyup="convertcal(&#39;2s&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gy2&#39;)" id="gy2">20.&nbsp;EMU of capacitance:</div>
<div class="nbox"><input id="gy" onblur="setName(&#39;gy&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gy&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;p82&#39;)" id="p82">21.&nbsp;statfarad <font color="black"><u><i>[stF]</i></u></font>:</div>
<div class="nbox"><input id="p8" onblur="setName(&#39;p8&#39;)" autocomplete="off" onkeyup="convertcal(&#39;p8&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;8u2&#39;)" id="8u2">22.&nbsp;ESU of capacitance:</div>
<div class="nbox"><input id="8u" onblur="setName(&#39;8u&#39;)" autocomplete="off" onkeyup="convertcal(&#39;8u&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;2s2&#39;)"><u>abF</u></span>, <span class="selitem" onclick="sel(&#39;vv2&#39;)"><u>aF</u></span>, <span class="selitem" onclick="sel(&#39;zd2&#39;)"><u>C/V</u></span>, <span class="selitem" onclick="sel(&#39;2n2&#39;)"><u>cF</u></span>, <span class="selitem" onclick="sel(&#39;b92&#39;)"><u>daF</u></span>, <span class="selitem" onclick="sel(&#39;gb2&#39;)"><u>dF</u></span>, <span class="selitem" onclick="sel(&#39;kr2&#39;)"><u>EF</u></span>, <span class="selitem" onclick="sel(&#39;i22&#39;)"><u>F</u></span>, <span class="selitem" onclick="sel(&#39;2v2&#39;)"><u>fF</u></span>, <span class="selitem" onclick="sel(&#39;s52&#39;)"><u>GF</u></span>, <span class="selitem" onclick="sel(&#39;ry2&#39;)"><u>hF</u></span>, <span class="selitem" onclick="sel(&#39;rj2&#39;)"><u>kF</u></span>, <span class="selitem" onclick="sel(&#39;zv2&#39;)"><u>MF</u></span>, <span class="selitem" onclick="sel(&#39;oy2&#39;)"><u>mF</u></span>, <span class="selitem" onclick="sel(&#39;i92&#39;)"><u>nF</u></span>, <span class="selitem" onclick="sel(&#39;ei2&#39;)"><u>pF</u></span>, <span class="selitem" onclick="sel(&#39;tc2&#39;)"><u>PF</u></span>, <span class="selitem" onclick="sel(&#39;p82&#39;)"><u>stF</u></span>, <span class="selitem" onclick="sel(&#39;x72&#39;)"><u>TF</u></span>, <span class="selitem" onclick="sel(&#39;t72&#39;)"><u>uF</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;2s2&#39;)" value="2s"><u>abfarad</u></span>, <span class="selitem" onclick="sel(&#39;vv2&#39;)" value="vv"><u>attofarad</u></span>, <span class="selitem" onclick="sel(&#39;2n2&#39;)" value="2n"><u>centifarad</u></span>, <span class="selitem" onclick="sel(&#39;zd2&#39;)" value="zd"><u>coulomb/volt</u></span>, <span class="selitem" onclick="sel(&#39;gb2&#39;)" value="gb"><u>decifarad</u></span>, <span class="selitem" onclick="sel(&#39;b92&#39;)" value="b9"><u>dekafarad</u></span>, <span class="selitem" onclick="sel(&#39;gy2&#39;)" value="gy"><u>EMU of capacitance</u></span>, <span class="selitem" onclick="sel(&#39;8u2&#39;)" value="8u"><u>ESU of capacitance</u></span>, <span class="selitem" onclick="sel(&#39;kr2&#39;)" value="kr"><u>exafarad</u></span>, <span class="selitem" onclick="sel(&#39;i22&#39;)" value="i2"><u>farad</u></span>, <span class="selitem" onclick="sel(&#39;2v2&#39;)" value="2v"><u>femtofarad</u></span>, <span class="selitem" onclick="sel(&#39;s52&#39;)" value="s5"><u>gigafarad</u></span>, <span class="selitem" onclick="sel(&#39;ry2&#39;)" value="ry"><u>hectofarad</u></span>, <span class="selitem" onclick="sel(&#39;rj2&#39;)" value="rj"><u>kilofarad</u></span>, <span class="selitem" onclick="sel(&#39;zv2&#39;)" value="zv"><u>megafarad</u></span>, <span class="selitem" onclick="sel(&#39;t72&#39;)" value="t7"><u>microfarad</u></span>, <span class="selitem" onclick="sel(&#39;oy2&#39;)" value="oy"><u>millifarad</u></span>, <span class="selitem" onclick="sel(&#39;i92&#39;)" value="i9"><u>nanofarad</u></span>, <span class="selitem" onclick="sel(&#39;tc2&#39;)" value="tc"><u>petafarad</u></span>, <span class="selitem" onclick="sel(&#39;ei2&#39;)" value="ei"><u>picofarad</u></span>, <span class="selitem" onclick="sel(&#39;p82&#39;)" value="p8"><u>statfarad</u></span>, <span class="selitem" onclick="sel(&#39;x72&#39;)" value="x7"><u>terafarad</u></span></p>

</div>
<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>