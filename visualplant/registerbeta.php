<?php 
	
	require_once('recaptcha/recaptchalib.php');

	// Get a key from http://recaptcha.net/api/getkey
	$publickey = "6LeZxAAAAAAAALyf6mfZQqOpxHZtriH_UNYls3RT";
	$privatekey = "6LeZxAAAAAAAAGyLiyMMauYPlLzWnWH_aybH6dv5";
	
	# the response from reCAPTCHA
	$resp = null;
	# the error code from reCAPTCHA, if any
	$error = null;
	
	
	if(isset($_POST['WebAddress']))
	{
		$registerObj->errors = '';	
		foreach($_POST as $key=>$value){
			switch($key){
				case PubName:
					if($value != ''){
						include_once('/opt/web/db_connect.inc.php');
						db_connect();
						$sql = "SELECT COUNT(*) as count
								FROM subPubCodes
								WHERE name = '".mysql_real_escape_string($value)."'";
						$result = mysql_query($sql);
						$row = mysql_fetch_assoc($result);
						if($row['count'] > 0){
							$registerObj->errors .= '<li>Publisher name "'.$value.'" is already taken! Please choose another publisher name.';
						}
					}else{
						$registerObj->errors .= '<li>You did not enter a Publisher name. Please choose a Publisher Name</li>';
					}
					$insertObj->pubName = mysql_real_escape_string($_POST['PubName']);
				break;
				case WebAddress:
					if(!preg_match('!^http(s)?://[\w-]+\.[\w-]+(\S+)?$!i', 'http://'.$value)){
						$registerObj->errors .= '<li>Web address "'.$value.'" is not valid. Please be sure you enter a valid Web address, e.g. "goodstuff.com" or "roadtrip.tv"</li>';
					}
					$insertObj->webAddress = mysql_real_escape_string($_POST['WebAddress']);
				break;
				case siteDescription:
					if($value == '' || stristr($value, 'Describe your site\'s')){
						$registerObj->errors .= '<li>You did not enter a site concept and description. Please write a detailed description for your site.</li>';
					}
					$insertObj->description = mysql_real_escape_string($_POST['siteDescription']);
				break;
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
				case username:
					if($value == '' || strstr($value, ' ')){
						$registerObj->errors .= '<li>Username must be one word (no spaces). Please try again.</li>';
					}
					$insertObj->username = mysql_real_escape_string($_POST['username']);					
				break;
				case password:
					if($value == '' || $value != $_POST['password2']){
						$registerObj->errors .= '<li>Your password is blank or the passwords you entered do not match. Please try again.</li>';
					}
					$insertObj->password = md5($_POST['password']);
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
			$sql = "INSERT INTO betaRegs
					(pubName, webAddress, description, name, email, username, password)
					VALUES
					('".$insertObj->pubName."', '".$insertObj->webAddress."','".$insertObj->description."','".$insertObj->name."','".$insertObj->email."','".$insertObj->username."','".$insertObj->password."')";
			@mysql_query($sql);
			include_once('emails/registerBeta.php');
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: ".$from."\r\n";
			@mail($insertObj->email, $subject, $body, $headers, "-f ".$from);	
			
			
			//LETS ALSO SEND TO JASON
			@mail("business@visualplant.net", "Someone registered at visualplant", "Check betaregs", $headers, "-f ".$from);
			
			
			
			header("Location: registerbetasuccess.php");
			
			
			
						
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
<? include('includes/right-top-login.php') ?>
</div>

<div id="globalnav" >
<? include('includes/globalnav.php') ?>
</div>

<div id="pagebg">

	<br clear="all"><br />

	<div id="contentheader" style="float:left;">Sign up to use VISUALPLANT</div>

	<div style="float:left;margin-left:15px;margin-top:2px;">(No thanks, just <a href="keepinformed.php">keep me informed</a>.)</div>

	<br clear="all">
<!-- show only if errors -->
<?php 
	if($registerObj->errors != ''){
		?>
		<div id="errors">
		<img src="images/error_icon.png" width="50" height="42" style="padding-right:4px;">
		<b>Hold on there... you need to fix a thing or two.</b>
		
		<br />

		<ul>
		<?php print $registerObj->errors; ?>
		</ul>

		
		</div>
		
		<br clear="all">
		
		<!-- end errors -->
	<?php
	}
?>
	
	<div id="content">
	
	<form name="theform" method="POST" action="registerbeta.php">

<!--  
<label><input type="radio" name="transfer" checked>Register your domain name and host with VP.</label>
<br />
<label><input type="radio" name="transfer">Transfer your domain name to VP.</label>
<br />
<label><input type="radio" name="transfer">Leave your domain name and hosting where it is. Use VP Web Services.</label>
-->


	<b>Company name:</b> <br />
	<!-- use id="textboxerror" when there is an error -->
	<input name="PubName" type="text" id="textbox" value="<?php print $_POST['PubName']; ?>">

<script language="JavaScript">
<!--
document.theform.PubName.focus();
//-->
</script>
	
	<br /><br />
	
	<b>Web address:</b> <br />
	<span id="bigtype">http://</span> <input name="WebAddress" type="text" id="textbox" value="<?php print $_POST['WebAddress']; ?>">


	<br /><br />

	<b>Company description:</b> <br />
	<textarea name="siteDescription" onfocus="this.value='<?php print $_POST['siteDescription']; ?>'; this.rows=10" style="width:80%;text-align:left;padding:6px;" rows="3" cols="60" id="textbox" />
<?php
	if($_POST['siteDescription'] != ''){
		print $_POST['siteDescription'];
	}else{
		echo "Briefly describe your company and how you intend to use video.";
	}
?>
</textarea>

	<br /><br />
	
	<b>Your name:</b> <br />
	<input name="name" type="text" id="textbox" value="<?php print $_POST['name']; ?>">

	<br /><br />

	<b>E-mail address:</b> <br />
	<input name="email" type="text" id="textbox" value="<?php print $_POST['email']; ?>"><br />
	(We will never share your e-mail address with 3rd parties.)

	<br /><br />

	<b>Username:</b> <br />
	<input name="username" type="text" id="textbox" value="<?php print $_POST['username']; ?>">

	<br /><br />

	<b>Password:</b> <br />
	<input name="password" type="password" id="textbox" >

	<br /><br />

	<b>Password again:</b> <br />
	<input name="password2" type="password" id="textbox">

	<br /><br />


	<b>Word verification:</b> <br />
<?php


echo recaptcha_get_html($publickey, $error);
?>


	<br /><br />


	<div id="login">
	<p class="loginsubmit">
	<input type="submit" name="submit" id="log_submit" value="Submit &raquo;" tabindex="3" />
	</form>
	</p>
	</div>

	</div> <!-- /content -->
	
</div> <!-- /pagebg -->
	

<? include('includes/footerfoot.php') ?>


<? include('includes/google-analytics.php') ?>
</body>
</html>