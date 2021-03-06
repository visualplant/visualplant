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

	<div id="contentheader">Pricing</div>

	<div id="navinternal">
	<? include('includes/nav-product.php') ?>
	</div>

	<div id="content">


	<strong>Our pricing is hard to beat.</strong>
	
	<br/><br/>
	
	VISUALPLANT commissions computing and storage resources in real-time based on your content and traffic.
	We charge you only for what you use. No committment and no minimum.*
	
	<br/><br/>
	
	<table width="675" cellpadding="4" cellspacing="1">
	<tr>

		<td colspan="4" style="border: 1px solid #666;text-align:center;font-weight:bold;">Pay as you go &mdash; No minimum</td>
	</tr>
	<tr>
		<td width="25%" style="border-bottom: 1px solid #ccccff;background:#339966;color:#fff;text-align:center;font-size:14px;">Input<br />(files uploaded)</td>
		<td width="25%" style="border-bottom: 1px solid #ccccff;background:#669933;color:#fff;text-align:center;font-size:14px;">Output<br />(files transcoded)</td>
		<td width="25%" style="border-bottom: 1px solid #ccccff;background:#669966;color:#fff;text-align:center;font-size:14px;">High Availability Storage<br />(files stored)</td>
		<td width="25%" style="border-bottom: 1px solid #ccccff;background:#669999;color:#fff;text-align:center;font-size:14px;">Delivery<br />(files served)</td>
	</tr>
	<tr>
		<td valign="top" style="font-size:14px;height:40px;text-align:center;padding-top:12px;" class="even">
		$1.50 per GB
		</td>
		<td valign="top" style="font-size:14px;height:40px;text-align:center;padding-top:12px;" class="odd">
		$2.00 per GB
		</td>
		<td valign="top" style="font-size:14px;height:40px;text-align:center;padding-top:12px;" class="even">
		$1.25 per GB
		</td>
		<td valign="top" style="font-size:14px;height:40px;text-align:center;padding-top:12px;" class="odd">
		$.28 per GB
		</td>
	</tr>
	<tr>
		<td colspan="4" style="background: #ccc;font-size:14px;"><i>Charges are billed to the cent.</i></td>
	</tr>
	</table>

	
	*<span style="font-size:10px;">Not including custom development and Web site hosting plans</span>
	

	<p><br /><br /><br /><br /><br />
	
	<!--  
	
	Use our pricing calculator to estimate your video costs:
	
	<form name="calculator" id="calculator" action="">
    <div style="background: #eee;border:1px solid #999;padding:20px;width:350px;">
    <div style="background: #cccc66;color: #666;padding:4px;font-weight:bold;text-align:center;">Pricing Calculator</div>
    <span id="error" style="color:red"></span>
		<dl>
			<dt>Your average input file size (in <strong>megabytes</strong>):</dt>
				<dd><input type="text" id="inputFileSize" name="inputFileSize" maxlength="12" class="text-short" onblur="update_totals()"></dd>
			<dt>Your average input file running time in <strong>minutes</strong>:</dt>
				<dd><input type="text" id="inputFileRunningTime" name="inputFileRunningTime" maxlength="12" class="text-short" onblur="update_totals()"></dd>
			<dt>Files per day you will upload to VISUALPLANT:</dt>
				<dd><input type="text" id="inputFilesPerDay" name="inputFilesPerDay" maxlength="12" class="text-short" onblur="update_totals()"></dd>
			<dt>Output formats (select all that apply, Kbps audio + video):</dt>
				<dd><input type="checkbox" id="mobile_check" name="mobile_check" onclick="update_totals()"> Mobile 3GP&nbsp;@&nbsp;<input type="text" maxlength="6" name="mobileOutputRateKbps" id="mobileOutputRateKbps" class="text-micro" onblur="update_totals()" value="38"> Kbps<br>
				<input type="checkbox" id="web_check" name="web_check" onclick="update_totals()" checked> Web H.264 MP4&nbsp;@&nbsp;<input type="text" name="webOutputRateKbps" maxlength="6" id="webOutputRateKbps" class="text-micro" onblur="update_totals()" value="500"> Kbps<br>
				<input type="checkbox" id="iphone_check" name="iphone_check" onclick="update_totals()"> iPod/iPhone H.264&nbsp;@&nbsp;<input type="text" maxlength="6" name="iphoneOutputRateKbps" id="iphoneOutputRateKbps" class="text-micro" onblur="update_totals()" value="464"> Kbps<br>
				<input type="checkbox" id="iptv_check" name="iptv_check" onclick="update_totals()"> IPTV H.264&nbsp;@&nbsp;<input type="text" maxlength="6" name="iptvOutputRateKbps" id="iptvOutputRateKbps" class="text-micro" onblur="update_totals()" value="1628"> Kbps<br>
				<input type="checkbox" id="hd_check" name="hd_check" onclick="update_totals()"> HD H.264&nbsp;@&nbsp;<input type="text" maxlength="6" name="hdOutputRateKbps" id="hdOutputRateKbps" class="text-micro" onblur="update_totals()" value="4320"> Kbps</dd>
			<dt>Estimated monthly MB uploaded:</dt>
				<dd><input type="text" class="text-short" readonly="readonly" id="monthlyDataIn" name="monthlyDataIn"/></dd>
			<dt>Estimated monthly MB transcoded:</dt>
				<dd><input type="text" class="text-short" readonly="readonly" id="monthlyDataOut" name="monthlyDataOut"/></dd>
			<dt>Estimated monthly bill:</dt>
				<dd><input type="text" style="background:#cdfece;font-weight:bold;" class="text-short" readonly="readonly" id="totalMonthly" name="totalMonthly"/></dd>
		</dl>
	</div>
<script type="text/javascript" src="js/pricingcalc.js"></script>
    </form>
	

	<p><br clear="all"><br />
-->


	</div> <!-- /content -->
	
</div> <!-- /pagebg -->
	

<? include('includes/footer.php') ?>


<? include('includes/google-analytics.php') ?>
</body>
</html>