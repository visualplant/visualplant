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

<a href="cms-overview.php" class="product"><span <?= (checkInScriptName('cms-overview.php')) ? "class='activePage'" : '' ?>>Overview</span></a><br /><br />
<a href="cms-encode-settings.php" class="product"><span <?= (checkInScriptName('cms-encode-settings.php')) ? "class='activePage'" : '' ?>>Encoding formats</span></a><br /><br />
<a href="cms-manage-users.php" class="product"><span <?= (checkInScriptName('cms-manage-users.php')) ? "class='activePage'" : '' ?>>User participation</span></a><br /><br />
<a href="cms-access-control.php" class="product"><span <?= (checkInScriptName('cms-access-control.php')) ? "class='activePage'" : '' ?>>Access control</span></a><br /><br />
<a href="cms-manage-staff.php" class="product"><span <?= (checkInScriptName('cms-manage-staff.php')) ? "class='activePage'" : '' ?>>Manage staff</span></a><br /><br />
<a href="cms-moderate-user-registration.php" class="product"><span <?= (checkInScriptName('cms-moderate-user-registration.php')) ? "class='activePage'" : '' ?>>Manage users</span></a><br /><br />
<a href="cms-moderate-titles.php" class="product"><span <?= (checkInScriptName('cms-moderate-titles.php')) ? "class='activePage'" : '' ?>>Moderate titles</span></a><br /><br />
<a href="cms-moderate-comments.php" class="product"><span <?= (checkInScriptName('cms-moderate-comments.php')) ? "class='activePage'" : '' ?>>Moderate comments</span></a><br /><br />
<a href="cms-categories.php" class="product"><span  <?= (checkInScriptName('cms-categories.php')) ? "class='activePage'" : '' ?>>Manage categories</span></a><br /><br />
<a href="cms-asset-library.php" class="product"><span <?= (checkInScriptName('cms-asset-library.php')) ? "class='activePage'" : '' ?>>Organize assets</span></a><br /><br />
<a href="cms-manage-titles.php" class="product"><span <?= (checkInScriptName('cms-manage-titles.php')) ? "class='activePage'" : '' ?>>Manage titles</span></a><br /><br />
<a href="cms-manage-credits.php" class="product"><span <?= (checkInScriptName('cms-manage-credits.php')) ? "class='activePage'" : '' ?>>Manage credits</span></a><br /><br />
<a href="cms-playlists.php" class="product"><span  <?= (checkInScriptName('cms-playlists.php')) ? "class='activePage'" : '' ?>>Build playlists</span></a><br /><br />
<a href="cms-impression-reporting.php" class="product"><span <?= (checkInScriptName('cms-impression-reporting.php')) ? "class='activePage'" : '' ?>>Report viewership stats</span></a><br /><br />
<a href="cms-search-reporting.php" class="product"><span <?= (checkInScriptName('cms-search-reporting.php')) ? "class='activePage'" : '' ?>>Report search stats</span></a><br /><br />
<a href="cms-passkeys.php" class="product"><span  <?= (checkInScriptName('cms-passkeys.php')) ? "class='activePage'" : '' ?>>VP Venue&trade;</span></a><br /><br />

<!-- <a href="/forums" class="product"><span  <?= (checkInScriptName('forums.php')) ? "class='activePage'" : '' ?>>Forums</span></a><br /><br /> -->