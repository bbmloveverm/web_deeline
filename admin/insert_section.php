<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
   include 'connect.php';
    /*$serverName = 'localhost';
    $connectionInfo = array('Database' => 'MDB_INTRANET', 'UID' => 'sa', 'PWD' => 'it11155%');
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }*/

    $section = $_POST['name_sec'];
    echo $section;

    $sql = 'INSERT INTO tb_section (section) VALUES (?)';
    $params = array($section);

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo 'Record add successfully';
    }
