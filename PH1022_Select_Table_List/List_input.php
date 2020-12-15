<!-- http://localhost/php/PHP_Source/PH1022_Select_Table_List/List_input.php -->
<!-- http://lifeandit.com/php/PHP_Source/PH1022_Select_Table_List/List_input.php -->

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
	<select size="3" name="Table_name">
	<option value="顧客マスタ">顧客マスタ</option>
	<option value="メーカマスタ">メーカマスタ</option>
	<option value="受注マスタ">受注マスタ</option>
	</select>
   <input type="submit" value="送信する">
   </form>
   </dev>
  </main>

  <footer>
  </footer>
</body>
</html>