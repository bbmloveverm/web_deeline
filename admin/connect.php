<?php

    ini_set('display_errors', 1);
    error_reporting(~0);

    $serverName = 'localhost';
    $connectionInfo = array('Database' => 'MDB_INTRANET', 'UID' => 'sa', 'PWD' => 'it11155%',
    'MultipleActiveResultSets' => true, 'CharacterSet' => 'UTF-8', );
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }
