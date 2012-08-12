<?php
mysql_connect('localhost','root',''); //(host, username, password)

//specify database
mysql_select_db('visualplant') or die('Unable to select database'); //select which database we're using
?>

<?php

$file_name = $_GET['file'];

$query = " 
SELECT *
FROM `subPubCodes`
JOIN `video_media` ON ( subPubCodes.subPub_id = video_media.subPubCode )
WHERE video_media.movieUrl = '$file_name'
";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
$numresults = mysql_num_rows($result);

if ($numresults > 0){
	$forward_url =  $row['cdn_host'].$row['movieUrl'];
	$fp = fopen($forward_url, 'rb');
	header('Content-type: application/force-download'); 
	header('Content-Disposition: attachment; filename="'.$row['movieUrl'].'"');
	header('Content-length:'.(string)(filesize($forward_url)));
	fpassthru($fp);
}else{
	print "NO RESULT FOR NOW";
}


?>