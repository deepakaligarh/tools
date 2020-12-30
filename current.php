<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Current Conversion Online --   </title>
<meta name="keywords" content="Current, Converter">
<meta name="description" content="Current Unit Converter Online">
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
	efs["6v"]=new Array();
	exs["6v"]=new Array();
efs["6v"]["6v"] = 1;
efs["6v"]["pw"] = 1000;
efs["6v"]["5p"] = 0.1;
efs["6v"]["64"] = 0.01;
efs["6v"]["of"] = 0.001;
efs["6v"]["08"] = 1.0E-6;
efs["6v"]["cu"] = 10;
efs["6v"]["li"] = 100;
efs["6v"]["2g"] = 1000000;
efs["6v"]["61"] = 10;
efs["6v"]["t2"] = 0.79577472016833;
efs["6v"]["av"] = 10;
efs["6v"]["du"] = 10;
efs["6v"]["an"] = 3.3356409998255E-10;
efs["6v"]["wx"] = 3.3356409998255E-10;
efs["6v"]["t6"] = 10;
efs["6v"]["bo"] = 3.3356409998255E-10;
efs["6v"]["ty"] = 1;
efs["6v"]["um"] = 1;
efs["6v"]["9j"] = 1;
efs["6v"]["4x"] = 1;
efs["6v"]["ec"] = 1;
efs["6v"]["3w"] = 1;
	efs["pw"]=new Array();
	exs["pw"]=new Array();
efs["pw"]["6v"] = 0.001;
efs["pw"]["pw"] = 1;
efs["pw"]["5p"] = 0.0001;
efs["pw"]["64"] = 1.0E-5;
efs["pw"]["of"] = 1.0E-6;
efs["pw"]["08"] = 1.0E-9;
efs["pw"]["cu"] = 0.01;
efs["pw"]["li"] = 0.1;
efs["pw"]["2g"] = 1000;
efs["pw"]["61"] = 0.01;
efs["pw"]["t2"] = 0.00079577472016833;
efs["pw"]["av"] = 0.01;
efs["pw"]["du"] = 0.01;
efs["pw"]["an"] = 3.3356409998255E-13;
efs["pw"]["wx"] = 3.3356409998255E-13;
efs["pw"]["t6"] = 0.01;
efs["pw"]["bo"] = 3.3356409998255E-13;
efs["pw"]["ty"] = 0.001;
efs["pw"]["um"] = 0.001;
efs["pw"]["9j"] = 0.001;
efs["pw"]["4x"] = 0.001;
efs["pw"]["ec"] = 0.001;
efs["pw"]["3w"] = 0.001;
	efs["5p"]=new Array();
	exs["5p"]=new Array();
efs["5p"]["6v"] = 10;
efs["5p"]["pw"] = 10000;
efs["5p"]["5p"] = 1;
efs["5p"]["64"] = 0.1;
efs["5p"]["of"] = 0.01;
efs["5p"]["08"] = 1.0E-5;
efs["5p"]["cu"] = 100;
efs["5p"]["li"] = 1000;
efs["5p"]["2g"] = 10000000;
efs["5p"]["61"] = 100;
efs["5p"]["t2"] = 7.9577472016833;
efs["5p"]["av"] = 100;
efs["5p"]["du"] = 100;
efs["5p"]["an"] = 3.3356409998255E-9;
efs["5p"]["wx"] = 3.3356409998255E-9;
efs["5p"]["t6"] = 100;
efs["5p"]["bo"] = 3.3356409998255E-9;
efs["5p"]["ty"] = 10;
efs["5p"]["um"] = 10;
efs["5p"]["9j"] = 10;
efs["5p"]["4x"] = 10;
efs["5p"]["ec"] = 10;
efs["5p"]["3w"] = 10;
	efs["64"]=new Array();
	exs["64"]=new Array();
efs["64"]["6v"] = 100;
efs["64"]["pw"] = 100000;
efs["64"]["5p"] = 10;
efs["64"]["64"] = 1;
efs["64"]["of"] = 0.1;
efs["64"]["08"] = 0.0001;
efs["64"]["cu"] = 1000;
efs["64"]["li"] = 10000;
efs["64"]["2g"] = 100000000;
efs["64"]["61"] = 1000;
efs["64"]["t2"] = 79.577472016833;
efs["64"]["av"] = 1000;
efs["64"]["du"] = 1000;
efs["64"]["an"] = 3.3356409998255E-8;
efs["64"]["wx"] = 3.3356409998255E-8;
efs["64"]["t6"] = 1000;
efs["64"]["bo"] = 3.3356409998255E-8;
efs["64"]["ty"] = 100;
efs["64"]["um"] = 100;
efs["64"]["9j"] = 100;
efs["64"]["4x"] = 100;
efs["64"]["ec"] = 100;
efs["64"]["3w"] = 100;
	efs["of"]=new Array();
	exs["of"]=new Array();
efs["of"]["6v"] = 1000;
efs["of"]["pw"] = 1000000;
efs["of"]["5p"] = 100;
efs["of"]["64"] = 10;
efs["of"]["of"] = 1;
efs["of"]["08"] = 0.001;
efs["of"]["cu"] = 10000;
efs["of"]["li"] = 100000;
efs["of"]["2g"] = 1000000000;
efs["of"]["61"] = 10000;
efs["of"]["t2"] = 795.77472016833;
efs["of"]["av"] = 10000;
efs["of"]["du"] = 10000;
efs["of"]["an"] = 3.3356409998255E-7;
efs["of"]["wx"] = 3.3356409998255E-7;
efs["of"]["t6"] = 10000;
efs["of"]["bo"] = 3.3356409998255E-7;
efs["of"]["ty"] = 1000;
efs["of"]["um"] = 1000;
efs["of"]["9j"] = 1000;
efs["of"]["4x"] = 1000;
efs["of"]["ec"] = 1000;
efs["of"]["3w"] = 1000;
	efs["08"]=new Array();
	exs["08"]=new Array();
efs["08"]["6v"] = 1000000;
efs["08"]["pw"] = 1000000000;
efs["08"]["5p"] = 100000;
efs["08"]["64"] = 10000;
efs["08"]["of"] = 1000;
efs["08"]["08"] = 1;
efs["08"]["cu"] = 10000000;
efs["08"]["li"] = 100000000;
efs["08"]["2g"] = 1000000000000;
efs["08"]["61"] = 10000000;
efs["08"]["t2"] = 795774.72016833;
efs["08"]["av"] = 10000000;
efs["08"]["du"] = 10000000;
efs["08"]["an"] = 0.00033356409998255;
efs["08"]["wx"] = 0.00033356409998255;
efs["08"]["t6"] = 10000000;
efs["08"]["bo"] = 0.00033356409998255;
efs["08"]["ty"] = 1000000;
efs["08"]["um"] = 1000000;
efs["08"]["9j"] = 1000000;
efs["08"]["4x"] = 1000000;
efs["08"]["ec"] = 1000000;
efs["08"]["3w"] = 1000000;
	efs["cu"]=new Array();
	exs["cu"]=new Array();
efs["cu"]["6v"] = 0.1;
efs["cu"]["pw"] = 100;
efs["cu"]["5p"] = 0.01;
efs["cu"]["64"] = 0.001;
efs["cu"]["of"] = 0.0001;
efs["cu"]["08"] = 1.0E-7;
efs["cu"]["cu"] = 1;
efs["cu"]["li"] = 10;
efs["cu"]["2g"] = 100000;
efs["cu"]["61"] = 1;
efs["cu"]["t2"] = 0.079577472016833;
efs["cu"]["av"] = 1;
efs["cu"]["du"] = 1;
efs["cu"]["an"] = 3.3356409998255E-11;
efs["cu"]["wx"] = 3.3356409998255E-11;
efs["cu"]["t6"] = 1;
efs["cu"]["bo"] = 3.3356409998255E-11;
efs["cu"]["ty"] = 0.1;
efs["cu"]["um"] = 0.1;
efs["cu"]["9j"] = 0.1;
efs["cu"]["4x"] = 0.1;
efs["cu"]["ec"] = 0.1;
efs["cu"]["3w"] = 0.1;
	efs["li"]=new Array();
	exs["li"]=new Array();
efs["li"]["6v"] = 0.01;
efs["li"]["pw"] = 10;
efs["li"]["5p"] = 0.001;
efs["li"]["64"] = 0.0001;
efs["li"]["of"] = 1.0E-5;
efs["li"]["08"] = 1.0E-8;
efs["li"]["cu"] = 0.1;
efs["li"]["li"] = 1;
efs["li"]["2g"] = 10000;
efs["li"]["61"] = 0.1;
efs["li"]["t2"] = 0.0079577472016833;
efs["li"]["av"] = 0.1;
efs["li"]["du"] = 0.1;
efs["li"]["an"] = 3.3356409998255E-12;
efs["li"]["wx"] = 3.3356409998255E-12;
efs["li"]["t6"] = 0.1;
efs["li"]["bo"] = 3.3356409998255E-12;
efs["li"]["ty"] = 0.01;
efs["li"]["um"] = 0.01;
efs["li"]["9j"] = 0.01;
efs["li"]["4x"] = 0.01;
efs["li"]["ec"] = 0.01;
efs["li"]["3w"] = 0.01;
	efs["2g"]=new Array();
	exs["2g"]=new Array();
efs["2g"]["6v"] = 1.0E-6;
efs["2g"]["pw"] = 0.001;
efs["2g"]["5p"] = 1.0E-7;
efs["2g"]["64"] = 1.0E-8;
efs["2g"]["of"] = 1.0E-9;
efs["2g"]["08"] = 1.0E-12;
efs["2g"]["cu"] = 1.0E-5;
efs["2g"]["li"] = 0.0001;
efs["2g"]["2g"] = 1;
efs["2g"]["61"] = 1.0E-5;
efs["2g"]["t2"] = 7.9577472016833E-7;
efs["2g"]["av"] = 1.0E-5;
efs["2g"]["du"] = 1.0E-5;
efs["2g"]["an"] = 3.3356409998255E-16;
efs["2g"]["wx"] = 3.3356409998255E-16;
efs["2g"]["t6"] = 1.0E-5;
efs["2g"]["bo"] = 3.3356409998255E-16;
efs["2g"]["ty"] = 1.0E-6;
efs["2g"]["um"] = 1.0E-6;
efs["2g"]["9j"] = 1.0E-6;
efs["2g"]["4x"] = 1.0E-6;
efs["2g"]["ec"] = 1.0E-6;
efs["2g"]["3w"] = 1.0E-6;
	efs["61"]=new Array();
	exs["61"]=new Array();
efs["61"]["6v"] = 0.1;
efs["61"]["pw"] = 100;
efs["61"]["5p"] = 0.01;
efs["61"]["64"] = 0.001;
efs["61"]["of"] = 0.0001;
efs["61"]["08"] = 1.0E-7;
efs["61"]["cu"] = 1;
efs["61"]["li"] = 10;
efs["61"]["2g"] = 100000;
efs["61"]["61"] = 1;
efs["61"]["t2"] = 0.079577472016833;
efs["61"]["av"] = 1;
efs["61"]["du"] = 1;
efs["61"]["an"] = 3.3356409998255E-11;
efs["61"]["wx"] = 3.3356409998255E-11;
efs["61"]["t6"] = 1;
efs["61"]["bo"] = 3.3356409998255E-11;
efs["61"]["ty"] = 0.1;
efs["61"]["um"] = 0.1;
efs["61"]["9j"] = 0.1;
efs["61"]["4x"] = 0.1;
efs["61"]["ec"] = 0.1;
efs["61"]["3w"] = 0.1;
	efs["t2"]=new Array();
	exs["t2"]=new Array();
efs["t2"]["6v"] = 1.256637054;
efs["t2"]["pw"] = 1256.637054;
efs["t2"]["5p"] = 0.1256637054;
efs["t2"]["64"] = 0.01256637054;
efs["t2"]["of"] = 0.001256637054;
efs["t2"]["08"] = 1.256637054E-6;
efs["t2"]["cu"] = 12.56637054;
efs["t2"]["li"] = 125.6637054;
efs["t2"]["2g"] = 1256637.054;
efs["t2"]["61"] = 12.56637054;
efs["t2"]["t2"] = 1;
efs["t2"]["av"] = 12.56637054;
efs["t2"]["du"] = 12.56637054;
efs["t2"]["an"] = 4.1916900792223E-10;
efs["t2"]["wx"] = 4.1916900792223E-10;
efs["t2"]["t6"] = 12.56637054;
efs["t2"]["bo"] = 4.1916900792223E-10;
efs["t2"]["ty"] = 1.256637054;
efs["t2"]["um"] = 1.256637054;
efs["t2"]["9j"] = 1.256637054;
efs["t2"]["4x"] = 1.256637054;
efs["t2"]["ec"] = 1.256637054;
efs["t2"]["3w"] = 1.256637054;
	efs["av"]=new Array();
	exs["av"]=new Array();
efs["av"]["6v"] = 0.1;
efs["av"]["pw"] = 100;
efs["av"]["5p"] = 0.01;
efs["av"]["64"] = 0.001;
efs["av"]["of"] = 0.0001;
efs["av"]["08"] = 1.0E-7;
efs["av"]["cu"] = 1;
efs["av"]["li"] = 10;
efs["av"]["2g"] = 100000;
efs["av"]["61"] = 1;
efs["av"]["t2"] = 0.079577472016833;
efs["av"]["av"] = 1;
efs["av"]["du"] = 1;
efs["av"]["an"] = 3.3356409998255E-11;
efs["av"]["wx"] = 3.3356409998255E-11;
efs["av"]["t6"] = 1;
efs["av"]["bo"] = 3.3356409998255E-11;
efs["av"]["ty"] = 0.1;
efs["av"]["um"] = 0.1;
efs["av"]["9j"] = 0.1;
efs["av"]["4x"] = 0.1;
efs["av"]["ec"] = 0.1;
efs["av"]["3w"] = 0.1;
	efs["du"]=new Array();
	exs["du"]=new Array();
efs["du"]["6v"] = 0.1;
efs["du"]["pw"] = 100;
efs["du"]["5p"] = 0.01;
efs["du"]["64"] = 0.001;
efs["du"]["of"] = 0.0001;
efs["du"]["08"] = 1.0E-7;
efs["du"]["cu"] = 1;
efs["du"]["li"] = 10;
efs["du"]["2g"] = 100000;
efs["du"]["61"] = 1;
efs["du"]["t2"] = 0.079577472016833;
efs["du"]["av"] = 1;
efs["du"]["du"] = 1;
efs["du"]["an"] = 3.3356409998255E-11;
efs["du"]["wx"] = 3.3356409998255E-11;
efs["du"]["t6"] = 1;
efs["du"]["bo"] = 3.3356409998255E-11;
efs["du"]["ty"] = 0.1;
efs["du"]["um"] = 0.1;
efs["du"]["9j"] = 0.1;
efs["du"]["4x"] = 0.1;
efs["du"]["ec"] = 0.1;
efs["du"]["3w"] = 0.1;
	efs["an"]=new Array();
	exs["an"]=new Array();
efs["an"]["6v"] = 2997924537;
efs["an"]["pw"] = 2997924537000;
efs["an"]["5p"] = 299792453.7;
efs["an"]["64"] = 29979245.37;
efs["an"]["of"] = 2997924.537;
efs["an"]["08"] = 2997.924537;
efs["an"]["cu"] = 29979245370;
efs["an"]["li"] = 299792453700;
efs["an"]["2g"] = 2.997924537E+15;
efs["an"]["61"] = 29979245370;
efs["an"]["t2"] = 2385672559.5169;
efs["an"]["av"] = 29979245370;
efs["an"]["du"] = 29979245370;
efs["an"]["an"] = 1;
efs["an"]["wx"] = 1;
efs["an"]["t6"] = 29979245370;
efs["an"]["bo"] = 1;
efs["an"]["ty"] = 2997924537;
efs["an"]["um"] = 2997924537;
efs["an"]["9j"] = 2997924537;
efs["an"]["4x"] = 2997924537;
efs["an"]["ec"] = 2997924537;
efs["an"]["3w"] = 2997924537;
	efs["wx"]=new Array();
	exs["wx"]=new Array();
efs["wx"]["6v"] = 2997924537;
efs["wx"]["pw"] = 2997924537000;
efs["wx"]["5p"] = 299792453.7;
efs["wx"]["64"] = 29979245.37;
efs["wx"]["of"] = 2997924.537;
efs["wx"]["08"] = 2997.924537;
efs["wx"]["cu"] = 29979245370;
efs["wx"]["li"] = 299792453700;
efs["wx"]["2g"] = 2.997924537E+15;
efs["wx"]["61"] = 29979245370;
efs["wx"]["t2"] = 2385672559.5169;
efs["wx"]["av"] = 29979245370;
efs["wx"]["du"] = 29979245370;
efs["wx"]["an"] = 1;
efs["wx"]["wx"] = 1;
efs["wx"]["t6"] = 29979245370;
efs["wx"]["bo"] = 1;
efs["wx"]["ty"] = 2997924537;
efs["wx"]["um"] = 2997924537;
efs["wx"]["9j"] = 2997924537;
efs["wx"]["4x"] = 2997924537;
efs["wx"]["ec"] = 2997924537;
efs["wx"]["3w"] = 2997924537;
	efs["t6"]=new Array();
	exs["t6"]=new Array();
efs["t6"]["6v"] = 0.1;
efs["t6"]["pw"] = 100;
efs["t6"]["5p"] = 0.01;
efs["t6"]["64"] = 0.001;
efs["t6"]["of"] = 0.0001;
efs["t6"]["08"] = 1.0E-7;
efs["t6"]["cu"] = 1;
efs["t6"]["li"] = 10;
efs["t6"]["2g"] = 100000;
efs["t6"]["61"] = 1;
efs["t6"]["t2"] = 0.079577472016833;
efs["t6"]["av"] = 1;
efs["t6"]["du"] = 1;
efs["t6"]["an"] = 3.3356409998255E-11;
efs["t6"]["wx"] = 3.3356409998255E-11;
efs["t6"]["t6"] = 1;
efs["t6"]["bo"] = 3.3356409998255E-11;
efs["t6"]["ty"] = 0.1;
efs["t6"]["um"] = 0.1;
efs["t6"]["9j"] = 0.1;
efs["t6"]["4x"] = 0.1;
efs["t6"]["ec"] = 0.1;
efs["t6"]["3w"] = 0.1;
	efs["bo"]=new Array();
	exs["bo"]=new Array();
efs["bo"]["6v"] = 2997924537;
efs["bo"]["pw"] = 2997924537000;
efs["bo"]["5p"] = 299792453.7;
efs["bo"]["64"] = 29979245.37;
efs["bo"]["of"] = 2997924.537;
efs["bo"]["08"] = 2997.924537;
efs["bo"]["cu"] = 29979245370;
efs["bo"]["li"] = 299792453700;
efs["bo"]["2g"] = 2.997924537E+15;
efs["bo"]["61"] = 29979245370;
efs["bo"]["t2"] = 2385672559.5169;
efs["bo"]["av"] = 29979245370;
efs["bo"]["du"] = 29979245370;
efs["bo"]["an"] = 1;
efs["bo"]["wx"] = 1;
efs["bo"]["t6"] = 29979245370;
efs["bo"]["bo"] = 1;
efs["bo"]["ty"] = 2997924537;
efs["bo"]["um"] = 2997924537;
efs["bo"]["9j"] = 2997924537;
efs["bo"]["4x"] = 2997924537;
efs["bo"]["ec"] = 2997924537;
efs["bo"]["3w"] = 2997924537;
	efs["ty"]=new Array();
	exs["ty"]=new Array();
efs["ty"]["6v"] = 1;
efs["ty"]["pw"] = 1000;
efs["ty"]["5p"] = 0.1;
efs["ty"]["64"] = 0.01;
efs["ty"]["of"] = 0.001;
efs["ty"]["08"] = 1.0E-6;
efs["ty"]["cu"] = 10;
efs["ty"]["li"] = 100;
efs["ty"]["2g"] = 1000000;
efs["ty"]["61"] = 10;
efs["ty"]["t2"] = 0.79577472016833;
efs["ty"]["av"] = 10;
efs["ty"]["du"] = 10;
efs["ty"]["an"] = 3.3356409998255E-10;
efs["ty"]["wx"] = 3.3356409998255E-10;
efs["ty"]["t6"] = 10;
efs["ty"]["bo"] = 3.3356409998255E-10;
efs["ty"]["ty"] = 1;
efs["ty"]["um"] = 1;
efs["ty"]["9j"] = 1;
efs["ty"]["4x"] = 1;
efs["ty"]["ec"] = 1;
efs["ty"]["3w"] = 1;
	efs["um"]=new Array();
	exs["um"]=new Array();
efs["um"]["6v"] = 1;
efs["um"]["pw"] = 1000;
efs["um"]["5p"] = 0.1;
efs["um"]["64"] = 0.01;
efs["um"]["of"] = 0.001;
efs["um"]["08"] = 1.0E-6;
efs["um"]["cu"] = 10;
efs["um"]["li"] = 100;
efs["um"]["2g"] = 1000000;
efs["um"]["61"] = 10;
efs["um"]["t2"] = 0.79577472016833;
efs["um"]["av"] = 10;
efs["um"]["du"] = 10;
efs["um"]["an"] = 3.3356409998255E-10;
efs["um"]["wx"] = 3.3356409998255E-10;
efs["um"]["t6"] = 10;
efs["um"]["bo"] = 3.3356409998255E-10;
efs["um"]["ty"] = 1;
efs["um"]["um"] = 1;
efs["um"]["9j"] = 1;
efs["um"]["4x"] = 1;
efs["um"]["ec"] = 1;
efs["um"]["3w"] = 1;
	efs["9j"]=new Array();
	exs["9j"]=new Array();
efs["9j"]["6v"] = 1;
efs["9j"]["pw"] = 1000;
efs["9j"]["5p"] = 0.1;
efs["9j"]["64"] = 0.01;
efs["9j"]["of"] = 0.001;
efs["9j"]["08"] = 1.0E-6;
efs["9j"]["cu"] = 10;
efs["9j"]["li"] = 100;
efs["9j"]["2g"] = 1000000;
efs["9j"]["61"] = 10;
efs["9j"]["t2"] = 0.79577472016833;
efs["9j"]["av"] = 10;
efs["9j"]["du"] = 10;
efs["9j"]["an"] = 3.3356409998255E-10;
efs["9j"]["wx"] = 3.3356409998255E-10;
efs["9j"]["t6"] = 10;
efs["9j"]["bo"] = 3.3356409998255E-10;
efs["9j"]["ty"] = 1;
efs["9j"]["um"] = 1;
efs["9j"]["9j"] = 1;
efs["9j"]["4x"] = 1;
efs["9j"]["ec"] = 1;
efs["9j"]["3w"] = 1;
	efs["4x"]=new Array();
	exs["4x"]=new Array();
efs["4x"]["6v"] = 1;
efs["4x"]["pw"] = 1000;
efs["4x"]["5p"] = 0.1;
efs["4x"]["64"] = 0.01;
efs["4x"]["of"] = 0.001;
efs["4x"]["08"] = 1.0E-6;
efs["4x"]["cu"] = 10;
efs["4x"]["li"] = 100;
efs["4x"]["2g"] = 1000000;
efs["4x"]["61"] = 10;
efs["4x"]["t2"] = 0.79577472016833;
efs["4x"]["av"] = 10;
efs["4x"]["du"] = 10;
efs["4x"]["an"] = 3.3356409998255E-10;
efs["4x"]["wx"] = 3.3356409998255E-10;
efs["4x"]["t6"] = 10;
efs["4x"]["bo"] = 3.3356409998255E-10;
efs["4x"]["ty"] = 1;
efs["4x"]["um"] = 1;
efs["4x"]["9j"] = 1;
efs["4x"]["4x"] = 1;
efs["4x"]["ec"] = 1;
efs["4x"]["3w"] = 1;
	efs["ec"]=new Array();
	exs["ec"]=new Array();
efs["ec"]["6v"] = 1;
efs["ec"]["pw"] = 1000;
efs["ec"]["5p"] = 0.1;
efs["ec"]["64"] = 0.01;
efs["ec"]["of"] = 0.001;
efs["ec"]["08"] = 1.0E-6;
efs["ec"]["cu"] = 10;
efs["ec"]["li"] = 100;
efs["ec"]["2g"] = 1000000;
efs["ec"]["61"] = 10;
efs["ec"]["t2"] = 0.79577472016833;
efs["ec"]["av"] = 10;
efs["ec"]["du"] = 10;
efs["ec"]["an"] = 3.3356409998255E-10;
efs["ec"]["wx"] = 3.3356409998255E-10;
efs["ec"]["t6"] = 10;
efs["ec"]["bo"] = 3.3356409998255E-10;
efs["ec"]["ty"] = 1;
efs["ec"]["um"] = 1;
efs["ec"]["9j"] = 1;
efs["ec"]["4x"] = 1;
efs["ec"]["ec"] = 1;
efs["ec"]["3w"] = 1;
	efs["3w"]=new Array();
	exs["3w"]=new Array();
efs["3w"]["6v"] = 1;
efs["3w"]["pw"] = 1000;
efs["3w"]["5p"] = 0.1;
efs["3w"]["64"] = 0.01;
efs["3w"]["of"] = 0.001;
efs["3w"]["08"] = 1.0E-6;
efs["3w"]["cu"] = 10;
efs["3w"]["li"] = 100;
efs["3w"]["2g"] = 1000000;
efs["3w"]["61"] = 10;
efs["3w"]["t2"] = 0.79577472016833;
efs["3w"]["av"] = 10;
efs["3w"]["du"] = 10;
efs["3w"]["an"] = 3.3356409998255E-10;
efs["3w"]["wx"] = 3.3356409998255E-10;
efs["3w"]["t6"] = 10;
efs["3w"]["bo"] = 3.3356409998255E-10;
efs["3w"]["ty"] = 1;
efs["3w"]["um"] = 1;
efs["3w"]["9j"] = 1;
efs["3w"]["4x"] = 1;
efs["3w"]["ec"] = 1;
efs["3w"]["3w"] = 1;
</script><script language="javascript">
var cur_name;
var stat = new Array();
var idmap = new Array();
	    stat['6v'] = 0;
	    idmap['6v'] = "ampere";
	    stat['pw'] = 0;
	    idmap['pw'] = "kiloampere";
	    stat['5p'] = 0;
	    idmap['5p'] = "deciapmere";
	    stat['64'] = 0;
	    idmap['64'] = "centiampere";
	    stat['of'] = 0;
	    idmap['of'] = "milliampere";
	    stat['08'] = 0;
	    idmap['08'] = "microapmere";
	    stat['cu'] = 0;
	    idmap['cu'] = "dekaampere";
	    stat['li'] = 0;
	    idmap['li'] = "hectoampere";
	    stat['2g'] = 0;
	    idmap['2g'] = "megaampere";
	    stat['61'] = 0;
	    idmap['61'] = "biot";
	    stat['t2'] = 0;
	    idmap['t2'] = "gilbert";
	    stat['av'] = 0;
	    idmap['av'] = "abampere";
	    stat['du'] = 0;
	    idmap['du'] = "EMU of current";
	    stat['an'] = 0;
	    idmap['an'] = "statampere";
	    stat['wx'] = 0;
	    idmap['wx'] = "ESU of current";
	    stat['t6'] = 0;
	    idmap['t6'] = "CGS e.m. unit";
	    stat['bo'] = 0;
	    idmap['bo'] = "CGS e.s. unit";
	    stat['ty'] = 0;
	    idmap['ty'] = "volt/ohm";
	    stat['um'] = 0;
	    idmap['um'] = "watt/volt";
	    stat['9j'] = 0;
	    idmap['9j'] = "weber/henry";
	    stat['4x'] = 0;
	    idmap['4x'] = "siemens volt";
	    stat['ec'] = 0;
	    idmap['ec'] = "coulomb/second";
	    stat['3w'] = 0;
	    idmap['3w'] = "franklin/second";
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
	    document.getElementById('6v').value='';
	    document.getElementById('pw').value='';
	    document.getElementById('5p').value='';
	    document.getElementById('64').value='';
	    document.getElementById('of').value='';
	    document.getElementById('08').value='';
	    document.getElementById('cu').value='';
	    document.getElementById('li').value='';
	    document.getElementById('2g').value='';
	    document.getElementById('61').value='';
	    document.getElementById('t2').value='';
	    document.getElementById('av').value='';
	    document.getElementById('du').value='';
	    document.getElementById('an').value='';
	    document.getElementById('wx').value='';
	    document.getElementById('t6').value='';
	    document.getElementById('bo').value='';
	    document.getElementById('ty').value='';
	    document.getElementById('um').value='';
	    document.getElementById('9j').value='';
	    document.getElementById('4x').value='';
	    document.getElementById('ec').value='';
	    document.getElementById('3w').value='';
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
<div class="mtitle">Current Conversion</div>
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
<div class="mline"><div class="untitem" onclick="sel(&#39;6v2&#39;)" id="6v2" style="color: blue; font-weight: bold;">1.&nbsp;ampere <font color="black"><u><i>[A]</i></u></font>:</div>
<div class="nbox"><input id="6v" onblur="setName(&#39;6v&#39;)" autocomplete="off" onkeyup="convertcal(&#39;6v&#39;,&#39;&#39;)" style="font-weight: bold; font-size: 16px; color: blue;"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;pw2&#39;)" id="pw2">2.&nbsp;kiloampere <font color="black"><u><i>[kA]</i></u></font>:</div>
<div class="nbox"><input id="pw" onblur="setName(&#39;pw&#39;)" autocomplete="off" onkeyup="convertcal(&#39;pw&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;5p2&#39;)" id="5p2">3.&nbsp;deciapmere <font color="black"><u><i>[dA]</i></u></font>:</div>
<div class="nbox"><input id="5p" onblur="setName(&#39;5p&#39;)" autocomplete="off" onkeyup="convertcal(&#39;5p&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;642&#39;)" id="642">4.&nbsp;centiampere <font color="black"><u><i>[cA]</i></u></font>:</div>
<div class="nbox"><input id="64" onblur="setName(&#39;64&#39;)" autocomplete="off" onkeyup="convertcal(&#39;64&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;of2&#39;)" id="of2">5.&nbsp;milliampere <font color="black"><u><i>[mA]</i></u></font>:</div>
<div class="nbox"><input id="of" onblur="setName(&#39;of&#39;)" autocomplete="off" onkeyup="convertcal(&#39;of&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;082&#39;)" id="082">6.&nbsp;microapmere <font color="black"><u><i>[uA]</i></u></font>:</div>
<div class="nbox"><input id="08" onblur="setName(&#39;08&#39;)" autocomplete="off" onkeyup="convertcal(&#39;08&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;cu2&#39;)" id="cu2">7.&nbsp;dekaampere:</div>
<div class="nbox"><input id="cu" onblur="setName(&#39;cu&#39;)" autocomplete="off" onkeyup="convertcal(&#39;cu&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;li2&#39;)" id="li2">8.&nbsp;hectoampere:</div>
<div class="nbox"><input id="li" onblur="setName(&#39;li&#39;)" autocomplete="off" onkeyup="convertcal(&#39;li&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;2g2&#39;)" id="2g2">9.&nbsp;megaampere <font color="black"><u><i>[MA]</i></u></font>:</div>
<div class="nbox"><input id="2g" onblur="setName(&#39;2g&#39;)" autocomplete="off" onkeyup="convertcal(&#39;2g&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;612&#39;)" id="612">10.&nbsp;biot <font color="black"><u><i>[Bi]</i></u></font>:</div>
<div class="nbox"><input id="61" onblur="setName(&#39;61&#39;)" autocomplete="off" onkeyup="convertcal(&#39;61&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;t22&#39;)" id="t22">11.&nbsp;gilbert:</div>
<div class="nbox"><input id="t2" onblur="setName(&#39;t2&#39;)" autocomplete="off" onkeyup="convertcal(&#39;t2&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;av2&#39;)" id="av2">12.&nbsp;abampere <font color="black"><u><i>[abA]</i></u></font>:</div>
<div class="nbox"><input id="av" onblur="setName(&#39;av&#39;)" autocomplete="off" onkeyup="convertcal(&#39;av&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;du2&#39;)" id="du2">13.&nbsp;EMU of current:</div>
<div class="nbox"><input id="du" onblur="setName(&#39;du&#39;)" autocomplete="off" onkeyup="convertcal(&#39;du&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;an2&#39;)" id="an2">14.&nbsp;statampere <font color="black"><u><i>[stA]</i></u></font>:</div>
<div class="nbox"><input id="an" onblur="setName(&#39;an&#39;)" autocomplete="off" onkeyup="convertcal(&#39;an&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;wx2&#39;)" id="wx2">15.&nbsp;ESU of current:</div>
<div class="nbox"><input id="wx" onblur="setName(&#39;wx&#39;)" autocomplete="off" onkeyup="convertcal(&#39;wx&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;t62&#39;)" id="t62">16.&nbsp;CGS e.m. unit:</div>
<div class="nbox"><input id="t6" onblur="setName(&#39;t6&#39;)" autocomplete="off" onkeyup="convertcal(&#39;t6&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;bo2&#39;)" id="bo2">17.&nbsp;CGS e.s. unit:</div>
<div class="nbox"><input id="bo" onblur="setName(&#39;bo&#39;)" autocomplete="off" onkeyup="convertcal(&#39;bo&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ty2&#39;)" id="ty2">18.&nbsp;volt/ohm:</div>
<div class="nbox"><input id="ty" onblur="setName(&#39;ty&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ty&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;um2&#39;)" id="um2">19.&nbsp;watt/volt:</div>
<div class="nbox"><input id="um" onblur="setName(&#39;um&#39;)" autocomplete="off" onkeyup="convertcal(&#39;um&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;9j2&#39;)" id="9j2">20.&nbsp;weber/henry:</div>
<div class="nbox"><input id="9j" onblur="setName(&#39;9j&#39;)" autocomplete="off" onkeyup="convertcal(&#39;9j&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;4x2&#39;)" id="4x2">21.&nbsp;siemens volt:</div>
<div class="nbox"><input id="4x" onblur="setName(&#39;4x&#39;)" autocomplete="off" onkeyup="convertcal(&#39;4x&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;ec2&#39;)" id="ec2">22.&nbsp;coulomb/second:</div>
<div class="nbox"><input id="ec" onblur="setName(&#39;ec&#39;)" autocomplete="off" onkeyup="convertcal(&#39;ec&#39;,&#39;&#39;)"></div>
</div>
<div class="mline"><div class="untitem" onclick="sel(&#39;3w2&#39;)" id="3w2">23.&nbsp;franklin/second:</div>
<div class="nbox"><input id="3w" onblur="setName(&#39;3w&#39;)" autocomplete="off" onkeyup="convertcal(&#39;3w&#39;,&#39;&#39;)"></div>
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
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;6v2&#39;)"><u>A</u></span>, <span class="selitem" onclick="sel(&#39;av2&#39;)"><u>abA</u></span>, <span class="selitem" onclick="sel(&#39;612&#39;)"><u>Bi</u></span>, <span class="selitem" onclick="sel(&#39;642&#39;)"><u>cA</u></span>, <span class="selitem" onclick="sel(&#39;5p2&#39;)"><u>dA</u></span>, <span class="selitem" onclick="sel(&#39;pw2&#39;)"><u>kA</u></span>, <span class="selitem" onclick="sel(&#39;of2&#39;)"><u>mA</u></span>, <span class="selitem" onclick="sel(&#39;2g2&#39;)"><u>MA</u></span>, <span class="selitem" onclick="sel(&#39;an2&#39;)"><u>stA</u></span>, <span class="selitem" onclick="sel(&#39;082&#39;)"><u>uA</u></span><br><br>
<font color="#444444"><b>Click to Select:</b></font> <span class="selitem" onclick="sel(&#39;av2&#39;)" value="av"><u>abampere</u></span>, <span class="selitem" onclick="sel(&#39;6v2&#39;)" value="6v"><u>ampere</u></span>, <span class="selitem" onclick="sel(&#39;612&#39;)" value="61"><u>biot</u></span>, <span class="selitem" onclick="sel(&#39;642&#39;)" value="64"><u>centiampere</u></span>, <span class="selitem" onclick="sel(&#39;t62&#39;)" value="t6"><u>CGS e.m. unit</u></span>, <span class="selitem" onclick="sel(&#39;bo2&#39;)" value="bo"><u>CGS e.s. unit</u></span>, <span class="selitem" onclick="sel(&#39;ec2&#39;)" value="ec"><u>coulomb/second</u></span>, <span class="selitem" onclick="sel(&#39;5p2&#39;)" value="5p"><u>deciapmere</u></span>, <span class="selitem" onclick="sel(&#39;cu2&#39;)" value="cu"><u>dekaampere</u></span>, <span class="selitem" onclick="sel(&#39;du2&#39;)" value="du"><u>EMU of current</u></span>, <span class="selitem" onclick="sel(&#39;wx2&#39;)" value="wx"><u>ESU of current</u></span>, <span class="selitem" onclick="sel(&#39;3w2&#39;)" value="3w"><u>franklin/second</u></span>, <span class="selitem" onclick="sel(&#39;t22&#39;)" value="t2"><u>gilbert</u></span>, <span class="selitem" onclick="sel(&#39;li2&#39;)" value="li"><u>hectoampere</u></span>, <span class="selitem" onclick="sel(&#39;pw2&#39;)" value="pw"><u>kiloampere</u></span>, <span class="selitem" onclick="sel(&#39;2g2&#39;)" value="2g"><u>megaampere</u></span>, <span class="selitem" onclick="sel(&#39;082&#39;)" value="08"><u>microapmere</u></span>, <span class="selitem" onclick="sel(&#39;of2&#39;)" value="of"><u>milliampere</u></span>, <span class="selitem" onclick="sel(&#39;4x2&#39;)" value="4x"><u>siemens volt</u></span>, <span class="selitem" onclick="sel(&#39;an2&#39;)" value="an"><u>statampere</u></span>, <span class="selitem" onclick="sel(&#39;ty2&#39;)" value="ty"><u>volt/ohm</u></span>, <span class="selitem" onclick="sel(&#39;um2&#39;)" value="um"><u>watt/volt</u></span>, <span class="selitem" onclick="sel(&#39;9j2&#39;)" value="9j"><u>weber/henry</u></span></p>

</div>


<?php include "unitsidebar.php"?>
<?php include "footer.php"?>	
</body>
</html>
