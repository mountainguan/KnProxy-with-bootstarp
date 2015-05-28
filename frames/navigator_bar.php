<?php
include_once('knproxy_i18n.php');
include_once('../conf.php');
if(!defined('KNPROXY_NAVBAR') || KNPROXY_NAVBAR!='true'){
	header('HTTP/1.1 404 Not Found');
	exit('<html><title>404 Not Found</title><h1>404 Not Found</h1></html>');
}
$_LANG = KNPROXY_LANGUAGE;
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<script language="javascript" type="text/javascript" src="../js/denpa.js?3"></script>
	<script language="javascript" type="text/javascript" src="../js/denjihou.js?3"></script>
	<script language="javascript" type="text/javascript">
	//<!--
	function checkAndEncode(){
		if($ == null){
			console.log("Error: Inclusion of js file failed");
			alert("Resource Load Error");
			return false;
		}
		if($("urlx").value == "")
			return false;

		if($("check_enc").checked){
			var random = Math.floor(Math.random() * 256)+1;
			var url_value = $("urlx").value;
			$("url").value = encryptText(document.getElementById("urlx").value,random);
			$("encrypt_key").value = random;
			return true;
		}else{
			$("url").value = $("urlx").value;
			return true;
		}
	}
	//-->
	</script>
	<!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-ie6.css">
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/ie.css">
    <![endif]-->
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
	<style>
	#urlx{position:relative; font-family: Arial;font-weight: bold;font-size: 1em;width:60%;}
	.mobilenoshow{float:right;padding-top:10px; padding-right:10px;}
	.margin {margin: 0.5% 0px 0px 0px}
	.margin2 {margin: -0.2% 0px 0px 0px}
	@media only screen and (max-width: 1200px) {
		#urlx{width:55%;}
	}
	a{vertical-align:middle;}
	.texthigh{vertical-align:middle;}
	@media only screen and (max-width: 1000px) {
		#urlx{width:45%;}
	}
	@media only screen and (max-width: 800px) {
		#urlx{position:absolute;left:90px;right:5px;width:auto;}
		.mobilenoshow{display:none;}
	}
	.bginner

	</style>
</head>
<body>
	<form name="KN_BFORM" action="../index.php" method="GET" target="dynamic" onsubmit="return checkAndEncode();">
	<div style="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
      <div class="container texthigh" >
		<input type="hidden" id="url" name="url" value="" />
		<input class="input-large search-query margin" type="text"  id="urlx" value="http://" ondblclick="this.value='';">
		<input type="submit" class="btn btn-success margin" " style="font-size: 1em;" value="Go!"></input>
		<div class="mobilenoshow margin2">
			<i class='icon-plus-sign'></i>
			<small><?php echo knproxy_i18n('encode',$_LANG);?></small>
			<input  class="checkbox"  type="checkbox"id="check_enc" value="1" style="vertical-align:middle;" CHECKED>
			&nbsp;&nbsp;
			<i class='icon-wrench'></i>
			<small><?php echo knproxy_i18n('debug',$_LANG);?></small>
			<input  type="checkbox" class="checkbox" name="debug" value="true" style="vertical-align:middle;">
			&nbsp;&nbsp;
			<a href="javascript:;" onclick="top.location = top.dynamic.location;" ><i class='icon-circle-arrow-up' ></i></a>
		</div>
		<input type="hidden" name="encrypt_key" id="encrypt_key" value="" />
	</div>
	</div>
	</div>
	</form>
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

	<!--<script type="text/javascript" src="http://mini.jiasule.com/framework/jquery/1.8.3/jquery-1.8.3.min.js"></script>-->

    <!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <!--[if lte IE 6]>
    <script type="text/javascript" src="js/bootstrap-ie.js"></script>
    <![endif]-->
    <script type="text/javascript">
    (function ($) {
      $(document).ready(function() {
        if ($.isFunction($.bootstrapIE6)) $.bootstrapIE6($(document));
      });
    })(jQuery);
    </script>
</body>
</html> 