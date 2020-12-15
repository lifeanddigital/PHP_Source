<!-- URL: http://localhost/Source/php0311_rensyu006.php -->
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

	 繰返し文（for） <br> 
	 特定の回数を繰り返す<br>
	 構文 <br> 
	 for ( 初期値 , 繰返し条件, 増分式) <br>
                 { <br>
		処理 ;<br>
	}<br>
	<br>

	$week[ 0 ] = 月 <br> 
	$week[ 1 ] = 火 <br> 
	$week[ 2 ] = 水 <br>
	$week[ 3 ] = 木 <br> 
	$week[ 4 ] = 金 <br> 
	$week[ 5 ] = 土 <br> 
	$week[ 6 ] = 日 <br> 

	<?php
		// 配列　week にデータを代入
		$week = [ '月' , '火' , '水' , '木' , '金' , '土' , '日' ]  ; 

		// 変数　$i を　0 ($i = 0 ) から　6まで ($i <= 6 ) 、１ずつ増やす( $i++ ) 。
		// 変数　$i が　6 以下の時　print 文を繰り返す

		 for ( $i = 0 ; $i <= 6 ; $i++ ) { 
		 	print( $week[ $i ] ) ; 
		}
	?>
	<br>
	<?php	 for ( $i = 0 ; $i <= 6 ; $i++ ) : ?>
		 週　：　<?php print( $week[ $i ] ) ; ?>　<br> 
	<?php endif ; ?>
	<br>

	<!-- PHP で配列の定義　-->
	<?php $fruits = [ 'apple' => 'りんご' , 'grape' => 'ぶどう' , 'lemon' => 'レモン' ] ; ?>

	インデックスの場合<br>
	構文<br>
	foreach ( 配列　as キー => 値 )<br>
	{<br>
<br>
	}<br>

	<!-- PHP で結果の出力　-->
	// $fruits のデータを最初から最後まで参照する。<br>
	// key を　$e に代入　値を $n に代入<br>
<br>
$fruits <br>
$fruits['apple']  =  'りんご' <br>
$fruits['grape']  = 'ぶどう' <br>
$fruits['lemon']  = 'レモン' <br>
<br>
　　　　　<?php  foreach ( $fruits as $e => $n ) :  ?>
<br>
	英語　：　<?php print( $e  ) ;   ?> <br>
	日本語　：　<?php print( $n  ) ; ?> <br>

	<?php endforeach; ?>

    </dev>
  </main>
<footer>
</footer>
</body>
</html>