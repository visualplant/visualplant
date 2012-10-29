<script>
// CREDITS:
// OS Sniffer
// By Urs Dudli and Peter Gehrig
// Copyright (c) 2003 Peter Gehrig and Urs Dudli. All rights reserved.
// Permission given to use the script provided that this notice remains as is.
// Additional scripts can be found at http://www.24fun.com & http://www.designerwiz.com
// info@24fun.com
// 5/6/2003

// IMPORTANT:
// If you add this script to a script-library or script-archive
// you have to add a highly visible link to
// http://www.24fun.com on the webpage
// where this script will be featured

// edit text for Windows-users
var text_win="Welcome Windows-Freak"

// edit text for Macintosh-users
var text_mac="Welcome Macintosh-Freak!"

// edit text for Linux-users
var text_linux="Welcome Linux-Freak!"

// edit text for Linux-users
var text_unix="Welcome Unix-Freak!"

// edit text for users with unknown OS
var text_unknown="Hey what kind of OS do you operating with?"

// Do not edit code below this line
var text=""
var ua = navigator.userAgent.toLowerCase();
if (ua.indexOf("win") != -1) {text=text_win;} 
else if (ua.indexOf("mac") != -1) {text=text_mac;} 
else if (ua.indexOf("linux") != -1) {text=text_linux;} 
else if (ua.indexOf("x11") != -1) {text=text_unix;} 
else {text=text_unknown;}
</script>
