
<!-- URL: http://localhost/Source/php0307_rennsyu01.php -->

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
	<pre>
	<?php
	$goukaku = 50 ; 
	$class = [
  	  '佐藤' => '80',
  	  '山田' => '45',
 	  '鈴木' => '30',
 	  '山本' => '70',
 	  '林' => '50'
	]; 

	foreach ( $class as $name => $ten ) {
		if ( $ten >= $goukaku ) { 
			if (  $ten >= 80 ) {
				print( '<font-color:red; >' ) ;
			} else {
				print( '<font-color:blue; >); 
			} 
			print( $name . ":" . $ten   );
		 }
	}

	?> 
	<pre>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>