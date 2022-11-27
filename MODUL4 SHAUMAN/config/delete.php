<?php
    require "../config/connector.php";
    $id = $_GET["id"];

    function removing($id) {
        global $connect;
        $query = "DELETE FROM showroom_shauman_table WHERE id_mobil=$id";
        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    }

    if ( removing($id) > 0 ) {
        echo "
            <script>
                alert('Data terhapus');
                    document.location.href = '../pages/ListCar-Shauman.php';
                </script>
            ";
    } else {
        echo "
            <script>
                    alert('Data tidak terhapus');
                    document.location.href = '../pages/ListCar-Shauman.php';
                </script>
            ";
    }
?>