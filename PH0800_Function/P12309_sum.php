<!-- URL: http://localhost/Source/php0309_rennsyu03.php -->

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
    <h2> 最高点を出力する</h2>
    <dev class="sub_comment">
	<pre>
	<?php
	$gokaku = 50 ;
	$Max = 0 ;
	$Max_name = "" ;

        $class = [  '佐藤' => '80',   '山田' => '45',  '鈴木' => '30',  '山本' => '70',   '林' => '50' ]; 
        print( "\n" ) ; 
	// 最高点を探す
	foreach ($class as $name => $ten ) {
	    if ($ten >= $Max ) {  $Max = $ten ;  $Max_name = $name ;  }
	}
	print ( $Max_name . " :  " . $class[$Max_name] ) ;
	// 合計を求める
	$gokei = 0 ;
	foreach ($class as $name => $ten ) {
	     $tensu = $class[$name] ;
	     $gokei =  $gokei + $tensu ;
	   }
	print( "\n" ) ;  print ( "合計:" . $gokei ) ;
	// 平均
	$gokei = 0 ;
	$kosu = 0 ;
	foreach ($class as $name => $ten ) {
	     $tensu = $class[$name] ;
	     $gokei =  $gokei + $tensu ;
	     $kosu = $kosu + 1 ;
	   }
	$av = $gokei / $kosu ;
	       print( "\n" ) ;  print ( "個数:" . $kosu ) ;
	       print( "\n" ) ;  print ( "平均:" . $av ) ;
	?> 
	<pre>
    </dev>
  </main>

  <footer>
  </footer>
</body>
</html>