<!-- http://localhost/php/PHP_Example/Login2/conect_database.php -->
<?php

// 接続するデータベースの情報
$dsn = 'pgsql:dbname=dbname host=localhost port=5432';
$user = 'user';
$password = 'password';

try {
    // データベースへの接続開始
    $dbh = new PDO($dsn, $user, $password);

    // bindParamを利用したSQL文の実行
    $sql = 'SELECT pass FROM table_name WHERE id = :id;';
    $sth = $dbh->prepare($sql);
    $sth->bindParam(':id', $_POST['id']);
    $sth->execute();
    $pass = $sth->fetch();

    //認証処理
    if(password_verify($_POST['pass'], $pass['pass'])){
        print '認証成功';
    }else{
        print '認証失敗';
    }

    // データベースへの接続に失敗した場合
} catch (PDOException $e) {
    print('接続失敗:' . $e->getMessage());
    die();
}

?>