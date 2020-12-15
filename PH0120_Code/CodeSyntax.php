<!DOCTYPE html>
<!-- http://localhost/php/PHP_Source/PH0200_Code/CodeSyntax.php -->
<!-- https://program-basic.com/php/PHP_Source/PH0200_Code/CodeSyntax.php -->
<!-- FONT "Arial" -->

<html lang="ja">
<head>
       <META charset="UTF-8">
        <title>php0000_base.php</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
        <style type="text/css"><!-- スタイルを追加 --></style>
	
        <script> </script>
    </head>
<body>
<header>
<h1>PHP ソースコード記述</h1>
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
<h2>概要</h2>
<dev id="Overview_contents">
  <pre>
	PHP のソースコード記述に関する説明です。
  </pre>
</dev>
<!--more-->
<h2 id="Explanation_title">解説</h2>
<dev id="Explanation_contents">
     <pre>
	PHPスクリプトの記述方法
	PHPスクリプトはHTMLに埋め込む事ができる。
	PHPスクリプトの文字コードは「UTF-8」を使用する。
	PHPスクリプトは、半角英数で記述する
	PHPスクリプトのファイルの拡張子「.php」にする
	PHPスクリプトは開始タグ「<?php　」 と終了タグ「 ?>」の間に記述する。
	PHPスクリプトのコードの最後にはセミコロン「;」を記述します。
	PHPスクリプトのコードの間は「半角スペース」「タブ」「改行」で区切る。
	PHPスクリプトの文法を満たせば、自由に記述できる。

	コメントは　// は以降の行をコメントにする
	コメント	/* 　*/　で囲む
     </pre>
</dev>
<h3 id="Source_title">ソースコード</h3>
<dev id="Source_code">
     <pre id="block-code">
     <code id="code">
       &lt?php print( "Print Hello PHP!!" ) ; ?&gt
       &lt?php echo 'Echo Hello PHP!!' ; ?&gt
     </code>
     </pre>
</dev>

<h3 id="Execution_title">実行結果</h3>
<dev id="Execution_result">
      <pre>
      <?php print( "Print Hello PHP!!" ) ; ?>
	<br>
      <?php echo 'Echo Hello PHP!!' ; ?>
      </pre>
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
