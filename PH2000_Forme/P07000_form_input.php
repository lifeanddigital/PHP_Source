<!-- URL : http://localhost/PHP_Example/Source/php0410_text_input.php -->
<!-- URL : http://waverlife.org/PHP_Example/Source/php0410_text_input.php -->
<!-- URL : http://lifeplan-it.jp/PHP_Example/Source/php0410_text_input.php -->

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>src0410_submit</title>
</head>

<body>

<main>
<h2>フォームに入力した内容を取得する</h2>

<div class="content">
<form action="src0410_text_submit.php" method="get">  
  <label for="my_name">お名前：</label>
  <input type="text" id="my_name" name="my_name" maxlength="255" value="">
  <input type="submit" value="送信する">
</form>
</div>
</main>
</body>
</html>