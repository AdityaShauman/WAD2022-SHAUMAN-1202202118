<?php

$connect = mysqli_connect("localhost".":"."3306", "root", "", "showroom_shauman_table");

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