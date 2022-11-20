<?php

    require('../config/connector.php');
    
    function adding($inputdata){
        global $connect;
        $car = $inputdata['car'];
        $pemilik = $inputdata['pemilik'];
        $merk = $inputdata['merk'];
        $tanggal = $inputdata['tanggal'];
        $deskripsi = $inputdata_POST['deskripsi']; 
        $fotomobil = upfoto();
        
        if(!$fotomobil){return false;}
    
        $statusbayar = $inputdata['statusbayar'];
        
        $query = "INSERT INTO modul3 VALUES('', '$car','$pemilik','$merk','$tanggal','$deskripsi','$fotomobil','$statusbayar')";
    
        mysqli_query($connect,$query);

        return mysqli_affected_rows($connect);
    }



    function upfoto(){
        $fotofile = $_FILES['foto']['fotofile'];
        $fotosize = $_FILES['foto']['fotosize'];
        $fotoerror = $_FILES['foto']['fotoerror'];
        $fototmpname = $_FILES['foto']['fototmpname'];

        if($fotoerror === 4) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu');
                </script";
            return false;
        }
        $validextension = ['jpg', 'jpeg', 'png'];
        $picextension = explode('.', $fotofile);
        $picextension = strtolower(end($picextension));
        if( !in_array($picextension, $validextension) ) {
            echo "<script>
                    alert('Not a picture');
                </script";
            return false;
        }
        if( $fotosize > 1000000 ) {
            echo "<script>
                    alert('Picture size too big');
                </script";
            return false;
        }
        move_uploaded_file("$fototmpname", "../asset/images/" . $fotofile);
        return $fotofile;
    }


?>