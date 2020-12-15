<!-- URL: http://localhost/php/PHP_Source/array/Array_test2.php -->

<?php
	$fruits = [ 'apple' => 'りんご' , 'grape' => 'ぶどう' , 'lemon' => 'レモン' ] ;

	foreach ( $fruits as $k => $s  ) {
		echo $k , " ... " , $s ;
		echo "<br>" ;
	}

	echo "<br>" ;

	$f = array( 'Field' => "顧客番号", 'Type' => "顧客名", 'Null'   => "Non" ) ;
	foreach ( $f as $k => $s  ) {
		echo $k, " .. " , $s ;
		echo "<br>" ;
	}

	for ( $i = 0 ; $i < 5 ; $i++ ) {
	 	$f = array(" aaaas ","bbbbb") ;
	}


	// for ( $i = 0 ; $i < 5 ; $i++ ) {
	// 	$f = array(" aaaas ","bbbbb") ;
	//}

	$f = array(" aaaas ","bbbbb") ;
	foreach ( $f as $k => $s  ) {
		echo $k , " ... " , $s ;
		echo "<br>" ;
	}

?>	    
