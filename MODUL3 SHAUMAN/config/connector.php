<?php

$connect = mysqli_connect("127.0.0.1:8080", "root", "", "showroom_shauman_table");

    function querydata($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
    }
?>