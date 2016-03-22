<?php
global $db;
$db = new PDO(
			"mysql:host=".$db_connect_cfg['host'].";dbname=".$db_connect_cfg['db_name'].";",
			$db_connect_cfg['uid'], $db_connect_cfg['pwd'],
			array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" )
			);

