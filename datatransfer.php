<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Data transfer Conversion Online -- </title>
<meta name="keywords" content="Data transfer, Converter">
<meta name="description" content="Data transfer Unit Converter Online">
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
	efs["li"]=new Array();
	exs["li"]=new Array();
efs["li"]["li"] = 1;
efs["li"]["j9"] = 1000000;
efs["li"]["si"] = 1000;
efs["li"]["ti"] = 1000000000;
efs["li"]["av"] = 8000000;
efs["li"]["4m"] = 8000;
efs["li"]["tk"] = 8000000000;
efs["li"]["sd"] = 8;
efs["li"]["vu"] = 10000000;
efs["li"]["ca"] = 100000000;
efs["li"]["cy"] = 1000000000;
efs["li"]["m5"] = 1099510000000;
efs["li"]["cg"] = 1073741824;
efs["li"]["gc"] = 1024000000;
efs["li"]["3t"] = 1024000;
efs["li"]["28"] = 1024;
efs["li"]["0w"] = 8196721.3114754;
efs["li"]["nb"] = 8196.7213114754;
efs["li"]["re"] = 1048576000;
efs["li"]["1u"] = 1048576;
efs["li"]["lf"] = 8196721.3114754;
efs["li"]["1t"] = 12427.56741;
efs["li"]["x6"] = 12427567.41;
efs["li"]["f8"] = 95238.095238095;
efs["li"]["ne"] = 17.066666666667;
efs["li"]["b0"] = 136.53333333333;
efs["li"]["gs"] = 17476.266666667;
efs["li"]["43"] = 139810.13333333;
efs["li"]["36"] = 17895697.066667;
efs["li"]["j0"] = 143165576.53333;
efs["li"]["ri"] = 0.28444444444444;
efs["li"]["kh"] = 2.2755555555556;
	efs["j9"]=new Array();
	exs["j9"]=new Array();
efs["j9"]["li"] = 1.0E-6;
efs["j9"]["j9"] = 1;
efs["j9"]["si"] = 0.001;
efs["j9"]["ti"] = 1000;
efs["j9"]["av"] = 8;
efs["j9"]["4m"] = 0.008;
efs["j9"]["tk"] = 8000;
efs["j9"]["sd"] = 8.0E-6;
efs["j9"]["vu"] = 10;
efs["j9"]["ca"] = 100;
efs["j9"]["cy"] = 1000;
efs["j9"]["m5"] = 1099510;
efs["j9"]["cg"] = 1073.741824;
efs["j9"]["gc"] = 1024;
efs["j9"]["3t"] = 1.024;
efs["j9"]["28"] = 0.001024;
efs["j9"]["0w"] = 8.1967213114754;
efs["j9"]["nb"] = 0.0081967213114754;
efs["j9"]["re"] = 1048.576;
efs["j9"]["1u"] = 1.048576;
efs["j9"]["lf"] = 8.1967213114754;
efs["j9"]["1t"] = 0.01242756741;
efs["j9"]["x6"] = 12.42756741;
efs["j9"]["f8"] = 0.095238095238095;
efs["j9"]["ne"] = 1.7066666666667E-5;
efs["j9"]["b0"] = 0.00013653333333333;
efs["j9"]["gs"] = 0.017476266666667;
efs["j9"]["43"] = 0.13981013333333;
efs["j9"]["36"] = 17.895697066667;
efs["j9"]["j0"] = 143.16557653333;
efs["j9"]["ri"] = 2.8444444444444E-7;
efs["j9"]["kh"] = 2.2755555555556E-6;
	efs["si"]=new Array();
	exs["si"]=new Array();
efs["si"]["li"] = 0.001;
efs["si"]["j9"] = 1000;
efs["si"]["si"] = 1;
efs["si"]["ti"] = 1000000;
efs["si"]["av"] = 8000;
efs["si"]["4m"] = 8;
efs["si"]["tk"] = 8000000;
efs["si"]["sd"] = 0.008;
efs["si"]["vu"] = 10000;
efs["si"]["ca"] = 100000;
efs["si"]["cy"] = 1000000;
efs["si"]["m5"] = 1099510000;
efs["si"]["cg"] = 1073741.824;
efs["si"]["gc"] = 1024000;
efs["si"]["3t"] = 1024;
efs["si"]["28"] = 1.024;
efs["si"]["0w"] = 8196.7213114754;
efs["si"]["nb"] = 8.1967213114754;
efs["si"]["re"] = 1048576;
efs["si"]["1u"] = 1048.576;
efs["si"]["lf"] = 8196.7213114754;
efs["si"]["1t"] = 12.42756741;
efs["si"]["x6"] = 12427.56741;
efs["si"]["f8"] = 95.238095238095;
efs["si"]["ne"] = 0.017066666666667;
efs["si"]["b0"] = 0.13653333333333;
efs["si"]["gs"] = 17.476266666667;
efs["si"]["43"] = 139.81013333333;
efs["si"]["36"] = 17895.697066667;
efs["si"]["j0"] = 143165.57653333;
efs["si"]["ri"] = 0.00028444444444444;
efs["si"]["kh"] = 0.0022755555555556;
	efs["ti"]=new Array();
	exs["ti"]=new Array();
efs["ti"]["li"] = 1.0E-9;
efs["ti"]["j9"] = 0.001;
efs["ti"]["si"] = 1.0E-6;
efs["ti"]["ti"] = 1;
efs["ti"]["av"] = 0.008;
efs["ti"]["4m"] = 8.0E-6;
efs["ti"]["tk"] = 8;
efs["ti"]["sd"] = 8.0E-9;
efs["ti"]["vu"] = 0.01;
efs["ti"]["ca"] = 0.1;
efs["ti"]["cy"] = 1;
efs["ti"]["m5"] = 1099.51;
efs["ti"]["cg"] = 1.073741824;
efs["ti"]["gc"] = 1.024;
efs["ti"]["3t"] = 0.001024;
efs["ti"]["28"] = 1.024E-6;
efs["ti"]["0w"] = 0.0081967213114754;
efs["ti"]["nb"] = 8.1967213114754E-6;
efs["ti"]["re"] = 1.048576;
efs["ti"]["1u"] = 0.001048576;
efs["ti"]["lf"] = 0.0081967213114754;
efs["ti"]["1t"] = 1.242756741E-5;
efs["ti"]["x6"] = 0.01242756741;
efs["ti"]["f8"] = 9.5238095238095E-5;
efs["ti"]["ne"] = 1.7066666666667E-8;
efs["ti"]["b0"] = 1.3653333333333E-7;
efs["ti"]["gs"] = 1.7476266666667E-5;
efs["ti"]["43"] = 0.00013981013333333;
efs["ti"]["36"] = 0.017895697066667;
efs["ti"]["j0"] = 0.14316557653333;
efs["ti"]["ri"] = 2.8444444444444E-10;
efs["ti"]["kh"] = 2.2755555555556E-9;
	efs["av"]=new Array();
	exs["av"]=new Array();
efs["av"]["li"] = 1.25E-7;
efs["av"]["j9"] = 0.125;
efs["av"]["si"] = 0.000125;
efs["av"]["ti"] = 125;
efs["av"]["av"] = 1;
efs["av"]["4m"] = 0.001;
efs["av"]["tk"] = 1000;
efs["av"]["sd"] = 1.0E-6;
efs["av"]["vu"] = 1.25;
efs["av"]["ca"] = 12.5;
efs["av"]["cy"] = 125;
efs["av"]["m5"] = 137438.75;
efs["av"]["cg"] = 134.217728;
efs["av"]["gc"] = 128;
efs["av"]["3t"] = 0.128;
efs["av"]["28"] = 0.000128;
efs["av"]["0w"] = 1.0245901639344;
efs["av"]["nb"] = 0.0010245901639344;
efs["av"]["re"] = 131.072;
efs["av"]["1u"] = 0.131072;
efs["av"]["lf"] = 1.0245901639344;
efs["av"]["1t"] = 0.00155344592625;
efs["av"]["x6"] = 1.55344592625;
efs["av"]["f8"] = 0.011904761904762;
efs["av"]["ne"] = 2.1333333333333E-6;
efs["av"]["b0"] = 1.7066666666667E-5;
efs["av"]["gs"] = 0.0021845333333333;
efs["av"]["43"] = 0.017476266666667;
efs["av"]["36"] = 2.2369621333333;
efs["av"]["j0"] = 17.895697066667;
efs["av"]["ri"] = 3.5555555555556E-8;
efs["av"]["kh"] = 2.8444444444444E-7;
	efs["4m"]=new Array();
	exs["4m"]=new Array();
efs["4m"]["li"] = 0.000125;
efs["4m"]["j9"] = 125;
efs["4m"]["si"] = 0.125;
efs["4m"]["ti"] = 125000;
efs["4m"]["av"] = 1000;
efs["4m"]["4m"] = 1;
efs["4m"]["tk"] = 1000000;
efs["4m"]["sd"] = 0.001;
efs["4m"]["vu"] = 1250;
efs["4m"]["ca"] = 12500;
efs["4m"]["cy"] = 125000;
efs["4m"]["m5"] = 137438750;
efs["4m"]["cg"] = 134217.728;
efs["4m"]["gc"] = 128000;
efs["4m"]["3t"] = 128;
efs["4m"]["28"] = 0.128;
efs["4m"]["0w"] = 1024.5901639344;
efs["4m"]["nb"] = 1.0245901639344;
efs["4m"]["re"] = 131072;
efs["4m"]["1u"] = 131.072;
efs["4m"]["lf"] = 1024.5901639344;
efs["4m"]["1t"] = 1.55344592625;
efs["4m"]["x6"] = 1553.44592625;
efs["4m"]["f8"] = 11.904761904762;
efs["4m"]["ne"] = 0.0021333333333333;
efs["4m"]["b0"] = 0.017066666666667;
efs["4m"]["gs"] = 2.1845333333333;
efs["4m"]["43"] = 17.476266666667;
efs["4m"]["36"] = 2236.9621333333;
efs["4m"]["j0"] = 17895.697066667;
efs["4m"]["ri"] = 3.5555555555556E-5;
efs["4m"]["kh"] = 0.00028444444444444;
	efs["tk"]=new Array();
	exs["tk"]=new Array();
efs["tk"]["li"] = 1.25E-10;
efs["tk"]["j9"] = 0.000125;
efs["tk"]["si"] = 1.25E-7;
efs["tk"]["ti"] = 0.125;
efs["tk"]["av"] = 0.001;
efs["tk"]["4m"] = 1.0E-6;
efs["tk"]["tk"] = 1;
efs["tk"]["sd"] = 1.0E-9;
efs["tk"]["vu"] = 0.00125;
efs["tk"]["ca"] = 0.0125;
efs["tk"]["cy"] = 0.125;
efs["tk"]["m5"] = 137.43875;
efs["tk"]["cg"] = 0.134217728;
efs["tk"]["gc"] = 0.128;
efs["tk"]["3t"] = 0.000128;
efs["tk"]["28"] = 1.28E-7;
efs["tk"]["0w"] = 0.0010245901639344;
efs["tk"]["nb"] = 1.0245901639344E-6;
efs["tk"]["re"] = 0.131072;
efs["tk"]["1u"] = 0.000131072;
efs["tk"]["lf"] = 0.0010245901639344;
efs["tk"]["1t"] = 1.55344592625E-6;
efs["tk"]["x6"] = 0.00155344592625;
efs["tk"]["f8"] = 1.1904761904762E-5;
efs["tk"]["ne"] = 2.1333333333333E-9;
efs["tk"]["b0"] = 1.7066666666667E-8;
efs["tk"]["gs"] = 2.1845333333333E-6;
efs["tk"]["43"] = 1.7476266666667E-5;
efs["tk"]["36"] = 0.0022369621333333;
efs["tk"]["j0"] = 0.017895697066667;
efs["tk"]["ri"] = 3.5555555555556E-11;
efs["tk"]["kh"] = 2.8444444444444E-10;
	efs["sd"]=new Array();
	exs["sd"]=new Array();
efs["sd"]["li"] = 0.125;
efs["sd"]["j9"] = 125000;
efs["sd"]["si"] = 125;
efs["sd"]["ti"] = 125000000;
efs["sd"]["av"] = 1000000;
efs["sd"]["4m"] = 1000;
efs["sd"]["tk"] = 1000000000;
efs["sd"]["sd"] = 1;
efs["sd"]["vu"] = 1250000;
efs["sd"]["ca"] = 12500000;
efs["sd"]["cy"] = 125000000;
efs["sd"]["m5"] = 137438750000;
efs["sd"]["cg"] = 134217728;
efs["sd"]["gc"] = 128000000;
efs["sd"]["3t"] = 128000;
efs["sd"]["28"] = 128;
efs["sd"]["0w"] = 1024590.1639344;
efs["sd"]["nb"] = 1024.5901639344;
efs["sd"]["re"] = 131072000;
efs["sd"]["1u"] = 131072;
efs["sd"]["lf"] = 1024590.1639344;
efs["sd"]["1t"] = 1553.44592625;
efs["sd"]["x6"] = 1553445.92625;
efs["sd"]["f8"] = 11904.761904762;
efs["sd"]["ne"] = 2.1333333333333;
efs["sd"]["b0"] = 17.066666666667;
efs["sd"]["gs"] = 2184.5333333333;
efs["sd"]["43"] = 17476.266666667;
efs["sd"]["36"] = 2236962.1333333;
efs["sd"]["j0"] = 17895697.066667;
efs["sd"]["ri"] = 0.035555555555556;
efs["sd"]["kh"] = 0.28444444444444;
	efs["vu"]=new Array();
	exs["vu"]=new Array();
efs["vu"]["li"] = 1.0E-7;
efs["vu"]["j9"] = 0.1;
efs["vu"]["si"] = 0.0001;
efs["vu"]["ti"] = 100;
efs["vu"]["av"] = 0.8;
efs["vu"]["4m"] = 0.0008;
efs["vu"]["tk"] = 800;
efs["vu"]["sd"] = 8.0E-7;
efs["vu"]["vu"] = 1;
efs["vu"]["ca"] = 10;
efs["vu"]["cy"] = 100;
efs["vu"]["m5"] = 109951;
efs["vu"]["cg"] = 107.3741824;
efs["vu"]["gc"] = 102.4;
efs["vu"]["3t"] = 0.1024;
efs["vu"]["28"] = 0.0001024;
efs["vu"]["0w"] = 0.81967213114754;
efs["vu"]["nb"] = 0.00081967213114754;
efs["vu"]["re"] = 104.8576;
efs["vu"]["1u"] = 0.1048576;
efs["vu"]["lf"] = 0.81967213114754;
efs["vu"]["1t"] = 0.001242756741;
efs["vu"]["x6"] = 1.242756741;
efs["vu"]["f8"] = 0.0095238095238095;
efs["vu"]["ne"] = 1.7066666666667E-6;
efs["vu"]["b0"] = 1.3653333333333E-5;
efs["vu"]["gs"] = 0.0017476266666667;
efs["vu"]["43"] = 0.013981013333333;
efs["vu"]["36"] = 1.7895697066667;
efs["vu"]["j0"] = 14.316557653333;
efs["vu"]["ri"] = 2.8444444444444E-8;
efs["vu"]["kh"] = 2.2755555555556E-7;
	efs["ca"]=new Array();
	exs["ca"]=new Array();
efs["ca"]["li"] = 1.0E-8;
efs["ca"]["j9"] = 0.01;
efs["ca"]["si"] = 1.0E-5;
efs["ca"]["ti"] = 10;
efs["ca"]["av"] = 0.08;
efs["ca"]["4m"] = 8.0E-5;
efs["ca"]["tk"] = 80;
efs["ca"]["sd"] = 8.0E-8;
efs["ca"]["vu"] = 0.1;
efs["ca"]["ca"] = 1;
efs["ca"]["cy"] = 10;
efs["ca"]["m5"] = 10995.1;
efs["ca"]["cg"] = 10.73741824;
efs["ca"]["gc"] = 10.24;
efs["ca"]["3t"] = 0.01024;
efs["ca"]["28"] = 1.024E-5;
efs["ca"]["0w"] = 0.081967213114754;
efs["ca"]["nb"] = 8.1967213114754E-5;
efs["ca"]["re"] = 10.48576;
efs["ca"]["1u"] = 0.01048576;
efs["ca"]["lf"] = 0.081967213114754;
efs["ca"]["1t"] = 0.0001242756741;
efs["ca"]["x6"] = 0.1242756741;
efs["ca"]["f8"] = 0.00095238095238095;
efs["ca"]["ne"] = 1.7066666666667E-7;
efs["ca"]["b0"] = 1.3653333333333E-6;
efs["ca"]["gs"] = 0.00017476266666667;
efs["ca"]["43"] = 0.0013981013333333;
efs["ca"]["36"] = 0.17895697066667;
efs["ca"]["j0"] = 1.4316557653333;
efs["ca"]["ri"] = 2.8444444444444E-9;
efs["ca"]["kh"] = 2.2755555555556E-8;
	efs["cy"]=new Array();
	exs["cy"]=new Array();
efs["cy"]["li"] = 1.0E-9;
efs["cy"]["j9"] = 0.001;
efs["cy"]["si"] = 1.0E-6;
efs["cy"]["ti"] = 1;
efs["cy"]["av"] = 0.008;
efs["cy"]["4m"] = 8.0E-6;
efs["cy"]["tk"] = 8;
efs["cy"]["sd"] = 8.0E-9;
efs["cy"]["vu"] = 0.01;
efs["cy"]["ca"] = 0.1;
efs["cy"]["cy"] = 1;
efs["cy"]["m5"] = 1099.51;
efs["cy"]["cg"] = 1.073741824;
efs["cy"]["gc"] = 1.024;
efs["cy"]["3t"] = 0.001024;
efs["cy"]["28"] = 1.024E-6;
efs["cy"]["0w"] = 0.0081967213114754;
efs["cy"]["nb"] = 8.1967213114754E-6;
efs["cy"]["re"] = 1.048576;
efs["cy"]["1u"] = 0.001048576;
efs["cy"]["lf"] = 0.0081967213114754;
efs["cy"]["1t"] = 1.242756741E-5;
efs["cy"]["x6"] = 0.01242756741;
efs["cy"]["f8"] = 9.5238095238095E-5;
efs["cy"]["ne"] = 1.7066666666667E-8;
efs["cy"]["b0"] = 1.3653333333333E-7;
efs["cy"]["gs"] = 1.7476266666667E-5;
efs["cy"]["43"] = 0.00013981013333333;
efs["cy"]["36"] = 0.017895697066667;
efs["cy"]["j0"] = 0.14316557653333;
efs["cy"]["ri"] = 2.8444444444444E-10;
efs["cy"]["kh"] = 2.2755555555556E-9;
	efs["m5"]=new Array();
	exs["m5"]=new Array();
efs["m5"]["li"]=9.0949604823967E-13;
efs["m5"]["j9"]=9.0949604823967E-7;
efs["m5"]["si"]=9.0949604823967E-10;
efs["m5"]["ti"]=0.00090949604823967;
efs["m5"]["av"]=7.2759683859174E-6;
efs["m5"]["4m"]=7.2759683859174E-9;
efs["m5"]["tk"]=0.0072759683859174;
efs["m5"]["sd"]=7.2759683859174E-12;
efs["m5"]["vu"]=9.0949604823967E-6;
efs["m5"]["ca"]=9.0949604823967E-5;
efs["m5"]["cy"]=0.00090949604823967;
efs["m5"]["m5"]=1;
efs["m5"]["cg"]=0.00097656394575766;
efs["m5"]["gc"]=0.00093132395339742;
efs["m5"]["3t"]=9.3132395339742E-7;
efs["m5"]["28"]=9.3132395339742E-10;
efs["m5"]["0w"]=7.4548856413088E-6;
efs["m5"]["nb"]=7.4548856413088E-9;
efs["m5"]["re"]=0.00095367572827896;
efs["m5"]["1u"]=9.5367572827896E-7;
efs["m5"]["lf"]=7.4548856413088E-6;
efs["m5"]["1t"]=1.1302823448627E-8;
efs["m5"]["x6"]=1.1302823448627E-5;
efs["m5"]["f8"]=8.6618671260921E-8;
efs["m5"]["ne"]=1.5522065889957E-11;
efs["m5"]["b0"]=1.2417652711966E-10;
efs["m5"]["gs"]=1.5894595471316E-8;
efs["m5"]["43"]=1.2715676377053E-7;
efs["m5"]["36"]=1.6276065762628E-5;
efs["m5"]["j0"]=0.00013020852610102;
efs["m5"]["ri"]=2.5870109816595E-13;
efs["m5"]["kh"]=2.0696087853276E-12;
	efs["cg"]=new Array();
	exs["cg"]=new Array();
efs["cg"]["li"]=9.3132257461548E-10;
efs["cg"]["j9"]=0.00093132257461548;
efs["cg"]["si"]=9.3132257461548E-7;
efs["cg"]["ti"]=0.93132257461548;
efs["cg"]["av"]=0.0074505805969238;
efs["cg"]["4m"]=7.4505805969238E-6;
efs["cg"]["tk"]=7.4505805969238;
efs["cg"]["sd"]=7.4505805969238E-9;
efs["cg"]["vu"]=0.0093132257461548;
efs["cg"]["ca"]=0.093132257461548;
efs["cg"]["cy"]=0.93132257461548;
efs["cg"]["m5"]=1023.9984840155;
efs["cg"]["cg"]=1;
efs["cg"]["gc"]=0.95367431640625;
efs["cg"]["3t"]=0.00095367431640625;
efs["cg"]["28"]=9.5367431640625E-7;
efs["cg"]["0w"]=0.0076337915952088;
efs["cg"]["nb"]=7.6337915952088E-6;
efs["cg"]["re"]=0.9765625;
efs["cg"]["1u"]=0.0009765625;
efs["cg"]["lf"]=0.0076337915952088;
efs["cg"]["1t"]=1.1574074076489E-5;
efs["cg"]["x6"]=0.011574074076489;
efs["cg"]["f8"]=8.8697388058617E-5;
efs["cg"]["ne"]=1.5894571940104E-8;
efs["cg"]["b0"]=1.2715657552083E-7;
efs["cg"]["gs"]=1.6276041666667E-5;
efs["cg"]["43"]=0.00013020833333333;
efs["cg"]["36"]=0.016666666666667;
efs["cg"]["j0"]=0.13333333333333;
efs["cg"]["ri"]=2.6490953233507E-10;
efs["cg"]["kh"]=2.1192762586806E-9;
	efs["gc"]=new Array();
	exs["gc"]=new Array();
efs["gc"]["li"]=9.765625E-10;
efs["gc"]["j9"]=0.0009765625;
efs["gc"]["si"]=9.765625E-7;
efs["gc"]["ti"]=0.9765625;
efs["gc"]["av"]=0.0078125;
efs["gc"]["4m"]=7.8125E-6;
efs["gc"]["tk"]=7.8125;
efs["gc"]["sd"]=7.8125E-9;
efs["gc"]["vu"]=0.009765625;
efs["gc"]["ca"]=0.09765625;
efs["gc"]["cy"]=0.9765625;
efs["gc"]["m5"]=1073.740234375;
efs["gc"]["cg"]=1.048576;
efs["gc"]["gc"]=1;
efs["gc"]["3t"]=0.001;
efs["gc"]["28"]=1.0E-6;
efs["gc"]["0w"]=0.0080046106557377;
efs["gc"]["nb"]=8.0046106557377E-6;
efs["gc"]["re"]=1.024;
efs["gc"]["1u"]=0.001024;
efs["gc"]["lf"]=0.0080046106557377;
efs["gc"]["1t"]=1.2136296298828E-5;
efs["gc"]["x6"]=0.012136296298828;
efs["gc"]["f8"]=9.3005952380952E-5;
efs["gc"]["ne"]=1.6666666666667E-8;
efs["gc"]["b0"]=1.3333333333333E-7;
efs["gc"]["gs"]=1.7066666666667E-5;
efs["gc"]["43"]=0.00013653333333333;
efs["gc"]["36"]=0.017476266666667;
efs["gc"]["j0"]=0.13981013333333;
efs["gc"]["ri"]=2.7777777777778E-10;
efs["gc"]["kh"]=2.2222222222222E-9;
	efs["3t"]=new Array();
	exs["3t"]=new Array();
efs["3t"]["li"]=9.765625E-7;
efs["3t"]["j9"]=0.9765625;
efs["3t"]["si"]=0.0009765625;
efs["3t"]["ti"]=976.5625;
efs["3t"]["av"]=7.8125;
efs["3t"]["4m"]=0.0078125;
efs["3t"]["tk"]=7812.5;
efs["3t"]["sd"]=7.8125E-6;
efs["3t"]["vu"]=9.765625;
efs["3t"]["ca"]=97.65625;
efs["3t"]["cy"]=976.5625;
efs["3t"]["m5"]=1073740.234375;
efs["3t"]["cg"]=1048.576;
efs["3t"]["gc"]=1000;
efs["3t"]["3t"]=1;
efs["3t"]["28"]=0.001;
efs["3t"]["0w"]=8.0046106557377;
efs["3t"]["nb"]=0.0080046106557377;
efs["3t"]["re"]=1024;
efs["3t"]["1u"]=1.024;
efs["3t"]["lf"]=8.0046106557377;
efs["3t"]["1t"]=0.012136296298828;
efs["3t"]["x6"]=12.136296298828;
efs["3t"]["f8"]=0.093005952380952;
efs["3t"]["ne"]=1.6666666666667E-5;
efs["3t"]["b0"]=0.00013333333333333;
efs["3t"]["gs"]=0.017066666666667;
efs["3t"]["43"]=0.13653333333333;
efs["3t"]["36"]=17.476266666667;
efs["3t"]["j0"]=139.81013333333;
efs["3t"]["ri"]=2.7777777777778E-7;
efs["3t"]["kh"]=2.2222222222222E-6;
	efs["28"]=new Array();
	exs["28"]=new Array();
efs["28"]["li"]=0.0009765625;
efs["28"]["j9"]=976.5625;
efs["28"]["si"]=0.9765625;
efs["28"]["ti"]=976562.5;
efs["28"]["av"]=7812.5;
efs["28"]["4m"]=7.8125;
efs["28"]["tk"]=7812500;
efs["28"]["sd"]=0.0078125;
efs["28"]["vu"]=9765.625;
efs["28"]["ca"]=97656.25;
efs["28"]["cy"]=976562.5;
efs["28"]["m5"]=1073740234.375;
efs["28"]["cg"]=1048576;
efs["28"]["gc"]=1000000;
efs["28"]["3t"]=1000;
efs["28"]["28"]=1;
efs["28"]["0w"]=8004.6106557377;
efs["28"]["nb"]=8.0046106557377;
efs["28"]["re"]=1024000;
efs["28"]["1u"]=1024;
efs["28"]["lf"]=8004.6106557377;
efs["28"]["1t"]=12.136296298828;
efs["28"]["x6"]=12136.296298828;
efs["28"]["f8"]=93.005952380952;
efs["28"]["ne"]=0.016666666666667;
efs["28"]["b0"]=0.13333333333333;
efs["28"]["gs"]=17.066666666667;
efs["28"]["43"]=136.53333333333;
efs["28"]["36"]=17476.266666667;
efs["28"]["j0"]=139810.13333333;
efs["28"]["ri"]=0.00027777777777778;
efs["28"]["kh"]=0.0022222222222222;
	efs["0w"]=new Array();
	exs["0w"]=new Array();
efs["0w"]["li"] = 1.22E-7;
efs["0w"]["j9"] = 0.122;
efs["0w"]["si"] = 0.000122;
efs["0w"]["ti"] = 122;
efs["0w"]["av"] = 0.976;
efs["0w"]["4m"] = 0.000976;
efs["0w"]["tk"] = 976;
efs["0w"]["sd"] = 9.76E-7;
efs["0w"]["vu"] = 1.22;
efs["0w"]["ca"] = 12.2;
efs["0w"]["cy"] = 122;
efs["0w"]["m5"] = 134140.22;
efs["0w"]["cg"] = 130.996502528;
efs["0w"]["gc"] = 124.928;
efs["0w"]["3t"] = 0.124928;
efs["0w"]["28"] = 0.000124928;
efs["0w"]["0w"] = 1;
efs["0w"]["nb"] = 0.001;
efs["0w"]["re"] = 127.926272;
efs["0w"]["1u"] = 0.127926272;
efs["0w"]["lf"] = 1;
efs["0w"]["1t"] = 0.00151616322402;
efs["0w"]["x6"] = 1.51616322402;
efs["0w"]["f8"] = 0.011619047619048;
efs["0w"]["ne"] = 2.0821333333333E-6;
efs["0w"]["b0"] = 1.6657066666667E-5;
efs["0w"]["gs"] = 0.0021321045333333;
efs["0w"]["43"] = 0.017056836266667;
efs["0w"]["36"] = 2.1832750421333;
efs["0w"]["j0"] = 17.466200337067;
efs["0w"]["ri"] = 3.4702222222222E-8;
efs["0w"]["kh"] = 2.7761777777778E-7;
	efs["nb"]=new Array();
	exs["nb"]=new Array();
efs["nb"]["li"] = 0.000122;
efs["nb"]["j9"] = 122;
efs["nb"]["si"] = 0.122;
efs["nb"]["ti"] = 122000;
efs["nb"]["av"] = 976;
efs["nb"]["4m"] = 0.976;
efs["nb"]["tk"] = 976000;
efs["nb"]["sd"] = 0.000976;
efs["nb"]["vu"] = 1220;
efs["nb"]["ca"] = 12200;
efs["nb"]["cy"] = 122000;
efs["nb"]["m5"] = 134140220;
efs["nb"]["cg"] = 130996.502528;
efs["nb"]["gc"] = 124928;
efs["nb"]["3t"] = 124.928;
efs["nb"]["28"] = 0.124928;
efs["nb"]["0w"] = 1000;
efs["nb"]["nb"] = 1;
efs["nb"]["re"] = 127926.272;
efs["nb"]["1u"] = 127.926272;
efs["nb"]["lf"] = 1000;
efs["nb"]["1t"] = 1.51616322402;
efs["nb"]["x6"] = 1516.16322402;
efs["nb"]["f8"] = 11.619047619048;
efs["nb"]["ne"] = 0.0020821333333333;
efs["nb"]["b0"] = 0.016657066666667;
efs["nb"]["gs"] = 2.1321045333333;
efs["nb"]["43"] = 17.056836266667;
efs["nb"]["36"] = 2183.2750421333;
efs["nb"]["j0"] = 17466.200337067;
efs["nb"]["ri"] = 3.4702222222222E-5;
efs["nb"]["kh"] = 0.00027761777777778;
	efs["re"]=new Array();
	exs["re"]=new Array();
efs["re"]["li"]=9.5367431640625E-10;
efs["re"]["j9"]=0.00095367431640625;
efs["re"]["si"]=9.5367431640625E-7;
efs["re"]["ti"]=0.95367431640625;
efs["re"]["av"]=0.00762939453125;
efs["re"]["4m"]=7.62939453125E-6;
efs["re"]["tk"]=7.62939453125;
efs["re"]["sd"]=7.62939453125E-9;
efs["re"]["vu"]=0.0095367431640625;
efs["re"]["ca"]=0.095367431640625;
efs["re"]["cy"]=0.95367431640625;
efs["re"]["m5"]=1048.5744476318;
efs["re"]["cg"]=1.024;
efs["re"]["gc"]=0.9765625;
efs["re"]["3t"]=0.0009765625;
efs["re"]["28"]=9.765625E-7;
efs["re"]["0w"]=0.0078170025934939;
efs["re"]["nb"]=7.8170025934939E-6;
efs["re"]["re"]=1;
efs["re"]["1u"]=0.001;
efs["re"]["lf"]=0.0078170025934939;
efs["re"]["1t"]=1.1851851854324E-5;
efs["re"]["x6"]=0.011851851854324;
efs["re"]["f8"]=9.0826125372024E-5;
efs["re"]["ne"]=1.6276041666667E-8;
efs["re"]["b0"]=1.3020833333333E-7;
efs["re"]["gs"]=1.6666666666667E-5;
efs["re"]["43"]=0.00013333333333333;
efs["re"]["36"]=0.017066666666667;
efs["re"]["j0"]=0.13653333333333;
efs["re"]["ri"]=2.7126736111111E-10;
efs["re"]["kh"]=2.1701388888889E-9;
	efs["1u"]=new Array();
	exs["1u"]=new Array();
efs["1u"]["li"]=9.5367431640625E-7;
efs["1u"]["j9"]=0.95367431640625;
efs["1u"]["si"]=0.00095367431640625;
efs["1u"]["ti"]=953.67431640625;
efs["1u"]["av"]=7.62939453125;
efs["1u"]["4m"]=0.00762939453125;
efs["1u"]["tk"]=7629.39453125;
efs["1u"]["sd"]=7.62939453125E-6;
efs["1u"]["vu"]=9.5367431640625;
efs["1u"]["ca"]=95.367431640625;
efs["1u"]["cy"]=953.67431640625;
efs["1u"]["m5"]=1048574.4476318;
efs["1u"]["cg"]=1024;
efs["1u"]["gc"]=976.5625;
efs["1u"]["3t"]=0.9765625;
efs["1u"]["28"]=0.0009765625;
efs["1u"]["0w"]=7.8170025934939;
efs["1u"]["nb"]=0.0078170025934939;
efs["1u"]["re"]=1000;
efs["1u"]["1u"]=1;
efs["1u"]["lf"]=7.8170025934939;
efs["1u"]["1t"]=0.011851851854324;
efs["1u"]["x6"]=11.851851854324;
efs["1u"]["f8"]=0.090826125372024;
efs["1u"]["ne"]=1.6276041666667E-5;
efs["1u"]["b0"]=0.00013020833333333;
efs["1u"]["gs"]=0.016666666666667;
efs["1u"]["43"]=0.13333333333333;
efs["1u"]["36"]=17.066666666667;
efs["1u"]["j0"]=136.53333333333;
efs["1u"]["ri"]=2.7126736111111E-7;
efs["1u"]["kh"]=2.1701388888889E-6;
	efs["lf"]=new Array();
	exs["lf"]=new Array();
efs["lf"]["li"] = 1.22E-7;
efs["lf"]["j9"] = 0.122;
efs["lf"]["si"] = 0.000122;
efs["lf"]["ti"] = 122;
efs["lf"]["av"] = 0.976;
efs["lf"]["4m"] = 0.000976;
efs["lf"]["tk"] = 976;
efs["lf"]["sd"] = 9.76E-7;
efs["lf"]["vu"] = 1.22;
efs["lf"]["ca"] = 12.2;
efs["lf"]["cy"] = 122;
efs["lf"]["m5"] = 134140.22;
efs["lf"]["cg"] = 130.996502528;
efs["lf"]["gc"] = 124.928;
efs["lf"]["3t"] = 0.124928;
efs["lf"]["28"] = 0.000124928;
efs["lf"]["0w"] = 1;
efs["lf"]["nb"] = 0.001;
efs["lf"]["re"] = 127.926272;
efs["lf"]["1u"] = 0.127926272;
efs["lf"]["lf"] = 1;
efs["lf"]["1t"] = 0.00151616322402;
efs["lf"]["x6"] = 1.51616322402;
efs["lf"]["f8"] = 0.011619047619048;
efs["lf"]["ne"] = 2.0821333333333E-6;
efs["lf"]["b0"] = 1.6657066666667E-5;
efs["lf"]["gs"] = 0.0021321045333333;
efs["lf"]["43"] = 0.017056836266667;
efs["lf"]["36"] = 2.1832750421333;
efs["lf"]["j0"] = 17.466200337067;
efs["lf"]["ri"] = 3.4702222222222E-8;
efs["lf"]["kh"] = 2.7761777777778E-7;
	efs["1t"]=new Array();
	exs["1t"]=new Array();
efs["1t"]["li"]=8.0466270429991E-5;
efs["1t"]["j9"]=80.466270429991;
efs["1t"]["si"]=0.080466270429991;
efs["1t"]["ti"]=80466.270429991;
efs["1t"]["av"]=643.73016343993;
efs["1t"]["4m"]=0.64373016343993;
efs["1t"]["tk"]=643730.16343993;
efs["1t"]["sd"]=0.00064373016343993;
efs["1t"]["vu"]=804.66270429991;
efs["1t"]["ca"]=8046.6270429991;
efs["1t"]["cy"]=80466.270429991;
efs["1t"]["m5"]=88473469.000479;
efs["1t"]["cg"]=86399.999981976;
efs["1t"]["gc"]=82397.460920311;
efs["1t"]["3t"]=82.397460920311;
efs["1t"]["28"]=0.082397460920311;
efs["1t"]["0w"]=659.55959368845;
efs["1t"]["nb"]=0.65955959368845;
efs["1t"]["re"]=84374.999982398;
efs["1t"]["1u"]=84.374999982398;
efs["1t"]["lf"]=659.55959368845;
efs["1t"]["1t"]=1;
efs["1t"]["x6"]=1000;
efs["1t"]["f8"]=7.6634543266658;
efs["1t"]["ne"]=0.0013732910153385;
efs["1t"]["b0"]=0.010986328122708;
efs["1t"]["gs"]=1.4062499997066;
efs["1t"]["43"]=11.249999997653;
efs["1t"]["36"]=1439.9999996996;
efs["1t"]["j0"]=11519.999997597;
efs["1t"]["ri"]=2.2888183588975E-5;
efs["1t"]["kh"]=0.0001831054687118;
	efs["x6"]=new Array();
	exs["x6"]=new Array();
efs["x6"]["li"]=8.0466270429991E-8;
efs["x6"]["j9"]=0.080466270429991;
efs["x6"]["si"]=8.0466270429991E-5;
efs["x6"]["ti"]=80.466270429991;
efs["x6"]["av"]=0.64373016343993;
efs["x6"]["4m"]=0.00064373016343993;
efs["x6"]["tk"]=643.73016343993;
efs["x6"]["sd"]=6.4373016343993E-7;
efs["x6"]["vu"]=0.80466270429991;
efs["x6"]["ca"]=8.0466270429991;
efs["x6"]["cy"]=80.466270429991;
efs["x6"]["m5"]=88473.469000479;
efs["x6"]["cg"]=86.399999981976;
efs["x6"]["gc"]=82.397460920311;
efs["x6"]["3t"]=0.082397460920311;
efs["x6"]["28"]=8.2397460920311E-5;
efs["x6"]["0w"]=0.65955959368845;
efs["x6"]["nb"]=0.00065955959368845;
efs["x6"]["re"]=84.374999982398;
efs["x6"]["1u"]=0.084374999982398;
efs["x6"]["lf"]=0.65955959368845;
efs["x6"]["1t"]=0.001;
efs["x6"]["x6"]=1;
efs["x6"]["f8"]=0.0076634543266658;
efs["x6"]["ne"]=1.3732910153385E-6;
efs["x6"]["b0"]=1.0986328122708E-5;
efs["x6"]["gs"]=0.0014062499997066;
efs["x6"]["43"]=0.011249999997653;
efs["x6"]["36"]=1.4399999996996;
efs["x6"]["j0"]=11.519999997597;
efs["x6"]["ri"]=2.2888183588975E-8;
efs["x6"]["kh"]=1.831054687118E-7;
	efs["f8"]=new Array();
	exs["f8"]=new Array();
efs["f8"]["li"] = 1.05E-5;
efs["f8"]["j9"] = 10.5;
efs["f8"]["si"] = 0.0105;
efs["f8"]["ti"] = 10500;
efs["f8"]["av"] = 84;
efs["f8"]["4m"] = 0.084;
efs["f8"]["tk"] = 84000;
efs["f8"]["sd"] = 8.4E-5;
efs["f8"]["vu"] = 105;
efs["f8"]["ca"] = 1050;
efs["f8"]["cy"] = 10500;
efs["f8"]["m5"] = 11544855;
efs["f8"]["cg"] = 11274.289152;
efs["f8"]["gc"] = 10752;
efs["f8"]["3t"] = 10.752;
efs["f8"]["28"] = 0.010752;
efs["f8"]["0w"] = 86.065573770492;
efs["f8"]["nb"] = 0.086065573770492;
efs["f8"]["re"] = 11010.048;
efs["f8"]["1u"] = 11.010048;
efs["f8"]["lf"] = 86.065573770492;
efs["f8"]["1t"] = 0.130489457805;
efs["f8"]["x6"] = 130.489457805;
efs["f8"]["f8"] = 1;
efs["f8"]["ne"] = 0.0001792;
efs["f8"]["b0"] = 0.0014336;
efs["f8"]["gs"] = 0.1835008;
efs["f8"]["43"] = 1.4680064;
efs["f8"]["36"] = 187.9048192;
efs["f8"]["j0"] = 1503.2385536;
efs["f8"]["ri"] = 2.9866666666667E-6;
efs["f8"]["kh"] = 2.3893333333333E-5;
	efs["ne"]=new Array();
	exs["ne"]=new Array();
efs["ne"]["li"] = 0.05859375;
efs["ne"]["j9"] = 58593.75;
efs["ne"]["si"] = 58.59375;
efs["ne"]["ti"] = 58593750;
efs["ne"]["av"] = 468750;
efs["ne"]["4m"] = 468.75;
efs["ne"]["tk"] = 468750000;
efs["ne"]["sd"] = 0.46875;
efs["ne"]["vu"] = 585937.5;
efs["ne"]["ca"] = 5859375;
efs["ne"]["cy"] = 58593750;
efs["ne"]["m5"] = 64424414062.5;
efs["ne"]["cg"] = 62914560;
efs["ne"]["gc"] = 60000000;
efs["ne"]["3t"] = 60000;
efs["ne"]["28"] = 60;
efs["ne"]["0w"] = 480276.63934426;
efs["ne"]["nb"] = 480.27663934426;
efs["ne"]["re"] = 61440000;
efs["ne"]["1u"] = 61440;
efs["ne"]["lf"] = 480276.63934426;
efs["ne"]["1t"] = 728.17777792969;
efs["ne"]["x6"] = 728177.77792969;
efs["ne"]["f8"] = 5580.3571428571;
efs["ne"]["ne"] = 1;
efs["ne"]["b0"] = 8;
efs["ne"]["gs"] = 1024;
efs["ne"]["43"] = 8192;
efs["ne"]["36"] = 1048576;
efs["ne"]["j0"] = 8388608;
efs["ne"]["ri"] = 0.016666666666667;
efs["ne"]["kh"] = 0.13333333333333;
	efs["b0"]=new Array();
	exs["b0"]=new Array();
efs["b0"]["li"]=0.00732421875;
efs["b0"]["j9"]=7324.21875;
efs["b0"]["si"]=7.32421875;
efs["b0"]["ti"]=7324218.75;
efs["b0"]["av"]=58593.75;
efs["b0"]["4m"]=58.59375;
efs["b0"]["tk"]=58593750;
efs["b0"]["sd"]=0.05859375;
efs["b0"]["vu"]=73242.1875;
efs["b0"]["ca"]=732421.875;
efs["b0"]["cy"]=7324218.75;
efs["b0"]["m5"]=8053051757.8125;
efs["b0"]["cg"]=7864320;
efs["b0"]["gc"]=7500000;
efs["b0"]["3t"]=7500;
efs["b0"]["28"]=7.5;
efs["b0"]["0w"]=60034.579918033;
efs["b0"]["nb"]=60.034579918033;
efs["b0"]["re"]=7680000;
efs["b0"]["1u"]=7680;
efs["b0"]["lf"]=60034.579918033;
efs["b0"]["1t"]=91.022222241211;
efs["b0"]["x6"]=91022.222241211;
efs["b0"]["f8"]=697.54464285714;
efs["b0"]["ne"]=0.125;
efs["b0"]["b0"]=1;
efs["b0"]["gs"]=128;
efs["b0"]["43"]=1024;
efs["b0"]["36"]=131072;
efs["b0"]["j0"]=1048576;
efs["b0"]["ri"]=0.0020833333333333;
efs["b0"]["kh"]=4.8545185185185;
	efs["gs"]=new Array();
	exs["gs"]=new Array();
efs["gs"]["li"]=5.7220458984375E-5;
efs["gs"]["j9"]=57.220458984375;
efs["gs"]["si"]=0.057220458984375;
efs["gs"]["ti"]=57220.458984375;
efs["gs"]["av"]=457.763671875;
efs["gs"]["4m"]=0.457763671875;
efs["gs"]["tk"]=457763.671875;
efs["gs"]["sd"]=0.000457763671875;
efs["gs"]["vu"]=572.20458984375;
efs["gs"]["ca"]=5722.0458984375;
efs["gs"]["cy"]=57220.458984375;
efs["gs"]["m5"]=62914466.85791;
efs["gs"]["cg"]=61440;
efs["gs"]["gc"]=58593.75;
efs["gs"]["3t"]=58.59375;
efs["gs"]["28"]=0.05859375;
efs["gs"]["0w"]=469.02015560963;
efs["gs"]["nb"]=0.46902015560963;
efs["gs"]["re"]=60000;
efs["gs"]["1u"]=60;
efs["gs"]["lf"]=469.02015560963;
efs["gs"]["1t"]=0.71111111125946;
efs["gs"]["x6"]=711.11111125946;
efs["gs"]["f8"]=5.4495675223214;
efs["gs"]["ne"]=0.0009765625;
efs["gs"]["b0"]=0.0078125;
efs["gs"]["gs"]=1;
efs["gs"]["43"]=8;
efs["gs"]["36"]=1024;
efs["gs"]["j0"]=8192;
efs["gs"]["ri"]=1.6276041666667E-5;
efs["gs"]["kh"]=0.037925925925926;
	efs["43"]=new Array();
	exs["43"]=new Array();
efs["43"]["li"]=7.1525573730469E-6;
efs["43"]["j9"]=7.1525573730469;
efs["43"]["si"]=0.0071525573730469;
efs["43"]["ti"]=7152.5573730469;
efs["43"]["av"]=57.220458984375;
efs["43"]["4m"]=0.057220458984375;
efs["43"]["tk"]=57220.458984375;
efs["43"]["sd"]=5.7220458984375E-5;
efs["43"]["vu"]=71.525573730469;
efs["43"]["ca"]=715.25573730469;
efs["43"]["cy"]=7152.5573730469;
efs["43"]["m5"]=7864308.3572388;
efs["43"]["cg"]=7680;
efs["43"]["gc"]=7324.21875;
efs["43"]["3t"]=7.32421875;
efs["43"]["28"]=0.00732421875;
efs["43"]["0w"]=58.627519451204;
efs["43"]["nb"]=0.058627519451204;
efs["43"]["re"]=7500;
efs["43"]["1u"]=7.5;
efs["43"]["lf"]=58.627519451204;
efs["43"]["1t"]=0.088888888907433;
efs["43"]["x6"]=88.888888907433;
efs["43"]["f8"]=0.68119594029018;
efs["43"]["ne"]=0.0001220703125;
efs["43"]["b0"]=0.0009765625;
efs["43"]["gs"]=0.125;
efs["43"]["43"]=1;
efs["43"]["36"]=128;
efs["43"]["j0"]=1024;
efs["43"]["ri"]=2.0345052083333E-6;
efs["43"]["kh"]=0.0047407407407407;
	efs["36"]=new Array();
	exs["36"]=new Array();
efs["36"]["li"]=5.5879354476929E-8;
efs["36"]["j9"]=0.055879354476929;
efs["36"]["si"]=5.5879354476929E-5;
efs["36"]["ti"]=55.879354476929;
efs["36"]["av"]=0.44703483581543;
efs["36"]["4m"]=0.00044703483581543;
efs["36"]["tk"]=447.03483581543;
efs["36"]["sd"]=4.4703483581543E-7;
efs["36"]["vu"]=0.55879354476929;
efs["36"]["ca"]=5.5879354476929;
efs["36"]["cy"]=55.879354476929;
efs["36"]["m5"]=61439.909040928;
efs["36"]["cg"]=60;
efs["36"]["gc"]=57.220458984375;
efs["36"]["3t"]=0.057220458984375;
efs["36"]["28"]=5.7220458984375E-5;
efs["36"]["0w"]=0.45802749571253;
efs["36"]["nb"]=0.00045802749571253;
efs["36"]["re"]=58.59375;
efs["36"]["1u"]=0.05859375;
efs["36"]["lf"]=0.45802749571253;
efs["36"]["1t"]=0.00069444444458932;
efs["36"]["x6"]=0.69444444458932;
efs["36"]["f8"]=0.005321843283517;
efs["36"]["ne"]=9.5367431640625E-7;
efs["36"]["b0"]=7.62939453125E-6;
efs["36"]["gs"]=0.0009765625;
efs["36"]["43"]=0.0078125;
efs["36"]["36"]=1;
efs["36"]["j0"]=8;
efs["36"]["ri"]=1.5894571940104E-8;
efs["36"]["kh"]=3.7037037037037E-5;
	efs["j0"]=new Array();
	exs["j0"]=new Array();
efs["j0"]["li"]=6.9849193096161E-9;
efs["j0"]["j9"]=0.0069849193096161;
efs["j0"]["si"]=6.9849193096161E-6;
efs["j0"]["ti"]=6.9849193096161;
efs["j0"]["av"]=0.055879354476929;
efs["j0"]["4m"]=5.5879354476929E-5;
efs["j0"]["tk"]=55.879354476929;
efs["j0"]["sd"]=5.5879354476929E-8;
efs["j0"]["vu"]=0.069849193096161;
efs["j0"]["ca"]=0.69849193096161;
efs["j0"]["cy"]=6.9849193096161;
efs["j0"]["m5"]=7679.988630116;
efs["j0"]["cg"]=7.5;
efs["j0"]["gc"]=7.1525573730469;
efs["j0"]["3t"]=0.0071525573730469;
efs["j0"]["28"]=7.1525573730469E-6;
efs["j0"]["0w"]=0.057253436964066;
efs["j0"]["nb"]=5.7253436964066E-5;
efs["j0"]["re"]=7.32421875;
efs["j0"]["1u"]=0.00732421875;
efs["j0"]["lf"]=0.057253436964066;
efs["j0"]["1t"]=8.6805555573665E-5;
efs["j0"]["x6"]=0.086805555573665;
efs["j0"]["f8"]=0.00066523041043963;
efs["j0"]["ne"]=1.1920928955078E-7;
efs["j0"]["b0"]=9.5367431640625E-7;
efs["j0"]["gs"]=0.0001220703125;
efs["j0"]["43"]=0.0009765625;
efs["j0"]["36"]=0.125;
efs["j0"]["j0"]=1;
efs["j0"]["ri"]=1.986821492513E-9;
efs["j0"]["kh"]=4.6296296296296E-6;
	efs["ri"]=new Array();
	exs["ri"]=new Array();
efs["ri"]["li"] = 3.515625;
efs["ri"]["j9"] = 3515625;
efs["ri"]["si"] = 3515.625;
efs["ri"]["ti"] = 3515625000;
efs["ri"]["av"] = 28125000;
efs["ri"]["4m"] = 28125;
efs["ri"]["tk"] = 28125000000;
efs["ri"]["sd"] = 28.125;
efs["ri"]["vu"] = 35156250;
efs["ri"]["ca"] = 351562500;
efs["ri"]["cy"] = 3515625000;
efs["ri"]["m5"] = 3865464843750;
efs["ri"]["cg"] = 3774873600;
efs["ri"]["gc"] = 3600000000;
efs["ri"]["3t"] = 3600000;
efs["ri"]["28"] = 3600;
efs["ri"]["0w"] = 28816598.360656;
efs["ri"]["nb"] = 28816.598360656;
efs["ri"]["re"] = 3686400000;
efs["ri"]["1u"] = 3686400;
efs["ri"]["lf"] = 28816598.360656;
efs["ri"]["1t"] = 43690.666675781;
efs["ri"]["x6"] = 43690666.675781;
efs["ri"]["f8"] = 334821.42857143;
efs["ri"]["ne"] = 60;
efs["ri"]["b0"] = 480;
efs["ri"]["gs"] = 61440;
efs["ri"]["43"] = 491520;
efs["ri"]["36"] = 62914560;
efs["ri"]["j0"] = 503316480;
efs["ri"]["ri"] = 1;
efs["ri"]["kh"] = 8;
	efs["kh"]=new Array();
	exs["kh"]=new Array();
efs["kh"]["li"]=0.439453125;
efs["kh"]["j9"]=439453.125;
efs["kh"]["si"]=439.453125;
efs["kh"]["ti"]=439453125;
efs["kh"]["av"]=3515625;
efs["kh"]["4m"]=3515.625;
efs["kh"]["tk"]=3515625000;
efs["kh"]["sd"]=3.515625;
efs["kh"]["vu"]=4394531.25;
efs["kh"]["ca"]=43945312.5;
efs["kh"]["cy"]=439453125;
efs["kh"]["m5"]=483183105468.75;
efs["kh"]["cg"]=471859200;
efs["kh"]["gc"]=450000000;
efs["kh"]["3t"]=450000;
efs["kh"]["28"]=450;
efs["kh"]["0w"]=3602074.795082;
efs["kh"]["nb"]=3602.074795082;
efs["kh"]["re"]=460800000;
efs["kh"]["1u"]=460800;
efs["kh"]["lf"]=3602074.795082;
efs["kh"]["1t"]=5461.3333344727;
efs["kh"]["x6"]=5461333.3344727;
efs["kh"]["f8"]=41852.678571429;
efs["kh"]["ne"]=7.5;
efs["kh"]["b0"]=60;
efs["kh"]["gs"]=7680;
efs["kh"]["43"]=61440;
efs["kh"]["36"]=7864320;
efs["kh"]["j0"]=62914560;
efs["kh"]["ri"]=0.125;
efs["kh"]["kh"]=1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['li'] = 0;
	    idmap['li'] = "bit/second";
	    stat['j9'] = 0;
	    idmap['j9'] = "bit/microsecond";
	    stat['si'] = 0;
	    idmap['si'] = "bit/millisecond";
	    stat['ti'] = 0;
	    idmap['ti'] = "bit/nanosecond";
	    stat['av'] = 0;
	    idmap['av'] = "byte/microsecond";
	    stat['4m'] = 0;
	    idmap['4m'] = "byte/millisecond";
	    stat['tk'] = 0;
	    idmap['tk'] = "byte/nanosecond";
	    stat['sd'] = 0;
	    idmap['sd'] = "byte/second";
	    stat['vu'] = 0;
	    idmap['vu'] = "ethernet";
	    stat['ca'] = 0;
	    idmap['ca'] = "ethernet (fast)";
	    stat['cy'] = 0;
	    idmap['cy'] = "ethernet (gigabit)";
	    stat['m5'] = 0;
	    idmap['m5'] = "terabit/second";
	    stat['cg'] = 0;
	    idmap['cg'] = "gigabit/second";
	    stat['gc'] = 0;
	    idmap['gc'] = "kilobit/microsecond";
	    stat['3t'] = 0;
	    idmap['3t'] = "kilobit/millisecond";
	    stat['28'] = 0;
	    idmap['28'] = "kilobit/second";
	    stat['0w'] = 0;
	    idmap['0w'] = "kilobyte/millisecond";
	    stat['nb'] = 0;
	    idmap['nb'] = "kilobyte/second";
	    stat['re'] = 0;
	    idmap['re'] = "megabit/millisecond";
	    stat['1u'] = 0;
	    idmap['1u'] = "megabit/second";
	    stat['lf'] = 0;
	    idmap['lf'] = "megabyte/second";
	    stat['1t'] = 0;
	    idmap['1t'] = "gigabit/day";
	    stat['x6'] = 0;
	    idmap['x6'] = "terabit/day";
	    stat['f8'] = 0;
	    idmap['f8'] = "gigabyte/day";
	    stat['ne'] = 0;
	    idmap['ne'] = "kilobit/minute";
	    stat['b0'] = 0;
	    idmap['b0'] = "kilobyte/minute";
	    stat['gs'] = 0;
	    idmap['gs'] = "megabit/minute";
	    stat['43'] = 0;
	    idmap['43'] = "megabyte/minute";
	    stat['36'] = 0;
	    idmap['36'] = "gigabit/minute";
	    stat['j0'] = 0;
	    idmap['j0'] = "gigabyte/minute";
	    stat['ri'] = 0;
	    idmap['ri'] = "kilobit/hour";
	    stat['kh'] = 0;
	    idmap['kh'] = "kilobyte/hour";
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
	    document.getElementById('li').value='';
	    document.getElementById('j9').value='';
	    document.getElementById('si').value='';
	    document.getElementById('ti').value='';
	    document.getElementById('av').value='';
	    document.getElementById('4m').value='';
	    document.getElementById('tk').value='';
	    document.getElementById('sd').value='';
	    document.getElementById('vu').value='';
	    document.getElementById('ca').value='';
	    document.getElementById('cy').value='';
	    document.getElementById('m5').value='';
	    document.getElementById('cg').value='';
	    document.getElementById('gc').value='';
	    document.getElementById('3t').value='';
	    document.getElementById('28').value='';
	    document.getElementById('0w').value='';
	    document.getElementById('nb').value='';
	    document.getElementById('re').value='';
	    document.getElementById('1u').value='';
	    document.getElementById('lf').value='';
	    document.getElementById('1t').value='';
	    document.getElementById('x6').value='';
	    document.getElementById('f8').value='';
	    document.getElementById('ne').value='';
	    document.getElementById('b0').value='';
	    document.getElementById('gs').value='';
	    document.getElementById('43').value='';
	    document.getElementById('36').value='';
	    document.getElementById('j0').value='';
	    document.getElementById('ri').value='';
	    document.getElementById('kh').value='';
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

<div class="mtitle">Data transfer Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;li2&#39;)" id="li2" style="color: blue; font-weight: bold;">1.&nbsp;bit/second <font color="black"><u><i>[bps]</i></u></font>:</div>
<div class="nbox"><input id="li" onblur="setName(&#39;li&#39;)" autocomplete="off" onkeyup="convertcal(&#39;li&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;j92&#39;)" id="j92">2.&nbsp;bit/microsecond <font color="black"><u><i>[b/us]</i></u></font>:</div>
<div class="nbox"><input id="j9" onblur="setName(&#39;j9&#39;)" autocomplete="off" onkeyup="convertcal(&#39;j9&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;si2&#39;)" id="si2">3.&nbsp;bit/millisecond <font color="black"><u><i>[b/ms]</i></u></font>:</div>
<div class="nbox"><input id="si" onblur="setName(&#39;si&#39;)" autocomplete="off" onkeyup="convertcal(&#39;si&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ti2&#39;)" id="ti2">4.&nbsp;bit/nanosecond <font color="black"><u><i>[b/ns]</i></u></font>:</div>
<div class="nbox"><input id="ti" onblur="setName(&#39;ti&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ti&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;av2&#39;)" id="av2">5.&nbsp;byte/microsecond <font color="black"><u><i>[B/us]</i></u></font>:</div>
<div class="nbox"><input id="av" onblur="setName(&#39;av&#39;)" autocomplete="off" onkeyup="convertcal(&#39;av&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;4m2&#39;)" id="4m2">6.&nbsp;byte/millisecond <font color="black"><u><i>[B/ms]</i></u></font>:</div>
<div class="nbox"><input id="4m" onblur="setName(&#39;4m&#39;)" autocomplete="off" onkeyup="convertcal(&#39;4m&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;tk2&#39;)" id="tk2">7.&nbsp;byte/nanosecond <font color="black"><u><i>[B/ns]</i></u></font>:</div>
<div class="nbox"><input id="tk" onblur="setName(&#39;tk&#39;)" autocomplete="off" onkeyup="convertcal(&#39;tk&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;sd2&#39;)" id="sd2">8.&nbsp;byte/second <font color="black"><u><i>[B/s]</i></u></font>:</div>
<div class="nbox"><input id="sd" onblur="setName(&#39;sd&#39;)" autocomplete="off" onkeyup="convertcal(&#39;sd&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;vu2&#39;)" id="vu2">9.&nbsp;ethernet:</div>
<div class="nbox"><input id="vu" onblur="setName(&#39;vu&#39;)" autocomplete="off" onkeyup="convertcal(&#39;vu&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ca2&#39;)" id="ca2">10.&nbsp;ethernet (fast):</div>
<div class="nbox"><input id="ca" onblur="setName(&#39;ca&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ca&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;cy2&#39;)" id="cy2">11.&nbsp;ethernet (gigabit):</div>
<div class="nbox"><input id="cy" onblur="setName(&#39;cy&#39;)" autocomplete="off" onkeyup="convertcal(&#39;cy&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;m52&#39;)" id="m52">12.&nbsp;terabit/second <font color="black"><u><i>[Tbps]</i></u></font>:</div>
<div class="nbox"><input id="m5" onblur="setName(&#39;m5&#39;)" autocomplete="off" onkeyup="convertcal(&#39;m5&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;cg2&#39;)" id="cg2">13.&nbsp;gigabit/second <font color="black"><u><i>[Gbps]</i></u></font>:</div>
<div class="nbox"><input id="cg" onblur="setName(&#39;cg&#39;)" autocomplete="off" onkeyup="convertcal(&#39;cg&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gc2&#39;)" id="gc2">14.&nbsp;kilobit/microsecond <font color="black"><u><i>[kb/us]</i></u></font>:</div>
<div class="nbox"><input id="gc" onblur="setName(&#39;gc&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gc&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;3t2&#39;)" id="3t2">15.&nbsp;kilobit/millisecond <font color="black"><u><i>[kb/ms]</i></u></font>:</div>
<div class="nbox"><input id="3t" onblur="setName(&#39;3t&#39;)" autocomplete="off" onkeyup="convertcal(&#39;3t&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;282&#39;)" id="282">16.&nbsp;kilobit/second <font color="black"><u><i>[Kbps]</i></u></font>:</div>
<div class="nbox"><input id="28" onblur="setName(&#39;28&#39;)" autocomplete="off" onkeyup="convertcal(&#39;28&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;0w2&#39;)" id="0w2">17.&nbsp;kilobyte/millisecond:</div>
<div class="nbox"><input id="0w" onblur="setName(&#39;0w&#39;)" autocomplete="off" onkeyup="convertcal(&#39;0w&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;nb2&#39;)" id="nb2">18.&nbsp;kilobyte/second <font color="black"><u><i>[kB/s]</i></u></font>:</div>
<div class="nbox"><input id="nb" onblur="setName(&#39;nb&#39;)" autocomplete="off" onkeyup="convertcal(&#39;nb&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;re2&#39;)" id="re2">19.&nbsp;megabit/millisecond <font color="black"><u><i>[Mb/ms]</i></u></font>:</div>
<div class="nbox"><input id="re" onblur="setName(&#39;re&#39;)" autocomplete="off" onkeyup="convertcal(&#39;re&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;1u2&#39;)" id="1u2">20.&nbsp;megabit/second <font color="black"><u><i>[Mbps]</i></u></font>:</div>
<div class="nbox"><input id="1u" onblur="setName(&#39;1u&#39;)" autocomplete="off" onkeyup="convertcal(&#39;1u&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;lf2&#39;)" id="lf2">21.&nbsp;megabyte/second <font color="black"><u><i>[MB/s]</i></u></font>:</div>
<div class="nbox"><input id="lf" onblur="setName(&#39;lf&#39;)" autocomplete="off" onkeyup="convertcal(&#39;lf&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;1t2&#39;)" id="1t2">22.&nbsp;gigabit/day <font color="black"><u><i>[Gb/d]</i></u></font>:</div>
<div class="nbox"><input id="1t" onblur="setName(&#39;1t&#39;)" autocomplete="off" onkeyup="convertcal(&#39;1t&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;x62&#39;)" id="x62">23.&nbsp;terabit/day <font color="black"><u><i>[Tb/d]</i></u></font>:</div>
<div class="nbox"><input id="x6" onblur="setName(&#39;x6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;x6&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;f82&#39;)" id="f82">24.&nbsp;gigabyte/day <font color="black"><u><i>[GB/d]</i></u></font>:</div>
<div class="nbox"><input id="f8" onblur="setName(&#39;f8&#39;)" autocomplete="off" onkeyup="convertcal(&#39;f8&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ne2&#39;)" id="ne2">25.&nbsp;kilobit/minute <font color="black"><u><i>[kb/min]</i></u></font>:</div>
<div class="nbox"><input id="ne" onblur="setName(&#39;ne&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ne&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;b02&#39;)" id="b02">26.&nbsp;kilobyte/minute <font color="black"><u><i>[kB/min]</i></u></font>:</div>
<div class="nbox"><input id="b0" onblur="setName(&#39;b0&#39;)" autocomplete="off" onkeyup="convertcal(&#39;b0&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;gs2&#39;)" id="gs2">27.&nbsp;megabit/minute <font color="black"><u><i>[Mb/min]</i></u></font>:</div>
<div class="nbox"><input id="gs" onblur="setName(&#39;gs&#39;)" autocomplete="off" onkeyup="convertcal(&#39;gs&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;432&#39;)" id="432">28.&nbsp;megabyte/minute <font color="black"><u><i>[MB/min]</i></u></font>:</div>
<div class="nbox"><input id="43" onblur="setName(&#39;43&#39;)" autocomplete="off" onkeyup="convertcal(&#39;43&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;362&#39;)" id="362">29.&nbsp;gigabit/minute <font color="black"><u><i>[Gb/min]</i></u></font>:</div>
<div class="nbox"><input id="36" onblur="setName(&#39;36&#39;)" autocomplete="off" onkeyup="convertcal(&#39;36&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;j02&#39;)" id="j02">30.&nbsp;gigabyte/minute <font color="black"><u><i>[GB/min]</i></u></font>:</div>
<div class="nbox"><input id="j0" onblur="setName(&#39;j0&#39;)" autocomplete="off" onkeyup="convertcal(&#39;j0&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ri2&#39;)" id="ri2">31.&nbsp;kilobit/hour <font color="black"><u><i>[kb/h]</i></u></font>:</div>
<div class="nbox"><input id="ri" onblur="setName(&#39;ri&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ri&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;kh2&#39;)" id="kh2">32.&nbsp;kilobyte/hour <font color="black"><u><i>[kB/h]</i></u></font>:</div>
<div class="nbox"><input id="kh" onblur="setName(&#39;kh&#39;)" autocomplete="off" onkeyup="convertcal(&#39;kh&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;si2&#39;)"><u>b/ms</u></span>, <span class="selitem" onclick="sel(&#39;4m2&#39;)"><u>B/ms</u></span>, <span class="selitem" onclick="sel(&#39;ti2&#39;)"><u>b/ns</u></span>, <span class="selitem" onclick="sel(&#39;tk2&#39;)"><u>B/ns</u></span>, <span class="selitem" onclick="sel(&#39;sd2&#39;)"><u>B/s</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)"><u>B/us</u></span>, <span class="selitem" onclick="sel(&#39;j92&#39;)"><u>b/us</u></span>, <span class="selitem" onclick="sel(&#39;li2&#39;)"><u>bps</u></span>, <span class="selitem" onclick="sel(&#39;f82&#39;)"><u>GB/d</u></span>, <span class="selitem" onclick="sel(&#39;1t2&#39;)"><u>Gb/d</u></span>, <span class="selitem" onclick="sel(&#39;j02&#39;)"><u>GB/min</u></span>, <span class="selitem" onclick="sel(&#39;362&#39;)"><u>Gb/min</u></span>, <span class="selitem" onclick="sel(&#39;cg2&#39;)"><u>Gbps</u></span>, <span class="selitem" onclick="sel(&#39;kh2&#39;)"><u>kB/h</u></span>, <span class="selitem" onclick="sel(&#39;ri2&#39;)"><u>kb/h</u></span>, <span class="selitem" onclick="sel(&#39;ne2&#39;)"><u>kb/min</u></span>, <span class="selitem" onclick="sel(&#39;b02&#39;)"><u>kB/min</u></span>, <span class="selitem" onclick="sel(&#39;3t2&#39;)"><u>kb/ms</u></span>, <span class="selitem" onclick="sel(&#39;0w2&#39;)"><u>kB/ms</u></span>, <span class="selitem" onclick="sel(&#39;nb2&#39;)"><u>kB/s</u></span>, <span class="selitem" onclick="sel(&#39;gc2&#39;)"><u>kb/us</u></span>, <span class="selitem" onclick="sel(&#39;282&#39;)"><u>Kbps</u></span>, <span class="selitem" onclick="sel(&#39;gs2&#39;)"><u>Mb/min</u></span>, <span class="selitem" onclick="sel(&#39;432&#39;)"><u>MB/min</u></span>, <span class="selitem" onclick="sel(&#39;re2&#39;)"><u>Mb/ms</u></span>, <span class="selitem" onclick="sel(&#39;lf2&#39;)"><u>MB/s</u></span>, <span class="selitem" onclick="sel(&#39;1u2&#39;)"><u>Mbps</u></span>, <span class="selitem" onclick="sel(&#39;x62&#39;)"><u>Tb/d</u></span>, <span class="selitem" onclick="sel(&#39;m52&#39;)"><u>Tbps</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;j92&#39;)" value="j9"><u>bit/microsecond</u></span>, <span class="selitem" onclick="sel(&#39;si2&#39;)" value="si"><u>bit/millisecond</u></span>, <span class="selitem" onclick="sel(&#39;ti2&#39;)" value="ti"><u>bit/nanosecond</u></span>, <span class="selitem" onclick="sel(&#39;li2&#39;)" value="li"><u>bit/second</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)" value="av"><u>byte/microsecond</u></span>, <span class="selitem" onclick="sel(&#39;4m2&#39;)" value="4m"><u>byte/millisecond</u></span>, <span class="selitem" onclick="sel(&#39;tk2&#39;)" value="tk"><u>byte/nanosecond</u></span>, <span class="selitem" onclick="sel(&#39;sd2&#39;)" value="sd"><u>byte/second</u></span>, <span class="selitem" onclick="sel(&#39;vu2&#39;)" value="vu"><u>ethernet</u></span>, <span class="selitem" onclick="sel(&#39;ca2&#39;)" value="ca"><u>ethernet (fast)</u></span>, <span class="selitem" onclick="sel(&#39;cy2&#39;)" value="cy"><u>ethernet (gigabit)</u></span>, <span class="selitem" onclick="sel(&#39;1t2&#39;)" value="1t"><u>gigabit/day</u></span>, <span class="selitem" onclick="sel(&#39;362&#39;)" value="36"><u>gigabit/minute</u></span>, <span class="selitem" onclick="sel(&#39;cg2&#39;)" value="cg"><u>gigabit/second</u></span>, <span class="selitem" onclick="sel(&#39;f82&#39;)" value="f8"><u>gigabyte/day</u></span>, <span class="selitem" onclick="sel(&#39;j02&#39;)" value="j0"><u>gigabyte/minute</u></span>, <span class="selitem" onclick="sel(&#39;ri2&#39;)" value="ri"><u>kilobit/hour</u></span>, <span class="selitem" onclick="sel(&#39;gc2&#39;)" value="gc"><u>kilobit/microsecond</u></span>, <span class="selitem" onclick="sel(&#39;3t2&#39;)" value="3t"><u>kilobit/millisecond</u></span>, <span class="selitem" onclick="sel(&#39;ne2&#39;)" value="ne"><u>kilobit/minute</u></span>, <span class="selitem" onclick="sel(&#39;282&#39;)" value="28"><u>kilobit/second</u></span>, <span class="selitem" onclick="sel(&#39;kh2&#39;)" value="kh"><u>kilobyte/hour</u></span>, <span class="selitem" onclick="sel(&#39;0w2&#39;)" value="0w"><u>kilobyte/millisecond</u></span>, <span class="selitem" onclick="sel(&#39;b02&#39;)" value="b0"><u>kilobyte/minute</u></span>, <span class="selitem" onclick="sel(&#39;nb2&#39;)" value="nb"><u>kilobyte/second</u></span>, <span class="selitem" onclick="sel(&#39;re2&#39;)" value="re"><u>megabit/millisecond</u></span>, <span class="selitem" onclick="sel(&#39;gs2&#39;)" value="gs"><u>megabit/minute</u></span>, <span class="selitem" onclick="sel(&#39;1u2&#39;)" value="1u"><u>megabit/second</u></span>, <span class="selitem" onclick="sel(&#39;432&#39;)" value="43"><u>megabyte/minute</u></span>, <span class="selitem" onclick="sel(&#39;lf2&#39;)" value="lf"><u>megabyte/second</u></span>, <span class="selitem" onclick="sel(&#39;x62&#39;)" value="x6"><u>terabit/day</u></span>, <span class="selitem" onclick="sel(&#39;m52&#39;)" value="m5"><u>terabit/second</u></span></p>

</div>

<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>