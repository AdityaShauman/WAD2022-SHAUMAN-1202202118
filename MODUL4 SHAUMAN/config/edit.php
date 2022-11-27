<?php
    require('../config/connector.php');
    function editing($inputdata){
        global $connect;
        $carid = $inputdata['id_mobil'];
        $car = $inputdata['car'];
        $pemilik = $inputdata['owner'];
        $merk = $inputdata['merk'];
        $tanggal = $inputdata['date'];
        $deskripsi = $inputdata['deskripsi']; 
        $fotomobil = upfoto();
    
        $statusbayar = $inputdata['statusbayar'];
        $query = "UPDATE showroom_shauman_table SET 
        id_mobil='',
        nama_mobil='$car', 
        pemilik_mobil='$pemilik', 
        merk_mobil='$merk', 
        tanggal_beli='$tanggal', 
        deskripsi='$deskripsi',
        foto_mobil='$fotomobil', 
        status_pembayaran='$statusbayar'
    WHERE id_mobil='$carid'
    ";

mysqli_query($connect, $query);
return mysqli_affected_rows($connect);
}

function upfoto(){
    $fotofile = $_FILES['fotofile']['name'];
    $fototmpname = $_FILES['fotofile']['tmp_name'];

    move_uploaded_file("$fototmpname", "../asset/images/" . $fotofile);
    return $fotofile;
}

function ubahUser($data)
{
    global $connect_user;
    $id = htmlspecialchars($data["id"]);
    $namauser = htmlspecialchars($data["namauser"]);
    $nomorhp = htmlspecialchars($data["nomorhp"]);
    $password = htmlspecialchars($data["password"]);

    $query = "UPDATE users SET 
                    nama='$namauser', 
                    no_hp='$nomorhp', 
                    password='$password' 
                WHERE id='$id'
                ";

    mysqli_query($connect_user, $query);

    return mysqli_affected_rows($connect_user);
}

?>

