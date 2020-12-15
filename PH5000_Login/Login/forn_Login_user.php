<!-- URL: http://localhost/php/PHP_Example/Login/forn_Login_user.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
<MEAT chaeset="UTF-8">
<title> Login </title>
</head>
<body>
  <header>
	<h1>Login 画面</h1>
	<style type="text/css">
	 h2{color:red;}
	 .sub_comment{ color:blue ; }
	</style>
  </header>
  
  <main>
    <h2> ユーザー登録　</h2>
    <dev class="sub_comment">
    <form action="submit_user_mondai022.php" method="get">  
  	<label for="my_name">くだものの名前：</label>
  	<input type="text" id="my_name" name="my_name" maxlength="255" value="">
  	<input type="submit" value="送信する">
    </form>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>