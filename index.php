<?php
2
	$link = mysql_connect('vinpearl-mysqldbserver.mysql.database.azure.com', 'mysqldbuser@vinpearl-mysqldbserver', '1q2w3e4r!@#');
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