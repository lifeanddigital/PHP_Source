<!-- URL : http://localhost/PHP_Example/Source/php0010_variable.php -->
<!-- URL : https://www.waverlife.org//PHP_Example/Source/php0010_variable.php -->

<!DOCTYPE html>
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
<header> <h1>PHPの基礎</h1> </header>
<main>
<h2 class="title_sub"> 変数 </h2>
<h3 class="Overview_title">概要</h2>
<dev class="Overview_doc">
<pre>
概要
	変数は、演算が可能である。
	変数名には、$（ドルマーク）を付ける
	変数名は、英文字、日本語文字、「_」アンダースコアを使用できる
		$name
		$_pref_name
		$year200
	先頭に数字は使えない
	大文字・小文字は区別する
	 "" 内に記述すると値が表示される（内容が評価される）
	 ' ' 内に記述すると変数名が表示される
	変数に値を入れる時は　= （代入演算子）を使用する。

 構文　
	$変数名 = 値;
<pre>
<dev class="ex_title">ソースコード</dev>
<dev class="ex_resul_code">
<pre>
	// 変数に値を入れる時は　= （代入演算子）を使用する。
	&lt?php
	$sum0 = 0  ;
	$sum1 = 100 ;
	$sum2 = 200  ;

	$sum0 = $sum1 + $sum2 ;
	print("合計　$sum0 です");

	$sum2 = 100 + 1050 + 200 + 50 ;
	print("合計（ダブルコーテーション）　$sum です");
	print('合計（シングルコーテーション）　$sum です');
	?&gt
</pre>
</dev>

<dev class="ex_title">実行結果</dev>
<dev class="ex_resul_code">
<pre>
<?php
	// 変数に値を入れる時は　= （代入演算子）を使用する。
	$sum0 = 0  ;
	$sum1 = 100 ;
	$sum2 = 200  ;

	$sum0 = $sum1 + $sum2 ;
	print("合計　$sum0 です");

	print("\n");

	$sum2 = 100 + 1050 + 200 + 50 ;
	print("合計（ダブルコーテーション）　$sum2 です");
	print("\n") ;
	print('合計（シングルコーテーション）　$sum2 です');

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

