<?php
2
	$link = mysql_connect('chinhmysql01.mysql.database.azure.com', 'mysqladmin@chinhmysql01', 'abc@12345');
3
	if (!$link) {
4
	die('Could not connect: ' . mysql_error());
5
	}
6
	echo 'Connected successfully';
7
	mysql_close($link);
8
	?>