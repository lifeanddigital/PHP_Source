<!-- URL : https://waverlife.org/PHP_Example/Source/php0030_if.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
	<META charset="UTF-8">
	<title>php0010_base.php</title>
	<!-- スタイルを記述 -->
	<!-- link rel="stylesheet" type="text/css" href="style.css" -->
	<style type="text/css">
	 *{ font-family: "Arial"; }　 
	  h1{ color:green ; }
	  .sub_title{ color:green; background-color:aquamarine;   }
	  .sub_comment{ color:blue; font-size: 16px; }
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
<h2 class="title_sub"> 条件分岐 </h2>
<h3 class="Overview_title">概要</h2>
<dev class="Overview_doc">
<pre>
構文
	if (  条件 ) {
		条件が真（True）なら処理
	} else  {
		条件が偽（False）なら処理
	} ;
			
比較演算			
	https://www.php.net/manual/ja/language.operators.comparison.php		
	$a == $b		等しい		型の相互変換をした後で $a が $b に等しい時に TRUE。
	$a === $b	等しい		$a が $b に等しく、および同じ型である場合に TRUE 。
	$a != $b		等しくない		型の相互変換をした後で $a が $b に等しくない場合に TRUE。
	$a <> $b		等しくない		型の相互変換をした後で $a が $b に等しくない場合に TRUE。
	$a !== $b		等しくない		$a が $b と等しくないか、同じ型でない場合に TRUE 。
	$a < $b		より少ない	$a が $b より少ない時に TRUE。
	$a > $b		より多い		$a が $b より多い時に TRUE。
	$a <= $b		より少ないか等しい	$a が $b より少ないか等しい時に TRUE。
	$a >= $b		より多いか等しい	$a が $b より多いか等しい時に TRUE。
	$a <=> $b	宇宙船演算子	"$a が $b より大きいか、等しいか、小さい場合に、
					それぞれ、より大きい か、0か、0より小さい integer。
					PHP 7 以降で使用可能。"
論理演算子			
	https://www.php.net/manual/ja/language.operators.logical.php		
	$a and $b	論理積		$a および $b が共に TRUE の場合に TRUE
	$a or $b		論理和		$a または $b のどちらかが TRUE の場合に TRUE
	$a xor $b		排他的論理和	$a または $b のどちらかが TRUE でかつ両方とも TRUE でない場合に TRUE
	! $a		否定		$a が TRUE でない場合 TRUE
	$a && $b		論理積		$a および $b が共に TRUE の場合に TRUE
	$a || $b		論理和		$a または $b のどちらかが TRUE の場合に TRUE

<pre>
<h2 class="sub_title">ソースコード</h2>
<dev class="sub_comment">
  <pre>
    単一行表記
    &lt?php 
	$i  =     1 ;
	if (  $i == 1 ) {  print(  ' $i は１です '  ) ;  } ;
    ?&gt

    基本表記
    &lt?php 
	$i  =     100;
	if (  $i == 100 ) {
		print(  ' $i は１です '  ) ;
	 }  else {
		print(  ' $i は１以外です '  ) ;
	} ;
    ?&gt

    HTML内の表記
　　&lt?php $i = 1 ; ?&gt
　　&lt?php if ( $i == 100 ): ?&gt
　　	i は、100
　　&lt?php else:  ?&gt
	i は、100ではない
     &lt?php endif ?&gt
    </pre>
</dev>

<h2 class="sub_title">実行結果</h2>
<dev class="sub_comment">
  <pre>
    単一行表記
    <?php
	$i  =     1 ;
	if (  $i == 1 )  {  print(  ' $i は１です ' . "\n"  ) ;  } ;
    ?>

    基本表記
    <?php
	$i  =     100;
	if (  $i == 100 ) {
		print(  ' $i は100です ' ."\n"  ) ;
	}  else {
		print(  ' $i は100以外です '  ) ;
	} ;
   ?>

  HTML内の表記
  <?php $i = 1 ; ?>
  <?php if ( $i == 100 ): ?>
	i は、１　
    <?php else:  ?>
	i は、100ではない
    <?php endif ?>
</pre>

</dev>
  <h2 class="sub_title">参考文献</h2>
  <dev class="sub_comment" >
      <a href="http://www.htmq.com/" target="_blank">HTML サイト</a><br>
      <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト</a><br>
  </dev>
</main>
<footer>
   <dev id="icon_img" width="320" height="200">
      <a href="http://lifeplan-it.jp" target="_blank">　
     	<img src="img-title.JPG"  alt="ライフプランニング" width="320" height="200" > 　　　
 　　</a><br>
   </dev>
   <a href="http://lifeplan-it.jp" target="_blank">ライフプランニング</a><br>
 </footer>
</body>

</html>
