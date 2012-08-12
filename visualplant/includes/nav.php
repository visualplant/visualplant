<?php
//Function to check the link url vs. what page you're visiting
function checkInScriptName($fileName) {
	$scriptName = $_SERVER['SCRIPT_NAME'];
	if (strpos($scriptName, $fileName) === false) {
		return false;
	} else {
		return true;
	}
}
?>

<a href="architecture.php" class="product"><span <?= (checkInScriptName('architecture.php')) ? "class='activePage'" : '' ?>>Architecture</span></a><br /><br />
<a href="media.php" class="product"><span <?= (checkInScriptName('media.php')) ? "class='activePage'" : '' ?>>A/V Media</span></a><br /><br />
<a href="docs.php" class="product"><span <?= (checkInScriptName('docs.php')) ? "class='activePage'" : '' ?>>News and Docs</span></a><br /><br />
<a href="login.php" class="product"><span <?= (checkInScriptName('login.php')) ? "class='activePage'" : '' ?>>Login and Registration</span></a><br /><br />
<a href="videoads.php" class="product"><span <?= (checkInScriptName('videoads.php')) ? "class='activePage'" : '' ?>>Video Advertising</span></a><br /><br />
<a href="openads.php" class="product"><span  <?= (checkInScriptName('openads.php')) ? "class='activePage'" : '' ?>>Open Ads&trade;</span></a><br /><br />
<a href="paymedia.php" class="product"><span <?= (checkInScriptName('paymedia.php')) ? "class='activePage'" : '' ?>>Pay Media</span></a><br /><br />
<a href="traffic.php" class="product"><span  <?= (checkInScriptName('traffic.php')) ? "class='activePage'" : '' ?>>Traffic Reporting</span></a><br /><br />
<a href="white.php" class="product"><span  <?= (checkInScriptName('white.php')) ? "class='activePage'" : '' ?>>White-label Branding</span></a><br /><br />
<a href="templates.php" class="product"><span  <?= (checkInScriptName('templates.php')) ? "class='activePage'" : '' ?>>Flexible Templates</span></a><br /><br />
<a href="cms.php" class="product"><span <?= (checkInScriptName('cms.php')) ? "class='activePage'" : '' ?>>Central CMS</span></a><br /><br />
<a href="api.php" class="product"><span <?= (checkInScriptName('api.php')) ? "class='activePage'" : '' ?>>APIs</span></a><br /><br />
<a href="infrastructure.php" class="product"><span  <?= (checkInScriptName('infrastructure.php')) ? "class='activePage'" : '' ?>>Infrastructure</span></a><br /><br />
<a href="suppport.php" class="product"><span  <?= (checkInScriptName('suppport.php')) ? "class='activePage'" : '' ?>>Support</span></a><br /><br />