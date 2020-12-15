<!-- URL : http://localhost/PHP_Example/Source/src0450_form_input.php -->

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>src0450_form_input.php</title>
</head>

<form action = "src0450_Form_submit.php" method="get" >
<dl>
  <dt><label for="my_name"> お名前： </label></dt>
  <dd>
    <input id="my_name" type="text" name="my_name" size ="35" maxlength = "255" value = "" />
  </dd>

  <dt><label for="message" > メッセージ：</label></d>
  <dd>
    <input id="message" type="text" name="message" size ="35" maxlength = "255" value = "" />
  </dd>
</dl>

<input type="submit" value="送信する" />
</forem>

