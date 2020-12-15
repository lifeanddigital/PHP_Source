<!DOCTYPE html>
<!-- URL ： http://localhost/PHP/PHP_Source/PH0100_Print/Print_Base.php -->
<!-- URL ： https://program-basic.com/php/PHP_Source/PH0100_Print/Print_Base.php -->

<html lang="ja">
<head>
<META charset="UTF-8">
<title>
 Print_Base.php
</title>
</head>

<body>
<main>
<h2> 画面表示 </h2>
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
 <a href="http://www.htmq.com/" target="_blank">HTML サイト http://www.htmq.com/ </a><br>
 <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト https://www.php.net/manual/ja/</a><br>
</p>
</main>
<footer>
 <a href="http://www.htmq.com/" target="_blank">HTML サイト http://www.htmq.com/ </a><br>
 <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト https://www.php.net/manual/ja/</a><br>
</footer>
