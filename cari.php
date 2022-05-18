<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1> TABEL BUKU<h1>
        <table>
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> Alamat </th>
                <th> Aksi </th>
            <tr>
            <?php   
                $buku = $_GET["caribuku"];
                include "myconnection.php";

                $query = "SELECT * FROM buku WHERE judul LIKE '%$buku%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)) {     
            ?>
            <tr>
                <td> <?php echo $row["id_buku"]?></td>
                <td> <?php echo $row["judul"]?></td>
                <td> <?php echo $row["pengarang"]?></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row["id_buku"];?>">
                    <button>Detail</button> </a>
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
        <a href="home.php">Kembali ke Home </a>
    </form>
    </body>
</html>