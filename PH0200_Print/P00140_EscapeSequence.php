<!DOCTYPE html>
<!-- URL : http://localhost/PHP_Example/Source/php0003_EscapeSequence.php -->
<!-- URL : http://waverlife.org/PHP_Example/Source/php0003_EscapeSequence.php -->
<!-- HTML Ref: http://www.htmq.com/ -->
<!-- PHP  Ref: http://jp.php.net/manual/ja/ -->

<html lang="ja">
<head>
	<META charset="UTF-8">
	<title>php0010_base.php</title>
	<!-- スタイルを記述 -->
	<!-- link rel="stylesheet" type="text/css" href="style.css" -->
	<style type="text/css">
	 *{ font-family: "Arial"; }　 
	  h1{ color:green ; }
	 .title_sub{ color: blue; background-color:lightcyan; font-size: 24px;  }
	 .Overview_title { color:blue; font-size: 16px; background-color:lightcyan}
	 .ex_title { color:blue; font-size: 16px; background-color:lightcyan}
	 .ex_source_title  { color:blue; font-size: 16px; }
	 .ex_source_code  { color:black; font-size: 16px; font-family: "Arial";}
	 .ex_resul_title  { color:blue; font-size: 16px;background-color:lightcyan}
	 .ex_resul_code  { color:black; font-size: 16px; font-family: "Arial" }
	 .sub_link   { color:blue; font-size: 12px; }
	  #icon_img { width: 320px; height: 380px;  }
	</style>
        	<!-- スクリプトを記述 -->
        	<script> </script>
</head>

<body>
<header> <h1>PHPの基礎</h1> </header>
<main>
<h2 class="title_sub"> エスケープシーケンス </h2>
<h3 class="Overview_title">概要</h2>
<dev class="Overview_doc">
    <pre>
	HTMLタグやプログラム言語で使用する特殊記号を表示させます。　
	改行、TAB等を文字列に埋め込む事ができます。 
	HTMLやプログラム言語で使用する記号を表示さる事ができます。 
	特殊記号は　”　”（ダブルコーテーション)　で囲みます。
	特殊記号の前に　<span style="font-family: Arial;">\</span>  （バックスラッシュ）　を付けます。
		例　改行<span style="font-family: Arial;"> "\n"  </span>
	
	\n    改行
	\r    キャリッジリターン
	\t    タブ
	\¥    ¥文字
	\$    $文字
	\(    左括弧
	\)    右括弧
	\[    左括弧
	\]    右括弧
	\'    シングルクオーテーション
	\"    ダブルクオーテーション
	\nnn  8 進数表記
	\xnn  16 進数表記

	<span style="font-family: Arial;">\</span>  （バックスラッシュ） を使用したい場合は
	Arial　の様な日本語以外のフォントを使用します。<br>
    </pre>
</dev>

<pre>
<dev class="ex_title">改行の例</dev>
<dev class="ex_source_title">ソースコード</dev>
<dev class="ex_source_code">
  &lt;?php print( "一行目") ; ?&gt;
  &lt;?php print( "\n" ) ; ?&gt;
  &lt;?php print( "二行目") ; ?&gt;
<dev>
<dev class="example_source_result">実行結果</dev>
<pre>
  <?php	print( "一行目") ;  ?>
  <?php	print( "\n" ) ;  ?>
  <?php	print( "二行目") ;  ?>
</pre>

<dev class="ex_title">タブの例</dev>
<dev class="ex_source_title">ソースコード</dev>
<dev class="ex_source_code">
  &lt;?php print( "タブ文字コード：\t" . 20 * 30 ); ?&gt;
  &lt;?php print( "\t" . 40 * 30 ); ?&gt;
  &lt;?php print( "\t" . 80 * 30 ); ?&gt;
  &lt;?php print( "\n" ); ?&gt;
<dev>
<dev class="ex_resul_code">実行結果</dev>
<pre>
  <?php	print( "タブ文字コード：\t" . 20 * 30 );?>
  <?php	print( "\t" . 40 * 30 );?>
  <?php	print( "\t" . 80 * 30 );?>
  <?php	print( "\n" );?>
</pre>

<dev class="ex_title">リテラル表記</dev>
<dev class="ex_source_title">ソースコード</dev>
<dev class="ex_source_code">
	&lt;?php print( "数式のリテラル\t" . 2*3 ); ?&gt;
	&lt;?php print( "\n" ) ;  ?&gt;
<dev>
<dev class="example_source_result">実行結果</dev>
<pre>
 	<?php	print( "数式のリテラル\t" . 2*3 );?>
</pre>

<dev class="ex_title">シングルコーテションの表記</dev>
<dev class="ex_source_title">ソースコード</dev>
<dev class="ex_source_code">
  &lt;?php print( "シングルコーテーション\t" . 'I\'m studuing')   ?&gt;  // 'I'm studuing' はエラーになる
<dev>
<dev class="ex_resul_code">実行結果</dev>
<pre>
 	シングルコーテションの表記
	<?php	print( "シングルコーテーション\t" . 'I\'m studuing')  ?>
</pre>

<dev class="ex_title">ダブルコーテーションの内側にシングルクォーテーション</dev>
<dev class="ex_source_title">ソースコード</dev>
<dev class="ex_source_code">
  &lt;?php 
    print( "ダブルコーテーションの内側にシングルクォーテーション\t" );
    $c = " 'aaa' " ;  
    print $c ;
  ?&gt;
<dev>
<dev class="ex_source_title">実行結果</dev>
<pre>
  <?php
  print( "ダブルコーテーションの内側にシングルクォーテーション\t" );
  $c = "'aaa'" ;   
  print $c ;
  ?>
</pre>

<dev class="ex_title">シングルクォーテーションの内側にダブルコーテーション</dev>
<dev class="ex_source_title">ソースコード</dev>
<dev class="ex_source_code">
  &lt;?php 
  print( "シングルクォーテーションの内側にダブルコーテーション\t" );
  $c = ' "sss" ';    
  print $c ;
  ?&gt;
<dev>
<dev class="ex_resul_code">実行結果</dev>
<dev class="ex_source_code">
<pre>
  <?php
  print( "シングルクォーテーションの内側にダブルコーテーション\t" );
  $c = '"sss"'; 
  print $c ;
  ?>
 </pre>
</dev>
</main>
<footer>
問い合わせはこちら　
 <a href="http://lifeplan-it.jp" target="_blank"> ライフプランニング</a><br>
  <dev id="icon_img" width="320" height="200">
     <a href="http://lifeplan-it.jp" target="_blank">　
	<img src="img-title.JPG"  alt="　copyrigtht ライフプランニング" width="320" height="200" > 　　　
　　</a>
  </dev>
</footer>
</body>

</html>
