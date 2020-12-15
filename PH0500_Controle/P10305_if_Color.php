<!-- URL: http://localhost/Source/php0305_rennsyu03.php -->

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
    <h2> IF 文 </h2>
    <dev class="sub_comment">

     <table>
     <?php 
        	$a = 10 ;  	$b = 30 ;
	for  ( $i  = 10 ; $i  <= $b ; $i ++ ) {
		// if ( ($i % 2) == 0 ) {
		if ( $i % 2 ) {
			print( '<tr style="background-color: #ccc" >' );
		} else {
			print( '<tr> '  );
		}

		print( '<td>' . $i . ":" . $i % 2 . ":" . '行目 </td>' );
		print( '</tr>' );
	}
   ?>
    </table>

    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>