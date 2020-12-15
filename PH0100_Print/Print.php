<!DOCTYPE html>
<!-- URL ： http://localhost/PHP_Example/Source/php0002_print.php -->
<!-- URL ： https://waverlife.org/PHP_Example/Source/php0002_print.php -->

<html lang="ja">
<head>
	<META charset="UTF-8">
	<title>php0002_print.php</title>
	<!-- スタイルを記述 -->
	<!-- link rel="stylesheet" type="text/css" href="style.css" -->
	<style type="text/css">
	*{ font-family: "Arial"; }　 
	   h1{ color:green ; }
	  .sub_title{ color: blue; background-color:lightcyan; font-size: 24px;  }
	  .sub_Overview{ color:blue; font-size: 16px; background-color:lightcyan}
	  .sub_code  { color:blue; font-size: 16px; background-color:lightcyan}
	  .sub_result { color:blue; font-size: 16px;background-color:lightcyan}
	  .sub_link   { color:blue; font-size: 12px; }
	  #icon_img { width: 320px; height: 380px;  }
	</style>
        	<!-- スクリプトを記述 -->
        	<script> </script>
</head>

<body>
<header> <h1>PHPの基礎</h1> </header>
<main>
<h2 class="sub_title"> 画面表示 </h2>
<h3 class="sub_Overview">概要</h2>
<dev class="sub_comment">
	数値は、そのまま記します。<br>
	文字列は
	　”　”（ダブルコーテーション)　<br>
	又は
	　' 　'　（ダブルコーテーション)　で　囲みます。 <br>
	文字列の連結は　.　（ピリオド）を使用します。  <br>
</dev>
<h2 class="sub_code">ソースコード</h2>
<dev class="sub_comment">
    <pre>
	&lt;?php
	print( "\t" ) ;
	print( "数値の表記") ;
	print( "\t" ) ;
	print( 123 ) ;
	print( "\n" ) ;

	print( "\n" ) ;
	print( "文字列の表記") ;
	print( "\t" ) ;
	print( "文字" ) ;
	print( "\n" ) ;

	print( "\t" ) ;
	print( " 'シングルコーテーション' ") ;
	print( "\n" ) ;
	print( "\t" ) ;
	print( ' "ダブルコーテーション" ' ) ;
	print( "\n" ) ;
	?&gt;
    </pre>
</dev>

<h3 class="sub_result">実行結果</h2>
<dev class="sub_comment">
<pre>
	<?php
	print( "数値の表記") ;
	print( "\t" ) ;
	print( 123 ) ;
	print( "\n" ) ;

	print( "\t" ) ;
	print( "文字列の表記") ;
	print( "\t" ) ;
	print( "文字" ) ;
	print( "\n" ) ;

	print( "\t" ) ;
	print( " 'シングルコーテーション' ") ;
	print( "\n" ) ;

	print( "\t" ) ;
	print( ' "ダブルコーテーション" ' ) ;
	print( "\n" ) ;
	?>
</pre>

<p>
 <h3 class="sub_result">参考文献</h3>
 <dev class="sub_link" >
		 <a href="http://www.htmq.com/" target="_blank">HTML サイト http://www.htmq.com/ </a><br>
		 <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト https://www.php.net/manual/ja/</a><br>
 </dev>
 </p>
</main>

<footer>
　　問い合わせはこちら　
	  <a href="http://lifeplan-it.jp" target="_blank"> ライフプランニング</a><br>
	<p>
	  <dev id="icon_img" width="320" height="200">
	     <a href="http://lifeplan-it.jp" target="_blank">　
	    	<img src="img-title.JPG"  alt="　copyrigtht ライフプランニング" width="320" height="200" > 　　　
	　　</a><br>
	  </dev>
	  </P>
</footer>
