<!DOCTYPE html>
<!-- FileName: http://localhost/PHP_Example/Source/php0012_time.php -->
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
        <!- スクリプトを記述 -->
        <script> </script>
</head>
 
<body>
<header> <h1>PHPの基礎</h1> </header>
<main>
    <h2 class="sub_title">ソースコード</h2>
    <dev class="sub_comment">
     <pre>
	date_default_timezone_set("Asia/Tokyo");
	print("現在は"' . date("G時 i分 s秒") . " です");
	print("現在は"' . date('a') . " です");

   </pre>
    </dev>

    <h2 class="sub_title">実行結果</h2>
    <dev class="sub_comment">
    <pre>
	<?php
	date_default_timezone_set("Asia/Tokyo");
	print("現在は" . date("G時 i分 s秒") . " です");
	print("\t") ;
	print("現在は" . date('a') . ' です');
	?>
	<?php
	date_default_timezone_set("Asia/Tokyo");
	print("現在は" . date("G時 i分 s秒") . " です");
	print("\t") ;
	print("\n") ;

	print("\n") ;
	print("現在はY　" . date('Y') . ' です');
	print("\n") ;
	print("現在はm　" . date('m') . ' です');
	print("\n") ;
	print("現在はd　" . date('d') . ' です');
	print("\n") ;
	print("現在のa　" . date('a') . ' です');
	print("\n") ;
	?>
   </pre>
    </dev>
   <h2 class="sub_title">参考文献</h2>
    <dev class="sub_comment" >
      <a href="http://www.htmq.com/" target="_blank">HTML サイト</a><br>
      <a href="http://jp.php.net/manual/ja/" target="_blank">PHP  サイト</a><br>
    </dev>
</main>
<footer> </footer>
</body>

</html>