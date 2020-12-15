<!-- URL: http://localhost/Source/php0309_rennsyu03.php -->
<!-- URL: http://localhost/Source/php0313_mondai001.php -->
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
    <h2> データを大きい順に並べ替える</h2>
    <dev class="sub_comment">
    <pre>
	<?php
	$a = [  10, 70, 50,100, 80 ];  $n = 5 ;
  	print( "\n" ) ;
	print ( '入力されたデータ　：　' ) ;  	print( "\n" ) ;  
	for ($i =  0 ; $i <= 4 ; $i++ ) {   print ( $a[$i]  . "\t" ) ; }  
	// 配列を順に見る
	for ($j = 0 ; $j <= 4 ; $j++ ) { 
		for ($k =  $j+1 ; $k <= 4 ; $k++ ) { 
			if ( $a[$j]  <= $a[$k] ) {
				// 配列 j 番目のデータとk 番目を入れ替える
				$buff2 = $a[$j]  ; 	$a[$j]  = $a[$k]  ;  	$a[$k] = $buff2 ;
			}
		}
	}
  	print( "\n" ) ; print( "\n" ) ;
	print ( '出力れたデータ　：　' ) ; print( "\n" ) ;
	for ($i =  0 ; $i <= 4 ; $i++ ) {   print ( $a[$i]  . "→ \t" ) ; 	}
	?> 
    <pre>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>