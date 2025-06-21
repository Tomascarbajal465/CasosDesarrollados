<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Votación</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <h3 id="centrado">VOTACION DE CANDIDATAS</h3>
        <h2 id="titulo">REYNA DE PRIMAVERA 2024</h2>
    </header>

    <section>
        <?php 
            session_start();

            // Inicializa variables si no existen aún
            if (!isset($_SESSION['candidata1'])) $_SESSION['candidata1'] = 0;
            if (!isset($_SESSION['candidata2'])) $_SESSION['candidata2'] = 0;
            if (!isset($_SESSION['candidata3'])) $_SESSION['candidata3'] = 0;
            if (!isset($_SESSION['candidata4'])) $_SESSION['candidata4'] = 0;

            $_SESSION['total'] = $_SESSION['candidata1'] + $_SESSION['candidata2'] + $_SESSION['candidata3'] + $_SESSION['candidata4'];
            $total = $_SESSION['total'];

            // Evitar división por cero
            $pcandidata1 = $total > 0 ? ($_SESSION['candidata1'] * 100) / $total : 0;
            $pcandidata2 = $total > 0 ? ($_SESSION['candidata2'] * 100) / $total : 0;
            $pcandidata3 = $total > 0 ? ($_SESSION['candidata3'] * 100) / $total : 0;
            $pcandidata4 = $total > 0 ? ($_SESSION['candidata4'] * 100) / $total : 0;
        ?>

        <form name="frmVotacion" method="POST" action="conteo.php">
            <table borde="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="centrado"><img src="Imagenes_vota/1.JPG" alt="Marisol"></td>
                    <td id="centrado"><img src="Imagenes_vota/candidata2.JPG" alt="Cesia"></td>
                </tr>
                <tr>
                    <td id="centrado">
                        Marisol Romero 19 años<br>
                        <input type="submit" value="Votar" name="btnBoton1"><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata1']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata1, 2); ?>%
                    </td>
                    <td id="centrado">
                        Cesia Alfaro 22 años<br>
                        <input type="submit" value="Votar" name="btnBoton2"><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata2']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata2, 2); ?>%
                    </td>
                </tr>
                <tr>
                    <td id="centrado"><img src="Imagenes_vota/candidata3.JPG" alt="Micaela"></td>
                    <td id="centrado"><img src="Imagenes_vota/candidata4.JPG" alt="Karla"></td>
                </tr>
                <tr>
                    <td id="centrado">
                        Micaela Borja 20 años<br>
                        <input type="submit" value="Votar" name="btnBoton3"><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata3']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata3, 2); ?>%
                    </td>
                    <td id="centrado">
                        Karla Guerrero 21 años<br>
                        <input type="submit" value="Votar" name="btnBoton4"><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata4']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata4, 2); ?>%
                    </td>
                </tr>
            </table>
        </form>

        <?php
            $arreglo = array(
                'Marisol Romero' => $_SESSION['candidata1'],
                'Cesia Alfaro' => $_SESSION['candidata2'],
                'Micaela Borja' => $_SESSION['candidata3'],
                'Karla Guerrero' => $_SESSION['candidata4']
            );

            arsort($arreglo);
$candidata = array_key_first($arreglo);
$puntaje = $arreglo[$candidata];
        ?>

        <table borde="1" width="600" cellspacing="10" cellpadding="1">
            <tr>
                <td id="ganadora">TOTAL DE VOTANTES: <?php echo $_SESSION['total']; ?></td>
            </tr>
            <tr>
                <td id="ganadora">GANADORA: <?php echo $candidata; ?> (<?php echo $puntaje; ?> votos)</td>
            </tr>
        </table>
    </section>

    <footer>
        <h5 id="centrado">Todos los derechos reservados @2024 - Diseñado por Tomas Carbajal Velazquez</h5>
    </footer>
</body>
</html>
