<!-- URL : http://localhost/PHP_Example/Source/src0430_checkbox_submit.php -->

<!doctype html>
<html lang="ja">
<head>

<meta charset="utf-8">
<title>PHPの教科書</title>
</head>

<body>

<header>

<body>
<header>

</header>

<main>
<h2>チェックボックスの値を取得する</h2>
<pre>
ご予約日：
<?php
foreach ($_POST['reserve'] as $reserve) {
  print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
}
?>
</pre>
</main>
</body>
</html>
