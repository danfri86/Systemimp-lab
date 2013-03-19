<?php
	ob_start();
	header("Content-Type: application/xhtml+xml; charset=utf-8");
	include("debug.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">

	<head>
		<!--
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		-->
		
		<title>Tillståndslös miljö, PHP och Array</title>	
		
		<!--css-->
		<link rel="stylesheet" href="style/basicstyle.css" type="text/css" /> 
	</head>
	
	<body>
	<div id="sitewrapper" class="clearfix">
	
		<div id="siteheader">
			<h1>Tillståndslös miljö, PHP och Array</h1>			
		</div><!-- /#siteheader -->
		
		<div id="contentwrapper">