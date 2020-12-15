<!-- http://localhost/php/PHP_Source/PH1000_database/Show_Table.php -->
<?php

$tablename = '顧客マスタ' ;
$DataBase =  file_get_contents('lifeandit_eng001_database.txt');
$username = file_get_contents('lifeandit_eng001_user.txt');
$password = file_get_contents('lifeandit_eng001_password.txt');
$hostname = 'localhost' ;
$dns = "mysql:dbname=$DataBase;host=localhost";

try {
    $dbh = new PDO($dns, $username, $password,array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
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
$table_data = array();
?>

<?php foreach ($table_names as $key => $val) : ?>
	<?php echo '<br>' ?>
	<?php echo $val; ?>
<?php endforeach ?> 

