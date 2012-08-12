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

<a href="about-overview.php" class="product"><span <?= (checkInScriptName('about-overview.php')) ? "class='activePage'" : '' ?>>About us</span></a><br /><br />
<a href="about-who-we-are.php" class="product"><span <?= (checkInScriptName('about-who-we-are.php')) ? "class='activePage'" : '' ?>>Who we are</span></a><br /><br />
<a href="about-product-overview.php" class="product"><span <?= (checkInScriptName('about-product-overview.php')) ? "class='activePage'" : '' ?>>Product overview</span></a><br /><br />
<a href="about-technology.php" class="product"><span <?= (checkInScriptName('about-technology.php')) ? "class='activePage'" : '' ?>>Technology</span></a><br /><br />
<a href="about-case-studies.php" class="product"><span <?= (checkInScriptName('about-case-studies.php')) ? "class='activePage'" : '' ?>>Case studies</span></a><br /><br />
<a href="about-partners.php" class="product"><span <?= (checkInScriptName('about-partners.php')) ? "class='activePage'" : '' ?>>Partners</span></a><br /><br />
<a href="http://www.flickr.com/photos/79654251@N00" class="product" target="_blank"><span <?= (checkInScriptName('pressphotos.php')) ? "class='activePage'" : '' ?>>Press photos</span></a><br /><br />
<a href="about-contact-us.php" class="product"><span <?= (checkInScriptName('about-contact-us.php')) ? "class='activePage'" : '' ?>>Contact us</span></a><br /><br />
