<!DOCTYPE html>
<!-- http://localhost/php_Source/P00100_Print_color.php -->
<!-- https://program-basic.com/php_Source/p00100_Print_color.php -->
<!-- FONT "Arial" -->

<html lang="ja">
    <head>
        <META charset="UTF-8">
        <title>P00100_Print_color.php</title>
        <style type="text/css">
	h1{color:green ; }
	#Overview_title	       {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Explanation_title     {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Overview_contents     {color:black; background-color:white;    font-size: 18px;   }
	#Source_title	       {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Source_code	       {color:black; background-color:white;    font-size: 18px;   }
	#Explanation_title     {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Explanation_contents  {color:black; background-color:white; font-size: 18px;  }
	#Execution_title       {color:blue;  background-color:lightcyan; font-size: 24px;  }
	#Execution_result      {color:black; background-color:white;    font-size: 18px;  }
	#Footer_References     {color:blue;  background-color:lightcyan; font-size: 24px;  }
 	</style>
        <script> <!-- スクリプトを記述 --></script>
    </head>
<body>
<header>
<h1>PHP ホームページの色を変える </h1>
	<nav>
	<ul>
	<li><a href="#Overview_title">概要</a></li>
	<li><a href="#Explanation_title">解説</a></li>
	<li><a href="#Source_title">ソースコード</a></li>
	<li><a href="#Execution_title">実行結果</a></li>
	<li><a href="#Footer_References">参考文献</a></li>
	</ul>
	</nav>
</header>
<main>
<h2>PHP ホームページの色を変える</h2>
<h3 id="Overview_title">概要</h3>
<dev id="Overview_contents">
PHPでホームページの文字の色を変える方法です。
※このページは実際のPHPプログラムを動かしています。
</dev>
<!--more-->
<h3 id="Explanation_title">解説</h3>
<dev id="Explanation_contents">
<pre>
	PHPの print文で、HTMLのcolor タグを出力する事で
	PHP処理結果に応じて文字の色をコントロールする事ができます。
</pre>
</dev>
<h3 id="Source_title">ソースコード</h3>
<dev id="Source_code">
     <pre id="block-code">
     <code>
	&lt?php print( ' &ltfont color = "red" \n &gt' ) ;  ?&gt
	赤になるかな？
	&lt?php print( ' &ltfont color = "blue"  &gt' ) ;  ?&gt
	青になるかな？
	&lt?php print( ' &ltfont color = "black"  &gt' ) ;  ?&gt
	黒になるかな？
     </code>
     </pre>
</dev>

<h3 id="Execution_title">実行結果</h3>
<dev id="Execution_result">
     <!-- PHPを記述 -->
	<?php print( "<font color = 'red' >" ) ;  ?>
	赤になるかな？
	<?php print( "<br>" ) ;  ?>
	<?php print( "<font color = 'blue'> " ) ;  ?>
	青になるかな？
	<?php print( "<br>" ) ;  ?>
	<?php print( "<font color = 'black'>" ) ;  ?>
	黒になるかな？
	<?php print( "<br>" ) ;  ?>
</dev>
</main>
<footer>
<h3 id="Footer_References">参考文献</h3>
<a href="http://www.htmq.com/" target="_blank"> HTMLについて</a><br>
<a href="http://jp.php.net/manual/ja/" target="_blank"> PHPについて</a /><br>
<h3 id="Footer_home">メインサイト</h3>
<a href="http://lifeplan-it.jp" target="_blank"> ライフプランニング</a /><br>
</footer>
</body>
</html>
