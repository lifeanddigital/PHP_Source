<!-- URL: http://localhost/Source/php410_submit.php -->
<!-- URL: http://localhost/Source/php0313_mondai022.php -->
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
// print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); 
$name = htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES) ;
// $name = 'いちご' ;
$dsn = 'mysql:dbname=mydb2;host=localhost';
$user = 'root';
$password = '';
$tablename = "items" ;
try{
       $dbh = new PDO($dsn, $user, $password,  
		array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
       $sql = 'SELECT * FROM ' .  $tablename . ' WHERE ' . 'item_name = ' .  "'" . $name .  "'" ;
       print ( "SQL文:" . $sql );
       print('<br />');

    foreach ($dbh->query($sql) as $row) {
        print($row['id'].',');
        print($row['item_name'].',');
        print($row['price']);
        print('<br />');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;
?>

   </pre>

    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>