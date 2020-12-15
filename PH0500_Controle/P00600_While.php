<!DOCTYPE html>
<!-- FileName: http://localhost/PHP_Example/Source/php0031_while.php -->
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
	  .sub_phrase{ color:green; background-color:lightcyan; font-size: 14px;  }
	  .sub_comment{ color:blue; font-size: 16px; }
	</style>
        	<!-- スクリプトを記述 -->
        	<script> </script>
</head>

<body>
<header> <h1>PHPの基礎</h1> </header>
<main>
<h2 class="sub_title">解説</h2>
<dev class="sub_phrase">
	繰り返し文：　while
</dev>

<dev class="sub_comment">
    <pre>
	特定の条件を満たす間繰り返したい時は、While文を使います。
	終了しない条件をいれると無限ループになるので注意します。

	構文
	While(繰り返す条件) {
		処理
	}

    </pre>
</dev>
<h2 class="sub_title">ソースコード</h2>
<dev class="sub_comment">
    <pre>
	whhile  ( $i  <= 365 )  {
		print( $i  ) ;
		$i++ ;
	}

    </pre>
</dev>

<h2 class="sub_title">実行結果</h2>
<dev class="sub_comment">
<pre>
<?php
	$i = 0 ;
	while  ( $i  <= 50 )  {
		print( $i  ) ;
		print( "\n"  ) ;
		$i++ ;
	}
?>
</pre>

</dev>
  <h2 class="sub_title">参考文献</h2>
  <dev class="sub_comment" >
      <a href="http://www.htmq.com/" target="_blank">HTML サイト</a><br>
      <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト</a><br>
  </dev>

</main>
<footer>
  <p>
  <dev id="icon_img">
     <a href="http://lifeplan-it.jp" target="_blank">　
    	<img src="img-title.JPG"  alt="ライフプランニング" width="320" height="180" > 　　　
　　</a><br>
  </dev>
  </P>
      <a href="http://lifeplan-it.jp" target="_blank">ライフプランニング</a><br>
 </footer>
</body>

</html>
