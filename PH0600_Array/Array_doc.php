<!-- URL: http://localhost/PHP_Source/array/Array_doc.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
<MEAT chaeset="UTF-8">
<title> PHP </title>
<style type="text/css"></style>
</head>
<body>
<header>	<h1>PHPの講座</h1> </header>
<main>
<h2> PHP ソース　</h2>
<dev class="sub_comment">
<?php
	// 配列
	// 変数名にインデックスをつけてまとめて取り扱いができる
	// 構文
	//  変数名 = [ 値１, 値2,  ・・・　] ;
	$week = [ '月' , '火' , '水' , '木' , '金' , '土' , '日' ]  ; 
	// インデックスは、　0　から始まる。
	
	配列のインデックスには名前（key)を付ける事ができる<br>
	構文<br>
	変数名 = [ 'key1' => '値１' , 'key2' => '値2' , ・・・] ; <br>
?>
<?php
	$week = [ '月' , '火' , '水' , '木' , '金' , '土' , '日' ]  ; 
	$fruits = [ 'apple' => 'りんご' , 'grape' => 'ぶどう' , 'lemon' => 'レモン' ] ;

?>	    
    </dev>
  </main>
<footer>
</footer>
</body>
</html>