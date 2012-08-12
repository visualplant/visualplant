<?php ?>

<? include('includes/meta.php') ?>


<body class="internal">

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

	<div id="contentheader">Job openings at VISUALPLANT</div>

	<div id="navinternal">
	<? include('includes/nav-company.php') ?>
	</div>

	<div id="content">
	
	As of <? echo date("F j, Y"); ?> we are seeking:
	
	<script type="text/javascript" src="http://www.theresumator.com/embeds/visualplant/resumator.js"></script>

	<p><br />

	</div> <!-- /content -->
	
</div><!-- /pagebg -->

<? include('includes/footer.php') ?>


<? include('includes/google-analytics.php') ?>
</body>
</html>