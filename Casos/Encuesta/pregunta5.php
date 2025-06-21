<?php 
    session_start();
    $_SESSION['Pregunta4']=$_POST['preg4'];
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
       <?php include 'encabezado.php' ?> 
    </header>
    <section>
        <form action="pregunta5.php" method="POST" >
        <table style="border: 1px solid black;" width="700" cellspacing="10" cellpadding="0">
            <tr>
            <th colspan="2">¿Usted conoce las medidas que implementa la policía
                de Tlapa de Comonfort para disminuir la delicuncia? </th>
            </tr>
            <tr>
                <td></td>
                <td>
              <input type="radio" name="preg5"
               value="SI" />SI<br/>
              <input type="radio" name="preg5"
               value="NO" />NO<br/>     
         </td>
            </tr>
            <tr>
                <td></td> 
                <td>

                <input type="submit" value="< Anterior" 
       onclick="this.form.action='Pregunta4.php'" 
       style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
       <input type="submit" value=" Siguiente >" 
       onclick="this.form.action='resumen.php'" 
       style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                </td>
            </tr>
         </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php'; ?>
    </footer>
    
</body>
</html>