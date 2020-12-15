<!-- http://localhost/php/PHP_Source/PH1000_database/Show_Table_Sample.php -->
<?php

$tablename = '顧客マスタ' ;
$DataBase =  file_get_contents('lifeandit_eng001_database.txt');
$username = file_get_contents('lifeandit_eng001_user.txt');
$password = file_get_contents('lifeandit_eng001_password.txt');
$hostname = 'localhost' ;
$dns = "mysql:dbname=$DataBase;host=localhost";

try {
    $dbh = new PDO($dns, $username, $password,
        array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
    if ($dbh == null) { print_r('接続失敗').PHP_EOL; } else { print_r('接続成功').PHP_EOL; }
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
foreach ($table_names as $key => $val) {
    $sql2 = "SELECT * FROM $val;";
    $stmt2 = $dbh->query($sql2);
    $table_data[$val] = array();
    while ($result2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
        foreach ($result2 as $key2 => $val2) {
            $table_data[$val][$key2] = $val2;
        }
    }
}
foreach ($table_data as $key => $val) {
    echo "<h1>$key</h1>";
    if (empty($val)) {
        continue;
    }
    echo "<table border=1 style=border-collapse:collapse;>";
    echo "<tr>";
    foreach ($table_data[$key] as $key2 => $val2) {
    echo "<th>";
    echo $key2;
    echo "</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($table_data[$key] as $key2 => $val2) {
    echo "<td>";
    echo $val2;
    echo "</td>";
    }
    echo "</tr>";
    echo "</table>";
}
?>
