<!-- URL : http://localhost/PHP_Example/Source/src0035_FilePut.php -->
<!-- URL : http://waverlife.org/PHP_Example/Source/src0035_FilePut.php -->

<!-- 
file_put_contents(ファイル名, 書き込みデータ [, オプションフラグ [, コンテキスト]])

オプションフラグ
file_put_contents()には3つオプションがあり、これらを第3引数に渡すことで設定できます。
また、「|」演算子を使うことで複数のオプションを同時に設定できます。

FILE_USE_INCLUDE_PATH
ファイルをインクルードディレクトリから参照します。

FILE_APPEND
データを上書きではなくファイルに追記します。

LOCK_EX
書き込み中にファイルをロックし他の人が同時にファイル処理を行えないようにします
--> 

<h2>ファイルに内容を書き込む - file_put_contents</h2>
<pre>
<?php
$result = file_put_contents('./news_data/news.txt', '2018-06-01 ホームページをリニューアルしました');
if ($result) {
 print ( "書き込み成功：" . $result . " Byte\n" );
  print('ファイルへの書き込みが完了しました。');
} else {
  print('書き込みに失敗しました。フォルダの権限などを確認してください。');
}

?>
</pre>