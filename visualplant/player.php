<?php ?>

<?
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'android') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad'))
{
	header('Location: http://visualplant.net/player-iphone.php');
	exit();
}
?>

<? include('includes/meta.php') ?>

<body class="internal">

<div id="site">

<div id="logo">
<? include('includes/logo.php') ?>
</div>

<div id="righttop">
<? include('includes/right-top.php') ?>
</div>

<div id="globalnav" >
<? include('includes/globalnav.php') ?>
</div>

<div id="pagebg">

	<br /><br />

	<div id="contentheader">Player</div>

	<div id="navinternal">
	<? include('includes/nav-product.php') ?>
	</div>

	<div id="content">
	
	Use our player to publish your video to Web, mobile and IPTV.<br />
	(<i>This page automatically adapts for the iPhone. Try it out!</i>)
	
	<br /><br />

	<div style="float:left;padding:6px;background-color:#eee;border:1px solid #666;">
		<b>High-quality H.264 MP4 playback:</b>
		<br clear="all">

		<embed id="vp_embed" allowFullScreen="true" src="http://visualplant.net/flvplayer.swf"
		align="left" width="595" height="385"
		bgcolor="#FFFFFF" type="application/x-shockwave-flash"
		pluginspage="http://www.macromedia.com/go/getflashplayer"
		flashvars="file=http://visualplant.net/xml/vp.xml&skin=http://visualplant.net/skins/modieus.swf&dock=false&stretching=uniform&autostart=false&showfsbutton=true&frontcolor=0xeeeeee&screencolor=0x000000&backcolor=0x444444&showcontrols=true&plugins=http://visualplant.net/vpplaylist,http://visualplant.net/vplogo&vplogo.position=bottomright&vplogo.link=false&vplogo.lheight=30&vplogo.opacity=100&vpplaylist.bg=0x444444&vpplaylist.rotatetime=30&vpplaylist.position=bottom&vpplaylist.infodisplay=3&vpplaylist.infoposition=right&vpplaylist.firstitem=cover&impressiontracker.webservice=http://webservices.visualplant.net/Core/PUT/XML&controlbar=bottom" allowScriptAccess="always" > 

		<br clear="all">

	</div>
	
	<br clear="all"><br />
	- Flash Web player derived from the open-source "JW" framework. 15+ configurable params with your logo and easy custom skinning
	<br clear="all">
	- Support for iPhone player using Apple's adaptive bit-rate format
	<br clear="all">
	- Support for IPTV devices like AppleTV and PS3
	
	<br clear="all"><br />
	
	
	<div style="float:left;padding:6px;background-color:#eee;border:1px solid #666;">
		<b>Playlist browsing with optional descriptions:</b>
		<br clear="all">
	<embed id="vp_embed" allowFullScreen="true" src="http://upstairsinthematerial.com/player/flvplayer.swf" 
		align="left" width="595" height="385" 
		bgcolor="#FFFFFF" type="application/x-shockwave-flash" 
		pluginspage="http://www.macromedia.com/go/getflashplayer" 
		flashvars="file=http://upstairsinthematerial.com/player/playlist.php?s=73304200/max-results=100/showcover=true&skin=http://upstairsinthematerial.com/player/skins/modieus.swf&dock=false&stretching=uniform&autostart=true&showfsbutton=true&frontcolor=0xeeeeee&screencolor=0x000000&backcolor=0x444444&showcontrols=true&plugins=http://upstairsinthematerial.com/player/vpplaylist,http://upstairsinthematerial.com/player/vplogo&vplogo.position=bottomright&vplogo.link=true&vplogo.lheight=30&vplogo.opacity=50&vpplaylist.bg=0x444444&vpplaylist.rotatetime=10&vpplaylist.position=bottom&vpplaylist.infodisplay=4&vpplaylist.infoposition=left&vpplaylist.firstitem=cover&impressiontracker.webservice=http://webservices.visualplant.net/Core/PUT/XML&controlbar=bottom" allowScriptAccess="always" >
		
		<br clear="all">
		Images and videos co-exist in one playlist.

		<br clear="all">
	</div>


 
	<p><br clear="all"><br />

	<ul>
	<li><a href="network-of-networks.php">Network of networks</a>.</li>
	</ul>

	<p><br /><br /><br />

	</div> <!-- /content -->
	
</div> <!-- /pagebg -->

<? include('includes/footer.php') ?>

<? include('includes/google-analytics.php') ?>
</body>
</html>