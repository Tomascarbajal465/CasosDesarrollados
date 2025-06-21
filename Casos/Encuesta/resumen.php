<?php
    session_start();
    $_SESSION['Pregunta5']=$_POST['preg5'];
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
       <h3>INFORME DE ENCUESTA</h3>
    </header>
    <?php

       $nombres = isset($_SESSION['nombres']) ? $_SESSION['nombres'] : 'No respondida';
       $dni = isset($_SESSION['dni']) ? $_SESSION['dni'] : 'No respondida';
       $pregunta1 = isset($_SESSION['Pregunta1']) ? $_SESSION['Pregunta1'] : 'No respondida';
       $pregunta2 = isset($_SESSION['Pregunta2']) ? $_SESSION['Pregunta2'] : 'No respondida';
       $pregunta3 = isset($_SESSION['Pregunta3']) ? $_SESSION['Pregunta3'] : 'No respondida';
       $pregunta4 = isset($_SESSION['Pregunta4']) ? $_SESSION['Pregunta4'] : 'No respondida';
       $pregunta5 = isset($_SESSION['Pregunta5']) ? $_SESSION['Pregunta5'] : 'No respondida';

    ?>
    <section>
        <form action="resumen.php" method="POST">
            <table style="border: 1px solid black;" 
            width="700" cellspacing="10" cellpadding="0">
            <tr>
                <td>Nombre del ciudadano</td>
                <td><?php echo $nombres; ?> </td>
            </tr>
            <tr>
                <td>DNI</td>
                <td><?php echo $dni; ?> </td>
            </tr>
            <tr>
                <td>¿Cómo se siente a nivel 
            de seguridad en la ciudad de Tlapa GRO.?</td>
            <td><?php echo $pregunta1; ?></td>
            </tr>
            <tr>
                <td>¿Qué tipo de delito cree usted que es el
                más común en su colonia?</td>
                <td><?php echo $pregunta2; ?> </td>
            </tr>
            <tr>
                <td>¿Generalmente que día cree usted 
                que ocurre más incedencias ? </td>
                <td><?php echo $pregunta3; ?> </td>
            </tr>
            <tr>
                <td>¿Cuál cree usted que deben ser las medidas
                que las autoridades deben aplicar para combatir
                estas incidencias ? </td>
                <td><?php echo $pregunta4; ?> </td>
            </tr>
            <tr>
                <td>¿Usted conoce las medidas que implementa la policía
                de Tlapa de Comonfort para disminuir la delicuncia? </td>
                <td><?php echo $pregunta5; ?> </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="< Anterior" 
       onclick="this.form.action='Pregunta5.php'" 
       style="background-color: #f44336; 
       color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
       <input type="submit" value=" Siguiente >" 
       onclick="this.form.action='index.php'" 
       style="background-color: #f44336;
        color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                </td>
            </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php';?>
    </footer>
</body>
</html>