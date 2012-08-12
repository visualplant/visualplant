<?php ?>

<?
Header( "Location: http://visualplant.net/registerbeta.php" );
?> 

<? include('includes/meta.php') ?>

<body>

<div id="site">

<div id="logo"><img src="images/VP-sitelogo.gif"></div>

<div id="righttop">
<? include('includes/right-top-login.php') ?>
</div>

<div id="tagline"><? include('includes/tagline.php') ?></div>

<br />
<div style="width:600px;">
<div style="float:left;border:1px solid #666; font-weight:normal; font-family:helvetica,sans-serif; padding:4px; color:#666; width:540px; float: left;">
<!--Create a media site with VISUALPLANT Platform.<br />  -->
Complete this free sign-up to access VP Venue&trade;, Content Manager and Web Services.</div>


<!--  
<div style="border-top:1px solid #666; border-left:1px solid #666; border-right:1px solid #666; font-weight:bold; font-family:helvetica,sans-serif; padding:4px; color:#000; width:140px; float: left;">Sign-up</div>
<div style="background:#666; border-bottom:1px solid #666; font-weight:bold; font-family:helvetica,sans-serif; padding:4px; color:#fff; width:140px; float: right;"><a href="#" style="color:#fff;">Demo</a></div>
-->

</div>

<br clear="all">
<br />

<div id="contentheader">Choose your Publisher name and Web address</div>

<!-- show only if errors 
<div id="errors">
<img src="images/error_icon.png" width="50" height="42" style="padding-right:4px;">
That publisher name is already taken!

<div style="font-size:100%; margin-top:6px; font-weight:normal;color:#000;">
Some other choices:
<ul>
<li><a href="javascript:checkCursor(document.theform.PubName,'Publisher1')">Publisher1</a></li>
<li><a href="javascript:checkCursor(document.theform.PubName,'Publisher2')">Publisher2</a></li>
<li><a href="javascript:checkCursor(document.theform.PubName,'Publisher3')">Publisher3</a></li>
</ul>
</div>

<img src="images/error_icon.png" width="50" height="42" style="padding-right:4px;">The letters you typed do not match the picture.
<div style="font-size:100%; margin-top:6px; font-weight:normal;color:#000;">
<ul>
<li><a href="javascript:document.theform.WordVerify.focus();">Please try again.</a></li>
</ul>
</div>

</div>

<br />
-->
<!-- end errors -->

<!--  BACK BUTTON
<div id="navinternal">
<span class="loginsubmit">
<form action="javascript:history.back()">
	<input type="submit" name="back" id="back" value="&laquo; Back" tabindex="4" style="margin-top:20px;" />
</form>
</span>
</div>
-->
	
	

<div id="content">
	
<form name="theform" action="s2.php">

<!--  
<label><input type="radio" name="transfer" checked>Register your domain name and host with VP.</label>
<br />
<label><input type="radio" name="transfer">Transfer your domain name to VP.</label>
<br />
<label><input type="radio" name="transfer">Leave your domain name and hosting where it is. Use VP Web Services.</label>
-->


<b>Publisher name:</b> <br />
<!-- use id="textboxerror" when there is an error -->
<input name="PubName" type="text" id="textbox"> (Name of your site or company.)

<script language="JavaScript">
<!--
document.theform.PubName.focus();
//-->
</script>
	
<br /><br />
	
<b>Web address:</b> <br />
<span id="bigtype">http://</span> <input name="WebAddress" type="text" id="textbox">  (Domain and path where you will host.)

<!-- <a href="#" id="altlink"><img src="images/globe.gif" align="bottom"> Check availability</a>
-->

<br /><br />
	
<b>Word verification:</b> <br />
Type the characters you see in the picture below.<br />
<img src="images/word_verify.jpg">
<br />
<!-- use when error: style="border: 2px solid #ff0000;" -->
<input name="WordVerify" type="text" id="textbox" >


<br /><br />

<b>Choose plan and read terms carefully:</b> <br />

<label><input type="radio" name="terms" checked> <span id="bigtype">Enterprise plan</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label><input type="radio" name="terms"> <span id="bigtype">Indie plan</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;
(You may switch later.)

<br />


<textarea onfocus="this.rows=10" style="width:80%;text-align:left" rows="3" cols="60" readonly>

<? include('includes/tos.php') ?>

</textarea>
<br />
<a href="includes/tos_print.php" target="_blank">Printable version</a>

<br clear="all"><br />
<label>By clicking on 'Agree and Continue' you are agreeing to the Terms of Service for the plan chosen above.</label><br />


<div id="login">
<p class="loginsubmit">
	<input type="submit" name="submit" id="log_submit" value="Agree and Continue &raquo;" tabindex="3" />
</form>
</p>
</div>

</div> <!-- end content -->
	
</div>

<div id="footerinternal" style="height:23px; width:900px; vertical-align:center; text-align:center; padding:20px; background: #bbb; border-top: 1px solid #000; ">
<? include('includes/copyright.php') ?>

<!--  
<? include('includes/footer.php') ?>
-->



</body>
</html>