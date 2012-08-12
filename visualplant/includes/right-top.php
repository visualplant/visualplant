<?php
/*
Function
* To display a randomly selected Quote for the day
How to use
* Create a file called 'quotes.txt' and chmod it 777
* Include the file [Eg: include 'quotes.php';]
* call the function showQuote where you want to show the quote [Eg: showQuote();]

*/

/*
* To add more insert
   $quote[] = "Quote --Name"
*/
$quotes[] ="703,694";
$quotes[] ="678,743";
$quotes[] ="587,984";
$quotes[] ="890,592";
$quotes[] ="1,236,097";
$quotes[] ="590,793";
$quotes[] ="827,984";
$quotes[] ="555,423";
$quotes[] ="932,683";
$quotes[] ="479,632";
$quotes[] ="1,185,032";
$quotes[] ="954,110";
$quotes[] ="809,587";
$quotes[] ="692,095";
$quotes[] ="844,004";
$quotes[] ="839,904";

$file = "quotes.txt";

function showQuote(){
global $file,$quotes;
    if(file_exists($file)){
        $entry = file($file);
        $entry = split("\|",$entry[0]);
    }
    // Check the files have been updated today. If not update it
    if($entry[0] != date('j')){
        $idx = _newQuote();
    }else{
        $idx = $entry[1];
    }
    $quote = split('--',$quotes[$idx]);
    echo "$quote[0]$quote[1]";
}
function _newQuote(){
    global $file, $quotes;
    $randomid = mt_rand(0,count($quotes)-1);
    $content = date('j') . "|$randomid";
    // If $file doesnot exist attempt to create
    if(!file_exists($file)) touch($file);
    // Check whether the file is writable or not
    if (is_writable($file)){
        if (!$handle = @fopen($file, 'w'))echo "<b>Error</b>: Could not open the file<br>";
        elseif (@fwrite($handle, $content) === FALSE)echo "<b>Error</b>: Could not write to the file<br>";
        else{
            fclose($handle);
            return $randomid;
        }
    }else echo "<b>Error</b>: $file is not writable<br>";
}
?>

<div style="padding-bottom:7px;">
served <b><?php showQuote(); ?></b> videos yesterday
</div>
