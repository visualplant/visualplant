<?php ?>

<? include('includes/meta.php') ?>

<body class="internal">

<div id="site">

<div id="logo"><a href="/"><img src="images/VP-sitelogo.gif"></a></div>
<div id="righttop">
<? include('includes/right-top.php') ?>
</div>

<div id="tagline"><? include('includes/nav-top-api.php') ?></div>

<br /><br />

<div id="contentheader">Web Services API</div>

<div id="navinternal">
<? include('includes/nav-api.php') ?>
</div>

	<div id="content">
<p>
<h3>What data is returned and how do I know what it means?</h3>

<p>

Below is a list of the elements returned in each format with a definition for each.

<p>

<table width="675" cellpadding="4" cellspacing="1">
	<tr>
		<td colspan="2" style="border: 1px solid #666;text-align:center;font-weight:bold;">XSPF (for Player)</td>
	</tr>
	<tr>
		<td width="25%" style="border-bottom: 1px solid #666;background:#666;color:#fff;">Element</td>
		<td width="75%" style="border-bottom: 1px solid #666;background:#666;color:#fff;">Description</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">Track</td>
		<td>A wrapper for each title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Title</td>
		<td>The title headline.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">Type</td>
		<td>The format of the media file. 1=video  2=audio  3=image</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Dimensions</td>
		<td>The dimensions of the media file in pixels.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">Width</td>
		<td>The width of the media file in pixels.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Height</td>
		<td>The height of the media file in pixels.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">TrackNum</td>
		<td>In a Playlist, the track number of the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Creator</td>
		<td>The Publisher/distributor of the content. Reflects your name.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">Info</td>
		<td>The Web site domain name of the Publisher. Reflects your domain name.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Annotation</td>
		<td>The short description of the title.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">Album</td>
		<td>The category of the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Duration</td>
		<td>The duration of the title in milliseconds.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">Location</td>
		<td>The HTTP address of the media file.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">Logo</td>
		<td>The HTTP address of the Publisher's watermark to display on top of the Flash player.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">daysFree *</td>
		<td>The number of days from insert date that this title may be freely viewed.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">freeForever *</td>
		<td>1=Title is free forever. 0=Title is not free forever.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">loginRequired *</td>
		<td>1=Title requires login. 0=Title does not require login.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">paymentRequired *</td>
		<td>1=Title requires payment. 0=Title does not require payment.</td>
	</tr>
	<tr class="odd">
		<td colspan="2" style="border:1px solid #666;font-size:12px;"><span style="font-size:16px;font-weight:bold;">*</span> Values are set in <a href="/?action=library:titles">VP Admin Title Manager</a>
		and are available for access control logic in your login / subscription system.</td>
	</tr>
</table>
<p>
<br />
<table width="675" cellpadding="4" cellspacing="1">
	<tr>
		<td colspan="2" style="border: 1px solid #666;text-align:center;font-weight:bold;">XML, JSON and YAML</td>
	</tr>
	<tr>
		<td width="25%" style="border-bottom: 1px solid #666;background:#666;color:#fff;">Element</td>
		<td width="75%" style="border-bottom: 1px solid #666;background:#666;color:#fff;">Description</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">title_info</td>
		<td>A wrapper for each title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">refId</td>
		<td>A unique, random reference Id for each title.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">id</td>
		<td>The unique, sequential id for each title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">type</td>
		<td>The format of the media file. 1=video  2=audio  3=image</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">title</td>
		<td>The headline of the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">descriptionSmall</td>
		<td>The short description of the title.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">descriptionFull</td>
		<td>The long description of the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">sharing</td>
		<td>1=title may be embedded on another site. 
		<br />0=title may not be embedded on another site.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">releaseDate</td>
		<td>The release date of the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">category</td>
		<td>The category of the title.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">tags</td>
		<td>Comma-delimted list of tags assigned to the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">category_name</td>
		<td>The category of the title.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">allowComments</td>
		<td>1=users may submit comments on the title.<br /> 
		2=users may submit comments subject to publisher review.<br />
		0=users may not submit comments</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">subPubCode</td>
		<td>A unique id to represent the publisher.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">notes</td>
		<td>Internal notes of the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">imageURL</td>
		<td>The file name prefix of the thumbnail image.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">formatsAvailable</td>
		<td>Comma-delimited list of file formats available (e.g., flv, mov, jpg)</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">link</td>
		<td>An optional Web link for the title.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">linkText</td>
		<td>The display text for the Web link.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">dimensions</td>
		<td>The dimensions of the media file.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">user</td>
		<td>The username who uploaded the title.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">runTime</td>
		<td>The duration of the media file.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">insertDate</td>
		<td>The date the title was uploaded. (e.g.: "2007-09-06 11:49:01")</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">imageURL</td>
		<td>The file name prefix of the thumbnail image.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">formatsAvailable</td>
		<td>Comma-delimited list of file formats available (e.g., flv, mov, jpg)</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">cdn_images_host</td>
		<td>The Content Delivery Network download URI of the image files.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">cdn_host</td>
		<td>The Content Delivery Network download URI of the video files.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">watermark_img</td>
		<td>The file name of the Publisher watermark logo that lays on top of the Player.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">movieUrl</td>
		<td>The file name prefix of the media file.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">thumbId</td>
		<td>The id of the thumbnail image to represent the media file. (1 - 3)</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">viewCount</td>
		<td>The number of times the title was watched (in part or full) on the public venue.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">name</td>
		<td>The Publisher name.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">credits</td>
		<td>A wrapper for all the title's credits</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">.credit_x</td>
		<td>A wrapper for each title credit.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">.id</td>
		<td>A unique id for the credit assignment</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">.title</td>
		<td>The title of the credit.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">.value</td>
		<td>The value of the credit.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">comments</td>
		<td>A wrapper for all the title's comments.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">.comment_x</td>
		<td>A wrapper for each title comment.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">.name</td>
		<td>The username that submitted the comment.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">.comment</td>
		<td>The comment.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">.vote</td>
		<td>The vote submitted by the user. (1 - 5)</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">.timestamp</td>
		<td>The timestamp the comment was submitted. (e.g.: "2007-09-06 11:49:01")</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">daysFree *</td>
		<td>The number of days from insert date that this title may be freely viewed.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">freeForever *</td>
		<td>1=Title is free forever. 0=Title is not free forever.</td>
	</tr>
	<tr class="even">
		<td style="font-weight: bold;">loginRequired *</td>
		<td>1=Title requires login. 0=Title does not require login.</td>
	</tr>
	<tr class="odd">
		<td style="font-weight: bold;">paymentRequired *</td>
		<td>1=Title requires payment. 0=Title does not require payment.</td>
	</tr>
	<tr class="odd">
		<td colspan="2" style="border:1px solid #666;font-size:12px;"><span style="font-size:16px;font-weight:bold;">*</span> Values are set in <a href="http://admin.visualplant.net/?action=library:titles">VP Admin Title Manager</a>
		and are available for access control logic in your login / subscription system.</td>
	</tr>
</table>

<p><br />

<ul>
<li><a href="api-templates.php">Explore <strong>VP Venue</strong> &mdash; microsite creator templates</a>.</li>
</ul>

<p><br />

	</div>
	
<div id="footerinternal">
<? include('includes/footer.php') ?>
</div>

<? include('includes/google-analytics.php') ?>
</body>
</html>