<!-- http://localhost/php/PHP_Example/Login2/form_input.php -->
<?php

//パスワードの暗号化
$hash_pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// 接続するデータベースの情報
$dsn = 'pgsql:dbname=dbname host=localhost port=5432';
$user = 'user';
$password = 'password';

try {
    // データベースへの接続開始
    $dbh = new PDO($dsn, $user, $password);

    // bindParamを利用したSQL文の実行
    $sql = 'INSERT INTO table_name (id, pass) VALUES(:id, :pass);';
    $sth = $dbh->prepare($sql);
    $sth->bindParam(':id', $_POST['id']);
    $sth->bindParam(':pass', $hash_pass);
    $sth->execute();

    // データベースへの接続に失敗した場合
} catch (PDOException $e) {
    print('接続失敗:' . $e->getMessage());
    die();
}

?>