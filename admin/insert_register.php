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

    $re_name = $_REQUEST['re_username'];
    $re_pass = $_REQUEST['re_pass'];

    $sql = 'INSERT INTO tb_member (user_id,password) VALUES (?,?)';
    $params = array($re_name, $re_pass);

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        //echo 'Record add successfully';
        echo "<script> window.location.href='login_admin.php?page=login_admin'</script>";
    }
