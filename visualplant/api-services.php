<?php 

header( 'Location: http://visualplant.net/developer-api.php' ) ;

?>

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
	
<script type="text/javascript">
<!--
	var activeTab = 'create';
	var activeMap = false;

	function show_tab(tab)
	{
		if ($(tab) == undefined) return;
		Element.hide(activeTab+'_tab');
		var s = '';
		$(activeTab).className = "tabs-inactive"
		activeTab = tab;
		$(activeTab).className = "tabs-active"
		Element.show(activeTab+'_tab');

	}

//-->
</script>

<p>

Access and update your content remotely with the VISUALPLANT Web Services API. 

<br clear="all">
<br />

<div class="tabs-big">

	<div style="float:left;font-size:16px;height:20px; padding:12px; color:#CC0000;font-weight:normal;">Two service types &rArr;</div>
	<div style="float:left;">&nbsp;</div>
	<div class="tabs-active" id="create"><a href="#" onclick="show_tab('create');return false;">Create</a></div>
	<div style="float:left;">&nbsp;</div>	
	<div class="tabs-inactive" id="manage"><a href="#" onclick="show_tab('manage');return false;">View and Manage</a></div>

</div>

<br clear="all">

<div id="create_tab">

To create titles with the VP API you need an understanding of the 
<a href="http://www.w3.org/TR/soap/" target="_blank">W3C SOAP protocol</a>
and an environment capable of processing SOAP requests. You will also need a VP account. During
set-up our team prepares a transcoding profile with recipes (output formats) according to your needs.
<p>
Root VP SOAP URL:
<i>http://webservices.visualplant.net/soap/EncodingServer.php</i>
<br />
WSDL:
<a href="http://webservicesstaging.visualplant.net/soap/EncodingServer.php?wsdl" target="_blank">
http://webservicesstaging.visualplant.net/soap/EncodingServer.php?wsdl</a>
<hr />
<h3>Overview and process:</h3>
<p>
<b>1.</b> To create a new title, begin by calling <i>CreateTitleID()</i>. Declare your publisher name 
(<i>Publisher</i>) and Passkey (<i>Passkey</i>) and do so on all subsequent API calls. 
The response will populate <i>TitleID</i> from VPSoapMetaData.

<p>
<b>2.</b> Next, you can call <i>AssociateMetaData()</i> with the <i>TitleID</i> from step 1 to populate the title with 
the optional metadata: <i>Title</i> , <i>Description</i> , <i>Tags</i> , <i>ReleaseDate</i> and <i>UserID</i>.

<p>
<b>3.</b> Then, call <i>GetUploadLocation()</i>. The response will populate <i>UploadServer</i> , 
<i>UploadType</i> , <i>UploadUsername</i> and <i>UploadPassword</i> from VPSoapUpload. Declare a 
<i>NotificationURL</i> only if you need to override the one established during set-up.


<p>
<b>4.</b> Now, use <i>SubmitRequest()</i> to add the title to the transcoding queue. 
Upload your source file (video, audio or image file) according to <i>UploadServer</i> and <i>UploadType</i> (S3 or FTP).

<p>
<b>5.</b> For each format processed, the VP API will send notifications to your notification URL (<i>NotificationURL</i>),
in order of priority. The most important formats will be encoded and notified first&mdash;which is useful 
to allow your users to share uploads quickly while less-used formats finish encoding in the background.  

<p>

<h3>List structure:</h3>

<p>

<table cellpadding="4" style="font-size:12px;text-align:left;">
	<tr>
		<th style="border-bottom:1px solid #000;" valign="top">Function</th>
		<th style="border-bottom:1px solid #000;" valign="top" width="55%">Description</th>
		<th style="border-bottom:1px solid #000;" valign="top">Parameter</th>
		<th style="border-bottom:1px solid #000;" valign="top">Elements</th>
		<th style="border-bottom:1px solid #000;" valign="top">Response</th>
	</tr>
	<tr style="background-color: #ccc;">
		<td valign="top"><i>CreateTitleID()</i></td>
		<td valign="top">Returns the Title ID for the title to be created.</td>
		<td valign="top"><i>VPSoapEncodingServer</i></td>
		<td valign="top">
		Required: <br />
		<i>Publisher</i><br />
		<i>Passkey</i>
     	</td>
		<td valign="top"><i>VPSoapMetaData</i></td>
	</tr>
	<tr style="background-color: #eee;">
		<td valign="top"><i>AssociateMetaData()</i></td>
		<td valign="top">Adds optional metadata for the title.</td>
		<td valign="top"><i>VPSoapMetaData</i></td>
		<td valign="top">
		Required: <br />
		<i>Publisher</i><br />
		<i>Passkey</i><br />
		<i>TitleID</i>
		<p>
		Optional: <br />
	 	<i>Title</i><br />
     	<i>Description</i><br />
     	<i>Tags</i><br />
     	<i>ReleaseDate</i><br />
     	<i>UserID</i><br />
		</td>
		<td valign="top"><i>VPSoapServerObj</i></td>
	</tr>
	<tr style="background-color: #ccc;">
		<td valign="top"><i>GetUploadLocation()</i></td>
		<td valign="top">Returns the type, location and credentials to upload the source file.</td>
		<td valign="top"><i>VPSoapServerObj</i></td>
		<td valign="top">
		Required: <br />
		<i>Publisher</i><br />
		<i>Passkey</i>
		<p>
		Optional or automatic: <br />
     	<i>PassThrough</i><br />
     	<i>NotificationURL</i><br />
     	<i>Message</i><br />
     	</td>
		<td valign="top"><i>VPSoapServerResponse</i></td>
	</tr>
	<tr style="background-color: #eee;">
		<td valign="top"><i>SubmitRequest()</i></td>
		<td valign="top">Returns Job IDs and starts the encoding process.</td>
		<td valign="top"><i>VPSoapServerObj</i></td>
		<td valign="top">
		Required: <br />
		<i>Publisher</i><br />
		<i>Passkey</i>
		<p>
		Optional or automatic: <br />
     <i>InputUser</i><br />
     <i>InputPass</i><br />
     <i>OutputFileURL</i><br />
     <i>OutputUser</i><br />
     <i>OutputPass</i><br />
     <i>OutputThumbPrefix</i><br />
     <i>OutputThumbSuffix</i><br />
     <i>PassThrough</i><br />
     <i>NotificationURL</i><br />
     <i>JobID</i><br />
     <i>Message</i><br />
     <i>UploadMethod</i></td>
	<td valign="top"><i>VPSoapServerObj</i></td>
	</tr>
	<tr style="background-color: #ccc;">
		<td valign="top"><i>GetJobStatus()</i></td>
		<td valign="top">Returns the status of a transcoding job.</td>
		<td valign="top"><i>VPSoapMetaDeta</i></td>
		<td valign="top">
		Required: <br />
		<i>Publisher</i><br />
		<i>Passkey</i><br />
		<i>JobID</i>
		</td>
		<td valign="top"><i>VPSoapServerObj</i></td>
	</tr>
</table>

<p>

<h3>Element descriptions:</h3>
<p>
<i>Publisher</i><br />
The name of the publisher, e.g., your company or product name. Required in each API request.
<p>
<i>Passkey</i><br />
Your passkey for access to the API. Required in each API request.
<p>
<i>InputFileURL</i><br />
Where to upload the file (e.g. s3://bucketname/path.). Assigned by the API.
<p>
<i>NotificationURL</i><br />
The URL to your script to receive responses/notifications from the API. Populated by the API with option to overwrite.
<p>
<i>JobID</i><br />
The unique id to identify the transcoding job. Assigned by the API.
<p>
<i>TitleID</i><br />
The unique id to identify the title. Assigned by the API.
<p>
<i>UserID</i><br />
The unique id to identify the user who uploaded the title. Assigned by the API when using VISUALPLANT's user system.
Optionally, you may use the field to assign a UserID from your own user system.
<p>
<i>Title</i><br />
A name or headline to describe the title.
<p>
<i>Description</i><br />
A complete description for the title.
<p>
<i>OutputFileURL</i><br />
The destination for encoded files after processing. Populated by the API.
<p>
<i>OutputUser</i><br />
The username to access the destination for encoded files after processing. Populated by the API.
<p>
<i>OutputPass</i><br />
The password to access the destination for encoded files after processing. Populated by the API.
<p>
<i>OutputThumbPrefix</i><br />
Optional prefix for thumbnail image files. Populated by the API.
<p>
<i>OutputThumbSuffix</i><br />
Optional suffix for thumbnail image files. Populated by the API.
<p>
<i>PassThrough</i><br />
Optional passthrough string for client use.     
<p>
<i>Message</i><br />
Communicates messages from the API, such as errors. Populated by the API.

<p><br />

</div>

<div id="manage_tab" style="display:none;">

To view and manage titles with the VP API you need an understanding of <a href="http://www.w3.org/TR/ws-arch/" target="_blank">RESTful Web Services</a>.

<p>

<ul>
	<li><a href="#get">View content with GET requests</a></li>
	<li><a href="#put">Manage content with PUT requests</a></li>
</ul>

"GET" requests return a maximum of 10 titles per page, 
unless you specify a different value for <span class="servicevar">max-results</span> in your query. 
For pagination, specify <span class="servicevar">start-index</span> in your query (default start value is "0"). 
See an <a href="#resultsandpagination">example query with results and pagination</a>.

<p>

<a name="get"></a>
Replace <span class="servicevar">italicized</span> variables in each request below with your info. 

<p>

XML output contains complete metadata and is typically used to populate pages with lists, thumbnails and to 
show credits, comments, ratings, tags, etc for a title. XSPF output is suited for playback of playlists
in the Web player. You may change "XML" to "XSPF" on services below marked with <span id="green">"(XSPF available)"</span>.

<p>

<b>Show Latest titles:</b> <span id="green">(XSPF available)</span><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Category/Latest
</div>

<p>

<b>Show titles in a category:</b> <span id="green">(XSPF available)</span>
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Category/<span class="servicevar">category name</span>
</div>

<p>

<b>Search titles:</b> <span id="green">(XSPF available)</span><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/All/<span class="servicevar">search term</span>
</div>

<p>

<b>Search titles in a category:</b> <span id="green">(XSPF available)</span><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Category/<span class="servicevar">category name</span>/<span class="servicevar">search term</span>
</div>

<p>

<b>Search titles matching all credits: <span id="green">(XSPF available)</span></b> <br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Credit/All/<span class="servicevar">credit value</span>
</div>

<p>

<b>Search titles matching a single credit: <span id="green">(XSPF available)</span></b> <br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Credit/<span class="servicevar">credit title</span>/<span class="servicevar">credit value</span>
</div>

<p>

<b>Show top 100 most viewed titles:</b> <span id="green">(XSPF available)</span><br />
<div class="example">
http://webservices.visualplant.net/Core/TopWork/XML/<span class="servicevar">passkey</span>/Top100/<span class="servicevar">yyyy-mm-dd</span>
</div>

<p>

<b>Show top 20 most e-mailed titles:</b> <span id="green">(XSPF available)</span><br />
<div class="example">
http://webservices.visualplant.net/Core/TopWork/XML/<span class="servicevar">passkey</span>/MostEmailed/<span class="servicevar">yyyy-mm-dd</span>
</div>

<p>

<b>Search titles owned by a user:</b><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/User/<span class="servicevar">username</span>/<span class="servicevar">search term</span>
</div>

<p>

<b>Show user titles:</b><br />
<div class="example">
http://webservices.visualplant.net/Core/UserTitles/XML/<span class="servicevar">passkey</span>/<span class="servicevar">username</span>
</div>

<p>

<b>Show user favorites:</b><br /> 
<div class="example">
http://webservices.visualplant.net/Core/UserFavorites/XML/<span class="servicevar">passkey</span>/<span class="servicevar">username</span>
</div>

<p>

<b>Show if title/playlist is  a user favorite:</b> (<i>is_favorite</i> = 1 means title id is a favorite)<br /> 
<div class="example">
http://webservices.visualplant.net/Core/UserFavorites/XML/<span class="servicevar">passkey</span>/<span class="servicevar">unique user id</span>/isFav/<span class="servicevar">unique title id</span>

</div>

<p>

<b>Show user friends:</b><br /> 
<div class="example">
http://webservices.visualplant.net/Core/UserFriends/XML/<span class="servicevar">passkey</span>/<span class="servicevar">username</span>
</div>

<p>

<!--  
<b>Show all users:</b><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/User/All
</div>

<p>

<b>Search for a user:</b><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/User/<span class="servicevar">username</span>
</div>

<p>
-->

<b>Show a title:</b> <span id="green">(XSPF available)</span><br />
<div class="example"> 
http://webservices.visualplant.net/Core/Title/XML/<span class="servicevar">passkey</span>/<span class="servicevar">unique title id</span>
</div>

<p>

<b>Show credits for a title:</b><br />
<div class="example"> 
http://webservices.visualplant.net/Core/Credits/XML/<span class="servicevar">passkey</span>/<span class="servicevar">unique title id</span>
</div>

<p>

<b>Show comments for a title:</b><br />
<div class="example"> 
http://webservices.visualplant.net/Core/Comments/XML/<span class="servicevar">passkey</span>/<span class="servicevar">unique title id</span>
</div>

<p>

<b>Show titles in a playlist:</b> <span id="green">(XSPF available)</span><br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Playlist/<span class="servicevar">playlist name</span>
</div>

<p>

<b>Generate Google Sitemap of your media library:</b> (up to 50,000 returned in this request) <br />
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Sitemap?max-results=50000&start-index=0
</div>
<br />
Use this PHP file to request the sitemap webservice and generate a gzipped file on your web server: <a href="http://visualplant.net/apps/sitemap.zip">sitemap.zip</a>

<p>

<div style="border-top:1px solid #666;"></div>

<a name="resultsandpagination"></a><p>

<b>Results and Pagination (<span class="servicevar">max-results</span> and <span class="servicevar">start-index</span>)</b>
<div class="example">
http://webservices.visualplant.net/Core/Search/XML/<span class="servicevar">passkey</span>/Category/<span class="servicevar">category name?max-results=10&start-index=0</span>
</div>

<br /><br />


<a name="put"></a>

Example PUT requests, including inserts, updates and deletes. (Note: These services are case-sensitive. It needs to be "Insert" with a capital "I" and "Delete" with a capital "D" if written, or the cache will not overwrite with new data.)

<p>

<b>Insert e-mail-a-friend (for e-mail-a-friend stats):</b><br />
<div class="example">
http://webservices.visualplant.net/Core/Insert/XML/<span class="servicevar">passkey</span>/Top_Work/<span class="servicevar">unique title id</span>
</div>

<p>

<b>Insert user favorites (for titles and playlists):</b><br />
<div class="example">
http://webservices.visualplant.net/Core/Insert/XML/<span class="servicevar">passkey</span>/User_Favs/<span class="servicevar">unique user id</span>/<span class="servicevar">unique title id</span>
</div>

<p>

<b>Delete user favorites (for titles and playlists):</b><br />
<div class="example">
http://webservices.visualplant.net/Core/Delete/XML/<span class="servicevar">passkey</span>/User_Favs/<span class="servicevar">unique user id</span>/<span class="servicevar">unique title id</span>
</div>

<p>

<b>Insert a title impression (for viewership stats):</b><br />
<div class="example">
http://webservices.visualplant.net/Core/PUT/XML/<span class="servicevar">passkey</span>/impression/insert/<span class="servicevar">unique title id</span>/<span class="servicevar">session variable</span>/<span class="servicevar">track number</span>
</div>

<p><br />
Additional PUT requests (e.g., edit title, description, delete, etc., will be provided with documentation to all clients.)
<p>

As with any Web site that displays dynamic content, we strongly urge the use of page-caching on your site to
ensure good performance and reliability for your users. Although the VISUALPLANT API is built to accomodate 
many thousands of requests per second, we cannot control network-related issues. Page-caching will reduce the
chances of a failed connection between your application and VISUALPLANT and improve load times. If you would 
like to use the 
VISUALPLANT Venue&trade; micro-site builder templates for PHP or .NET which incorporate page-caching out-of-the-box, 
<a href="api-venue.php">read here</a>.

<p><br />

<ul>
<li><a href="api-examples.php">See examples at work.</a></li>
</ul>

<p>
<br />

</div>

<p>
<b>IP Address Security:</b><br />
For security, clients may optionally assign IP addresses 
to their Passkeys authorized to return results from VISUALPLANT. 
Requests from non-authorized IP addresses will be blocked.

	</div>
	
<div id="footerinternal">
<? include('includes/footer.php') ?>
</div>

<? include('includes/google-analytics.php') ?>
</body>
</html>