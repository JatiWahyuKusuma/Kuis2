<?php

    include "myconnection.php";

    $idbuku = $_POST["id_buku"];
    $judul = $_POST["Judul"];
    $Pengarang = $_POST["Pengarang"];
    
    $query = "INSERT INTO buku (id_buku,judul,pengarang)
                VALUES ('$idbuku', '$judul', '$Pengarang')";
    
    if(mysqli_query($connect, $query)){
        echo "Data Baru berhasil ditambahkan ";
    }
    else{
        echo "Data baru gagal ditambahkan<br> ". mysqli_error($connect);
    }
    
    mysqli_close($connect);