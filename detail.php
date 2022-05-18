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
                    <a href="home.php">Home</a>
                    <a href="login.php">Login</a>
                </div>  
            </div>
            <div class="middle">
                <table>
                <h2> Detail Buku </h2>
                <?php   
                    include "myconnection.php";
                    $id_buku = $_GET['id'];

                    $query ="SELECT * FROM buku WHERE id_buku ='$id_buku'";
                    $result =mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Kode Buku: </td>
                    <td><?php echo $row["id_buku"]?></td>
                </tr>
                <tr>
                    <td>Judul Buku:</td>
                    <td><?php echo $row["judul"]?></td>
                </tr>
                <tr>
                    <td>Pengarang:</td>
                    <td><?php echo $row["pengarang"]?></td>
                </tr>
                <tr>
                    <td>Penerbit:</td>
                    <td><?php echo $row["penerbit"]?></td>
                </tr>
                <tr>
                    <td>Deskripsi:</td>
                    <td><?php echo $row["deskripsi"]?></td>
                </tr>
                <?php
                        }   
                ?>
                </table>

                <form method="post" action="home.php">
                    <button type = "submit"> Kembali ke Home </button>
                </form>
            </div>
            <div class="footer">
                <p href="copyright @ belajar CSS">copyright@ Jati Wahyu</p>
        </div>
    </body>
</html>