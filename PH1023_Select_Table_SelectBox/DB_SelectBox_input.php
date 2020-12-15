<!-- http://localhost/php/PHP_Source/PH1023_Select_Table_SelectBox/DB_SelectBox_input.php -->
<!-- http://lifeandit.com/php/PHP_Source/PH1023_Select_Table_SelectBox/DB_SelectBox_input.php -->

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
<?php
  if ($_SERVER['HTTP_HOST'] == 'localhost') {
	$DataBase =  "lifeandit_eng001" ;
	$username = "root" ; 
	$password = "" ; 
	$hostname = "localhost" ;
  } else {
	$DataBase = file_get_contents('../../lifeandit_Database_Pram/database.txt'); 
	$username = file_get_contents('../../lifeandit_Database_Pram/user.txt');
	$password = file_get_contents('../../lifeandit_Database_Pram/password.txt'); 
	$hostname = file_get_contents('../../lifeandit_Database_Pram/host.txt'); 
  }
	$dsn = "mysql:dbname=$DataBase;host=$hostname";
try {
    $dbh = new PDO($dsn, $username, $password,
	array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
    if ($dbh == null) {
	print_r('接続失敗').PHP_EOL; 
    } else {  
	print_r('接続成功').PHP_EOL;
    }

} catch(PDOException $e) {
    echo('Connection failed:'.$e->getMessage());
    die();
}

$sql = 'SHOW TABLES';
$stmt = $dbh->query($sql);
while ($result = $stmt->fetch(PDO::FETCH_NUM)){
    $table_names[] = $result[0];
}
?>

    <dev class="sub_comment">
    <form action="Select_Table.php" method="get">  
  	<label for="Table_name">テーブル名：</label>
	<select size="1" name="Table_name" style="height:35px;width:300px;">
	<?php foreach ($table_names as $key => $val) : ?>
	<?php echo "<option value=$val> $val </option> " ?>  	
	<?php endforeach ?> 
	</select>
   <input type="submit" value="送信する">
   </form>
   </dev>
  </main>

  <footer>
  <h3 id="Footer_home">メインサイト</h3>
  <a href="http://lifeandit.com" target="_blank"> ライフプランニングCOM</a /><br>
  </footer>
</body>
</html>