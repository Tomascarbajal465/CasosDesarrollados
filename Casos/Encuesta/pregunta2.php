<?php 
    session_start();
    $_SESSION['Pregunta1']=$_POST['preg1'];
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
        <form action="pregunta2.php" method="POST" >
        <table style="border: 1px solid black;" width="700" cellspacing="10" cellpadding="0">
            <tr>
            <th colspan="2">¿Qué tipo de delito cree usted que es el
                             más común en su colonia? </th>
            </tr>
            <tr>
                <td></td>
                <td>
              <input type="radio" name="preg2"
              value="Hurto" />Hurto<br/>
              <input type="radio" name="preg2"
              value="Robo por descuido" />Robo por descuido<br/>
              <input type="radio" name="preg2"
              value="Robo de Vehículo" />Robo de vehículo<br/>
              <input type="radio" name="preg2"
              value="Asalto a Mano Armada" />Asalto a mano armada<br/>
              <input type="radio" name="preg2"
              value="Estafa" />Estafa<br/>
              <input type="radio" name="preg2"
              value="Asesinato" />Asesinato<br/>      
         </td>
            </tr>
            <tr>
                <td></td> 
                <td>
                   
                <input type="submit" value="< Anterior" 
       onclick="this.form.action='Pregunta1.php'" 
       style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
       <input type="submit" value=" Siguiente >" 
       onclick="this.form.action='Pregunta3.php'" 
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