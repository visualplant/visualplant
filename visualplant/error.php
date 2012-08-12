<?php

//  	print $_SERVER['SCRIPT_URI'];
//  	print "<BR>";
//  	print $_SERVER['REQUEST_URI'];die;
	//http://visualplant.net/video/publishers/index.html/index.html/index.html/index.html/index.html/index.html/index.php/index.php
	//THIS IS WHAT HAPPENS WHEN YOU HIT A URL THAT HAS MOST LIKELY A index.html FILE IN IT
	if (strstr($_SERVER['REQUEST_URI'], "/index.html/index.html/index.html")){
		echo "<img src=\"http://visualplant.net/images/404.gif\">";die;
	}
	if (strstr($_SERVER['REQUEST_URI'], "forgotten_password.php")){
		header("Location: http://visualplant.net/admin/index.php");
		die;
	}
	if(strstr($_SERVER['REQUEST_URI'], "admin/publisher/settings/encoding.php")){
		header("Location: http://admin.visualplant.net/?action=settings:encoding");
		die;
	}
	if (strstr($_SERVER['REQUEST_URI'], "admin/work/spots/")){
		header("Location: http://admin.visualplant.net/?action=library:titles");
		die;
	}
	if (strstr($_SERVER['SCRIPT_URI'], "/index.php/index.php")){
		$_SERVER['SCRIPT_URI'] = str_replace("/index.php/index.php", "", $_SERVER['SCRIPT_URI']);
		header("location: ".$_SERVER['SCRIPT_URI']."/index.html");
		die;		
	}
	//THIS IS IF THE URL DOESN"T END IN /
	elseif(substr($_SERVER['SCRIPT_URI'],-1) != "/"){
		header("location: ".$_SERVER['SCRIPT_URI']."/index.php");
		die;		
	}
	//THIS IS MOST LIKELY A PAGE THAT DOESN"T ACTUALLY EXIST
	elseif(strstr($_SERVER['SCRIPT_URI'], "index.html/index.html/index.html")){
		echo "<img src=\"images/404.jpg\">";die;
	}
	
	//THIS IS IF THE URL MOST LIKELY ENDS IN /
	else{
		header("location: ".$_SERVER['SCRIPT_URI']."index.php");
		die;
	}
	
?>