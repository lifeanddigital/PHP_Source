<!-- URL : http://localhost/PHP_Example/Source/src0036_FileGet.php -->
<!-- URL : http://waverlife.org/PHP_Example/Source/src0036_FileGet.php -->

<!-- HTML Ref: http://www.htmq.com/ -->
<!-- PHP  Ref: http://jp.php.net/manual/ja/function.date.php -->

<!-- 
fstring file_get_contents ( string $パス/ファイル名 [, bool $インクルードパス = false [, $コンテキスト [, int $オフセット値 = 0 [, int $最大バイト数 ]]]] );
--> 
第一引数	読み込むパス/ファイル名
第二引数	インクルードパスを指定 FILE_USE_INCLUDE_PATHを指定すると、インクルードパスからファイルを指定
第三引数	stream_context_create関数で作成したコンテキストリソースを指定
第四引数	読込みを開始するオフセット値
第五引数	読み込むデータの最大バイト数を指定
デフォルトではファイルの終端まで読み込み
返り値：
ファイルの内容が格納された文字列を返します。失敗した場合はFALSEを返します。指定したファイルが見つからなかった場合や最大バイト数がゼロよりも小さいなどの場合はE_WARNINGのエラーが発生します。

<h2>ファイルの読み込み - file_get_contents</h2>
<pre>
<?php
$news = file_get_contents('./news_data/news.txt');
print($news);
?>

<h2>Webページの内容を全て読み込む </h2>
<?php
 
$str = file_get_contents('https://www.sejuku.net/blog/');
echo $str;
 
?>
</pre>
?>
</pre>