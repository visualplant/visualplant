<?php
// ==================================================================
// Server Hardware Information v1.0.0
// ==================================================================
//
// Website  : http://www.wwwsearchsolutions.com/
// Support  : http://www.wwwsearchsolutions.com/forums/
// Filename : server_info.php
// Updated  : 04/14/2004
//
// Copyright (c) 2003 WWW Search Solutions.  All Rights Reserved.
// Redistribution in whole or in part is strictly prohibited. Please
// see the EULA for full details.
// ==================================================================
?>

<html>
<head>
<title><?php echo $SERVER_NAME; ?> - Server Information</title>
<STYLE type=text/css>
BODY { FONT-SIZE: 8pt; COLOR: black; FONT-FAMILY: Verdana,arial, helvetica, serif; margin : 0 0 0 0;}
</STYLE>
</head>
<body>
<pre>
<b>Uptime:</b> 
<?php system("uptime"); ?>

<b>System Information:</b>
<?php system("uname -a"); ?>


<b>Memory Usage (MB):</b> 
<?php system("free -m"); ?>


<b>Disk Usage:</b> 
<?php system("df -h"); ?>


<b>CPU Information:</b> 
<?php system("cat /proc/cpuinfo | grep \"model name\\|processor\""); ?>
</pre>

<br>
<br>
<center>
<font size="1">Copyright &copy; 2004 <a href="http://www.wwwsearchsolutions.com" target="_blank">WWWSearchSolutions</a></font>
</center>
</body>
</html>