<!-- URL : http://localhost/PHP_Example/Source/src0420_radio_submit.php -->

<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>src0420_submit</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">PHP講座</h1>    
   </header>
   <main> 
   <h2>ラジオボタンの値を取得する</h2>
   <pre>
   性別： <?php print(htmlspecialchars($_POST['gender'], ENT_QUOTES)); ?>
    </pre>
    </main>
</body>
</html>