<?php

// The page we wish to display
$file = $_GET[ 'page' ];

?>

<?php

if( isset( $file ) )
	include( $file );
else {
	header( 'Location:?page=include.php' );
	exit;
}

?>

