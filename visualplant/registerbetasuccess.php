<?php

	if( (!isset($_SERVER['HTTP_REFERER'])) || (!strstr($_SERVER['HTTP_REFERER'], 'registerbeta.php')) ){
		//header("location: registerbeta.php");
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

<div id="logo">
<? include('includes/logo.php') ?>
</div>

<div id="righttop">
<? include('includes/right-top-login.php') ?>
</div>

<div id="globalnav" >
<? include('includes/globalnav.php') ?>
</div>

<div id="pagebg">

	<br clear="all">
	<br />

	<div id="contentheader" style="float:left;">We received your sign-up request.</div>

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

	Check your e-mail for instructions and tell a friend about VISUALPLANT. 

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


	<div style="height:150px;"></div>


	</div> <!-- /content -->
	
</div> <!-- /pagebg -->
	
<? include('includes/footerfoot.php') ?>

<? include('includes/google-analytics.php') ?>

</body>
</html>