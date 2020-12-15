
<!-- URL: http://localhost/Source/php0306_rennsyu02.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
<MEAT chaeset="UTF-8">
<title> PHP </title>
</head>
<body>
  <header>
	<h1>PHPの講座</h1>
	<style type="text/css">
	 h2{color:red;}
	 .sub_comment{ color:blue ; }
	</style>
  </header>
  
  <main>
    <h2> PHP ソース　</h2>
    <dev class="sub_comment">
	<pre>
	<?php
	
	$fruits = [
  	  'apple' => '林檎',
  	  'grape' => '葡萄',
 	  'lemon' => '檸檬',
 	  'tomato' => 'とまと',
 	  'peach' => '桃'
	]; 

	print( $fruits['grape']  ) ; 

	foreach ( $fruits as $e => $kanji ) {
		print( "\n"  );
		print( $e . ":" . $kanji   );
	}

	?> 
	<pre>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>