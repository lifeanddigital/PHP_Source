
<!-- FileName: http://localhost/PHP_Example/Source/src0012_time_object.php -->
<pre>
<?php
	// date 関数
	date_default_timezone_set("Asia/Tokyo");
	print("現在は" . date("G時 i分 s秒") . " です");
	print("\t") ;
	print("\n") ;

	// DateTimeオブジェクト　formatメソッド
	date_default_timezone_set('Asia/Tokyo');
	$today = new DateTime();
	print('現在は' . $today->format('G時 i分 s秒') . ' です');

?>
 </pre>
