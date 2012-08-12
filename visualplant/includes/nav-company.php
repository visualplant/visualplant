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

<ul>

<li>
<a href="about-us.php" class="product"><span <?= (checkInScriptName('about-us.php')) ? "class='activePage'" : '' ?>>About us</span></a>
</li>

<li>
<a href="who-we-are.php" class="product"><span <?= (checkInScriptName('who-we-are.php')) ? "class='activePage'" : '' ?>>Who we are</span></a>
</li>

<li>
<a href="partners.php" class="product"><span <?= (checkInScriptName('partners.php')) ? "class='activePage'" : '' ?>>Partners</span></a>
</li>

<li>
<a href="jobs.php" class="product"><span <?= (checkInScriptName('jobs.php')) ? "class='activePage'" : '' ?>>Jobs</span></a>
</li>

<!--  
<li>
<a href="blog.php" class="product"><span <?= (checkInScriptName('blog.php')) ? "class='activePage'" : '' ?>>Blog</span></a>
</li>
-->

<li>
<a href="contact-us.php" class="product"><span <?= (checkInScriptName('contact-us.php')) ? "class='activePage'" : '' ?>>Contact us</span></a>
</li>

</ul>
