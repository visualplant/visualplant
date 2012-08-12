<div id="footer" style="border-top:1px solid #999;background: url(images/pattern.jpg) repeat;height:50px;">
<div style="text-align:center;position:relative;top:-6px;padding-bottom:20px;">
	<a href="registerbeta.php" class="start" title="Start"><span class="displace">Start</span></a>
</div>
</div>

<div id="footer" style="padding-top:20px;">

<div style="float:left;margin-left:10px;width:33%;color:#999;">

	<a href="case-studies.php" class="footer"><span style="letter-spacing:1px;font-weight:bold;">Case Studies <strong>&there4;</strong></span></a>
	<div style="border-bottom:1px solid #bbb;margin-bottom:5px;"></div>
		
		<a href="http://den.io" class="footer" title="A social network for architects and designers" target="_blank">Den.io</a><br />
		<a href="http://crainsny.com" class="footer" title="The source for business news in the Big Apple" target="_blank">Crain's New York Business</a><br />
		<a href="http://creativity-online.com" class="footer" title="The source for advertising and creative production" target="_blank">Creativity</a><br />
		<a href="http://milesperhour.com" class="footer" title="A venue for independent film" target="_blank">Milesperhour</a><br />
		<a href="http://iznotv.com" class="footer" title="Unique video and slideshows" target="_blank">IZNO TV</a><br />
		<a href="http://johndib.com" class="footer" title="Slideshows for graphics" target="_blank">Graphics Pros</a><br />
		
		<br clear="all">
</div>

<div style="float:left;margin-left:10px;width:32%;color:#999;">

	<a href="product-overview.php" class="footer"><span style="letter-spacing:1px;font-weight:bold;">Product <strong>&there4;</strong></span></a>
	<div style="border-bottom:1px solid #bbb;margin-bottom:5px;"></div>
		
		<a href="product-overview.php" class="footer" title="Product overview">Overview</a><br />
		<a href="transcoding.php" class="footer" title="Encoding and Transcoding">Transcoding</a><br />
		<a href="cms.php" class="footer" title="Content Mangement System">CMS</a><br />
		<a href="player.php" class="footer" title="Player">Player</a><br />
		<a href="network-of-networks.php" class="footer" title="Network of Networks">Network of Networks</a><br />
		<a href="user-generated-content.php" class="footer" title="User-generated content">User-generated content</a><br />
		<a href="developer-api.php" class="footer" title="Developer API">Developer API</a><br />
		<a href="pricing.php" class="footer" title="Pricing">Pricing</a><br />
		
		<a href="http://admin.visualplant.net" class="footer" title="Support for clients">Support</a><br />
		<a href="#" class="footer" onclick="UserVoice.Popin.show(); return false;">Feedback</a><br />
		
		<br clear="all">
</div>

<div style="float:left;margin-left:10px;width:30%;color:#999;">

	<a href="about-us.php" class="footer"><span style="letter-spacing:1px;font-weight:bold;">Company <strong>&there4;</strong></span></a>
	<div style="border-bottom:1px solid #bbb;margin-bottom:5px;"></div>
		
		<a href="about-us.php" class="footer" title="About us">About us</a><br />
		<a href="who-we-are.php" class="footer" title="Who we are">Who we are</a><br />
		<a href="partners.php" class="footer" title="Partners">Partners</a><br />
		<a href="jobs.php" class="footer" title="Jobs">Jobs</a><br />
		<a href="privacy.php" class="footer" title="Privacy">Privacy</a><br />
		<!-- <a href="blog.php" class="footer" title="Blog">Blog</a><br /> -->
		<a href="contact-us.php" class="footer" title="Contact us">Contact us</a><br />
		
		<br clear="all">
</div>
	
	<br clear="all">
	
</div> <!-- /footer -->

<?
$copyright_start_year=2000;
?>

<div id="footerfoot">&copy; VISUALPLANT LLC <?= $copyright_start_year ?><? if($copyright_start_year<date("Y")) { echo '-'.date("Y"); } ?></div>

<br clear="all">

</div> <!-- /site -->

	<script type="text/javascript" src="js/vptab.js"></script>
	
<script type="text/javascript">
	object_mes_hashTab('benefit-tabs', 'benefit-content');
</script>

<? include('includes/uservoice.php') ?>