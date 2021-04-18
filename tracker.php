<?php


//THIS RETURNS THE IMAGE
header( 'Content-Type: image/gif' );
readfile( 'tracking.gif' );


// check if log file exists plugin_dir_path( __FILE__ ).
$filename = 'logs/log-'.$_SERVER['REMOTE_ADDR'].'.txt';
if( !file_exists( $filename ) ) {

	$myfile = fopen( $filename, "w") or die( "Unable to open file!" );
	// fwrite($myfile, $txt); // NO NEED TO WRITE ANYTHING FOR NOW
	fclose($myfile); // close the file

}


//THIS IS THE SCRIPT FOR THE ACTUAL TRACKING
$date = date( 'Y-m-d H:i:s', $_SERVER[ 'REQUEST_TIME' ] );
$txt = $date." | ". $_SERVER[ 'REMOTE_ADDR' ];
//$myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND);
$myfile = file_put_contents( $filename, $txt.PHP_EOL , FILE_APPEND );
exit;



/*
//THIS RETURNS THE IMAGE
header( 'Content-Type: image/gif' );
readfile( 'tracking.gif' );


//THIS IS THE SCRIPT FOR THE ACTUAL TRACKING
$date = date( 'Y-m-d H:i:s', $_SERVER[ 'REQUEST_TIME' ] );
$txt = $date." | ". $_SERVER[ 'REMOTE_ADDR' ];
$myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND);
exit;
*/