<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>
</head>

<body>
<div class="clock">
	<?php
		$time1 = time();
		$time2 = strtotime("2019-1-4");
		$sub = ceil(($time2 - $time1)/3600);

	echo "距离放假还有$sub" . "小时！" . '<br>';
	?>
</div>
</body>
</html>