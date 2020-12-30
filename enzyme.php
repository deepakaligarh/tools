<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script language="javascript" src="js/8916--searchajax.js"></script>

<title>Enzyme Conversion Online --</title>
<meta name="keywords" content="Enzyme, Converter">
<meta name="description" content="Enzyme Unit Converter Online">

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
	efs["k4"]=new Array();
	exs["k4"]=new Array();
efs["k4"]["k4"] = 1;
efs["k4"]["j1"] = 0.1;
efs["k4"]["mk"] = 0.01;
efs["k4"]["kr"] = 0.001;
efs["k4"]["mb"] = 1.0E-6;
efs["k4"]["9w"] = 1.0E-9;
efs["k4"]["gt"] = 1.0E-12;
efs["k4"]["yh"] = 1.0E-15;
efs["k4"]["a7"] = 1.0E-18;
efs["k4"]["i5"] = 1.0E-21;
efs["k4"]["j5"] = 1.0E-24;
efs["k4"]["av"] = 10;
efs["k4"]["xq"] = 100;
efs["k4"]["vk"] = 1000;
efs["k4"]["2i"] = 1000000;
efs["k4"]["np"] = 1000000000;
efs["k4"]["m6"] = 1;
efs["k4"]["01"] = 0.001;
efs["k4"]["ez"] = 1000;
efs["k4"]["06"] = 1.0E-6;
efs["k4"]["tq"] = 60;
efs["k4"]["u4"] = 60000000;
efs["k4"]["0m"] = 60000;
	efs["j1"]=new Array();
	exs["j1"]=new Array();
efs["j1"]["k4"] = 10;
efs["j1"]["j1"] = 1;
efs["j1"]["mk"] = 0.1;
efs["j1"]["kr"] = 0.01;
efs["j1"]["mb"] = 1.0E-5;
efs["j1"]["9w"] = 1.0E-8;
efs["j1"]["gt"] = 1.0E-11;
efs["j1"]["yh"] = 1.0E-14;
efs["j1"]["a7"] = 1.0E-17;
efs["j1"]["i5"] = 1.0E-20;
efs["j1"]["j5"] = 1.0E-23;
efs["j1"]["av"] = 100;
efs["j1"]["xq"] = 1000;
efs["j1"]["vk"] = 10000;
efs["j1"]["2i"] = 10000000;
efs["j1"]["np"] = 10000000000;
efs["j1"]["m6"] = 10;
efs["j1"]["01"] = 0.01;
efs["j1"]["ez"] = 10000;
efs["j1"]["06"] = 1.0E-5;
efs["j1"]["tq"] = 600;
efs["j1"]["u4"] = 600000000;
efs["j1"]["0m"] = 600000;
	efs["mk"]=new Array();
	exs["mk"]=new Array();
efs["mk"]["k4"] = 100;
efs["mk"]["j1"] = 10;
efs["mk"]["mk"] = 1;
efs["mk"]["kr"] = 0.1;
efs["mk"]["mb"] = 0.0001;
efs["mk"]["9w"] = 1.0E-7;
efs["mk"]["gt"] = 1.0E-10;
efs["mk"]["yh"] = 1.0E-13;
efs["mk"]["a7"] = 1.0E-16;
efs["mk"]["i5"] = 1.0E-19;
efs["mk"]["j5"] = 1.0E-22;
efs["mk"]["av"] = 1000;
efs["mk"]["xq"] = 10000;
efs["mk"]["vk"] = 100000;
efs["mk"]["2i"] = 100000000;
efs["mk"]["np"] = 100000000000;
efs["mk"]["m6"] = 100;
efs["mk"]["01"] = 0.1;
efs["mk"]["ez"] = 100000;
efs["mk"]["06"] = 0.0001;
efs["mk"]["tq"] = 6000;
efs["mk"]["u4"] = 6000000000;
efs["mk"]["0m"] = 6000000;
	efs["kr"]=new Array();
	exs["kr"]=new Array();
efs["kr"]["k4"] = 1000;
efs["kr"]["j1"] = 100;
efs["kr"]["mk"] = 10;
efs["kr"]["kr"] = 1;
efs["kr"]["mb"] = 0.001;
efs["kr"]["9w"] = 1.0E-6;
efs["kr"]["gt"] = 1.0E-9;
efs["kr"]["yh"] = 1.0E-12;
efs["kr"]["a7"] = 1.0E-15;
efs["kr"]["i5"] = 1.0E-18;
efs["kr"]["j5"] = 1.0E-21;
efs["kr"]["av"] = 10000;
efs["kr"]["xq"] = 100000;
efs["kr"]["vk"] = 1000000;
efs["kr"]["2i"] = 1000000000;
efs["kr"]["np"] = 1000000000000;
efs["kr"]["m6"] = 1000;
efs["kr"]["01"] = 1;
efs["kr"]["ez"] = 1000000;
efs["kr"]["06"] = 0.001;
efs["kr"]["tq"] = 60000;
efs["kr"]["u4"] = 60000000000;
efs["kr"]["0m"] = 60000000;
	efs["mb"]=new Array();
	exs["mb"]=new Array();
efs["mb"]["k4"] = 1000000;
efs["mb"]["j1"] = 100000;
efs["mb"]["mk"] = 10000;
efs["mb"]["kr"] = 1000;
efs["mb"]["mb"] = 1;
efs["mb"]["9w"] = 0.001;
efs["mb"]["gt"] = 1.0E-6;
efs["mb"]["yh"] = 1.0E-9;
efs["mb"]["a7"] = 1.0E-12;
efs["mb"]["i5"] = 1.0E-15;
efs["mb"]["j5"] = 1.0E-18;
efs["mb"]["av"] = 10000000;
efs["mb"]["xq"] = 100000000;
efs["mb"]["vk"] = 1000000000;
efs["mb"]["2i"] = 1000000000000;
efs["mb"]["np"] = 1.0E+15;
efs["mb"]["m6"] = 1000000;
efs["mb"]["01"] = 1000;
efs["mb"]["ez"] = 1000000000;
efs["mb"]["06"] = 1;
efs["mb"]["tq"] = 60000000;
efs["mb"]["u4"] = 60000000000000;
efs["mb"]["0m"] = 60000000000;
	efs["9w"]=new Array();
	exs["9w"]=new Array();
efs["9w"]["k4"] = 1000000000;
efs["9w"]["j1"] = 100000000;
efs["9w"]["mk"] = 10000000;
efs["9w"]["kr"] = 1000000;
efs["9w"]["mb"] = 1000;
efs["9w"]["9w"] = 1;
efs["9w"]["gt"] = 0.001;
efs["9w"]["yh"] = 1.0E-6;
efs["9w"]["a7"] = 1.0E-9;
efs["9w"]["i5"] = 1.0E-12;
efs["9w"]["j5"] = 1.0E-15;
efs["9w"]["av"] = 10000000000;
efs["9w"]["xq"] = 100000000000;
efs["9w"]["vk"] = 1000000000000;
efs["9w"]["2i"] = 1.0E+15;
efs["9w"]["np"] = 1.0E+18;
efs["9w"]["m6"] = 1000000000;
efs["9w"]["01"] = 1000000;
efs["9w"]["ez"] = 1000000000000;
efs["9w"]["06"] = 1000;
efs["9w"]["tq"] = 60000000000;
efs["9w"]["u4"] = 6.0E+16;
efs["9w"]["0m"] = 60000000000000;
	efs["gt"]=new Array();
	exs["gt"]=new Array();
efs["gt"]["k4"] = 1000000000000;
efs["gt"]["j1"] = 100000000000;
efs["gt"]["mk"] = 10000000000;
efs["gt"]["kr"] = 1000000000;
efs["gt"]["mb"] = 1000000;
efs["gt"]["9w"] = 1000;
efs["gt"]["gt"] = 1;
efs["gt"]["yh"] = 0.001;
efs["gt"]["a7"] = 1.0E-6;
efs["gt"]["i5"] = 1.0E-9;
efs["gt"]["j5"] = 1.0E-12;
efs["gt"]["av"] = 10000000000000;
efs["gt"]["xq"] = 1.0E+14;
efs["gt"]["vk"] = 1.0E+15;
efs["gt"]["2i"] = 1.0E+18;
efs["gt"]["np"] = 1.0E+21;
efs["gt"]["m6"] = 1000000000000;
efs["gt"]["01"] = 1000000000;
efs["gt"]["ez"] = 1.0E+15;
efs["gt"]["06"] = 1000000;
efs["gt"]["tq"] = 60000000000000;
efs["gt"]["u4"] = 6.0E+19;
efs["gt"]["0m"] = 6.0E+16;
	efs["yh"]=new Array();
	exs["yh"]=new Array();
efs["yh"]["k4"] = 1.0E+15;
efs["yh"]["j1"] = 1.0E+14;
efs["yh"]["mk"] = 10000000000000;
efs["yh"]["kr"] = 1000000000000;
efs["yh"]["mb"] = 1000000000;
efs["yh"]["9w"] = 1000000;
efs["yh"]["gt"] = 1000;
efs["yh"]["yh"] = 1;
efs["yh"]["a7"] = 0.001;
efs["yh"]["i5"] = 1.0E-6;
efs["yh"]["j5"] = 1.0E-9;
efs["yh"]["av"] = 1.0E+16;
efs["yh"]["xq"] = 1.0E+17;
efs["yh"]["vk"] = 1.0E+18;
efs["yh"]["2i"] = 1.0E+21;
efs["yh"]["np"] = 1.0E+24;
efs["yh"]["m6"] = 1.0E+15;
efs["yh"]["01"] = 1000000000000;
efs["yh"]["ez"] = 1.0E+18;
efs["yh"]["06"] = 1000000000;
efs["yh"]["tq"] = 6.0E+16;
efs["yh"]["u4"] = 6.0E+22;
efs["yh"]["0m"] = 6.0E+19;
	efs["a7"]=new Array();
	exs["a7"]=new Array();
efs["a7"]["k4"] = 1.0E+18;
efs["a7"]["j1"] = 1.0E+17;
efs["a7"]["mk"] = 1.0E+16;
efs["a7"]["kr"] = 1.0E+15;
efs["a7"]["mb"] = 1000000000000;
efs["a7"]["9w"] = 1000000000;
efs["a7"]["gt"] = 1000000;
efs["a7"]["yh"] = 1000;
efs["a7"]["a7"] = 1;
efs["a7"]["i5"] = 0.001;
efs["a7"]["j5"] = 1.0E-6;
efs["a7"]["av"] = 1.0E+19;
efs["a7"]["xq"] = 1.0E+20;
efs["a7"]["vk"] = 1.0E+21;
efs["a7"]["2i"] = 1.0E+24;
efs["a7"]["np"] = 1.0E+27;
efs["a7"]["m6"] = 1.0E+18;
efs["a7"]["01"] = 1.0E+15;
efs["a7"]["ez"] = 1.0E+21;
efs["a7"]["06"] = 1000000000000;
efs["a7"]["tq"] = 6.0E+19;
efs["a7"]["u4"] = 6.0E+25;
efs["a7"]["0m"] = 6.0E+22;
	efs["i5"]=new Array();
	exs["i5"]=new Array();
efs["i5"]["k4"] = 1.0E+21;
efs["i5"]["j1"] = 1.0E+20;
efs["i5"]["mk"] = 1.0E+19;
efs["i5"]["kr"] = 1.0E+18;
efs["i5"]["mb"] = 1.0E+15;
efs["i5"]["9w"] = 1000000000000;
efs["i5"]["gt"] = 1000000000;
efs["i5"]["yh"] = 1000000;
efs["i5"]["a7"] = 1000;
efs["i5"]["i5"] = 1;
efs["i5"]["j5"] = 0.001;
efs["i5"]["av"] = 1.0E+22;
efs["i5"]["xq"] = 1.0E+23;
efs["i5"]["vk"] = 1.0E+24;
efs["i5"]["2i"] = 1.0E+27;
efs["i5"]["np"] = 1.0E+30;
efs["i5"]["m6"] = 1.0E+21;
efs["i5"]["01"] = 1.0E+18;
efs["i5"]["ez"] = 1.0E+24;
efs["i5"]["06"] = 1.0E+15;
efs["i5"]["tq"] = 6.0E+22;
efs["i5"]["u4"] = 6.0E+28;
efs["i5"]["0m"] = 6.0E+25;
	efs["j5"]=new Array();
	exs["j5"]=new Array();
efs["j5"]["k4"] = 1.0E+24;
efs["j5"]["j1"] = 1.0E+23;
efs["j5"]["mk"] = 1.0E+22;
efs["j5"]["kr"] = 1.0E+21;
efs["j5"]["mb"] = 1.0E+18;
efs["j5"]["9w"] = 1.0E+15;
efs["j5"]["gt"] = 1000000000000;
efs["j5"]["yh"] = 1000000000;
efs["j5"]["a7"] = 1000000;
efs["j5"]["i5"] = 1000;
efs["j5"]["j5"] = 1;
efs["j5"]["av"] = 1.0E+25;
efs["j5"]["xq"] = 1.0E+26;
efs["j5"]["vk"] = 1.0E+27;
efs["j5"]["2i"] = 1.0E+30;
efs["j5"]["np"] = 1.0E+33;
efs["j5"]["m6"] = 1.0E+24;
efs["j5"]["01"] = 1.0E+21;
efs["j5"]["ez"] = 1.0E+27;
efs["j5"]["06"] = 1.0E+18;
efs["j5"]["tq"] = 6.0E+25;
efs["j5"]["u4"] = 6.0E+31;
efs["j5"]["0m"] = 6.0E+28;
	efs["av"]=new Array();
	exs["av"]=new Array();
efs["av"]["k4"] = 0.1;
efs["av"]["j1"] = 0.01;
efs["av"]["mk"] = 0.001;
efs["av"]["kr"] = 0.0001;
efs["av"]["mb"] = 1.0E-7;
efs["av"]["9w"] = 1.0E-10;
efs["av"]["gt"] = 1.0E-13;
efs["av"]["yh"] = 1.0E-16;
efs["av"]["a7"] = 1.0E-19;
efs["av"]["i5"] = 1.0E-22;
efs["av"]["j5"] = 1.0E-25;
efs["av"]["av"] = 1;
efs["av"]["xq"] = 10;
efs["av"]["vk"] = 100;
efs["av"]["2i"] = 100000;
efs["av"]["np"] = 100000000;
efs["av"]["m6"] = 0.1;
efs["av"]["01"] = 0.0001;
efs["av"]["ez"] = 100;
efs["av"]["06"] = 1.0E-7;
efs["av"]["tq"] = 6;
efs["av"]["u4"] = 6000000;
efs["av"]["0m"] = 6000;
	efs["xq"]=new Array();
	exs["xq"]=new Array();
efs["xq"]["k4"] = 0.01;
efs["xq"]["j1"] = 0.001;
efs["xq"]["mk"] = 0.0001;
efs["xq"]["kr"] = 1.0E-5;
efs["xq"]["mb"] = 1.0E-8;
efs["xq"]["9w"] = 1.0E-11;
efs["xq"]["gt"] = 1.0E-14;
efs["xq"]["yh"] = 1.0E-17;
efs["xq"]["a7"] = 1.0E-20;
efs["xq"]["i5"] = 1.0E-23;
efs["xq"]["j5"] = 1.0E-26;
efs["xq"]["av"] = 0.1;
efs["xq"]["xq"] = 1;
efs["xq"]["vk"] = 10;
efs["xq"]["2i"] = 10000;
efs["xq"]["np"] = 10000000;
efs["xq"]["m6"] = 0.01;
efs["xq"]["01"] = 1.0E-5;
efs["xq"]["ez"] = 10;
efs["xq"]["06"] = 1.0E-8;
efs["xq"]["tq"] = 0.6;
efs["xq"]["u4"] = 600000;
efs["xq"]["0m"] = 600;
	efs["vk"]=new Array();
	exs["vk"]=new Array();
efs["vk"]["k4"] = 0.001;
efs["vk"]["j1"] = 0.0001;
efs["vk"]["mk"] = 1.0E-5;
efs["vk"]["kr"] = 1.0E-6;
efs["vk"]["mb"] = 1.0E-9;
efs["vk"]["9w"] = 1.0E-12;
efs["vk"]["gt"] = 1.0E-15;
efs["vk"]["yh"] = 1.0E-18;
efs["vk"]["a7"] = 1.0E-21;
efs["vk"]["i5"] = 1.0E-24;
efs["vk"]["j5"] = 1.0E-27;
efs["vk"]["av"] = 0.01;
efs["vk"]["xq"] = 0.1;
efs["vk"]["vk"] = 1;
efs["vk"]["2i"] = 1000;
efs["vk"]["np"] = 1000000;
efs["vk"]["m6"] = 0.001;
efs["vk"]["01"] = 1.0E-6;
efs["vk"]["ez"] = 1;
efs["vk"]["06"] = 1.0E-9;
efs["vk"]["tq"] = 0.06;
efs["vk"]["u4"] = 60000;
efs["vk"]["0m"] = 60;
	efs["2i"]=new Array();
	exs["2i"]=new Array();
efs["2i"]["k4"] = 1.0E-6;
efs["2i"]["j1"] = 1.0E-7;
efs["2i"]["mk"] = 1.0E-8;
efs["2i"]["kr"] = 1.0E-9;
efs["2i"]["mb"] = 1.0E-12;
efs["2i"]["9w"] = 1.0E-15;
efs["2i"]["gt"] = 1.0E-18;
efs["2i"]["yh"] = 1.0E-21;
efs["2i"]["a7"] = 1.0E-24;
efs["2i"]["i5"] = 1.0E-27;
efs["2i"]["j5"] = 1.0E-30;
efs["2i"]["av"] = 1.0E-5;
efs["2i"]["xq"] = 0.0001;
efs["2i"]["vk"] = 0.001;
efs["2i"]["2i"] = 1;
efs["2i"]["np"] = 1000;
efs["2i"]["m6"] = 1.0E-6;
efs["2i"]["01"] = 1.0E-9;
efs["2i"]["ez"] = 0.001;
efs["2i"]["06"] = 1.0E-12;
efs["2i"]["tq"] = 6.0E-5;
efs["2i"]["u4"] = 60;
efs["2i"]["0m"] = 0.06;
	efs["np"]=new Array();
	exs["np"]=new Array();
efs["np"]["k4"] = 1.0E-9;
efs["np"]["j1"] = 1.0E-10;
efs["np"]["mk"] = 1.0E-11;
efs["np"]["kr"] = 1.0E-12;
efs["np"]["mb"] = 1.0E-15;
efs["np"]["9w"] = 1.0E-18;
efs["np"]["gt"] = 1.0E-21;
efs["np"]["yh"] = 1.0E-24;
efs["np"]["a7"] = 1.0E-27;
efs["np"]["i5"] = 1.0E-30;
efs["np"]["j5"] = 1.0E-33;
efs["np"]["av"] = 1.0E-8;
efs["np"]["xq"] = 1.0E-7;
efs["np"]["vk"] = 1.0E-6;
efs["np"]["2i"] = 0.001;
efs["np"]["np"] = 1;
efs["np"]["m6"] = 1.0E-9;
efs["np"]["01"] = 1.0E-12;
efs["np"]["ez"] = 1.0E-6;
efs["np"]["06"] = 1.0E-15;
efs["np"]["tq"] = 6.0E-8;
efs["np"]["u4"] = 0.06;
efs["np"]["0m"] = 6.0E-5;
	efs["m6"]=new Array();
	exs["m6"]=new Array();
efs["m6"]["k4"] = 1;
efs["m6"]["j1"] = 0.1;
efs["m6"]["mk"] = 0.01;
efs["m6"]["kr"] = 0.001;
efs["m6"]["mb"] = 1.0E-6;
efs["m6"]["9w"] = 1.0E-9;
efs["m6"]["gt"] = 1.0E-12;
efs["m6"]["yh"] = 1.0E-15;
efs["m6"]["a7"] = 1.0E-18;
efs["m6"]["i5"] = 1.0E-21;
efs["m6"]["j5"] = 1.0E-24;
efs["m6"]["av"] = 10;
efs["m6"]["xq"] = 100;
efs["m6"]["vk"] = 1000;
efs["m6"]["2i"] = 1000000;
efs["m6"]["np"] = 1000000000;
efs["m6"]["m6"] = 1;
efs["m6"]["01"] = 0.001;
efs["m6"]["ez"] = 1000;
efs["m6"]["06"] = 1.0E-6;
efs["m6"]["tq"] = 60;
efs["m6"]["u4"] = 60000000;
efs["m6"]["0m"] = 60000;
	efs["01"]=new Array();
	exs["01"]=new Array();
efs["01"]["k4"] = 1000;
efs["01"]["j1"] = 100;
efs["01"]["mk"] = 10;
efs["01"]["kr"] = 1;
efs["01"]["mb"] = 0.001;
efs["01"]["9w"] = 1.0E-6;
efs["01"]["gt"] = 1.0E-9;
efs["01"]["yh"] = 1.0E-12;
efs["01"]["a7"] = 1.0E-15;
efs["01"]["i5"] = 1.0E-18;
efs["01"]["j5"] = 1.0E-21;
efs["01"]["av"] = 10000;
efs["01"]["xq"] = 100000;
efs["01"]["vk"] = 1000000;
efs["01"]["2i"] = 1000000000;
efs["01"]["np"] = 1000000000000;
efs["01"]["m6"] = 1000;
efs["01"]["01"] = 1;
efs["01"]["ez"] = 1000000;
efs["01"]["06"] = 0.001;
efs["01"]["tq"] = 60000;
efs["01"]["u4"] = 60000000000;
efs["01"]["0m"] = 60000000;
	efs["ez"]=new Array();
	exs["ez"]=new Array();
efs["ez"]["k4"] = 0.001;
efs["ez"]["j1"] = 0.0001;
efs["ez"]["mk"] = 1.0E-5;
efs["ez"]["kr"] = 1.0E-6;
efs["ez"]["mb"] = 1.0E-9;
efs["ez"]["9w"] = 1.0E-12;
efs["ez"]["gt"] = 1.0E-15;
efs["ez"]["yh"] = 1.0E-18;
efs["ez"]["a7"] = 1.0E-21;
efs["ez"]["i5"] = 1.0E-24;
efs["ez"]["j5"] = 1.0E-27;
efs["ez"]["av"] = 0.01;
efs["ez"]["xq"] = 0.1;
efs["ez"]["vk"] = 1;
efs["ez"]["2i"] = 1000;
efs["ez"]["np"] = 1000000;
efs["ez"]["m6"] = 0.001;
efs["ez"]["01"] = 1.0E-6;
efs["ez"]["ez"] = 1;
efs["ez"]["06"] = 1.0E-9;
efs["ez"]["tq"] = 0.06;
efs["ez"]["u4"] = 60000;
efs["ez"]["0m"] = 60;
	efs["06"]=new Array();
	exs["06"]=new Array();
efs["06"]["k4"] = 1000000;
efs["06"]["j1"] = 100000;
efs["06"]["mk"] = 10000;
efs["06"]["kr"] = 1000;
efs["06"]["mb"] = 1;
efs["06"]["9w"] = 0.001;
efs["06"]["gt"] = 1.0E-6;
efs["06"]["yh"] = 1.0E-9;
efs["06"]["a7"] = 1.0E-12;
efs["06"]["i5"] = 1.0E-15;
efs["06"]["j5"] = 1.0E-18;
efs["06"]["av"] = 10000000;
efs["06"]["xq"] = 100000000;
efs["06"]["vk"] = 1000000000;
efs["06"]["2i"] = 1000000000000;
efs["06"]["np"] = 1.0E+15;
efs["06"]["m6"] = 1000000;
efs["06"]["01"] = 1000;
efs["06"]["ez"] = 1000000000;
efs["06"]["06"] = 1;
efs["06"]["tq"] = 60000000;
efs["06"]["u4"] = 60000000000000;
efs["06"]["0m"] = 60000000000;
	efs["tq"]=new Array();
	exs["tq"]=new Array();
efs["tq"]["k4"]=0.016666666666667;
efs["tq"]["j1"]=0.0016666666666667;
efs["tq"]["mk"]=0.00016666666666667;
efs["tq"]["kr"]=1.6666666666667E-5;
efs["tq"]["mb"]=1.6666666666667E-8;
efs["tq"]["9w"]=1.6666666666667E-11;
efs["tq"]["gt"]=1.6666666666667E-14;
efs["tq"]["yh"]=1.6666666666667E-17;
efs["tq"]["a7"]=1.6666666666667E-20;
efs["tq"]["i5"]=1.6666666666667E-23;
efs["tq"]["j5"]=1.6666666666667E-26;
efs["tq"]["av"]=0.16666666666667;
efs["tq"]["xq"]=1.6666666666667;
efs["tq"]["vk"]=16.666666666667;
efs["tq"]["2i"]=16666.666666667;
efs["tq"]["np"]=16666666.666667;
efs["tq"]["m6"]=0.016666666666667;
efs["tq"]["01"]=1.6666666666667E-5;
efs["tq"]["ez"]=16.666666666667;
efs["tq"]["06"]=1.6666666666667E-8;
efs["tq"]["tq"]=1;
efs["tq"]["u4"]=1000000;
efs["tq"]["0m"]=1000;
	efs["u4"]=new Array();
	exs["u4"]=new Array();
efs["u4"]["k4"]=1.6666666666667E-8;
efs["u4"]["j1"]=1.6666666666667E-9;
efs["u4"]["mk"]=1.6666666666667E-10;
efs["u4"]["kr"]=1.6666666666667E-11;
efs["u4"]["mb"]=1.6666666666667E-14;
efs["u4"]["9w"]=1.6666666666667E-17;
efs["u4"]["gt"]=1.6666666666667E-20;
efs["u4"]["yh"]=1.6666666666667E-23;
efs["u4"]["a7"]=1.6666666666667E-26;
efs["u4"]["i5"]=1.6666666666667E-29;
efs["u4"]["j5"]=1.6666666666667E-32;
efs["u4"]["av"]=1.6666666666667E-7;
efs["u4"]["xq"]=1.6666666666667E-6;
efs["u4"]["vk"]=1.6666666666667E-5;
efs["u4"]["2i"]=0.016666666666667;
efs["u4"]["np"]=16.666666666667;
efs["u4"]["m6"]=1.6666666666667E-8;
efs["u4"]["01"]=1.6666666666667E-11;
efs["u4"]["ez"]=1.6666666666667E-5;
efs["u4"]["06"]=1.6666666666667E-14;
efs["u4"]["tq"]=1.0E-6;
efs["u4"]["u4"]=1;
efs["u4"]["0m"]=0.001;
	efs["0m"]=new Array();
	exs["0m"]=new Array();
efs["0m"]["k4"]=1.6666666666667E-5;
efs["0m"]["j1"]=1.6666666666667E-6;
efs["0m"]["mk"]=1.6666666666667E-7;
efs["0m"]["kr"]=1.6666666666667E-8;
efs["0m"]["mb"]=1.6666666666667E-11;
efs["0m"]["9w"]=1.6666666666667E-14;
efs["0m"]["gt"]=1.6666666666667E-17;
efs["0m"]["yh"]=1.6666666666667E-20;
efs["0m"]["a7"]=1.6666666666667E-23;
efs["0m"]["i5"]=1.6666666666667E-26;
efs["0m"]["j5"]=1.6666666666667E-29;
efs["0m"]["av"]=0.00016666666666667;
efs["0m"]["xq"]=0.0016666666666667;
efs["0m"]["vk"]=0.016666666666667;
efs["0m"]["2i"]=16.666666666667;
efs["0m"]["np"]=16666.666666667;
efs["0m"]["m6"]=1.6666666666667E-5;
efs["0m"]["01"]=1.6666666666667E-8;
efs["0m"]["ez"]=0.016666666666667;
efs["0m"]["06"]=1.6666666666667E-11;
efs["0m"]["tq"]=0.001;
efs["0m"]["u4"]=1000;
efs["0m"]["0m"]=1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['k4'] = 0;
	    idmap['k4'] = "katal";
	    stat['j1'] = 0;
	    idmap['j1'] = "dkatal";
	    stat['mk'] = 0;
	    idmap['mk'] = "centikatal";
	    stat['kr'] = 0;
	    idmap['kr'] = "millikatal";
	    stat['mb'] = 0;
	    idmap['mb'] = "microkatal";
	    stat['9w'] = 0;
	    idmap['9w'] = "nanokatal";
	    stat['gt'] = 0;
	    idmap['gt'] = "picokatal";
	    stat['yh'] = 0;
	    idmap['yh'] = "femtokatal";
	    stat['a7'] = 0;
	    idmap['a7'] = "attokatal";
	    stat['i5'] = 0;
	    idmap['i5'] = "zeptokatal";
	    stat['j5'] = 0;
	    idmap['j5'] = "yoctokatal";
	    stat['av'] = 0;
	    idmap['av'] = "decakatal";
	    stat['xq'] = 0;
	    idmap['xq'] = "hectokatal";
	    stat['vk'] = 0;
	    idmap['vk'] = "kilokatal";
	    stat['2i'] = 0;
	    idmap['2i'] = "megakatal";
	    stat['np'] = 0;
	    idmap['np'] = "gigakatal";
	    stat['m6'] = 0;
	    idmap['m6'] = "mole/second";
	    stat['01'] = 0;
	    idmap['01'] = "millimole/second";
	    stat['ez'] = 0;
	    idmap['ez'] = "kilomole/second";
	    stat['06'] = 0;
	    idmap['06'] = "micromole/s";
	    stat['tq'] = 0;
	    idmap['tq'] = "mole/minute";
	    stat['u4'] = 0;
	    idmap['u4'] = "micromole/min";
	    stat['0m'] = 0;
	    idmap['0m'] = "millimole/min";
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
	    document.getElementById('k4').value='';
	    document.getElementById('j1').value='';
	    document.getElementById('mk').value='';
	    document.getElementById('kr').value='';
	    document.getElementById('mb').value='';
	    document.getElementById('9w').value='';
	    document.getElementById('gt').value='';
	    document.getElementById('yh').value='';
	    document.getElementById('a7').value='';
	    document.getElementById('i5').value='';
	    document.getElementById('j5').value='';
	    document.getElementById('av').value='';
	    document.getElementById('xq').value='';
	    document.getElementById('vk').value='';
	    document.getElementById('2i').value='';
	    document.getElementById('np').value='';
	    document.getElementById('m6').value='';
	    document.getElementById('01').value='';
	    document.getElementById('ez').value='';
	    document.getElementById('06').value='';
	    document.getElementById('tq').value='';
	    document.getElementById('u4').value='';
	    document.getElementById('0m').value='';
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

<div class="mtitle">Enzyme Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;k42&#39;)" id="k42" style="color: blue; font-weight: bold;">1.&nbsp;katal <font color="black"><u><i>[kat]</i></u></font>:</div>
<div class="nbox"><input id="k4" onblur="setName(&#39;k4&#39;)" autocomplete="off" onkeyup="convertcal(&#39;k4&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;j12&#39;)" id="j12">2.&nbsp;dkatal <font color="black"><u><i>[dkat]</i></u></font>:</div>
<div class="nbox"><input id="j1" onblur="setName(&#39;j1&#39;)" autocomplete="off" onkeyup="convertcal(&#39;j1&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;mk2&#39;)" id="mk2">3.&nbsp;centikatal <font color="black"><u><i>[ckat]</i></u></font>:</div>
<div class="nbox"><input id="mk" onblur="setName(&#39;mk&#39;)" autocomplete="off" onkeyup="convertcal(&#39;mk&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;kr2&#39;)" id="kr2">4.&nbsp;millikatal <font color="black"><u><i>[mkat]</i></u></font>:</div>
<div class="nbox"><input id="kr" onblur="setName(&#39;kr&#39;)" autocomplete="off" onkeyup="convertcal(&#39;kr&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;mb2&#39;)" id="mb2">5.&nbsp;microkatal <font color="black"><u><i>[ukat]</i></u></font>:</div>
<div class="nbox"><input id="mb" onblur="setName(&#39;mb&#39;)" autocomplete="off" onkeyup="convertcal(&#39;mb&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;9w2&#39;)" id="9w2">6.&nbsp;nanokatal <font color="black"><u><i>[nkat]</i></u></font>:</div>
<div class="nbox"><input id="9w" onblur="setName(&#39;9w&#39;)" autocomplete="off" onkeyup="convertcal(&#39;9w&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gt2&#39;)" id="gt2">7.&nbsp;picokatal <font color="black"><u><i>[pkat]</i></u></font>:</div>
<div class="nbox"><input id="gt" onblur="setName(&#39;gt&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gt&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;yh2&#39;)" id="yh2">8.&nbsp;femtokatal <font color="black"><u><i>[fkat]</i></u></font>:</div>
<div class="nbox"><input id="yh" onblur="setName(&#39;yh&#39;)" autocomplete="off" onkeyup="convertcal(&#39;yh&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;a72&#39;)" id="a72">9.&nbsp;attokatal <font color="black"><u><i>[akat]</i></u></font>:</div>
<div class="nbox"><input id="a7" onblur="setName(&#39;a7&#39;)" autocomplete="off" onkeyup="convertcal(&#39;a7&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;i52&#39;)" id="i52">10.&nbsp;zeptokatal <font color="black"><u><i>[zkat]</i></u></font>:</div>
<div class="nbox"><input id="i5" onblur="setName(&#39;i5&#39;)" autocomplete="off" onkeyup="convertcal(&#39;i5&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;j52&#39;)" id="j52">11.&nbsp;yoctokatal <font color="black"><u><i>[ykat]</i></u></font>:</div>
<div class="nbox"><input id="j5" onblur="setName(&#39;j5&#39;)" autocomplete="off" onkeyup="convertcal(&#39;j5&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;av2&#39;)" id="av2">12.&nbsp;decakatal <font color="black"><u><i>[dakat]</i></u></font>:</div>
<div class="nbox"><input id="av" onblur="setName(&#39;av&#39;)" autocomplete="off" onkeyup="convertcal(&#39;av&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;xq2&#39;)" id="xq2">13.&nbsp;hectokatal <font color="black"><u><i>[hkat]</i></u></font>:</div>
<div class="nbox"><input id="xq" onblur="setName(&#39;xq&#39;)" autocomplete="off" onkeyup="convertcal(&#39;xq&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;vk2&#39;)" id="vk2">14.&nbsp;kilokatal <font color="black"><u><i>[kkat]</i></u></font>:</div>
<div class="nbox"><input id="vk" onblur="setName(&#39;vk&#39;)" autocomplete="off" onkeyup="convertcal(&#39;vk&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;2i2&#39;)" id="2i2">15.&nbsp;megakatal <font color="black"><u><i>[Mkat]</i></u></font>:</div>
<div class="nbox"><input id="2i" onblur="setName(&#39;2i&#39;)" autocomplete="off" onkeyup="convertcal(&#39;2i&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;np2&#39;)" id="np2">16.&nbsp;gigakatal <font color="black"><u><i>[Gkat]</i></u></font>:</div>
<div class="nbox"><input id="np" onblur="setName(&#39;np&#39;)" autocomplete="off" onkeyup="convertcal(&#39;np&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;m62&#39;)" id="m62">17.&nbsp;mole/second <font color="black"><u><i>[mol/s]</i></u></font>:</div>
<div class="nbox"><input id="m6" onblur="setName(&#39;m6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;m6&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;012&#39;)" id="012">18.&nbsp;millimole/second <font color="black"><u><i>[mmol/s]</i></u></font>:</div>
<div class="nbox"><input id="01" onblur="setName(&#39;01&#39;)" autocomplete="off" onkeyup="convertcal(&#39;01&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ez2&#39;)" id="ez2">19.&nbsp;kilomole/second <font color="black"><u><i>[kmol/s]</i></u></font>:</div>
<div class="nbox"><input id="ez" onblur="setName(&#39;ez&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ez&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;062&#39;)" id="062">20.&nbsp;micromole/s <font color="black"><u><i>[umol/s]</i></u></font>:</div>
<div class="nbox"><input id="06" onblur="setName(&#39;06&#39;)" autocomplete="off" onkeyup="convertcal(&#39;06&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;tq2&#39;)" id="tq2">21.&nbsp;mole/minute <font color="black"><u><i>[mol/min]</i></u></font>:</div>
<div class="nbox"><input id="tq" onblur="setName(&#39;tq&#39;)" autocomplete="off" onkeyup="convertcal(&#39;tq&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;u42&#39;)" id="u42">22.&nbsp;micromole/min <font color="black"><u><i>[umol/min]</i></u></font>:</div>
<div class="nbox"><input id="u4" onblur="setName(&#39;u4&#39;)" autocomplete="off" onkeyup="convertcal(&#39;u4&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;0m2&#39;)" id="0m2">23.&nbsp;millimole/min <font color="black"><u><i>[mmol/min]</i></u></font>:</div>
<div class="nbox"><input id="0m" onblur="setName(&#39;0m&#39;)" autocomplete="off" onkeyup="convertcal(&#39;0m&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;a72&#39;)"><u>akat</u></span>, <span class="selitem" onclick="sel(&#39;mk2&#39;)"><u>ckat</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)"><u>dakat</u></span>, <span class="selitem" onclick="sel(&#39;j12&#39;)"><u>dkat</u></span>, <span class="selitem" onclick="sel(&#39;yh2&#39;)"><u>fkat</u></span>, <span class="selitem" onclick="sel(&#39;np2&#39;)"><u>Gkat</u></span>, <span class="selitem" onclick="sel(&#39;xq2&#39;)"><u>hkat</u></span>, <span class="selitem" onclick="sel(&#39;k42&#39;)"><u>kat</u></span>, <span class="selitem" onclick="sel(&#39;vk2&#39;)"><u>kkat</u></span>, <span class="selitem" onclick="sel(&#39;ez2&#39;)"><u>kmol/s</u></span>, <span class="selitem" onclick="sel(&#39;kr2&#39;)"><u>mkat</u></span>, <span class="selitem" onclick="sel(&#39;2i2&#39;)"><u>Mkat</u></span>, <span class="selitem" onclick="sel(&#39;0m2&#39;)"><u>mmol/min</u></span>, <span class="selitem" onclick="sel(&#39;012&#39;)"><u>mmol/s</u></span>, <span class="selitem" onclick="sel(&#39;tq2&#39;)"><u>mol/min</u></span>, <span class="selitem" onclick="sel(&#39;m62&#39;)"><u>mol/s</u></span>, <span class="selitem" onclick="sel(&#39;9w2&#39;)"><u>nkat</u></span>, <span class="selitem" onclick="sel(&#39;gt2&#39;)"><u>pkat</u></span>, <span class="selitem" onclick="sel(&#39;mb2&#39;)"><u>ukat</u></span>, <span class="selitem" onclick="sel(&#39;u42&#39;)"><u>umol/min</u></span>, <span class="selitem" onclick="sel(&#39;062&#39;)"><u>umol/s</u></span>, <span class="selitem" onclick="sel(&#39;j52&#39;)"><u>ykat</u></span>, <span class="selitem" onclick="sel(&#39;i52&#39;)"><u>zkat</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;a72&#39;)" value="a7"><u>attokatal</u></span>, <span class="selitem" onclick="sel(&#39;mk2&#39;)" value="mk"><u>centikatal</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)" value="av"><u>decakatal</u></span>, <span class="selitem" onclick="sel(&#39;j12&#39;)" value="j1"><u>dkatal</u></span>, <span class="selitem" onclick="sel(&#39;yh2&#39;)" value="yh"><u>femtokatal</u></span>, <span class="selitem" onclick="sel(&#39;np2&#39;)" value="np"><u>gigakatal</u></span>, <span class="selitem" onclick="sel(&#39;xq2&#39;)" value="xq"><u>hectokatal</u></span>, <span class="selitem" onclick="sel(&#39;k42&#39;)" value="k4"><u>katal</u></span>, <span class="selitem" onclick="sel(&#39;vk2&#39;)" value="vk"><u>kilokatal</u></span>, <span class="selitem" onclick="sel(&#39;ez2&#39;)" value="ez"><u>kilomole/second</u></span>, <span class="selitem" onclick="sel(&#39;2i2&#39;)" value="2i"><u>megakatal</u></span>, <span class="selitem" onclick="sel(&#39;mb2&#39;)" value="mb"><u>microkatal</u></span>, <span class="selitem" onclick="sel(&#39;u42&#39;)" value="u4"><u>micromole/min</u></span>, <span class="selitem" onclick="sel(&#39;062&#39;)" value="06"><u>micromole/s</u></span>, <span class="selitem" onclick="sel(&#39;kr2&#39;)" value="kr"><u>millikatal</u></span>, <span class="selitem" onclick="sel(&#39;0m2&#39;)" value="0m"><u>millimole/min</u></span>, <span class="selitem" onclick="sel(&#39;012&#39;)" value="01"><u>millimole/second</u></span>, <span class="selitem" onclick="sel(&#39;tq2&#39;)" value="tq"><u>mole/minute</u></span>, <span class="selitem" onclick="sel(&#39;m62&#39;)" value="m6"><u>mole/second</u></span>, <span class="selitem" onclick="sel(&#39;9w2&#39;)" value="9w"><u>nanokatal</u></span>, <span class="selitem" onclick="sel(&#39;gt2&#39;)" value="gt"><u>picokatal</u></span>, <span class="selitem" onclick="sel(&#39;j52&#39;)" value="j5"><u>yoctokatal</u></span>, <span class="selitem" onclick="sel(&#39;i52&#39;)" value="i5"><u>zeptokatal</u></span></p>

</div>
<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>