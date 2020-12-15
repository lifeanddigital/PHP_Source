<!-- http://localhost/php/php_Source/P00500S_if.php -->

<!DOCTYPE html>
<html lang="ja">
<head><title>PHPソース</title></head>
<body>
  <?php $i = 1 ; ?>
  <?php if ( $i == 100 ): ?>
	i は、１　
    <?php else:  ?>
	i は、100ではない
    <?php endif ?>
    <?php echo '<br>' ?>
  <?php $i = 1 ; ?>
  <?php if ( 0 ): ?>
	i は、１　
    <?php else:  ?>
	i は、100ではない
    <?php endif ?>
</body>
</html>
