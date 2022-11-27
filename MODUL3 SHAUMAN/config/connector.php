<?php

$connect = mysqli_connect("localhost".":"."3306", "root", "", "modul3");

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