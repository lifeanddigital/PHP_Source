<!-- URL : http://localhost/PHP_Example/Source/src0450_Form_submit.php -->

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>src0450_Form_submit.php</title>
</head>

<body>
<main>
<h2>フォームに入力した内容を取得する</h2>

<dl>
  <dt>お名前：</dt>
  <dd> <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?> </dd>

  <dt>メッセージ：</dt>
  <dd> <?php print(htmlspecialchars($_REQUEST['message'], ENT_QUOTES)); ?> </dd>
</dl>
</main>

</body>
</html>