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

<a href="encode-overview.php" class="product"><span <?= (checkInScriptName('encode-overview.php')) ? "class='activePage'" : '' ?>>Overview</span></a><br /><br />
<a href="encode-desktop-uploader.php" class="product"><span <?= (checkInScriptName('encode-desktop-uploader.php')) ? "class='activePage'" : '' ?>>Desktop Uploader</span></a><br /><br />
<a href="encode-web-uploader.php" class="product"><span <?= (checkInScriptName('encode-web-uploader.php')) ? "class='activePage'" : '' ?>>Web Uploader</span></a><br /><br />
<a href="encode-encoding.php" class="product"><span <?= (checkInScriptName('encode-encoding.php')) ? "class='activePage'" : '' ?>>Encoding</span></a><br /><br />
<a href="encode-storage.php" class="product"><span <?= (checkInScriptName('encode-storage.php')) ? "class='activePage'" : '' ?>>Storage</span></a><br /><br />
<a href="encode-gallery.php" class="product"><span <?= (checkInScriptName('encode-gallery.php')) ? "class='activePage'" : '' ?>>Gallery</span></a><br /><br />
