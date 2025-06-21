<?php 
    session_start();
    $_SESSION['Pregunta3']=$_POST['preg3'];
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
        <form action="pregunta4.php" method="POST" >
        <table style="border: 1px solid black;" width="700" cellspacing="10" cellpadding="0">
            <tr>
            <th colspan="2">¿Cuál cree usted que deben ser las medidas
                que las autoridades deben aplicar para combatir
                estas incidencias ? </th>
            </tr>
            <tr>
                <td></td>
                <td>
              <input type="radio" name="preg4"
              value="Mayor número de policias" 
              />Mayor número de policias<br/>
              <input type="radio" name="preg4"
              value="Mayor Profecionalismo 
              por parte de las autoridades" 
              />Mayor profecionalismo 
              por parte de las autoridades<br/>
              <input type="radio" name="preg4"
              value="Aumentar las penas y que sean ejecutadas" 
              />Aumentar las penas y que sean ejecutadas <br/>
              <input type="radio" name="preg4"
              value="Nada" />Nada<br/>      
         </td>
            </tr>
            <tr>
                <td></td> 
                <td>
                <input type="submit" value="< Anterior" 
       onclick="this.form.action='Pregunta3.php'" 
       style="background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
       <input type="submit" value=" Siguiente >" 
       onclick="this.form.action='Pregunta5.php'" 
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