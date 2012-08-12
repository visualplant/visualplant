<?php ?>

<? include('includes/meta.php') ?>

<body class="internal">

<div id="site">

<div id="logo"><a href="/"><img src="images/VP-sitelogo.gif"></a></div>
<div id="righttop">
<? include('includes/right-top.php') ?>
</div>

<div id="tagline"><? include('includes/nav-top-api.php') ?></div>

<br /><br />

<div id="contentheader">Web Services API</div>

<div id="navinternal">
<? include('includes/nav-api.php') ?>
</div>

	<div id="content">
<p>
<h3>How do I protect my content?</h3>

<p>

VISUALPLANT is for professional publishers. We do not share, compromise or control your content like consumer platforms. As a 
<a href="freecustomers.php" title="What if I'm not a paying customer?">paying customer</a>, 
you own your content and you distribute it the way you want with your business rules and 
your brand. Your content is protected by 4 methods of security:

<ol>

<li> <b>Passkeys.</b> For each Internet venue you distribute your content, 
you use the  
<a href="http://admin.visualplant.net/?action=settings:passkeys" target="_blank">VP Passkey tool</a>
to auto-generate a unique passkey.
You may then use the passkey on your own site and share other generated passkeys with your trusted partners. 
Both you and your partners&mdash;the 
requesting sites&mdash;must use that passkey in each request. If the passkey is not included or incorrect, content
will not be returned. You may disable or delete the passkeys to suspend usage at any time.</li>

<li> <b>IP Restriction.</b>  For each passkey, you assign IP address(es) for referring site(s). 
Only requests from the IP address(es) matching the passkey
will be authorized to return your content. Requests from any other referrer will not work.</li>

<li> <b>Content Privileges.</b> For each passkey you assign, you may allow access to <i>all</i> your content
or <i>only select sections and queries</i>. You use the <a href="http://admin.visualplant.net/?action=settings:passkeys" target="_blank">Passkey tool</a> 
to assign categories, playlists, search terms and special sections from your library that are white-listed for 
access under each passkey.</li>

<li> <b>File-based domain Black-listing.</b> Each file delivered to your audience is requested
from our Content Delivery Network (geographically diverse servers situated closest to you audience). For 
pirates who may discover the file path of a popular title, you may black-list the offending domain. 
</ol>

<p><br />

<ul>
<li><a href="api-how.php">How do I use VISUALPLANT Web Services API?</a></li>
</ul>

<p><br />

	</div>
	
<div id="footerinternal">
<? include('includes/footer.php') ?>
</div>

<? include('includes/google-analytics.php') ?>
</body>
</html>