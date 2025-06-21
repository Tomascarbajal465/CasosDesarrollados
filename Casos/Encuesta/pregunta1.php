<?php 
  session_start();
  $_SESSION['nombres']=$_POST['txtNombres'];
  $_SESSION['dni']=$_POST['txtDNI'];
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
        <form action="pregunta1.php" method="POST" >
         <table style="border: 1px solid black;" width="700" cellspacing="10" cellpadding="0">
            <tr>
            <th colspan="2">¿Cómo siente usted el nivel
                de seguridad en la ciudad de Tlapa GRO.?
            </th>
            </tr>
            <tr>
                <td></td>
                <td>
              <input type="radio" name="preg1"
              value="Muy inseguro" />Muy inseguro<br/>
              <input type="radio" name="preg1"
              value="Algo inseguro" />Algo inseguro<br/>
              <input type="radio" name="preg1"
              value="Algo seguro" />Algo seguro<br/>
              <input type="radio" name="preg1"
              value="Muy seguro" />Muy seguro<br/>      
                </td>
            </tr>
            <tr>
                <td></td> 
                <td>
                   
                   <input type="submit" value="< Anterior" 
       onclick="this.form.action='index.php'" 
       style="background-color: #f44336; color: white; padding: 10px 20px; border: 
       none; border-radius: 5px; cursor: pointer;">
       <input type="submit" value=" Siguiente >" 
       onclick="this.form.action='Pregunta2.php'" 
       style="background-color: #f44336; color: white; padding: 10px 20px; border: 
       none; border-radius: 5px; cursor: pointer;">

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