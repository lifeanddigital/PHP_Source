<!-- http://localhost/php/PHP_Source/PH1021_Select_Table_Get/Table_input.php -->
<!-- http://lifeandit.com/php/PHP_Source/PH1021_Select_Table_Get/Table_input.php -->

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
  	<label for="Table_name">テーブル名：</label>
  	<input type="text" id="Table_name" name="Table_name" maxlength="255" value='顧客マスタ'>
  	<input type="submit" value="送信する">
    </form>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>