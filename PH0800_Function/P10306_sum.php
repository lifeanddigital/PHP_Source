
<!-- URL: http://localhost/Source/php0306_rennsyu03.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
<MEAT chaeset="UTF-8">
<title> PHP </title>
</head>
<body>
  <header>
	<h1>PHPの講座</h1>
	<style type="text/css">
	 h2{color:red;}
	 .sub_comment{ color:blue ; }
	</style>
  </header>
  
  <main>
    <h2> PHP ソース　</h2>
    <dev class="sub_comment">
	<pre>
	<?php

	//  変数の初期化
	$n = 5 ;
	$ten = [ 30,  50 , 80, 20, 10 ] ;
 	$sum = 0 ;
	$av = 0 ;

	// 合計を計算
	$sum = f_sum ( $n, $ten[] ) ;

	// for ($i = 0 ; $i <= 4 ; $i++ ) {
	// 	print( "\n"  ) ; 
	// 	$sum = $sum + $ten[ $i ] ;
	//	print( $sum ) ; 
	//}
	print( "\n"  ) ; 

	// 合計を出力
	print( "合計：　$sum "  ) ; 

	// 平均を求める
	$av = $sum / $n ;
	print( "平均：　$av "  ) ; 

	function f_sum( $n ,  $t[  ] ) {
	for ($j = 0 ; $j <= $n-1 ; $j++ ) {
		print( "\n"  ) ; 
		$s = $s + $t[ $j ] ;
		print( " j = $s ) ; 
	return $s ;
	}

	?> 
	<pre>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>