<!-- URL : http://localhost/PHP_Example/Source/src0510_check_character.php -->

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>src0510_check_character.php</title>
</head>


<body>
<header>

</header>

<main>
<h2>半角数字に直して、数字であるかをチェックする</h2>
<pre>
<?php
$age = 'あいうえお';

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
  print($age . '歳');
} else {
  print('※ 年齢が数字ではありません');
}
?>
</pre>
</main>
</body>
</html>