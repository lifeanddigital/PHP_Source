<!-- http://localhost/php/PHP_Source/File_get/Excec_sql.php -->
<!-- https://program-basic.com/php/PHP_Source/Function/Show_sql_function.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <MEAT chaeset="UTF-8">
  <title>PHP Sample</title>
  <style type="text/css">
	#message {color:red   ;  background-color:white; font-size: 16px;  }
	#sql           {color:blue ;  background-color:white; font-size: 24px;  }
  </style>
</head>

<body>
<header><h1>SQL文を実行するPHPプログラム</h1></header>
<main>
<header><h2>概要</h2></header>
Mysqlで、SQL文を実行するPHPソースコードです。<br>
<dev id="message" >
このページは実際のPHPプログラムで実行されています。<br>
</dev>

<!-- パラメータセットアップ -->
<?php 
Function Get_Database_Parameter() {
	global $HostName ;
	global $DataBase ;

	global $Username ;
	global $Password ;

	$HostName = 'localhost' ;
	$DataBase =  'waverlife_eng001' ;

	$Username = file_get_contents('waverlife_eng001_user.txt');
	$Password = file_get_contents('waverlife_eng001_password.txt');
}

Function Get_Sql () {
	global $Sql;
	$Sql = "SELECT * FROM  商品マスタ ; " ;
}

Function Get_Post () {
	global $HostName ;
	global $DataBase ;
	global $Sql;

	// print_r ($_POST) ;
	$HostName = $_POST['hostname']  ;
	$DataBase = $_POST['database']  ;
	$Sql = $_POST['sql'] ;
}
Function Execute_Sql ($HostName, $DataBase,  $UserName, $Password, $Sql ) {
	global $column_index ;
	global $res ;
 	
	$dsn = "mysql:dbname=$DataBase;host=$HostName";
	try { $dbh = new PDO($dsn, $UserName, $Password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );
	       $res = $dbh->query($Sql);
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
	     echo "<td>"  ;  echo htmlspecialchars( $row[ $r ] ) ; echo "</td>" ;
	}
    	echo "</tr>" ;
  }
  echo "</table>" ;
}
?>

<!-- メインプログラム　-->
<?php
	Get_Database_Parameter() ;
	Get_Sql () ;
?> 
<dev id="sql">
  <h3> SQL文</h3>
  <pre>
  <?php echo $Sql ; ?>
  </pre>
</dev>
<!-- データベース検索　-->
  <?php Execute_Sql ($HostName, $DataBase,  $Username, $Password, $Sql ); ?> 
<!-- テーブル表示 -->
<dev id="Echo_Table">
   <?php Echo_table( $res , $column_index ) ; ?> 
</dev>
</main>
<footer> </footer>
</body>
</html>