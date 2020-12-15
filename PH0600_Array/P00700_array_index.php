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

	 条件判断（if） <br> 
	 条件式に従って処理を分岐する<br>
	 構文 <br> 
	 if ( 条件式 ) <br>
	{  <br>
		条件が真（TRUE)の場合に処理<br>
                 } else {<br>
		条件が偽（FALSE)の場合に処理<br>
	} <br>
<br>
	else {} は省略可能<br>
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
			if ( $i == 4 ) {
		 	print( $week[ $i ] ) ; 
			}
		}
	?>

	<br>
	// $week の　[0]　から　[6］　を読み取る
	// もし $i 　が　4 だったら　print を処理する
	<?php	 for ( $i = 0 ; $i <= 6 ; $i++ ) : ?>
		<?php if ( $i == 4 ) : ?>
		 	金　：　<?php print( $week[ $i ] ) ; ?>　<br>
		<?php endif ;  ?>  
	<?php endfor ; ?>
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
	// grape　のみを出力
	// もし　$e が　 'grape' だったら　print を処理
	<?php  foreach ( $fruits as $e => $n ) :  ?>
		<?php if ( $e == 'grape' ) : ?> 
			<br>
			<?php print( '<font color = "red"' >
			英語　：　<?php print( $e  ) ;   ?> <br>
			日本語　：　<?php print( $n  ) ; ?> <br>
			<?php print( '</font >
		<?php endif ; ?>
	<?php endforeach; ?>

    </dev>
  </main>
<footer>
</footer>
</body>
</html>