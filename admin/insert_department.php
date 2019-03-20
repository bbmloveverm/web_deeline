<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    include 'connect.php';
   /* $serverName = 'localhost';
    $connectionInfo = array('Database' => 'MDB_INTRANET', 'UID' => 'sa', 'PWD' => 'it11155%');
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }*/

    $depart = $_POST['department'];
   // echo $depart;

    $sql = 'INSERT INTO tb_department (department) VALUES (?)';
    $params = array($depart);

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo 'Record add successfully';
    }
