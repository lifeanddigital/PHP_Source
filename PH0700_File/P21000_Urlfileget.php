<!-- URL: http://localhost/Source/php035_fileget.php -->

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
      $news = file_get_contents('https://lifeplan-it.jp/' ) ;
      print( $news ) ; 
  ?>
</pre>

    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>