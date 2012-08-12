<?php ?>

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

	<div id="contentheader">Developer API</div>

	<div id="navinternal">
	<? include('includes/nav-product.php') ?>
	</div>

	<div id="content">

	Our Developer API offers a simple, powerful way to create custom Web sites, mobile and IPTV apps using standard
	<acronym title='Representational State Transfer (REST) is a style of software architecture for distributed hypermedia systems such as the World Wide Web. The terms "Representational State Transfer" and "REST" were introduced in 2000 in the doctoral dissertation of Roy Fielding,[1] one of the principal authors of the Hypertext Transfer Protocol (HTTP) specification. The terms have since come into widespread use in the networking community. -WIKIPEDIA'>"REST"</acronym> 
	and <acronym title='SOAP, originally defined as Simple Object Access Protocol, is a protocol specification for exchanging structured information in the implementation of Web Services in computer networks. -WIKIPEDIA'>"SOAP"</acronym> 
	Web Services to access and modify content stored in your VISUALPLANT account. 
	
	<p>

	<div style="float:left;padding:6px;background-color:#eee;border:1px solid #666;">
	<b>Your content on VISUALPLANT</b>
	<br clear="all">
	<img src="images/VP-Admin-thumb.png">
	</div>

	<div style="float:left;padding-top:100px;"><img src="images/REST-API.png">
	<p align="center">
	<i>Protected feeds</i>
	</p>
	</div>

	<div style="float:right;padding:6px;background-color:#eee;border:1px solid #666;">
	<b>Your Internet Apps and Venues</b>
	<br clear="all">

 
	<embed id="vp_embed" allowFullScreen="true" src="http://iznotv.com/player/flvplayer.swf" 
	align="left" width="240" height="180" 
	bgcolor="#FFFFFF" type="application/x-shockwave-flash" 
	pluginspage="http://www.macromedia.com/go/getflashplayer" 
	flashvars="file=http://iznotv.com/player/playlist.php?s=013120a4/max-results=100/showcover=false&skin=http://iznotv.com/player/skins/modieus.swf&dock=false&stretching=uniform&autostart=false&showfsbutton=false&frontcolor=0xeeeeee&screencolor=0x000000&backcolor=0x222222&showcontrols=true&plugins=http://iznotv.com/player/vplogo&vplogo.position=bottomright&vplogo.link=true&vplogo.lheight=30&vplogo.opacity=20&vpplaylist.bg=0x222222&vpplaylist.rotatetime=10&vpplaylist.position=bottom&vpplaylist.infodisplay=none&vpplaylist.infoposition=left&showdigits=false&vpplaylist.firstitem=cover&impressiontracker.webservice=http://webservices.visualplant.net/Core/PUT/XML&controlbar=bottom" allowScriptAccess="always" >

	</div>

	<p><br clear="all">

	The VISUALPLANT API is based on the most popular data syndication formats: XML, JSON and XSPF.
	<p>
	Some things you can do with the VISUALPLANT Web Services API:

	<UL>
    <li> Customize your Web site to display your media library exactly as you wish.</li>
    <li> Create AJAX, Flash widgets, plugins or apps to display your media content on 3rd-party Web sites, like FaceBook.</li>
    <li> Create iPhone or other mobile apps that allow your users to interact with your content.</li>
    <li> Create a desktop or IPTV applications providing all these features in your own customized environment.</li>
	</UL>

	If you use VISUALPLANT's fully-hosted solution, you are already leveraging the API
	in an elaborate array of templates that we provide to you out-of-the-box.  
	<p>
	To extend use of your media library to integrate with your existing site or to
	create highly-customized micro-sites, applications, widgets or FaceBook apps, we provide you with live, granular
	access to your content to use in ways limited only by your imagination and development skill.
	<p>

	The VISUALPLANT API distributes your content anywhere <i>you choose</i> on the Internet. 

	<p><br /><br />

	</div> <!-- /content -->
	
</div> <!-- /pagebg -->
	

<? include('includes/footer.php') ?>

<? include('includes/google-analytics.php') ?>
</body>
</html>