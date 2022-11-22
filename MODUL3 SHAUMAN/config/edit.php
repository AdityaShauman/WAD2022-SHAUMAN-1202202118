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
        $query = "UPDATE modul3 SET 
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
?>