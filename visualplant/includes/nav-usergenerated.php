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

<a href="user-generated-content-overview.php" class="product"><span <?= (checkInScriptName('user-generated-content-overview.php')) ? "class='activePage'" : '' ?>>Overview</span></a><br /><br />

<a href="user-generated-content-case-study.php" class="product"><span <?= (checkInScriptName('user-generated-content-case-study.php')) ? "class='activePage'" : '' ?>>Case study</span></a><br /><br />

<!-- <a href="/forums" class="product"><span  <?= (checkInScriptName('forums.php')) ? "class='activePage'" : '' ?>>Forums</span></a><br /><br /> -->