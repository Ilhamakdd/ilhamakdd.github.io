<?php

date_default_timezone_set("Australia/Melbourne"); // Set default time zone

$time = date("H"); // Set the hour in 24 hour format

if (00 <= $time && $time < 07) // 12:00am to 7:00am   Night
	{
	echo 
'<link href="css/style-1.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/flick/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
	}

elseif (07 <= $time && $time < 12) // 7:00am to 12:00pm   Morning
	{
	echo 
'<link href="css/style-3.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
	}

elseif (12 <= $time && $time < 18) // 12:00pm to 6:00pm   Afternoon
	{
	echo 
'<link href="css/style-2.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
	}

else // all other hours   Evening
	{
	echo
'<link href="css/style-4.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/flick/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
	}

?>