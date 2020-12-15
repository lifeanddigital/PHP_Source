<!-- URL: http://localhost/Source/php0311_rensyu002.php -->
<!-- URL: http://jp.php.net/manual/ja/ -->

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
	<?php
	// 変数
	// 変数の最初は　$  をつける
	// 変数名は、英数、日本語文字、＿（アンダースコア）が使える
	// 最初に数字は使えない
	// 大文字と小文字は区別する。
	
	// 変数の定義
	// 変数には、数値、文字を代入できる
	$sum = 0 ;
	
	$str_data = "文字列"  ;
	$int_data = 123 ;

	// print ( $str_data ) ;
	// print ( $int_data ) ;

	// 変数は演算に使える
	// $int_data1 と　$int_data2 を足して$int_sumに代入する

	$int_data1 = 100 ;
	$int_data2 =   50 ;

	$int_sum = $int_data1 + $int_data2 ;
	// print ( $int_sum ) ;

	// 文字列の結合は　.  （ピリオド）を使う
	// 文字列　$str_data1　$str_data2 $str_data3 を結合して
	// $str_data4　に代入する。

	$str_data1 = "文字列A"  ;
	$str_data2 = "　：　"  ;
	$str_data3 = "文字列B"  ;
	$str_data4 = $str_data1 . $str_data2 . $str_data3 ;
	// print ( $str_data4 ) ;
	?> 
<br>
足し算　：　 <?php print ( $int_sum )  ?> 
<br>
文字列 ：     <?php print ( $str_data4)  ?> 

    </dev>
  </main>
<footer>
</footer>
</body>
</html>