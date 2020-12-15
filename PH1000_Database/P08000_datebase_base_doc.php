<!-- URL: http://localhost/Source/datebase_base_doc.php -->

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
   <?php
//  mysql:dbname=mydb2 ： MySQLのデータベース名はmydb2 です
$database_name =  'mysql:dbname=mydb2' 

// localhost ：自分のIPアドレス
$host_name = 'host=localhost'

//接続用パラメータの作成
$dsn = $database_name . ';' . $host_name';

// ユーザ名　を　root にする
$user = 'root';
// パスワードは　Null
$password = '';
// テーブル名は、items 
$tablename = "items" ;
   
// try : エラーが発生したら　catch　のブロックを実行する。
try{
// MySQL サーバーへの接続を行うオブジェクトをつくる
//　接続先：　$dsn  ユーザー名： $user  パスワード：$password 
//   MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' 使用する文字コードは　UTF8　です
//    c:\xampp\mysql\bin>mysql -u root -p を　実行しているのと同じ
$dbh = new PDO($dsn, $user, $password,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//データベース項目の表示
print('顧客番号'.',');　print('顧客名'.',');　print('電話番号'); print('<br />');

// $tablename の　すべての項目を検索して表示するSQL文
// 変数　$sql に、SQL文を代入

$tablename = "items" ;
$sql = 'select * from' . ' ' .$tablename . ' ' . 'WHERE price >= 200'  ;
 
// $Sql 確認用表示
print ( "SQL文:" . $sql );  print('<br />');

// $dbh->query($sql) 　オブジェクト（$dbh） の　検索メソッド（ query ）　を使用する
// 引数は　$sql に代入する
// 戻り値は　$row に代入する
foreach ($dbh->query($sql) as $row) {
        print($row['id'].',');
        print($row['item_name'].',');
        print($row['price']);
        print('<br />');
    }
}catch (PDOException $e){
//エラー処理
    print('Error:'.$e->getMessage());
    die();
}
//　オブジェクトの開放
$dbh = null;
?> 

</dev>
</main>

<footer>　</footer>
</body>
</html>