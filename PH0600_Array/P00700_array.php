<!-- FileName: http://localhost/PHP_Example/Source/src0110_array.php -->
<!-- 
	構文
	$配列変数名 = [
	'値1',
          	'値2',
          	'値3'
          	];
-->

<pre>
<?php
	$week_name = ['日', '月', '火', '水', '木', '金', '土'];

	$i = 0 ;

	for  ( $i  = 0 ; $i  < 7 ; $i ++ ) {
		print( $i  ) ;
		print( "\t" ) ;
		print( $week_name[$i]  ) ;
		print( "\n" ) ;
	}

?>
	<?php
	$a = [ 1,2,3,4,5] ;
	print ( "\n" );
	for ($i = 0 ; $i<=4 ; $i++) {
		 // print ( '$i       ' . $i  );
		 // print ( "  MOD  " . $i % 2 );
		 // print ( "\n" );
		if ($i % 2) { print ( $a[$i] ); }
	print ( "\n" );
	}

	print ( "\n" );
	for ($i = 0 ; $i<=4 ; $i++) {
		print ( $a[$i] ); print ( "\n" );
	}
	print ( "\n" );
	for ($i = 4 ; $i>=0 ; $i--) {
		print ( $a[$i] ); print ( "\n" );
	}

	?> 
</pre>
