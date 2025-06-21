<?php
error_reporting(E_ALL);  // Mostrar todos los errores para ayudar en la depuración
session_start();

// Funciones para obtener datos de los campos, con verificación
function getDescripcion() {
    return isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : '';  // Retorna vacío si no está definido
}

function getStock() {
    return isset($_POST['txtStock']) ? $_POST['txtStock'] : '';  // Retorna vacío si no está definido
}

function getPrecio() {
    return isset($_POST['txtPrecio']) ? $_POST['txtPrecio'] : '';  // Retorna vacío si no está definido
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>

    <section>
        <form name="frmPrincipal" method="POST" action="agregarProducto.php">
            <table border="1" width="600" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Descripción del Producto</td>
                    <td><input type="text" name="txtDescripcion" value="<?php echo htmlspecialchars(getDescripcion()); ?>" size="60"/></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td><input type="text" name="txtStock" value="<?php echo htmlspecialchars(getStock()); ?>" /></td>
                </tr>
                <tr>
                    <td>Precio de producto</td>
                    <td><input type="text" name="txtPrecio" value="<?php echo htmlspecialchars(getPrecio()); ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnListado" onclick="this.form.action = 'listadoProductos.php'" value="Ver listado de productos" /></td>
                    <td><input type="submit" name="btnRegistrar" onclick="this.form.action = 'agregarProducto.php'" value="Registrar producto" /></td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>
</html>

