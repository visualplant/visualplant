<?php

	require_once('recaptcha/recaptchalib.php');

	// Get a key from http://recaptcha.net/api/getkey
	$publickey = "6LeZxAAAAAAAALyf6mfZQqOpxHZtriH_UNYls3RT";
	$privatekey = "6LeZxAAAAAAAAGyLiyMMauYPlLzWnWH_aybH6dv5";
	
	# the response from reCAPTCHA
	$resp = null;
	# the error code from reCAPTCHA, if any
	$error = null;
	
	
	if(isset($_POST['name'])){
		$registerObj->errors = '';	
		foreach($_POST as $key=>$value){
			switch($key){
				case email:
					if(!(!(preg_match('!@.*@|\.\.|\,|\;!', $value) ||  !preg_match('!^.+\@(\[?)[a-zA-Z0-9\.\-]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$!', $value)))){
						$registerObj->errors .= '<li>You entered an invalid e-mail address. Please try again.</li>';
					}
					$insertObj->email = mysql_real_escape_string($_POST['email']);					
				break;
				case name:
					if($value == ''){
						$registerObj->errors .= '<li>You did not enter a name. Please enter your name.</li>';
					}
					$insertObj->name = mysql_real_escape_string($_POST['name']);					
				break;
				case recaptcha_response_field:
					$resp = recaptcha_check_answer ($privatekey,
	                                        $_SERVER["REMOTE_ADDR"],
	                                        $_POST["recaptcha_challenge_field"],
	                                        $_POST["recaptcha_response_field"]);
	
			        if (!$resp->is_valid) {
			               $registerObj->errors .= '<li>The letters you typed do not match the picture. Please try again.</li>';
			        }
				break;
			}	
			
		}
		if($registerObj->errors == ''){
			//WE HAVE SUCCESS
			//LETS INSERT THE INFO AS WELL AS SEND THEM A EMAIL
			include_once('/opt/web/db_connect.inc.php');
			db_connect();
			$sql = "INSERT INTO betaRegs
					(name, email)
					VALUES
					('".$insertObj->name."','".$insertObj->email."')";
			@mysql_query($sql);
			include_once('emails/keepinformed.php');
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: ".$from."\r\n";
			@mail($insertObj->email, $subject, $body, $headers, "-f ".$from);	
			header("Location: keepinformedsuccess.php");
						
		}
// 		print "<PRE>";
// 		print_r($_POST);die;
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

	<div id="contentheader" style="float:left;">Keep informed about VISUALPLANT</div>

	<div style="float:left;margin-left:15px;margin-top:2px;">(Or, <a href="registerbeta.php">sign up to use VISUALPLANT</a>.)</div>

	<br clear="all">
<!-- show only if errors -->
<?php 
	if($registerObj->errors != ''){
		?>
		<div id="errors">
		<img src="images/error_icon.png" width="50" height="42" style="padding-right:4px;">
		<b>Hey, hold on... you need to fix a thing or two.</b>
		<br />
		
		<div style="font-size:100%; margin-top:6px; font-weight:normal;color:#000;">
		<ul>
		<?php print $registerObj->errors; ?>
		</ul>
		</div>
		
		</div>
		
		<br clear="all">
		
		<!-- end errors -->
	<?php
	}
?>

	<div id="content">
	
	<form name="theform" method="POST" >
	
	
	<b>Your name:</b> <br />
	<input name="name" type="text" id="textbox" value="<?php print $_POST['name']; ?>">

	<script language="JavaScript">
	<!--
	document.theform.name.focus();
	//-->
	</script>

	<br /><br />

	<b>E-mail address:</b> <br />
	<input name="email" type="text" id="textbox" value="<?php print $_POST['email']; ?>">
	<br />
	(We will not share your e-mail address with 3rd parties.)

	<br /><br />

	<b>Word verification:</b> <br />
<?php

echo recaptcha_get_html($publickey, $error);
?>

	<br />


	<div id="login">
		<p class="loginsubmit">
		<input type="submit" name="submit" id="log_submit" value="Keep me informed &raquo;" tabindex="3" />
		</form>
		</p>
	</div>


	</div> <!-- end content -->
	
</div> <!-- /pagebg -->

<? include('includes/footer.php') ?>

<? include('includes/google-analytics.php') ?>
</body>
</html>