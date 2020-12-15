<!-- URL : http://localhost/PHP_Example/Source/src0042_round.php -->
<!-- URL : http://waverlife.org/PHP_Example/Source/src0042_round.php -->

<!-- HTML Ref: http://www.htmq.com/ -->
<!-- PHP  Ref: http://jp.php.net/manual/ja/function.date.php -->

<!-- 
ceil (数値)
	 // 小数点以下を切り上げます。
floor (数値)
	 // 小数点以下を切り捨てます。
round　(数値　[,桁数] )
	// 数値を四捨五入します。
	// 桁数を省略した場合、小数点以下を四捨五入します。
	// 桁数が、正の数の場合、小数点以下の桁数を表します。
	// 桁数が、負の数の場合、整数の桁数を表します。

--> 

<h2>小数を整数に切り上げる・切り下げる - ceil, floow, round</h2>
<pre>
3,000円のものから、100円値引きした場合は、<?php print(floor(100 / 3000 * 100)); ?>%引きです

■ その他の計算
元の計算式→<?php print(100 / 3000 * 100); ?>

切り上げ（ceil）→<?php print(ceil(100 / 3000 * 100)); ?>

四捨五入(round)→<?php print(round(100 / 3000 * 100, 1)); ?>
</pre>
