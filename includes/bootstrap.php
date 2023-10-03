<?php
/* Sets $root: either local server or remote */
if ( $_SERVER[ 'HTTP_HOST' ] == "localhost" ) {
	$root = "http://localhost/leafytechnologiesit/";
} else {
	$root = 'https://' . $_SERVER[ 'HTTP_HOST' ] . '/';
}
?>