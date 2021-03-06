<?php

	if( (!isset($_SERVER['HTTP_REFERER'])) || (!strstr($_SERVER['HTTP_REFERER'], 'registerbeta.php')) ){
		//header("location: keepinformed.php");
	}

	if(isset($_POST['emails'])){
		$registerObj->errors = '';
		$emails = split(',', $_POST['emails']);
		foreach($emails as $key=>$value){
			if(!(!(preg_match('!@.*@|\.\.|\,|\;!', $value) ||  !preg_match('!^.+\@(\[?)[a-zA-Z0-9\.\-]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$!', $value)))){
				$registerObj->errors .= '<li>Sorry but "'.$value.'" is not a valid email</li>';
			}	
		}
		if($registerObj->errors == ''){
			foreach($emails as $key=>$value){
				include_once('emails/friendEmails.php');
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$headers .= "From: ".$from."\r\n";
				@mail($value, $subject, $body, $headers, "-f ".$from);	
				//header("Location: sendfriendemailSuccess.php");	
				$showSuccess = true;
			}
		}
	}
 ?>

<? include('includes/meta.php') ?>

<body class="internal">

<div id="site">

<div id="logo"><a href="/"><img src="images/VP-sitelogo.gif"></a></div>

<div id="righttop">
<? include('includes/right-top-login.php') ?>
</div>

<div id="tagline"><? include('includes/tagline.php') ?></div>

<br />
<div style="width:600px;">

<br clear="all">
<br />

<div id="contentheader" style="float:left;">We received your request.</div>

<br clear="all">


<!-- show only if errors -->
<?php 
	if($registerObj->errors != ''){
		?>
		<div id="errors">
		<img src="images/error_icon.png" width="50" height="42" style="padding-right:4px;">
		<b>Please correct the following problems:</b>
		<br />
		
		<div style="font-size:100%; margin-top:6px; font-weight:normal;color:#000;">
		<ul>
		<?php print $registerObj->errors; ?>
		</ul>
		</div>
		
		</div>
		
		<br />
		
		<!-- end errors -->
	<?php
	}
?>

<div id="content">


	
We'll send you e-mail updates when appropriate. Feel free to tell your friends about VISUALPLANT.

<br /><br />

<?php if($showSuccess){ ?>
	<div style='font-family:Georgia;border:1px solid #026C11;color:#026C11;width:400px;valign:center;font-weight:bold;padding:6px 6px 3px 6px;font-size:12px;'><img src='images/green_confirm.gif'>
	&nbsp;&nbsp;<span style='position:relative;top:-12px;'>Thanks. We sent e-mail to your friend(s).</span></div>
<?php }?>
	
<br />


<form name="theform" method="POST">
<b>Friend's E-mail address:</b> <br />
<input name="emails" type="text" id="textbox">
<br />
(Separate multiple addresses with commas.)


<br />


<p class="loginsubmit">
	<input type="submit" name="submit" id="log_submit" value="Send &raquo;" tabindex="3" />
</form>
</p>


</form>

<div style="height:250px;"></div>


</div> <!-- end content -->
	
</div>

<div id="footerinternal" style="height:23px; width:900px; vertical-align:center; text-align:center; padding:20px; background: #bbb; border-top: 1px solid #000; ">
<? include('includes/copyright.php') ?>

<!--  
<? include('includes/footer.php') ?>
-->

<? include('includes/google-analytics.php') ?>
</body>
</html>