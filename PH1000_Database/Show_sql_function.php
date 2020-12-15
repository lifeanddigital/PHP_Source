<!-- http://localhost/php/PHP_Source/Function/Show_sql_function.php -->
<!-- https://program-basic.com/php/PHP_Source/Function/Show_sql_function.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <MEAT chaeset="UTF-8">
  <title>PHP Sample</title>
  <style type="text/css">
	#message {color:red   ;  background-color:white; font-size: 16px;  }
	#sql           {color:black;  background-color:white; font-size: 24px;  }
  </style>
</head>

<body>
<header><h1>MySQLのカラム名をPHPで取する</h1></header>
<main>
<header><h2>概要</h2></header>
Mysqlで、テーブルのカラム名を取得するSQL文とPHPのソースコードです。<br>
<dev id="message" >
このページは実際のPHPプログラムで実行されています。<br>
</dev>

<!-- パラメータセットアップ -->
<?php
Function Set_Data () {
	global $DataBase ;
	global $username ;
	global $password ;
	global $dsn ;

	$DataBase =  file_get_contents('waverlife_eng001_database.txt');
	$username = file_get_contents('waverlife_eng001_user.txt');
	$password = file_get_contents('waverlife_eng001_password.txt');
	$dsn = "mysql:dbname=$DataBase;host=localhost";
}

Function Open_Database ($dsn, $username, $password, $sql ) {
	global $column_index ;
	global $res ;
 
	try { $dbh = new PDO($dsn, $username, $password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );
	       $res = $dbh->query($sql);
	} catch ( PDOException $e){ print('Error:'.$e->getMessage()); die(); }

	for ($i = 0; $i < $res->columnCount(); $i++) {
      		$column_index[] = $res->getColumnMeta($i)['name'];
    	}
	$dbh = null ;
}

Function Echo_table($res , $column_index ) {
  echo "<table  border='1'>" ;
  echo "<tr>" ;
  foreach ($column_index as $s) {
	echo "<td>" ;
	echo $s  ;
	echo "</td>"; 
  }
  echo "<tr>" ;
  foreach ( $res as $row )  {
	echo "<tr>" ;
   	foreach ( $column_index as $r ) {
		echo "<td>" ;
		echo htmlspecialchars( $row[ $r ] ) ;
		echo "</td>" ; 
	}
    	echo "</tr>" ;
  }
  echo "</table>" ;
}
?>

<!-- メインプログラム　-->
<?php
	$tablename = '商品マスタ' ;
 	$sql = "SELECT *  FROM $tablename; " ;
	Set_Data() ;
?> 
<?php echo "<h3> $tablename </h3>" ; ?>
<dev id="sql">
	<?php print( "テーブル名 :  $tablename "); print('<br>');  ?>　
	<?php print( "　SQL文:  $sql "); print('<br>');  ?>　
</dev>
<!-- データベース検索　-->
<?php Open_Database ($dsn, $username, $password, $sql  ) ; ?> 

<!-- テーブル表示 -->
<dev id="Echo_Table">
	<?php Echo_table( $res , $column_index ) ; ?> 
</dev>
</main>
<footer> </footer>
</body>
</html>