<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL</title>
</head>
<body>
    <?php
        include "myconnection.php";
        $id_buku =$_GET["id_buku"];
        $query = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
        $result=mysqli_query($connect,$query);
    ?>
    <form action="editProses.php" method="get">
        <table>
            <?php
                while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> Id Buku : </td>
                <td><input type="text" name="myid" value="<?php echo $row['id_buku'];?>"readonly></td>
            </tr>
            <tr>
                <td> Judul : </td>
                <td><input type="text" name="judul" value="<?php echo $row['judul'];?>"></td>
            </tr>
            <tr>
                <td> Pengarang : </td>
                <td>
                    <textarea name="pengarang" rows="5" cols="20"><?php echo $row['pengarang'];?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="simpan"></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </form>
</body>
</html>