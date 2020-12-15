<!-- URL: http://localhost/php/PHP_Source/array/Array_test4.php -->

<?php
	$s1 = " aaaa" ;
	$s2 = " bbbb" ;
	$s3 = " cccc" ;
	
	$ss[] = array ($s2) ;
	for ( $i = 0 ; $i < 2 ; $i++  ) {
		$ss[] = array( $s1) ;
	}

	foreach ( $ss as $s ) {
		echo $s ;
	}


?>	    
