<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="estilo_principal.css">
</head>
<body>
    <header>
        <?php
        session_start();
        require 'encabezado.php';
        echo "<p id='centrado'>";
        if (isset($_SESSION['admin'])) {
            echo 'Bienvenido: ' . $_SESSION['admin'] . '<br>';
            echo "|<a href='cerrar.php'> Cerrar Sesión </a>|";
        } else {
            header("Location: login.php"); // Redirige si no hay sesión
            exit();
        }
        echo '</p>';
        ?>
    </header>

    <section>
    <table style="border: 3px solid black;" width="550" cellspacing="5" class="menu-principal">
    


            <tr>
                <td>
                    <a href="#">
                        <img src="imagenes_login/clientes.png" width="150" height="150" alt="Registro de clientes" />
                    </a>
                </td>
                <td><a href="#">Registro de clientes</a></td>
            </tr>
            <tr>
                <td>
                    <a href="#">
                        <img src="imagenes_login/Listado.png" width="140" height="140" alt="Listado de clientes" />
                    </a>
                </td>
                <td><a href="#">Listado de Clientes</a></td>
            </tr>
            <tr>
                <td>
                    <a href="cerrar.php">
                        <img src="imagenes_login/Salir.jpg" width="150" height="150" alt="Salir" />
                    </a>
                </td>
                <td><a href="cerrar.php">Salir</a></td>
            </tr>
        </table>
    </section>

    <footer>
        <?php require 'pie.php'; ?>
    </footer>
</body>
</html>
