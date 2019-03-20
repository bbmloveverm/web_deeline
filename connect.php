<?php

	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "localhost";
   $userName = 'sa';
   $userPassword = 'it11155%';
   $dbName = "MDB_INTRANET";

   $conn = new PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);

	if($conn)
	{
		echo "Database Connected.";
	}
	else
	{
		echo "Database Connect Failed.";
	}

	$conn = null;
?>