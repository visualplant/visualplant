<?
$ContinuousPlay = @$_COOKIE['contPlay'];
$CPStatus_On	= '';
$CPStatus_Off	= '';

switch ( $ContinuousPlay ) {
	case "on":
		$CPStatus_On = 'checked';
		break;

	case "off":
		$CPStatus_Off = 'checked';
		break;
		
}

?>

<script language="Javascript">
<!--

	function setContinuousPlay ( status ) {
		var ttl		= "30";			// Number of days for cookie to live.

		var today	= new Date();
		var expire	= new Date();

		expire.setTime ( today.getTime() + ( 3600000 * 24 * ttl ) );
		document.cookie = "contPlay=" + status + ";expires=" + expire.toGMTString();
	}

//-->
</script>

<b>Continuous Playback:</b> <label for="contPlayOn" onClick="setContinuousPlay('on'); return true;"><input name="contPlay" id="contPlayOn" type="radio" value="contPlayOn" <?= $CPStatus_On ?> /> <a href="#">ON</a></label> <label for="contPlayOff" onClick="setContinuousPlay('off'); return true;"><input name="contPlay" id="contPlayOff" type="radio" value="contPlayOff" <?= $CPStatus_Off ?>  /> <a href="#">OFF</a></label>