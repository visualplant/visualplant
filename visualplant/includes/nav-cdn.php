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

<a href="cdn-overview.php" class="product"><span <?= (checkInScriptName('cdn-overview.php')) ? "class='activePage'" : '' ?>>Overview</span></a><br /><br />
<a href="cdn-partners.php" class="product"><span <?= (checkInScriptName('cdn-partners.php')) ? "class='activePage'" : '' ?>>Partner providers</span></a><br /><br />
