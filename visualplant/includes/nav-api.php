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

<a href="api-overview.php" class="product"><span <?= (checkInScriptName('api-overview.php')) ? "class='activePage'" : '' ?>>Overview</span></a><br /><br />
<a href="api-security.php" class="product"><span <?= (checkInScriptName('api-security.php')) ? "class='activePage'" : '' ?>>Security</span></a><br /><br />
<a href="api-how.php" class="product"><span <?= (checkInScriptName('api-how.php')) ? "class='activePage'" : '' ?>>How to use it</span></a><br /><br />
<a href="api-webplayer.php" class="product"><span <?= (checkInScriptName('api-webplayer.php')) ? "class='activePage'" : '' ?>>Web player</span></a><br /><br />

<a href="api-services.php" class="product"><span <?= (checkInScriptName('api-services.php')) ? "class='activePage'" : '' ?>>Services</span></a><br /><br />
<a href="api-examples.php" class="product"><span <?= (checkInScriptName('api-examples.php')) ? "class='activePage'" : '' ?>>Examples</span></a><br /><br />
<a href="api-definitions.php" class="product"><span  <?= (checkInScriptName('api-definitions.php')) ? "class='activePage'" : '' ?>>Definitions</span></a><br /><br />
<a href="api-venue.php" class="product"><span <?= (checkInScriptName('api-venue.php')) ? "class='activePage'" : '' ?>>VP Venue&trade;</span></a><br /><br />
<a href="api-templates.php" class="product"><span <?= (checkInScriptName('api-templates.php')) ? "class='activePage'" : '' ?>>Templates</span></a><br /><br />

<!-- <a href="/forums" class="product"><span  <?= (checkInScriptName('forums.php')) ? "class='activePage'" : '' ?>>Forums</span></a><br /><br /> -->