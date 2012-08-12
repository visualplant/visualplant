<?php ?>

<? include('includes/meta.php') ?>

<body>

<div id="site">

<div id="logo"><img src="images/VP-sitelogo.gif"></div>
  <!--<div id="righttop">
<? include('includes/right-top-demo.php') ?>
</div>-->

<div id="tagline"><? include('includes/tagline.php') ?></div>

<br /><br />

<div id="contentheader">Sign Up: Choose a plan</div>

	<div id="content">
	
	<form action="s2.php">
	
	<div style="margin-bottom:10px;">
	<span style="margin-right:20px;"><label id="yesPPN"><input name="PPN" type="radio" checked><b>Yes, Sign me up for the Premier Partner Plan.</b></label></span>
	<label id="noPPN"><input name="PPN" type="radio"> No thanks, I'd rather just pay.</label>
	</div>
	
	The VP Premier Partner Plan offers a chance to promote
	your brand <i>and</i> finance technology and distribution on our world-class
	platform all <i>on our dime</i>. Publish
	and curate your own content and user-generated site under your domain name with our social networking features. 
	Prune your site to your exacting standards with our moderation tools. 
	If we like what we see, pay nothing to continue hosting your site on VP
	and we will syndicate your content on our <a href="#">Premiere Partner Portal</a>. 
	<a href="#">Read complete Terms of Service</a>.
	
	<br /><br />
	
	<b>Chose a paid pricing plan</b> (in case you don't make the first cut):
	
	<br /><br />
	

	<div id="offerbox1">
		<div style="position:relative;top:35%;text-align:center;">
		<label id="plans">
		<input name="plans" type="radio" tabindex="1">
		<b>Junior Plan</b>
		</label>
		</div>
	
		<div style="position: relative;top:40%;text-align:center;font-size:90%;">
		<a href="#" style="color:#999933;">&raquo; details</a></div>
	</div>
	
	
	<div id="offerbox2">
		<div style="position:relative;top:35%;text-align:center;">
		<label id="plans">
		<input name="plans" type="radio" tabindex="1">
		<b>Indie Plan</b>
		</label>
		</div>
	
		<div style="position: relative;top:40%;text-align:center;font-size:90%;">
		<a href="#" style="color:#999933;">&raquo; details</a></div>
	</div>
	
	<div id="offerbox3">
		<div style="position:relative;top:35%;text-align:center;">
		<label id="plans">
		<input name="plans" type="radio" tabindex="1">
		<b>Power Plan</b>
		</label>
		</div>
	
		<div style="position: relative;top:40%;text-align:center;font-size:90%;">
		<a href="#" style="color:#999933;">&raquo; details</a></div>
	</div>

	
	
	
 

<br clear="all" /><br />

<div id="login">
<p class="loginsubmit">
	<input type="submit" name="submit" id="log_submit" value="Continue &raquo;" tabindex="3" />
</p>
</form>
</div>


	</div>
	
	

<div id="footerinternal" style="height:23px; width:900px; vertical-align:center; text-align:center; padding:20px; background: #bbb; border-top: 1px solid #000; ">
 <? include('includes/copyright.php') ?>
<!--  
<? include('includes/footer.php') ?>
-->
</div>

</body>
</html>