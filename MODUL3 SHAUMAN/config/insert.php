<?php

    require('../config/connector.php');
    
    function adding($inputdata){
        global $connect;
        $car = $inputdata['car'];
        $pemilik = $inputdata['pemilik'];
        $merk = $inputdata['merk'];
        $tanggal = $inputdata['tanggal'];
        $deskripsi = $inputdata['deskripsi']; 
        $fotomobil = upfoto();
        
        // if(!$fotomobil){return false;}
    
        $statusbayar = $inputdata['statusbayar'];
        
        $query = "INSERT INTO showroom_shauman_table VALUES('', '$car','$pemilik','$merk','$tanggal','$deskripsi','$fotomobil','$statusbayar')";
    
        mysqli_query($connect,$query);

        return mysqli_affected_rows($connect);
    }



    function upfoto(){
        $fotofile = $_FILES['fotomobil']['name'];
        $fototmpname = $_FILES['fotomobil']['tmp_name'];

        move_uploaded_file("$fototmpname", "../asset/images/" . $fotofile);
        return $fotofile;
    }


?>