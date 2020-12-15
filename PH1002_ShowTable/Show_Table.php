<!-- http://localhost/php/PHP_Source/PH1002_ShowTable/Show_Table.php -->

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

<?php foreach ($table_names as $key => $val) : ?>
  <?php echo '<br>' ?>
  <?php echo $val; ?>
<?php endforeach ?> 

