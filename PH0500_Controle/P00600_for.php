<!DOCTYPE html>
<!-- FileName: http://localhost/PHP_Example/Source/src0032_for.php -->
<!-- HTML Ref: http://www.htmq.com/ -->
<!-- PHP  Ref: http://jp.php.net/manual/ja/ -->

<html lang="ja">
<head>
	<META charset="UTF-8">
	<title>php0010_base.php</title>
	<!-- スタイルを記述 -->
	<!-- link rel="stylesheet" type="text/css" href="style.css" -->
	<style type="text/css">
	  h1{ color:blue; background-color:lightgray;   }
	  .sub_title{ color:green; background-color:aquamarine;   }
	  .sub_comment{ color:blue; font-size: 16px; }
	</style>
  <!-- スクリプトを記述 -->
  <script> </script>
</head>

<body>
<header> <h1>PHPの基礎</h1> </header>
<main>
<!-- FileName: http://localhost/PHP_Example/Source/src0032_for.php -->
<!-- 
	構文
	for(カウンタの初期値; ループ処理の条件式; 増減式){
		処理を実行する
	}

	カウンタの初期値 – はじめの値
	ループ処理の条件式 – どういう条件のところまでループ処理をおこなうか
	増減式 – 処理一回ごとに、値をいくつ増やしたり減らしたりするか

-->

<h2 class="sub_title">ソースコード</h2>
<dev class="sub_comment">
    <pre>
	for  ( $i  = 1 ; $i  <= 365 ; $i ++ ) {
		print( $i . "\t"  ) ;
		if ( ($i % 7) == 0 ) { print( $i . "\n" ) ; }
	}

    </pre>
</dev>

<h2 class="sub_title">実行結果</h2>
<dev class="sub_comment">
<pre>
<?php

	for  ( $i  = 1 ; $i  <= 365 ; $i ++ ) {
		print( $i . "\t"  ) ;
		if ( ($i % 7) == 0 ) { print( $i . "\n" ) ; }
	}

?>
</pre>

</dev>
  <h2 class="sub_title">参考文献</h2>
  <dev class="sub_comment" >
      <a href="http://www.htmq.com/" target="_blank">HTML サイト</a><br>
      <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト</a><br>
  </dev>
  <p>
  <dev id="icon_img">
	<img src="img-title.JPG"  alt="写真" width="320" height="180" > <br>
  </dev>
  </P>
</main>
<footer> </footer>
</body>

</html>
