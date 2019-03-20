<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    include 'connect.php';
    /*$serverName = 'localhost';
    $connectionInfo = array('Database' => 'MDB_INTRANET', 'UID' => 'sa', 'PWD' => 'it11155%',
    'MultipleActiveResultSets' => true, 'CharacterSet' => 'UTF-8', );
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }*/

    $now_en = $_REQUEST['now_en'];
    $now_th = $_REQUEST['now_th'];
    $emplo_id = $_REQUEST['emplo_id'];
    $name_eng = $_REQUEST['name_eng'];
    $lastname_eng = $_REQUEST['lastname_eng'];
    $name_th = $_REQUEST['name_th'];
    $lastname_th = $_REQUEST['lastname_th'];
    $position = $_REQUEST['position'];
    $email = $_REQUEST['email'];
    $section = $_REQUEST['section'];
    $department = $_REQUEST['department'];

    $sql = 'INSERT INTO tb_employee (employee_id,name_eng,lastname_eng,name_th,lastname_th
    ,position,section,department,email) VALUES (?,?,?,?,?,?,?,?,?)';
    $params = array($emplo_id, $name_eng, $lastname_eng, $name_th, $lastname_th, $position,
        $section, $department, $email, );

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo 'Record add successfully';
    }
