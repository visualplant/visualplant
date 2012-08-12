<?php ?>

<? include('includes/meta.php') ?>

<body>

<script src="js/quotator.js" type="text/javascript"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  	$("#quotes").quotator({
      	speed : 7000,
      	json : "js/quotator_quotes.js"
  	});
  });
  </script>
  
<script type="text/javascript" src="js/fadecode.js" charset="UTF-8"></script> 
<script type="text/javascript" src="js/fadeconfig.js" charset="UTF-8"></script> 

<div id="site">

<div id="logo">
<? include('includes/logo.php') ?>
</div>

<div id="righttop">
<? include('includes/right-top.php') ?>
</div>

<div id="globalnav" >
<? include('includes/globalnav.php') ?>
</div>

<script type="text/javascript">
<!--
	var activeTab = '1';
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

<div id="home" style="height:370px;">
	

	<table width="100%" cellpadding="0" cellspacing="0" style="min-width:800px;">
		<tr>
			<td width="40%" valign="top">
		
			
			<div style="float:left; padding-top:40px; margin-bottom:40px; margin-top: 20px; margin-left:10px; line-height:180%;">

			<span class="screencasts"><img src="images/screencast.png" align="top">&nbsp;&nbsp;&nbsp;<i>Features</i>:</span>
			<div class="tabs-big">
				<div class="tabs-active" id="1"><a href="#" onclick="show_tab('1');return false;"></div>
				<div class="tabs-inactive" id="2"><a href="transcoding.php" class="feature">Transcode Video</a></div>
				<div class="tabs-inactive" id="3"><a href="cms.php" class="feature">Manage Content</a></div>
				<div class="tabs-inactive" id="4"><a href="player.php" class="feature">Publish and Distribute</a></div>
				<div class="tabs-inactive" id="5"><a href="pricing.php" class="feature">Pay as You Go</a></div>
				<!-- <div class="" style="margin-top:20px;border:1px solid #000;padding: 6px; "><a href="#">Clients and Case Studies</a></div> -->
			</div>
			
			<!-- Use this when we change to javascript tab-changer for screencasts
			<div class="tabs-big">
				<div class="tabs-active" id="1"><a href="#" onclick="show_tab('1');return false;"></div>
				<div class="tabs-inactive" id="2"><a href="transcoding.php" class="feature" onclick="show_tab('2');return false;">Transcode Video</a></div>
				<div class="tabs-inactive" id="3"><a href="cms.php" class="feature" onclick="show_tab('3');return false;">Manage Content</a></div>
				<div class="tabs-inactive" id="4"><a href="player.php" class="feature" onclick="show_tab('4');return false;">Publish and Distribute</a></div>
				<div class="tabs-inactive" id="5"><a href="pricing.php" class="feature" onclick="show_tab('5');return false;">Pay-as-You-Go</a></div>
			</div>
			-->
			
			</div>

			</td>
			<td valign="top">
				<div id="1_tab" style="height:373px; background: url('images/flower_home2.jpg') top left no-repeat;">
					<div style="height:75px;"></div>
					<div style="width:450px; clear: all; font-size: 32px; line-height:42px; padding:15px; margin-bottom:0px; margin-top: 0px; margin-left:0px;background: url('images/quote60PercentWhite.png') repeat;">	
						<div id="fade2" style="min-height:150px;font-family:georgia, serif;"></div>
					</div>
				</div>
				<div id="2_tab" style="display:none;">
					<embed id="vp_embed" allowFullScreen="true" src="http://den.io/player/flvplayer.swf" align="left" width="482" height="362" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=http://den.io/player/playlist.php?s=006524ca/max-results=100/showcover=false&skin=http://den.io/player/skins/modieus.swf&dock=false&stretching=uniform&autostart=true&showfsbutton=true&frontcolor=0x444444&screencolor=0xffffff&backcolor=0xffffff&showcontrols=false&plugins=http://den.io/player/vplogo&vplogo.position=bottomright&vplogo.link=true&vplogo.lheight=30&vplogo.opacity=0&vpplaylist.bg=0x444444&vpplaylist.rotatetime=10&vpplaylist.position=bottom&vpplaylist.infodisplay=none&vpplaylist.infoposition=left&vpplaylist.firstitem=1&impressiontracker.webservice=http://webservices.visualplant.net/Core/PUT/XML&controlbar=over" allowScriptAccess="always" >
				</div>
				<div id="3_tab" style="display:none;">
					3
				</div>
				<div id="4_tab" style="display:none;">
					4
				</div>
				<div id="5_tab" style="display:none;">
					5
				</div>
				<div id="5_tab" style="display:none;">
					5
				</div>
			</td>
		</tr>
	</table>

</div> <!-- /home -->


<!--
<div style="width:1100px;">
<script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher=adf7ec00-dbc8-42bf-a034-057f17999bb2&amp;type=website&amp;buttonText=SHARE%20THIS&amp;embeds=true&amp;style=rotate&amp;post_services=facebook%2Cdigg%2Cdelicious%2Cybuzz%2Ctwitter%2Cstumbleupon%2Creddit%2Ctechnorati%2Cmixx%2Cblogger%2Ctypepad%2Cwordpress%2Cgoogle_bmarks%2Cwindows_live%2Cmyspace%2Cfark%2Cbus_exchange%2Cpropeller%2Cnewsvine%2Clinkedin"></script>
</div>
-->


<? include('includes/footer.php') ?>

</body>
</html>