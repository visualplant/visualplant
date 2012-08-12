<?php
	
	if(isset($_POST['submit'])) {
		echo "<pre>";
		print_r($_POST);
	}
	
?>
<script>
	function make_input() {
		document.getElementById('test_div').innerHTML = '<input type="text" name="work_plz">';
	}
</script>
<form method='post'>
<div id='test_div'></div>
<input type='button' onClick="make_input();">
<input type='submit' value='submit' name='submit'>
</form>