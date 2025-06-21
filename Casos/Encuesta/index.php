<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta1.php">
        <table style="border: 1px solid black;" 
        width="700" cellspacing="10" cellpadding="0">
            <tr>
                <td>Nombres y Apellidos</td>
                <td><input type="text" name="txtNombres"
                            size="50"/></td>
            </tr>
             <tr>
                <td>Número DNI</td>
                <td><input type="text" name="txtDNI"
                            size="30" maxlength="10" /></td>
            </tr>
            <tr>
                <td>Empezar con la encuesta >>> </td>
                <td><input type="submit" value="Encuesta" 
                style="background-color:rgb(195, 9, 9); color: white;" /></td>
              
            </tr>
             </table>
        </form>        
    </section>
    <footer>
        <?php include 'pie.php';?>
    </footer>
    
</body>
</html>