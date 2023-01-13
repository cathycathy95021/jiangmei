<?php
	$fp = fopen ( '../pageviews.ogg' , 'r' );//原先數字1634
   $num = fgets ( $fp );
   fclose( $fp );
   $fpo = fopen ( '../pageviews.ogg' , 'w' );
   fwrite( $fpo , ++$num );
   fclose( $fpo );
?>