<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo_index.css">
</head>
<body>
    <section>
<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['admin'])){
?>
<form action="login.php" method="POST" name="frmLogin"> 
<table style="border: 3px groove black;">


    <tr>
        <td colspan="3">
            <h1>Acceso</h1>
            <p id="titulo"> </p>
        </td>
    </tr>
    <tr>
        <td id="derecha" width="150">Usuario</td>
        <td><input type="text" name="txtUsuario" value="" /></td>
        <td rowspan="4">
            <img src="imagenes_login/ImagenLOgin.png" width="200" height="200" />
        </td>
    </tr>
    <tr>
        <td id="derecha">Clave</td>
        <td>
            <input type="password" name="txtClave" maxlength="4" />
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="checkbox" name="" value="ON"> Recordar la clave
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            
            <input type="submit" name="btnLogin" value="🔓 LOGIN " style="background-color:rgb(233, 44, 44); 
            color: white; border: none; padding: 10px 20px; border-radius: 5px;">




        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <?php
            } else {
                header('location:principal.php');
            }
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </td>
    </tr>
</table>
</form>
 </section>    
</body>
</html>

