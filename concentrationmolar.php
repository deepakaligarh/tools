<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Concentration molar Conversion Online -- </title>
<meta name="keywords" content="Concentration molar, Converter">
<meta name="description" content="Concentration molar Unit Converter Online">
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
	efs["rh"]=new Array();
	exs["rh"]=new Array();
efs["rh"]["rh"] = 1;
efs["rh"]["fx"] = 1000;
efs["rh"]["o6"] = 1000;
efs["rh"]["47"] = 1000000;
efs["rh"]["jp"] = 1000000000;
efs["rh"]["12"] = 1000;
efs["rh"]["az"] = 1000000;
efs["rh"]["av"] = 1000000000;
efs["rh"]["zo"] = 1000000000000;
efs["rh"]["gv"] = 0.001;
efs["rh"]["ck"] = 1;
efs["rh"]["4d"] = 1000;
efs["rh"]["1q"] = 1000000;
efs["rh"]["f0"] = 1000;
efs["rh"]["3r"] = 0.001;
efs["rh"]["3u"] = 1;
efs["rh"]["v2"] = 1000;
efs["rh"]["oj"] = 0.001;
efs["rh"]["7u"] = 1.0E-6;
efs["rh"]["fd"] = 1.0E-9;
efs["rh"]["b0"] = 1.0E-6;
efs["rh"]["ph"] = 0.001;
efs["rh"]["iq"] = 1;
efs["rh"]["yg"] = 1000;
efs["rh"]["cx"] = 1;
efs["rh"]["gm"] = 0.001;
efs["rh"]["5q"] = 1.0E-6;
efs["rh"]["sm"] = 1.0E-9;
efs["rh"]["jg"] = 1.0E-12;
	efs["fx"]=new Array();
	exs["fx"]=new Array();
efs["fx"]["rh"] = 0.001;
efs["fx"]["fx"] = 1;
efs["fx"]["o6"] = 1;
efs["fx"]["47"] = 1000;
efs["fx"]["jp"] = 1000000;
efs["fx"]["12"] = 1;
efs["fx"]["az"] = 1000;
efs["fx"]["av"] = 1000000;
efs["fx"]["zo"] = 1000000000;
efs["fx"]["gv"] = 1.0E-6;
efs["fx"]["ck"] = 0.001;
efs["fx"]["4d"] = 1;
efs["fx"]["1q"] = 1000;
efs["fx"]["f0"] = 1;
efs["fx"]["3r"] = 1.0E-6;
efs["fx"]["3u"] = 0.001;
efs["fx"]["v2"] = 1;
efs["fx"]["oj"] = 1.0E-6;
efs["fx"]["7u"] = 1.0E-9;
efs["fx"]["fd"] = 1.0E-12;
efs["fx"]["b0"] = 1.0E-9;
efs["fx"]["ph"] = 1.0E-6;
efs["fx"]["iq"] = 0.001;
efs["fx"]["yg"] = 1;
efs["fx"]["cx"] = 0.001;
efs["fx"]["gm"] = 1.0E-6;
efs["fx"]["5q"] = 1.0E-9;
efs["fx"]["sm"] = 1.0E-12;
efs["fx"]["jg"] = 1.0E-15;
	efs["o6"]=new Array();
	exs["o6"]=new Array();
efs["o6"]["rh"] = 0.001;
efs["o6"]["fx"] = 1;
efs["o6"]["o6"] = 1;
efs["o6"]["47"] = 1000;
efs["o6"]["jp"] = 1000000;
efs["o6"]["12"] = 1;
efs["o6"]["az"] = 1000;
efs["o6"]["av"] = 1000000;
efs["o6"]["zo"] = 1000000000;
efs["o6"]["gv"] = 1.0E-6;
efs["o6"]["ck"] = 0.001;
efs["o6"]["4d"] = 1;
efs["o6"]["1q"] = 1000;
efs["o6"]["f0"] = 1;
efs["o6"]["3r"] = 1.0E-6;
efs["o6"]["3u"] = 0.001;
efs["o6"]["v2"] = 1;
efs["o6"]["oj"] = 1.0E-6;
efs["o6"]["7u"] = 1.0E-9;
efs["o6"]["fd"] = 1.0E-12;
efs["o6"]["b0"] = 1.0E-9;
efs["o6"]["ph"] = 1.0E-6;
efs["o6"]["iq"] = 0.001;
efs["o6"]["yg"] = 1;
efs["o6"]["cx"] = 0.001;
efs["o6"]["gm"] = 1.0E-6;
efs["o6"]["5q"] = 1.0E-9;
efs["o6"]["sm"] = 1.0E-12;
efs["o6"]["jg"] = 1.0E-15;
	efs["47"]=new Array();
	exs["47"]=new Array();
efs["47"]["rh"] = 1.0E-6;
efs["47"]["fx"] = 0.001;
efs["47"]["o6"] = 0.001;
efs["47"]["47"] = 1;
efs["47"]["jp"] = 1000;
efs["47"]["12"] = 0.001;
efs["47"]["az"] = 1;
efs["47"]["av"] = 1000;
efs["47"]["zo"] = 1000000;
efs["47"]["gv"] = 1.0E-9;
efs["47"]["ck"] = 1.0E-6;
efs["47"]["4d"] = 0.001;
efs["47"]["1q"] = 1;
efs["47"]["f0"] = 0.001;
efs["47"]["3r"] = 1.0E-9;
efs["47"]["3u"] = 1.0E-6;
efs["47"]["v2"] = 0.001;
efs["47"]["oj"] = 1.0E-9;
efs["47"]["7u"] = 1.0E-12;
efs["47"]["fd"] = 1.0E-15;
efs["47"]["b0"] = 1.0E-12;
efs["47"]["ph"] = 1.0E-9;
efs["47"]["iq"] = 1.0E-6;
efs["47"]["yg"] = 0.001;
efs["47"]["cx"] = 1.0E-6;
efs["47"]["gm"] = 1.0E-9;
efs["47"]["5q"] = 1.0E-12;
efs["47"]["sm"] = 1.0E-15;
efs["47"]["jg"] = 1.0E-18;
	efs["jp"]=new Array();
	exs["jp"]=new Array();
efs["jp"]["rh"] = 1.0E-9;
efs["jp"]["fx"] = 1.0E-6;
efs["jp"]["o6"] = 1.0E-6;
efs["jp"]["47"] = 0.001;
efs["jp"]["jp"] = 1;
efs["jp"]["12"] = 1.0E-6;
efs["jp"]["az"] = 0.001;
efs["jp"]["av"] = 1;
efs["jp"]["zo"] = 1000;
efs["jp"]["gv"] = 1.0E-12;
efs["jp"]["ck"] = 1.0E-9;
efs["jp"]["4d"] = 1.0E-6;
efs["jp"]["1q"] = 0.001;
efs["jp"]["f0"] = 1.0E-6;
efs["jp"]["3r"] = 1.0E-12;
efs["jp"]["3u"] = 1.0E-9;
efs["jp"]["v2"] = 1.0E-6;
efs["jp"]["oj"] = 1.0E-12;
efs["jp"]["7u"] = 1.0E-15;
efs["jp"]["fd"] = 1.0E-18;
efs["jp"]["b0"] = 1.0E-15;
efs["jp"]["ph"] = 1.0E-12;
efs["jp"]["iq"] = 1.0E-9;
efs["jp"]["yg"] = 1.0E-6;
efs["jp"]["cx"] = 1.0E-9;
efs["jp"]["gm"] = 1.0E-12;
efs["jp"]["5q"] = 1.0E-15;
efs["jp"]["sm"] = 1.0E-18;
efs["jp"]["jg"] = 1.0E-21;
	efs["12"]=new Array();
	exs["12"]=new Array();
efs["12"]["rh"] = 0.001;
efs["12"]["fx"] = 1;
efs["12"]["o6"] = 1;
efs["12"]["47"] = 1000;
efs["12"]["jp"] = 1000000;
efs["12"]["12"] = 1;
efs["12"]["az"] = 1000;
efs["12"]["av"] = 1000000;
efs["12"]["zo"] = 1000000000;
efs["12"]["gv"] = 1.0E-6;
efs["12"]["ck"] = 0.001;
efs["12"]["4d"] = 1;
efs["12"]["1q"] = 1000;
efs["12"]["f0"] = 1;
efs["12"]["3r"] = 1.0E-6;
efs["12"]["3u"] = 0.001;
efs["12"]["v2"] = 1;
efs["12"]["oj"] = 1.0E-6;
efs["12"]["7u"] = 1.0E-9;
efs["12"]["fd"] = 1.0E-12;
efs["12"]["b0"] = 1.0E-9;
efs["12"]["ph"] = 1.0E-6;
efs["12"]["iq"] = 0.001;
efs["12"]["yg"] = 1;
efs["12"]["cx"] = 0.001;
efs["12"]["gm"] = 1.0E-6;
efs["12"]["5q"] = 1.0E-9;
efs["12"]["sm"] = 1.0E-12;
efs["12"]["jg"] = 1.0E-15;
	efs["az"]=new Array();
	exs["az"]=new Array();
efs["az"]["rh"] = 1.0E-6;
efs["az"]["fx"] = 0.001;
efs["az"]["o6"] = 0.001;
efs["az"]["47"] = 1;
efs["az"]["jp"] = 1000;
efs["az"]["12"] = 0.001;
efs["az"]["az"] = 1;
efs["az"]["av"] = 1000;
efs["az"]["zo"] = 1000000;
efs["az"]["gv"] = 1.0E-9;
efs["az"]["ck"] = 1.0E-6;
efs["az"]["4d"] = 0.001;
efs["az"]["1q"] = 1;
efs["az"]["f0"] = 0.001;
efs["az"]["3r"] = 1.0E-9;
efs["az"]["3u"] = 1.0E-6;
efs["az"]["v2"] = 0.001;
efs["az"]["oj"] = 1.0E-9;
efs["az"]["7u"] = 1.0E-12;
efs["az"]["fd"] = 1.0E-15;
efs["az"]["b0"] = 1.0E-12;
efs["az"]["ph"] = 1.0E-9;
efs["az"]["iq"] = 1.0E-6;
efs["az"]["yg"] = 0.001;
efs["az"]["cx"] = 1.0E-6;
efs["az"]["gm"] = 1.0E-9;
efs["az"]["5q"] = 1.0E-12;
efs["az"]["sm"] = 1.0E-15;
efs["az"]["jg"] = 1.0E-18;
	efs["av"]=new Array();
	exs["av"]=new Array();
efs["av"]["rh"] = 1.0E-9;
efs["av"]["fx"] = 1.0E-6;
efs["av"]["o6"] = 1.0E-6;
efs["av"]["47"] = 0.001;
efs["av"]["jp"] = 1;
efs["av"]["12"] = 1.0E-6;
efs["av"]["az"] = 0.001;
efs["av"]["av"] = 1;
efs["av"]["zo"] = 1000;
efs["av"]["gv"] = 1.0E-12;
efs["av"]["ck"] = 1.0E-9;
efs["av"]["4d"] = 1.0E-6;
efs["av"]["1q"] = 0.001;
efs["av"]["f0"] = 1.0E-6;
efs["av"]["3r"] = 1.0E-12;
efs["av"]["3u"] = 1.0E-9;
efs["av"]["v2"] = 1.0E-6;
efs["av"]["oj"] = 1.0E-12;
efs["av"]["7u"] = 1.0E-15;
efs["av"]["fd"] = 1.0E-18;
efs["av"]["b0"] = 1.0E-15;
efs["av"]["ph"] = 1.0E-12;
efs["av"]["iq"] = 1.0E-9;
efs["av"]["yg"] = 1.0E-6;
efs["av"]["cx"] = 1.0E-9;
efs["av"]["gm"] = 1.0E-12;
efs["av"]["5q"] = 1.0E-15;
efs["av"]["sm"] = 1.0E-18;
efs["av"]["jg"] = 1.0E-21;
	efs["zo"]=new Array();
	exs["zo"]=new Array();
efs["zo"]["rh"] = 1.0E-12;
efs["zo"]["fx"] = 1.0E-9;
efs["zo"]["o6"] = 1.0E-9;
efs["zo"]["47"] = 1.0E-6;
efs["zo"]["jp"] = 0.001;
efs["zo"]["12"] = 1.0E-9;
efs["zo"]["az"] = 1.0E-6;
efs["zo"]["av"] = 0.001;
efs["zo"]["zo"] = 1;
efs["zo"]["gv"] = 1.0E-15;
efs["zo"]["ck"] = 1.0E-12;
efs["zo"]["4d"] = 1.0E-9;
efs["zo"]["1q"] = 1.0E-6;
efs["zo"]["f0"] = 1.0E-9;
efs["zo"]["3r"] = 1.0E-15;
efs["zo"]["3u"] = 1.0E-12;
efs["zo"]["v2"] = 1.0E-9;
efs["zo"]["oj"] = 1.0E-15;
efs["zo"]["7u"] = 1.0E-18;
efs["zo"]["fd"] = 1.0E-21;
efs["zo"]["b0"] = 1.0E-18;
efs["zo"]["ph"] = 1.0E-15;
efs["zo"]["iq"] = 1.0E-12;
efs["zo"]["yg"] = 1.0E-9;
efs["zo"]["cx"] = 1.0E-12;
efs["zo"]["gm"] = 1.0E-15;
efs["zo"]["5q"] = 1.0E-18;
efs["zo"]["sm"] = 1.0E-21;
efs["zo"]["jg"] = 1.0E-24;
	efs["gv"]=new Array();
	exs["gv"]=new Array();
efs["gv"]["rh"] = 1000;
efs["gv"]["fx"] = 1000000;
efs["gv"]["o6"] = 1000000;
efs["gv"]["47"] = 1000000000;
efs["gv"]["jp"] = 1000000000000;
efs["gv"]["12"] = 1000000;
efs["gv"]["az"] = 1000000000;
efs["gv"]["av"] = 1000000000000;
efs["gv"]["zo"] = 1.0E+15;
efs["gv"]["gv"] = 1;
efs["gv"]["ck"] = 1000;
efs["gv"]["4d"] = 1000000;
efs["gv"]["1q"] = 1000000000;
efs["gv"]["f0"] = 1000000;
efs["gv"]["3r"] = 1;
efs["gv"]["3u"] = 1000;
efs["gv"]["v2"] = 1000000;
efs["gv"]["oj"] = 1;
efs["gv"]["7u"] = 0.001;
efs["gv"]["fd"] = 1.0E-6;
efs["gv"]["b0"] = 0.001;
efs["gv"]["ph"] = 1;
efs["gv"]["iq"] = 1000;
efs["gv"]["yg"] = 1000000;
efs["gv"]["cx"] = 1000;
efs["gv"]["gm"] = 1;
efs["gv"]["5q"] = 0.001;
efs["gv"]["sm"] = 1.0E-6;
efs["gv"]["jg"] = 1.0E-9;
	efs["ck"]=new Array();
	exs["ck"]=new Array();
efs["ck"]["rh"] = 1;
efs["ck"]["fx"] = 1000;
efs["ck"]["o6"] = 1000;
efs["ck"]["47"] = 1000000;
efs["ck"]["jp"] = 1000000000;
efs["ck"]["12"] = 1000;
efs["ck"]["az"] = 1000000;
efs["ck"]["av"] = 1000000000;
efs["ck"]["zo"] = 1000000000000;
efs["ck"]["gv"] = 0.001;
efs["ck"]["ck"] = 1;
efs["ck"]["4d"] = 1000;
efs["ck"]["1q"] = 1000000;
efs["ck"]["f0"] = 1000;
efs["ck"]["3r"] = 0.001;
efs["ck"]["3u"] = 1;
efs["ck"]["v2"] = 1000;
efs["ck"]["oj"] = 0.001;
efs["ck"]["7u"] = 1.0E-6;
efs["ck"]["fd"] = 1.0E-9;
efs["ck"]["b0"] = 1.0E-6;
efs["ck"]["ph"] = 0.001;
efs["ck"]["iq"] = 1;
efs["ck"]["yg"] = 1000;
efs["ck"]["cx"] = 1;
efs["ck"]["gm"] = 0.001;
efs["ck"]["5q"] = 1.0E-6;
efs["ck"]["sm"] = 1.0E-9;
efs["ck"]["jg"] = 1.0E-12;
	efs["4d"]=new Array();
	exs["4d"]=new Array();
efs["4d"]["rh"] = 0.001;
efs["4d"]["fx"] = 1;
efs["4d"]["o6"] = 1;
efs["4d"]["47"] = 1000;
efs["4d"]["jp"] = 1000000;
efs["4d"]["12"] = 1;
efs["4d"]["az"] = 1000;
efs["4d"]["av"] = 1000000;
efs["4d"]["zo"] = 1000000000;
efs["4d"]["gv"] = 1.0E-6;
efs["4d"]["ck"] = 0.001;
efs["4d"]["4d"] = 1;
efs["4d"]["1q"] = 1000;
efs["4d"]["f0"] = 1;
efs["4d"]["3r"] = 1.0E-6;
efs["4d"]["3u"] = 0.001;
efs["4d"]["v2"] = 1;
efs["4d"]["oj"] = 1.0E-6;
efs["4d"]["7u"] = 1.0E-9;
efs["4d"]["fd"] = 1.0E-12;
efs["4d"]["b0"] = 1.0E-9;
efs["4d"]["ph"] = 1.0E-6;
efs["4d"]["iq"] = 0.001;
efs["4d"]["yg"] = 1;
efs["4d"]["cx"] = 0.001;
efs["4d"]["gm"] = 1.0E-6;
efs["4d"]["5q"] = 1.0E-9;
efs["4d"]["sm"] = 1.0E-12;
efs["4d"]["jg"] = 1.0E-15;
	efs["1q"]=new Array();
	exs["1q"]=new Array();
efs["1q"]["rh"] = 1.0E-6;
efs["1q"]["fx"] = 0.001;
efs["1q"]["o6"] = 0.001;
efs["1q"]["47"] = 1;
efs["1q"]["jp"] = 1000;
efs["1q"]["12"] = 0.001;
efs["1q"]["az"] = 1;
efs["1q"]["av"] = 1000;
efs["1q"]["zo"] = 1000000;
efs["1q"]["gv"] = 1.0E-9;
efs["1q"]["ck"] = 1.0E-6;
efs["1q"]["4d"] = 0.001;
efs["1q"]["1q"] = 1;
efs["1q"]["f0"] = 0.001;
efs["1q"]["3r"] = 1.0E-9;
efs["1q"]["3u"] = 1.0E-6;
efs["1q"]["v2"] = 0.001;
efs["1q"]["oj"] = 1.0E-9;
efs["1q"]["7u"] = 1.0E-12;
efs["1q"]["fd"] = 1.0E-15;
efs["1q"]["b0"] = 1.0E-12;
efs["1q"]["ph"] = 1.0E-9;
efs["1q"]["iq"] = 1.0E-6;
efs["1q"]["yg"] = 0.001;
efs["1q"]["cx"] = 1.0E-6;
efs["1q"]["gm"] = 1.0E-9;
efs["1q"]["5q"] = 1.0E-12;
efs["1q"]["sm"] = 1.0E-15;
efs["1q"]["jg"] = 1.0E-18;
	efs["f0"]=new Array();
	exs["f0"]=new Array();
efs["f0"]["rh"] = 0.001;
efs["f0"]["fx"] = 1;
efs["f0"]["o6"] = 1;
efs["f0"]["47"] = 1000;
efs["f0"]["jp"] = 1000000;
efs["f0"]["12"] = 1;
efs["f0"]["az"] = 1000;
efs["f0"]["av"] = 1000000;
efs["f0"]["zo"] = 1000000000;
efs["f0"]["gv"] = 1.0E-6;
efs["f0"]["ck"] = 0.001;
efs["f0"]["4d"] = 1;
efs["f0"]["1q"] = 1000;
efs["f0"]["f0"] = 1;
efs["f0"]["3r"] = 1.0E-6;
efs["f0"]["3u"] = 0.001;
efs["f0"]["v2"] = 1;
efs["f0"]["oj"] = 1.0E-6;
efs["f0"]["7u"] = 1.0E-9;
efs["f0"]["fd"] = 1.0E-12;
efs["f0"]["b0"] = 1.0E-9;
efs["f0"]["ph"] = 1.0E-6;
efs["f0"]["iq"] = 0.001;
efs["f0"]["yg"] = 1;
efs["f0"]["cx"] = 0.001;
efs["f0"]["gm"] = 1.0E-6;
efs["f0"]["5q"] = 1.0E-9;
efs["f0"]["sm"] = 1.0E-12;
efs["f0"]["jg"] = 1.0E-15;
	efs["3r"]=new Array();
	exs["3r"]=new Array();
efs["3r"]["rh"] = 1000;
efs["3r"]["fx"] = 1000000;
efs["3r"]["o6"] = 1000000;
efs["3r"]["47"] = 1000000000;
efs["3r"]["jp"] = 1000000000000;
efs["3r"]["12"] = 1000000;
efs["3r"]["az"] = 1000000000;
efs["3r"]["av"] = 1000000000000;
efs["3r"]["zo"] = 1.0E+15;
efs["3r"]["gv"] = 1;
efs["3r"]["ck"] = 1000;
efs["3r"]["4d"] = 1000000;
efs["3r"]["1q"] = 1000000000;
efs["3r"]["f0"] = 1000000;
efs["3r"]["3r"] = 1;
efs["3r"]["3u"] = 1000;
efs["3r"]["v2"] = 1000000;
efs["3r"]["oj"] = 1;
efs["3r"]["7u"] = 0.001;
efs["3r"]["fd"] = 1.0E-6;
efs["3r"]["b0"] = 0.001;
efs["3r"]["ph"] = 1;
efs["3r"]["iq"] = 1000;
efs["3r"]["yg"] = 1000000;
efs["3r"]["cx"] = 1000;
efs["3r"]["gm"] = 1;
efs["3r"]["5q"] = 0.001;
efs["3r"]["sm"] = 1.0E-6;
efs["3r"]["jg"] = 1.0E-9;
	efs["3u"]=new Array();
	exs["3u"]=new Array();
efs["3u"]["rh"] = 1;
efs["3u"]["fx"] = 1000;
efs["3u"]["o6"] = 1000;
efs["3u"]["47"] = 1000000;
efs["3u"]["jp"] = 1000000000;
efs["3u"]["12"] = 1000;
efs["3u"]["az"] = 1000000;
efs["3u"]["av"] = 1000000000;
efs["3u"]["zo"] = 1000000000000;
efs["3u"]["gv"] = 0.001;
efs["3u"]["ck"] = 1;
efs["3u"]["4d"] = 1000;
efs["3u"]["1q"] = 1000000;
efs["3u"]["f0"] = 1000;
efs["3u"]["3r"] = 0.001;
efs["3u"]["3u"] = 1;
efs["3u"]["v2"] = 1000;
efs["3u"]["oj"] = 0.001;
efs["3u"]["7u"] = 1.0E-6;
efs["3u"]["fd"] = 1.0E-9;
efs["3u"]["b0"] = 1.0E-6;
efs["3u"]["ph"] = 0.001;
efs["3u"]["iq"] = 1;
efs["3u"]["yg"] = 1000;
efs["3u"]["cx"] = 1;
efs["3u"]["gm"] = 0.001;
efs["3u"]["5q"] = 1.0E-6;
efs["3u"]["sm"] = 1.0E-9;
efs["3u"]["jg"] = 1.0E-12;
	efs["v2"]=new Array();
	exs["v2"]=new Array();
efs["v2"]["rh"] = 0.001;
efs["v2"]["fx"] = 1;
efs["v2"]["o6"] = 1;
efs["v2"]["47"] = 1000;
efs["v2"]["jp"] = 1000000;
efs["v2"]["12"] = 1;
efs["v2"]["az"] = 1000;
efs["v2"]["av"] = 1000000;
efs["v2"]["zo"] = 1000000000;
efs["v2"]["gv"] = 1.0E-6;
efs["v2"]["ck"] = 0.001;
efs["v2"]["4d"] = 1;
efs["v2"]["1q"] = 1000;
efs["v2"]["f0"] = 1;
efs["v2"]["3r"] = 1.0E-6;
efs["v2"]["3u"] = 0.001;
efs["v2"]["v2"] = 1;
efs["v2"]["oj"] = 1.0E-6;
efs["v2"]["7u"] = 1.0E-9;
efs["v2"]["fd"] = 1.0E-12;
efs["v2"]["b0"] = 1.0E-9;
efs["v2"]["ph"] = 1.0E-6;
efs["v2"]["iq"] = 0.001;
efs["v2"]["yg"] = 1;
efs["v2"]["cx"] = 0.001;
efs["v2"]["gm"] = 1.0E-6;
efs["v2"]["5q"] = 1.0E-9;
efs["v2"]["sm"] = 1.0E-12;
efs["v2"]["jg"] = 1.0E-15;
	efs["oj"]=new Array();
	exs["oj"]=new Array();
efs["oj"]["rh"] = 1000;
efs["oj"]["fx"] = 1000000;
efs["oj"]["o6"] = 1000000;
efs["oj"]["47"] = 1000000000;
efs["oj"]["jp"] = 1000000000000;
efs["oj"]["12"] = 1000000;
efs["oj"]["az"] = 1000000000;
efs["oj"]["av"] = 1000000000000;
efs["oj"]["zo"] = 1.0E+15;
efs["oj"]["gv"] = 1;
efs["oj"]["ck"] = 1000;
efs["oj"]["4d"] = 1000000;
efs["oj"]["1q"] = 1000000000;
efs["oj"]["f0"] = 1000000;
efs["oj"]["3r"] = 1;
efs["oj"]["3u"] = 1000;
efs["oj"]["v2"] = 1000000;
efs["oj"]["oj"] = 1;
efs["oj"]["7u"] = 0.001;
efs["oj"]["fd"] = 1.0E-6;
efs["oj"]["b0"] = 0.001;
efs["oj"]["ph"] = 1;
efs["oj"]["iq"] = 1000;
efs["oj"]["yg"] = 1000000;
efs["oj"]["cx"] = 1000;
efs["oj"]["gm"] = 1;
efs["oj"]["5q"] = 0.001;
efs["oj"]["sm"] = 1.0E-6;
efs["oj"]["jg"] = 1.0E-9;
	efs["7u"]=new Array();
	exs["7u"]=new Array();
efs["7u"]["rh"] = 1000000;
efs["7u"]["fx"] = 1000000000;
efs["7u"]["o6"] = 1000000000;
efs["7u"]["47"] = 1000000000000;
efs["7u"]["jp"] = 1.0E+15;
efs["7u"]["12"] = 1000000000;
efs["7u"]["az"] = 1000000000000;
efs["7u"]["av"] = 1.0E+15;
efs["7u"]["zo"] = 1.0E+18;
efs["7u"]["gv"] = 1000;
efs["7u"]["ck"] = 1000000;
efs["7u"]["4d"] = 1000000000;
efs["7u"]["1q"] = 1000000000000;
efs["7u"]["f0"] = 1000000000;
efs["7u"]["3r"] = 1000;
efs["7u"]["3u"] = 1000000;
efs["7u"]["v2"] = 1000000000;
efs["7u"]["oj"] = 1000;
efs["7u"]["7u"] = 1;
efs["7u"]["fd"] = 0.001;
efs["7u"]["b0"] = 1;
efs["7u"]["ph"] = 1000;
efs["7u"]["iq"] = 1000000;
efs["7u"]["yg"] = 1000000000;
efs["7u"]["cx"] = 1000000;
efs["7u"]["gm"] = 1000;
efs["7u"]["5q"] = 1;
efs["7u"]["sm"] = 0.001;
efs["7u"]["jg"] = 1.0E-6;
	efs["fd"]=new Array();
	exs["fd"]=new Array();
efs["fd"]["rh"] = 1000000000;
efs["fd"]["fx"] = 1000000000000;
efs["fd"]["o6"] = 1000000000000;
efs["fd"]["47"] = 1.0E+15;
efs["fd"]["jp"] = 1.0E+18;
efs["fd"]["12"] = 1000000000000;
efs["fd"]["az"] = 1.0E+15;
efs["fd"]["av"] = 1.0E+18;
efs["fd"]["zo"] = 1.0E+21;
efs["fd"]["gv"] = 1000000;
efs["fd"]["ck"] = 1000000000;
efs["fd"]["4d"] = 1000000000000;
efs["fd"]["1q"] = 1.0E+15;
efs["fd"]["f0"] = 1000000000000;
efs["fd"]["3r"] = 1000000;
efs["fd"]["3u"] = 1000000000;
efs["fd"]["v2"] = 1000000000000;
efs["fd"]["oj"] = 1000000;
efs["fd"]["7u"] = 1000;
efs["fd"]["fd"] = 1;
efs["fd"]["b0"] = 1000;
efs["fd"]["ph"] = 1000000;
efs["fd"]["iq"] = 1000000000;
efs["fd"]["yg"] = 1000000000000;
efs["fd"]["cx"] = 1000000000;
efs["fd"]["gm"] = 1000000;
efs["fd"]["5q"] = 1000;
efs["fd"]["sm"] = 1;
efs["fd"]["jg"] = 0.001;
	efs["b0"]=new Array();
	exs["b0"]=new Array();
efs["b0"]["rh"] = 1000000;
efs["b0"]["fx"] = 1000000000;
efs["b0"]["o6"] = 1000000000;
efs["b0"]["47"] = 1000000000000;
efs["b0"]["jp"] = 1.0E+15;
efs["b0"]["12"] = 1000000000;
efs["b0"]["az"] = 1000000000000;
efs["b0"]["av"] = 1.0E+15;
efs["b0"]["zo"] = 1.0E+18;
efs["b0"]["gv"] = 1000;
efs["b0"]["ck"] = 1000000;
efs["b0"]["4d"] = 1000000000;
efs["b0"]["1q"] = 1000000000000;
efs["b0"]["f0"] = 1000000000;
efs["b0"]["3r"] = 1000;
efs["b0"]["3u"] = 1000000;
efs["b0"]["v2"] = 1000000000;
efs["b0"]["oj"] = 1000;
efs["b0"]["7u"] = 1;
efs["b0"]["fd"] = 0.001;
efs["b0"]["b0"] = 1;
efs["b0"]["ph"] = 1000;
efs["b0"]["iq"] = 1000000;
efs["b0"]["yg"] = 1000000000;
efs["b0"]["cx"] = 1000000;
efs["b0"]["gm"] = 1000;
efs["b0"]["5q"] = 1;
efs["b0"]["sm"] = 0.001;
efs["b0"]["jg"] = 1.0E-6;
	efs["ph"]=new Array();
	exs["ph"]=new Array();
efs["ph"]["rh"] = 1000;
efs["ph"]["fx"] = 1000000;
efs["ph"]["o6"] = 1000000;
efs["ph"]["47"] = 1000000000;
efs["ph"]["jp"] = 1000000000000;
efs["ph"]["12"] = 1000000;
efs["ph"]["az"] = 1000000000;
efs["ph"]["av"] = 1000000000000;
efs["ph"]["zo"] = 1.0E+15;
efs["ph"]["gv"] = 1;
efs["ph"]["ck"] = 1000;
efs["ph"]["4d"] = 1000000;
efs["ph"]["1q"] = 1000000000;
efs["ph"]["f0"] = 1000000;
efs["ph"]["3r"] = 1;
efs["ph"]["3u"] = 1000;
efs["ph"]["v2"] = 1000000;
efs["ph"]["oj"] = 1;
efs["ph"]["7u"] = 0.001;
efs["ph"]["fd"] = 1.0E-6;
efs["ph"]["b0"] = 0.001;
efs["ph"]["ph"] = 1;
efs["ph"]["iq"] = 1000;
efs["ph"]["yg"] = 1000000;
efs["ph"]["cx"] = 1000;
efs["ph"]["gm"] = 1;
efs["ph"]["5q"] = 0.001;
efs["ph"]["sm"] = 1.0E-6;
efs["ph"]["jg"] = 1.0E-9;
	efs["iq"]=new Array();
	exs["iq"]=new Array();
efs["iq"]["rh"] = 1;
efs["iq"]["fx"] = 1000;
efs["iq"]["o6"] = 1000;
efs["iq"]["47"] = 1000000;
efs["iq"]["jp"] = 1000000000;
efs["iq"]["12"] = 1000;
efs["iq"]["az"] = 1000000;
efs["iq"]["av"] = 1000000000;
efs["iq"]["zo"] = 1000000000000;
efs["iq"]["gv"] = 0.001;
efs["iq"]["ck"] = 1;
efs["iq"]["4d"] = 1000;
efs["iq"]["1q"] = 1000000;
efs["iq"]["f0"] = 1000;
efs["iq"]["3r"] = 0.001;
efs["iq"]["3u"] = 1;
efs["iq"]["v2"] = 1000;
efs["iq"]["oj"] = 0.001;
efs["iq"]["7u"] = 1.0E-6;
efs["iq"]["fd"] = 1.0E-9;
efs["iq"]["b0"] = 1.0E-6;
efs["iq"]["ph"] = 0.001;
efs["iq"]["iq"] = 1;
efs["iq"]["yg"] = 1000;
efs["iq"]["cx"] = 1;
efs["iq"]["gm"] = 0.001;
efs["iq"]["5q"] = 1.0E-6;
efs["iq"]["sm"] = 1.0E-9;
efs["iq"]["jg"] = 1.0E-12;
	efs["yg"]=new Array();
	exs["yg"]=new Array();
efs["yg"]["rh"] = 0.001;
efs["yg"]["fx"] = 1;
efs["yg"]["o6"] = 1;
efs["yg"]["47"] = 1000;
efs["yg"]["jp"] = 1000000;
efs["yg"]["12"] = 1;
efs["yg"]["az"] = 1000;
efs["yg"]["av"] = 1000000;
efs["yg"]["zo"] = 1000000000;
efs["yg"]["gv"] = 1.0E-6;
efs["yg"]["ck"] = 0.001;
efs["yg"]["4d"] = 1;
efs["yg"]["1q"] = 1000;
efs["yg"]["f0"] = 1;
efs["yg"]["3r"] = 1.0E-6;
efs["yg"]["3u"] = 0.001;
efs["yg"]["v2"] = 1;
efs["yg"]["oj"] = 1.0E-6;
efs["yg"]["7u"] = 1.0E-9;
efs["yg"]["fd"] = 1.0E-12;
efs["yg"]["b0"] = 1.0E-9;
efs["yg"]["ph"] = 1.0E-6;
efs["yg"]["iq"] = 0.001;
efs["yg"]["yg"] = 1;
efs["yg"]["cx"] = 0.001;
efs["yg"]["gm"] = 1.0E-6;
efs["yg"]["5q"] = 1.0E-9;
efs["yg"]["sm"] = 1.0E-12;
efs["yg"]["jg"] = 1.0E-15;
	efs["cx"]=new Array();
	exs["cx"]=new Array();
efs["cx"]["rh"] = 1;
efs["cx"]["fx"] = 1000;
efs["cx"]["o6"] = 1000;
efs["cx"]["47"] = 1000000;
efs["cx"]["jp"] = 1000000000;
efs["cx"]["12"] = 1000;
efs["cx"]["az"] = 1000000;
efs["cx"]["av"] = 1000000000;
efs["cx"]["zo"] = 1000000000000;
efs["cx"]["gv"] = 0.001;
efs["cx"]["ck"] = 1;
efs["cx"]["4d"] = 1000;
efs["cx"]["1q"] = 1000000;
efs["cx"]["f0"] = 1000;
efs["cx"]["3r"] = 0.001;
efs["cx"]["3u"] = 1;
efs["cx"]["v2"] = 1000;
efs["cx"]["oj"] = 0.001;
efs["cx"]["7u"] = 1.0E-6;
efs["cx"]["fd"] = 1.0E-9;
efs["cx"]["b0"] = 1.0E-6;
efs["cx"]["ph"] = 0.001;
efs["cx"]["iq"] = 1;
efs["cx"]["yg"] = 1000;
efs["cx"]["cx"] = 1;
efs["cx"]["gm"] = 0.001;
efs["cx"]["5q"] = 1.0E-6;
efs["cx"]["sm"] = 1.0E-9;
efs["cx"]["jg"] = 1.0E-12;
	efs["gm"]=new Array();
	exs["gm"]=new Array();
efs["gm"]["rh"] = 1000;
efs["gm"]["fx"] = 1000000;
efs["gm"]["o6"] = 1000000;
efs["gm"]["47"] = 1000000000;
efs["gm"]["jp"] = 1000000000000;
efs["gm"]["12"] = 1000000;
efs["gm"]["az"] = 1000000000;
efs["gm"]["av"] = 1000000000000;
efs["gm"]["zo"] = 1.0E+15;
efs["gm"]["gv"] = 1;
efs["gm"]["ck"] = 1000;
efs["gm"]["4d"] = 1000000;
efs["gm"]["1q"] = 1000000000;
efs["gm"]["f0"] = 1000000;
efs["gm"]["3r"] = 1;
efs["gm"]["3u"] = 1000;
efs["gm"]["v2"] = 1000000;
efs["gm"]["oj"] = 1;
efs["gm"]["7u"] = 0.001;
efs["gm"]["fd"] = 1.0E-6;
efs["gm"]["b0"] = 0.001;
efs["gm"]["ph"] = 1;
efs["gm"]["iq"] = 1000;
efs["gm"]["yg"] = 1000000;
efs["gm"]["cx"] = 1000;
efs["gm"]["gm"] = 1;
efs["gm"]["5q"] = 0.001;
efs["gm"]["sm"] = 1.0E-6;
efs["gm"]["jg"] = 1.0E-9;
	efs["5q"]=new Array();
	exs["5q"]=new Array();
efs["5q"]["rh"] = 1000000;
efs["5q"]["fx"] = 1000000000;
efs["5q"]["o6"] = 1000000000;
efs["5q"]["47"] = 1000000000000;
efs["5q"]["jp"] = 1.0E+15;
efs["5q"]["12"] = 1000000000;
efs["5q"]["az"] = 1000000000000;
efs["5q"]["av"] = 1.0E+15;
efs["5q"]["zo"] = 1.0E+18;
efs["5q"]["gv"] = 1000;
efs["5q"]["ck"] = 1000000;
efs["5q"]["4d"] = 1000000000;
efs["5q"]["1q"] = 1000000000000;
efs["5q"]["f0"] = 1000000000;
efs["5q"]["3r"] = 1000;
efs["5q"]["3u"] = 1000000;
efs["5q"]["v2"] = 1000000000;
efs["5q"]["oj"] = 1000;
efs["5q"]["7u"] = 1;
efs["5q"]["fd"] = 0.001;
efs["5q"]["b0"] = 1;
efs["5q"]["ph"] = 1000;
efs["5q"]["iq"] = 1000000;
efs["5q"]["yg"] = 1000000000;
efs["5q"]["cx"] = 1000000;
efs["5q"]["gm"] = 1000;
efs["5q"]["5q"] = 1;
efs["5q"]["sm"] = 0.001;
efs["5q"]["jg"] = 1.0E-6;
	efs["sm"]=new Array();
	exs["sm"]=new Array();
efs["sm"]["rh"] = 1000000000;
efs["sm"]["fx"] = 1000000000000;
efs["sm"]["o6"] = 1000000000000;
efs["sm"]["47"] = 1.0E+15;
efs["sm"]["jp"] = 1.0E+18;
efs["sm"]["12"] = 1000000000000;
efs["sm"]["az"] = 1.0E+15;
efs["sm"]["av"] = 1.0E+18;
efs["sm"]["zo"] = 1.0E+21;
efs["sm"]["gv"] = 1000000;
efs["sm"]["ck"] = 1000000000;
efs["sm"]["4d"] = 1000000000000;
efs["sm"]["1q"] = 1.0E+15;
efs["sm"]["f0"] = 1000000000000;
efs["sm"]["3r"] = 1000000;
efs["sm"]["3u"] = 1000000000;
efs["sm"]["v2"] = 1000000000000;
efs["sm"]["oj"] = 1000000;
efs["sm"]["7u"] = 1000;
efs["sm"]["fd"] = 1;
efs["sm"]["b0"] = 1000;
efs["sm"]["ph"] = 1000000;
efs["sm"]["iq"] = 1000000000;
efs["sm"]["yg"] = 1000000000000;
efs["sm"]["cx"] = 1000000000;
efs["sm"]["gm"] = 1000000;
efs["sm"]["5q"] = 1000;
efs["sm"]["sm"] = 1;
efs["sm"]["jg"] = 0.001;
	efs["jg"]=new Array();
	exs["jg"]=new Array();
efs["jg"]["rh"] = 1000000000000;
efs["jg"]["fx"] = 1.0E+15;
efs["jg"]["o6"] = 1.0E+15;
efs["jg"]["47"] = 1.0E+18;
efs["jg"]["jp"] = 1.0E+21;
efs["jg"]["12"] = 1.0E+15;
efs["jg"]["az"] = 1.0E+18;
efs["jg"]["av"] = 1.0E+21;
efs["jg"]["zo"] = 1.0E+24;
efs["jg"]["gv"] = 1000000000;
efs["jg"]["ck"] = 1000000000000;
efs["jg"]["4d"] = 1.0E+15;
efs["jg"]["1q"] = 1.0E+18;
efs["jg"]["f0"] = 1.0E+15;
efs["jg"]["3r"] = 1000000000;
efs["jg"]["3u"] = 1000000000000;
efs["jg"]["v2"] = 1.0E+15;
efs["jg"]["oj"] = 1000000000;
efs["jg"]["7u"] = 1000000;
efs["jg"]["fd"] = 1000;
efs["jg"]["b0"] = 1000000;
efs["jg"]["ph"] = 1000000000;
efs["jg"]["iq"] = 1000000000000;
efs["jg"]["yg"] = 1.0E+15;
efs["jg"]["cx"] = 1000000000000;
efs["jg"]["gm"] = 1000000000;
efs["jg"]["5q"] = 1000000;
efs["jg"]["sm"] = 1000;
efs["jg"]["jg"] = 1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['rh'] = 0;
	    idmap['rh'] = "mol/cubic meter";
	    stat['fx'] = 0;
	    idmap['fx'] = "mol/liter";
	    stat['o6'] = 0;
	    idmap['o6'] = "mol/cubic decimeter";
	    stat['47'] = 0;
	    idmap['47'] = "mol/cubic centimeter";
	    stat['jp'] = 0;
	    idmap['jp'] = "mol/cubic millimeter";
	    stat['12'] = 0;
	    idmap['12'] = "kilomol/cubic meter";
	    stat['az'] = 0;
	    idmap['az'] = "kilomol/liter";
	    stat['av'] = 0;
	    idmap['av'] = "kilomol/cubic centimeter";
	    stat['zo'] = 0;
	    idmap['zo'] = "kilomol/cubic millimeter";
	    stat['gv'] = 0;
	    idmap['gv'] = "millimole/cubic meter";
	    stat['ck'] = 0;
	    idmap['ck'] = "millimole/liter";
	    stat['4d'] = 0;
	    idmap['4d'] = "millimole/cubic centimeter";
	    stat['1q'] = 0;
	    idmap['1q'] = "millimole/cubic millimeter";
	    stat['f0'] = 0;
	    idmap['f0'] = "millimole/milliliter";
	    stat['3r'] = 0;
	    idmap['3r'] = "micromole/liter";
	    stat['3u'] = 0;
	    idmap['3u'] = "micromol/milliliter";
	    stat['v2'] = 0;
	    idmap['v2'] = "micromol/microliter";
	    stat['oj'] = 0;
	    idmap['oj'] = "picomol/microliter";
	    stat['7u'] = 0;
	    idmap['7u'] = "picomol/milliliter";
	    stat['fd'] = 0;
	    idmap['fd'] = "picomole/liter";
	    stat['b0'] = 0;
	    idmap['b0'] = "nanomole/liter";
	    stat['ph'] = 0;
	    idmap['ph'] = "nanomole/milliliter";
	    stat['iq'] = 0;
	    idmap['iq'] = "nanomole/microliter";
	    stat['yg'] = 0;
	    idmap['yg'] = "Molar";
	    stat['cx'] = 0;
	    idmap['cx'] = "milliMolar";
	    stat['gm'] = 0;
	    idmap['gm'] = "microMolar";
	    stat['5q'] = 0;
	    idmap['5q'] = "nanoMolar";
	    stat['sm'] = 0;
	    idmap['sm'] = "picoMolar";
	    stat['jg'] = 0;
	    idmap['jg'] = "femtoMolar";
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
	    document.getElementById('rh').value='';
	    document.getElementById('fx').value='';
	    document.getElementById('o6').value='';
	    document.getElementById('47').value='';
	    document.getElementById('jp').value='';
	    document.getElementById('12').value='';
	    document.getElementById('az').value='';
	    document.getElementById('av').value='';
	    document.getElementById('zo').value='';
	    document.getElementById('gv').value='';
	    document.getElementById('ck').value='';
	    document.getElementById('4d').value='';
	    document.getElementById('1q').value='';
	    document.getElementById('f0').value='';
	    document.getElementById('3r').value='';
	    document.getElementById('3u').value='';
	    document.getElementById('v2').value='';
	    document.getElementById('oj').value='';
	    document.getElementById('7u').value='';
	    document.getElementById('fd').value='';
	    document.getElementById('b0').value='';
	    document.getElementById('ph').value='';
	    document.getElementById('iq').value='';
	    document.getElementById('yg').value='';
	    document.getElementById('cx').value='';
	    document.getElementById('gm').value='';
	    document.getElementById('5q').value='';
	    document.getElementById('sm').value='';
	    document.getElementById('jg').value='';
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
</div>
<div class="mtitle">Concentration molar Conversion</div>
<table width="100%">
<tbody><tr>
<td width="200">
<input name="searchid" id="idsearchtxt" class="nbox" onkeyup="idsearch()" autocomplete="off" style="color: red; width: 200px; font-size: 17px; font-weight: normal; height: 20px; border: 1px solid rgb(159, 164, 255);" onmouseover="this.style.color=&#39;red&#39;" onmouseout="if(this.value==&#39;select name&#39;) {this.style.color=&#39;#999&#39;\}" value="select name" onfocus="if(this.value==&#39;select name&#39;) {this.value=&#39;&#39;; style=&#39;color:#ff0000&#39;}" onblur="if(this.value==&#39;&#39;) this.value=&#39;select name&#39;" onclick="document.getElementById(&#39;search_id&#39;).innerHTML = &#39;&#39;" type="text">
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
<div class="mline"><div class="untitem" onclick="sel(&#39;rh2&#39;)" id="rh2" style="color: blue; font-weight: bold;">1.&nbsp;mol/cubic meter <font color="black"><u><i>[mol/m3]</i></u></font>:</div>
<div class="nbox"><input id="rh" onblur="setName(&#39;rh&#39;)" autocomplete="off" onkeyup="convertcal(&#39;rh&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;fx2&#39;)" id="fx2">2.&nbsp;mol/liter <font color="black"><u><i>[mol/L]</i></u></font>:</div>
<div class="nbox"><input id="fx" onblur="setName(&#39;fx&#39;)" autocomplete="off" onkeyup="convertcal(&#39;fx&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;o62&#39;)" id="o62">3.&nbsp;mol/cubic decimeter <font color="black"><u><i>[mol/dm3]</i></u></font>:</div>
<div class="nbox"><input id="o6" onblur="setName(&#39;o6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;o6&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;472&#39;)" id="472">4.&nbsp;mol/cubic centimeter:</div>
<div class="nbox"><input id="47" onblur="setName(&#39;47&#39;)" autocomplete="off" onkeyup="convertcal(&#39;47&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;jp2&#39;)" id="jp2">5.&nbsp;mol/cubic millimeter:</div>
<div class="nbox"><input id="jp" onblur="setName(&#39;jp&#39;)" autocomplete="off" onkeyup="convertcal(&#39;jp&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;122&#39;)" id="122">6.&nbsp;kilomol/cubic meter <font color="black"><u><i>[kmol/m3]</i></u></font>:</div>
<div class="nbox"><input id="12" onblur="setName(&#39;12&#39;)" autocomplete="off" onkeyup="convertcal(&#39;12&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;az2&#39;)" id="az2">7.&nbsp;kilomol/liter <font color="black"><u><i>[kmol/L]</i></u></font>:</div>
<div class="nbox"><input id="az" onblur="setName(&#39;az&#39;)" autocomplete="off" onkeyup="convertcal(&#39;az&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;av2&#39;)" id="av2">8.&nbsp;kilomol/cubic centimeter:</div>
<div class="nbox"><input id="av" onblur="setName(&#39;av&#39;)" autocomplete="off" onkeyup="convertcal(&#39;av&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;zo2&#39;)" id="zo2">9.&nbsp;kilomol/cubic millimeter:</div>
<div class="nbox"><input id="zo" onblur="setName(&#39;zo&#39;)" autocomplete="off" onkeyup="convertcal(&#39;zo&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gv2&#39;)" id="gv2">10.&nbsp;millimole/cubic meter:</div>
<div class="nbox"><input id="gv" onblur="setName(&#39;gv&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gv&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ck2&#39;)" id="ck2">11.&nbsp;millimole/liter <font color="black"><u><i>[mmol/L]</i></u></font>:</div>
<div class="nbox"><input id="ck" onblur="setName(&#39;ck&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ck&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;4d2&#39;)" id="4d2">12.&nbsp;millimole/cubic centimeter:</div>
<div class="nbox"><input id="4d" onblur="setName(&#39;4d&#39;)" autocomplete="off" onkeyup="convertcal(&#39;4d&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;1q2&#39;)" id="1q2">13.&nbsp;millimole/cubic millimeter:</div>
<div class="nbox"><input id="1q" onblur="setName(&#39;1q&#39;)" autocomplete="off" onkeyup="convertcal(&#39;1q&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;f02&#39;)" id="f02">14.&nbsp;millimole/milliliter:</div>
<div class="nbox"><input id="f0" onblur="setName(&#39;f0&#39;)" autocomplete="off" onkeyup="convertcal(&#39;f0&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;3r2&#39;)" id="3r2">15.&nbsp;micromole/liter <font color="black"><u><i>[umol/l]</i></u></font>:</div>
<div class="nbox"><input id="3r" onblur="setName(&#39;3r&#39;)" autocomplete="off" onkeyup="convertcal(&#39;3r&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;3u2&#39;)" id="3u2">16.&nbsp;micromol/milliliter <font color="black"><u><i>[umol/mL]</i></u></font>:</div>
<div class="nbox"><input id="3u" onblur="setName(&#39;3u&#39;)" autocomplete="off" onkeyup="convertcal(&#39;3u&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;v22&#39;)" id="v22">17.&nbsp;micromol/microliter <font color="black"><u><i>[umol/uL]</i></u></font>:</div>
<div class="nbox"><input id="v2" onblur="setName(&#39;v2&#39;)" autocomplete="off" onkeyup="convertcal(&#39;v2&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;oj2&#39;)" id="oj2">18.&nbsp;picomol/microliter <font color="black"><u><i>[pmol/uL]</i></u></font>:</div>
<div class="nbox"><input id="oj" onblur="setName(&#39;oj&#39;)" autocomplete="off" onkeyup="convertcal(&#39;oj&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;7u2&#39;)" id="7u2">19.&nbsp;picomol/milliliter <font color="black"><u><i>[pmol/mL]</i></u></font>:</div>
<div class="nbox"><input id="7u" onblur="setName(&#39;7u&#39;)" autocomplete="off" onkeyup="convertcal(&#39;7u&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;fd2&#39;)" id="fd2">20.&nbsp;picomole/liter <font color="black"><u><i>[pmol/l]</i></u></font>:</div>
<div class="nbox"><input id="fd" onblur="setName(&#39;fd&#39;)" autocomplete="off" onkeyup="convertcal(&#39;fd&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;b02&#39;)" id="b02">21.&nbsp;nanomole/liter <font color="black"><u><i>[nmol/l]</i></u></font>:</div>
<div class="nbox"><input id="b0" onblur="setName(&#39;b0&#39;)" autocomplete="off" onkeyup="convertcal(&#39;b0&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ph2&#39;)" id="ph2">22.&nbsp;nanomole/milliliter <font color="black"><u><i>[nmol/mL]</i></u></font>:</div>
<div class="nbox"><input id="ph" onblur="setName(&#39;ph&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ph&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;iq2&#39;)" id="iq2">23.&nbsp;nanomole/microliter <font color="black"><u><i>[nmol/uL]</i></u></font>:</div>
<div class="nbox"><input id="iq" onblur="setName(&#39;iq&#39;)" autocomplete="off" onkeyup="convertcal(&#39;iq&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;yg2&#39;)" id="yg2">24.&nbsp;Molar <font color="black"><u><i>[M]</i></u></font>:</div>
<div class="nbox"><input id="yg" onblur="setName(&#39;yg&#39;)" autocomplete="off" onkeyup="convertcal(&#39;yg&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;cx2&#39;)" id="cx2">25.&nbsp;milliMolar <font color="black"><u><i>[mM]</i></u></font>:</div>
<div class="nbox"><input id="cx" onblur="setName(&#39;cx&#39;)" autocomplete="off" onkeyup="convertcal(&#39;cx&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gm2&#39;)" id="gm2">26.&nbsp;microMolar <font color="black"><u><i>[uM]</i></u></font>:</div>
<div class="nbox"><input id="gm" onblur="setName(&#39;gm&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gm&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;5q2&#39;)" id="5q2">27.&nbsp;nanoMolar <font color="black"><u><i>[nM]</i></u></font>:</div>
<div class="nbox"><input id="5q" onblur="setName(&#39;5q&#39;)" autocomplete="off" onkeyup="convertcal(&#39;5q&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;sm2&#39;)" id="sm2">28.&nbsp;picoMolar <font color="black"><u><i>[pM]</i></u></font>:</div>
<div class="nbox"><input id="sm" onblur="setName(&#39;sm&#39;)" autocomplete="off" onkeyup="convertcal(&#39;sm&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;jg2&#39;)" id="jg2">29.&nbsp;femtoMolar <font color="black"><u><i>[fM]</i></u></font>:</div>
<div class="nbox"><input id="jg" onblur="setName(&#39;jg&#39;)" autocomplete="off" onkeyup="convertcal(&#39;jg&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;jg2&#39;)"><u>fM</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)"><u>kmol/cm3</u></span>, <span class="selitem" onclick="sel(&#39;az2&#39;)"><u>kmol/L</u></span>, <span class="selitem" onclick="sel(&#39;122&#39;)"><u>kmol/m3</u></span>, <span class="selitem" onclick="sel(&#39;zo2&#39;)"><u>kmol/mm3</u></span>, <span class="selitem" onclick="sel(&#39;yg2&#39;)"><u>M</u></span>, <span class="selitem" onclick="sel(&#39;cx2&#39;)"><u>mM</u></span>, <span class="selitem" onclick="sel(&#39;4d2&#39;)"><u>mmol/cm3</u></span>, <span class="selitem" onclick="sel(&#39;ck2&#39;)"><u>mmol/L</u></span>, <span class="selitem" onclick="sel(&#39;gv2&#39;)"><u>mmol/m3</u></span>, <span class="selitem" onclick="sel(&#39;f02&#39;)"><u>mmol/mL</u></span>, <span class="selitem" onclick="sel(&#39;1q2&#39;)"><u>mmol/mm3</u></span>, <span class="selitem" onclick="sel(&#39;472&#39;)"><u>mol/cm3</u></span>, <span class="selitem" onclick="sel(&#39;o62&#39;)"><u>mol/dm3</u></span>, <span class="selitem" onclick="sel(&#39;fx2&#39;)"><u>mol/L</u></span>, <span class="selitem" onclick="sel(&#39;rh2&#39;)"><u>mol/m3</u></span>, <span class="selitem" onclick="sel(&#39;jp2&#39;)"><u>mol/mm3</u></span>, <span class="selitem" onclick="sel(&#39;5q2&#39;)"><u>nM</u></span>, <span class="selitem" onclick="sel(&#39;b02&#39;)"><u>nmol/l</u></span>, <span class="selitem" onclick="sel(&#39;ph2&#39;)"><u>nmol/mL</u></span>, <span class="selitem" onclick="sel(&#39;iq2&#39;)"><u>nmol/uL</u></span>, <span class="selitem" onclick="sel(&#39;sm2&#39;)"><u>pM</u></span>, <span class="selitem" onclick="sel(&#39;fd2&#39;)"><u>pmol/l</u></span>, <span class="selitem" onclick="sel(&#39;7u2&#39;)"><u>pmol/mL</u></span>, <span class="selitem" onclick="sel(&#39;oj2&#39;)"><u>pmol/uL</u></span>, <span class="selitem" onclick="sel(&#39;gm2&#39;)"><u>uM</u></span>, <span class="selitem" onclick="sel(&#39;3r2&#39;)"><u>umol/l</u></span>, <span class="selitem" onclick="sel(&#39;3u2&#39;)"><u>umol/mL</u></span>, <span class="selitem" onclick="sel(&#39;v22&#39;)"><u>umol/uL</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;jg2&#39;)" value="jg"><u>femtoMolar</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)" value="av"><u>kilomol/cubic centimeter</u></span>, <span class="selitem" onclick="sel(&#39;122&#39;)" value="12"><u>kilomol/cubic meter</u></span>, <span class="selitem" onclick="sel(&#39;zo2&#39;)" value="zo"><u>kilomol/cubic millimeter</u></span>, <span class="selitem" onclick="sel(&#39;az2&#39;)" value="az"><u>kilomol/liter</u></span>, <span class="selitem" onclick="sel(&#39;v22&#39;)" value="v2"><u>micromol/microliter</u></span>, <span class="selitem" onclick="sel(&#39;3u2&#39;)" value="3u"><u>micromol/milliliter</u></span>, <span class="selitem" onclick="sel(&#39;gm2&#39;)" value="gm"><u>microMolar</u></span>, <span class="selitem" onclick="sel(&#39;3r2&#39;)" value="3r"><u>micromole/liter</u></span>, <span class="selitem" onclick="sel(&#39;cx2&#39;)" value="cx"><u>milliMolar</u></span>, <span class="selitem" onclick="sel(&#39;4d2&#39;)" value="4d"><u>millimole/cubic centimeter</u></span>, <span class="selitem" onclick="sel(&#39;gv2&#39;)" value="gv"><u>millimole/cubic meter</u></span>, <span class="selitem" onclick="sel(&#39;1q2&#39;)" value="1q"><u>millimole/cubic millimeter</u></span>, <span class="selitem" onclick="sel(&#39;ck2&#39;)" value="ck"><u>millimole/liter</u></span>, <span class="selitem" onclick="sel(&#39;f02&#39;)" value="f0"><u>millimole/milliliter</u></span>, <span class="selitem" onclick="sel(&#39;472&#39;)" value="47"><u>mol/cubic centimeter</u></span>, <span class="selitem" onclick="sel(&#39;o62&#39;)" value="o6"><u>mol/cubic decimeter</u></span>, <span class="selitem" onclick="sel(&#39;rh2&#39;)" value="rh"><u>mol/cubic meter</u></span>, <span class="selitem" onclick="sel(&#39;jp2&#39;)" value="jp"><u>mol/cubic millimeter</u></span>, <span class="selitem" onclick="sel(&#39;fx2&#39;)" value="fx"><u>mol/liter</u></span>, <span class="selitem" onclick="sel(&#39;yg2&#39;)" value="yg"><u>Molar</u></span>, <span class="selitem" onclick="sel(&#39;5q2&#39;)" value="5q"><u>nanoMolar</u></span>, <span class="selitem" onclick="sel(&#39;b02&#39;)" value="b0"><u>nanomole/liter</u></span>, <span class="selitem" onclick="sel(&#39;iq2&#39;)" value="iq"><u>nanomole/microliter</u></span>, <span class="selitem" onclick="sel(&#39;ph2&#39;)" value="ph"><u>nanomole/milliliter</u></span>, <span class="selitem" onclick="sel(&#39;oj2&#39;)" value="oj"><u>picomol/microliter</u></span>, <span class="selitem" onclick="sel(&#39;7u2&#39;)" value="7u"><u>picomol/milliliter</u></span>, <span class="selitem" onclick="sel(&#39;sm2&#39;)" value="sm"><u>picoMolar</u></span>, <span class="selitem" onclick="sel(&#39;fd2&#39;)" value="fd"><u>picomole/liter</u></span></p>


</div>


<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>

