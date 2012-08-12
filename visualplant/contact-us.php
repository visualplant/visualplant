<?php ?>

<? include('includes/meta.php') ?>

<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA0YmBbNRzr9D1itLMysrWaxQ7faDaVQhD8MgVKnDZ--GfzoGM6xTiSSelJ9e2E4gTZnKCcsRw7HLw-Q"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(37.256498,-121.963434), 9);
        map.openInfoWindow(map.getCenter(),
        document.createTextNode("VISUALPLANT: HQ"));
                           
                           
        
      }
    }
    
    //]]>
    </script>

<body onload="load()" onunload="GUnload()" class="internal">

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

<div id="pagebg">

	<br /><br />

	<div id="contentheader">Contact us</div>

	<div id="navinternal">
	<? include('includes/nav-company.php') ?>
	</div>

	<div id="content">
	
				<div id="map" style="float:left;width: 300px; height: 250px"></div>
	
				<div style="float:left;padding-left:25px;">
					<strong>VISUALPLANT, LLC</strong><br />
					<div class="title">
					200 Winchester Circle, Suite D320<br />
					Los Gatos, CA 95032 USA	
					</div>
					<br clear="all">
					<div><strong>E-mail:</strong></div>
					<div>Business inquiries: business "at" visualplant.net</div>
					<div>Support: support "at" visualplant.net</div>
					<br />
					<div><span class="tel"><strong>Phone:</strong>
					<br />
					(USA) 408-596-1251</span></div>
					
					<br clear="all">
					
					<ul>
						<li><a href="registerbeta.php">Sign up to use VISUALPLANT</a></li>
						<li><a href="keepinformed.php">Keep informed about us</a></li>
					</ul>

				</div>
				
				<!--  
				<iframe width="300" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;time=&amp;date=&amp;ttype=&amp;q=131+W+14th+St,+New+York,+NY+10011&amp;sll=37.0625,-95.677068&amp;sspn=43.443045,69.697266&amp;ie=UTF8&amp;z=14&amp;iwloc=addr&amp;om=1&amp;ll=40.746087,-73.993521&amp;output=embed&amp;s=AARTsJoFqoqAlz87HNdZo1b3SD-nSpESxQ"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;hl=en&amp;geocode=&amp;time=&amp;date=&amp;ttype=&amp;q=131+W+14th+St,+New+York,+NY+10011&amp;sll=37.0625,-95.677068&amp;sspn=43.443045,69.697266&amp;ie=UTF8&amp;z=14&amp;iwloc=addr&amp;om=1&amp;ll=40.746087,-73.993521&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				-->
				
					

	<p><br /><br clear="all">
	<br clear="all">



	<p><br /><br /><br clear="all">

	</div> <!-- /content -->
	
</div> <!-- /pagebg -->
	
<? include('includes/footer.php') ?>

<? include('includes/google-analytics.php') ?>
</body>
</html>