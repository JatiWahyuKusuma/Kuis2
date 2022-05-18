<!DOCTYPE html>
    <html>
    <head>
        <title>Kuis2 Desain Web </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="header">
                <div style="float: left;">TOKO BUKU SINAR JAYA</div>
                <div class ="Menu" style="float:right">
                    <a href="home.php">CRUD</a>
                    <a href="ProsesLogout.php">Logout</a>
                </div>  
            </div>
            <div class="middle">
                <hr><br>
                <h3>SELAMAT DATANG ADMINISTRATOR</h3>
                <br>
                <form align="right" method="post" action="insertForm.html">
                    <button type="submit"> Tambah Data </button>
                </form>
                <table>
                    <tr>
                        <th> Kode Buku </th>
                        <th> Judul </th>
                        <th> Pengarang </th>
                        <th> Aksi </th>
                    <tr>
                    <?php   
                        include "myconnection.php";

                        $query ="SELECT * FROM buku";
                        $result =mysqli_query($connect, $query);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td> <?php echo $row["id_buku"]?></td>
                        <td> <?php echo $row["judul"]?></td>
                        <td> <?php echo $row["pengarang"]?></td>
                        <td>
                            <a href="detail.php?id_buku=<?php echo $row["id_buku"];?>">
                            <button>Detail</button> </a>
                            <a href="editForm.php?id_buku=<?php echo $row["id_buku"];?>">
                            <button>Edit</button> </a>
                            <a href="hapus.php?id_buku=<?php echo $row["id_buku"];?>">
                            <button>Hapus</button> </a>
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
            </div>
            <div class="footer">
                <p href="copyright @ belajar CSS">copyright@ Jati Wahyu</p>
        </div>
    </body>
</html>