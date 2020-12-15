<!-- http://localhost/php/PHP_Source/File_get/File_open_sql.php -->
<!-- https://program-basic.com/php/PHP_Source/File_get/File_open_sql.php -->

<?php
  $url = 'http://localhost/php/PHP_Source/File_get/Excec_sql.php';

  // POSTデータ
  $data =	array ( 
	'hostname' => "localhost", 
	'database' => "waverlife_eng001", 
	'sql' => "SELECT * FROM  商品マスタ WHERE 商品番号= 'BLDH500' ; " 	);
  $context = array(
	'http' => array(
	'method' => 'POST',
	'header' => implode("\r\n", array('Content-Type:application/x-www-form-urlencoded' ) ),
	'content' => http_build_query($data) ) ) ;
  $html = file_get_contents( $url, false, stream_context_create( $context ) ) ;
  echo  $html ;
?>