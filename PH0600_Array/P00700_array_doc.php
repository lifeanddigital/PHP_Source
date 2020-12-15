<!-- URL: http://localhost/Source/php0311_rensyu004.php -->
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
	// 配列
	// 変数名にインデックスをつけてまとめて取り扱いができる
	// 構文
	//  変数名 = [ 値１, 値2,  ・・・　] ;
	$week = [ '月' , '火' , '水' , '木' , '金' , '土' , '日' ]  ; 
	// インデックスは、　0　から始まる。

	?>

	水曜日 = <?php print( $week[2] ) ; ?> 
	
	配列のインデックスには名前（key)を付ける事ができる<br>
	構文<br>
	変数名 = [ 'key1' => '値１' , 'key2' => '値2' , ・・・] ; <br>
	
	<!-- PHP で配列の定義　-->
	<?php 
	$fruits = [ 'apple' => 'りんご' , 'grape' => 'ぶどう' , 'lemon' => 'レモン' ] ;
	?>

	<!-- PHP で結果の出力　-->
	果物　：　<?php print( $fruits[ 'grape' ]  ) ; ?> <br>
	    
    </dev>
  </main>
<footer>
</footer>
</body>
</html>