<?php
    require "../config/connector.php";
    $id = $_GET["id"];

    function removing($id) {
        global $conn;
        $query = "DELETE FROM modul3 WHERE id_mobil=$id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
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