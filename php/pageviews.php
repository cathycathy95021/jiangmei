<?php
	$select=$_GET['_'];
	include( dirname( __FILE__ , 2 ) . '../../dashboardcount.php' );
	getcount($select);
?>