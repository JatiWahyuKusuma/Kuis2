<?php
    include "myconnection.php";

    $id_buku=$_GET["myid"];
    $judul=$_GET["judul"];
    $Pengarang=$_GET["pengarang"];

    $query = "UPDATE buku SET judul='$judul', pengarang='$Pengarang' WHERE id_buku ='$id_buku'";

    if(mysqli_query($connect, $query)){
        header('Location:admin.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>
