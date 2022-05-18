<!DOCTYPE html>
<html>
    <head>
        <title>Login Page </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="container">
            <div class="header">
                <div style="float: left;">TOKO BUKU SINAR JAYA</div>
                </div>  
            </div>
            <div class="middle">
                <hr><br>
                <?php
                    if(isset($_GET["error"])){
                        $error = $_GET["error"];
                    }
                    else{
                        $error=" ";
                    }

                    $message=" ";
                    if($error=="gagal"){
                        $message = "Gagal login, silahkan coba kembali";
                    }
                ?>
                <p style="color:red"><?php echo $message;?></p>
                <form action = "prosesLogin.php" method="post">
                    <table style="width : 50%; margin: auto">
                    <tr>
                        <td>&nbsp;</td>
                        <td>MOHON LOGIN TERLEBIH DAHULU</td>
                    </tr>
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" size="20"></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" size="20"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="login" value="Login"></td>
                        </tr>
                    </table>
                </form>         
            </div>
            <div class="footer">
                <p href="copyright @ belajar CSS">copyright@ Jati Wahyu</p>
        </div>
    
</body>
<html>