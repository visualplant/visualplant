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
<a href="product-overview.php" class="product"><span <?= (checkInScriptName('product-overview.php')) ? "class='activePage'" : '' ?>>Product Overview</span></a>
</li>

<li>
<a href="transcoding.php" title="Transcoding" class="product"><span <?= (checkInScriptName('transcoding.php')) ? "class='activePage'" : '' ?>>Transcoding</span></a>
</li>

<li>
<a href="cms.php" title="Content Management System" class="product"><span <?= (checkInScriptName('cms.php')) ? "class='activePage'" : '' ?>>CMS</span></a>
</li>

<li>
<a href="player.php" class="product"><span <?= (checkInScriptName('player.php')) ? "class='activePage'" : '' ?>>Player</span></a>
</li>

<li>
<a href="developer-api.php" class="product"><span <?= (checkInScriptName('developer-api.php')) ? "class='activePage'" : '' ?>>Developer API</span></a>
</li>

<li>
<a href="network-of-networks.php" class="product"><span <?= (checkInScriptName('network-of-networks.php')) ? "class='activePage'" : '' ?>>Network of Networks</span></a>
</li>

<li>
<a href="cdn-partners.php" class="product"><span <?= (checkInScriptName('cdn-partners.php')) ? "class='activePage'" : '' ?>>CDNs</span></a>
</li>

<li>
<a href="user-generated-content.php" class="product"><span <?= (checkInScriptName('user-generated-content.php')) ? "class='activePage'" : '' ?>>User-generated Content</span></a>
</li>

<li>
<a href="pricing.php" class="product"><span <?= (checkInScriptName('pricing.php')) ? "class='activePage'" : '' ?>>Pricing</span></a>
</li>

</ul>
