<!-- URL: http://localhost/php/PHP_Source/PH1000_database/Input_Table.php -->
<!-- URL: http://localhost/Source/php0313_mondai021.php -->
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
    <form action="Select_Table.php" method="get">  
  	<label for="my_name">テーブル名：</label>
  	<input type="text" id="my_name" name="my_name" maxlength="255" value="">
  	<input type="submit" value="送信する">
    </form>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>