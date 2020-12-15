<!-- FileName: http://localhost/PHP_Example/Source/src0012_calculation.php -->
<!--  
算術演算子			
	+$a	同一	$a を、必要に応じて int あるいは float に変換する
	-$a	負にする	$a の逆
	$a + $b	加算	$a および $b の合計
	$a - $b	減算	$a と $b の差
	$a * $b	乗算	$a および $b の積
	$a / $b	除算	$a および $b の商
	$a % $b	剰余	$a を $b で割った余り
	$a ** $b	累乗	$a の $b 乗。PHP 5.6 で導入されました。
			
インクリメント/ディクリメント演算子			
	演算子	例	概要
	++	++$x	前置加算子。変数に+1を加え、変数を返します
	++	$x++	後置加算子。変数を返し、変数に+1を加えます。
	--	--$x	前置減算子。変数から-1を引き、変数を返します
	--	$x--	後置減算子。変数を返し、変数から-1を引きます。
-->			

<pre>
	<?php
	$a = 20 ;
	$b = 30 ;
	print( "\n" ) ;
	print( '$a ' . "$a"  ) ;
	print( "\n" ) ;
	print( '$b ' . "$b"  ) ;
	print( "\n" ) ;
		
	$c = $a + $b ;
	print( "a + b = " . $c ) ;
	print( "\n" ) ;

	$c = $a - $b ;
	print(  "a - b = " . $c ) ;
	print( "\n" ) ;

	$c = $a * $b ;
	print(  "a * b = " . $c ) ;
	print( "\n" ) ;

	$c = $a / $b ;
	print(  "a / b = " . $c ) ;
	print( "\n" ) ;

	$a++ ;
	print(  "a++ = " . $a ) ;
	print( "\n" ) ;

	print(  "++a = " . $a ) ;
	print( "\n" ) ;
	 ?>
</pre>
