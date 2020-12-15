<!-- URL : http://localhost/PHP_Example/Source/src0042_round.php -->
<!-- URL : http://waverlife.org/PHP_Example/Source/src0042_round.php -->

<!-- HTML Ref: http://www.htmq.com/ -->
<!-- PHP  Ref: http://jp.php.net/manual/ja/function.date.php -->

<!-- 
	sprintf( 	'%04d年
		%02d月
		%02d日'
		, 2018
		, 1
		, 23);

--> 

<h2>書式を整える - sprintf</h2>
<pre>
<?php
$date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 23);
print($date);
?>
