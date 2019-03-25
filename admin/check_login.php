<?php

ini_set('display_errors', 1);
error_reporting(~0);
include 'connect.php';

$user_id = $_REQUEST['ch_user_id'];
$password = $_REQUEST['ch_password'];

$stmt = 'SELECT * FROM tb_member';
$query = sqlsrv_query($conn, $stmt);
while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    echo $result = ['user_id'];
}
sqlsrv_close($conn);
