<!-- URL: http://localhost/php/PHP_Source/array/Array_test.php -->

<?php
	$fruits = [ 'apple' => 'りんご' , 'grape' => 'ぶどう' , 'lemon' => 'レモン' ] ;

	$fruits[] = array (  'apple' => 'りんご' ) ;

	foreach ( $fruits as $k => $i ) {
		echo $k , " ... " , $i ;
	}


?>	    
