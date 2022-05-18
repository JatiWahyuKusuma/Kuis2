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
                    <a href="home.html">Home</a>
                    <a href="login.php">Login</a>
                </div>  
            </div>
            <div class="middle">
                <hr><br>
                <h3>SELAMAT DATANG DI TOKO BUKU SINAR JAYA</h3>
                <br>
                <form action="cari.php" method ="get" align="right">
                    Cari data Buku Berdasarkan judul :
                    <input type ="text" name="caribuku">
                    <input type ="submit" value="cari">
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
                            <a href="detail.php?id=<?php echo $row["id_buku"];?>">
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
            </div>
            <div class="footer">
                <p href="copyright @ belajar CSS">copyright@ Jati Wahyu</p>
        </div>
    </body>
</html>