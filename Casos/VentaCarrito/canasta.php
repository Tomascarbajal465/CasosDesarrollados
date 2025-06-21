<?php
error_reporting(E_ALL); // Cambia a 0 en producción
session_start();
include('capturaDatos.php');
include('asignaciones.php');

// Verifica que se haya enviado el formulario
if(isset($_POST['btnComprar'])) {
    $productos = 'productos';
    $codigo = getProducto();
    $cantidad = getCantidad();

    if(!empty($codigo)) {
        // Inicializa el carrito si no existe
        if(!isset($_SESSION[$productos])) {
            $_SESSION[$productos] = [];
        }

        // Agrega o actualiza el producto
        if(isset($_SESSION[$productos][$codigo])) {
            $_SESSION[$productos][$codigo] += $cantidad;
        } else {
            $_SESSION[$productos][$codigo] = $cantidad;
        }
    }
}

$tSubtotal = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Carrito de Compras</title>
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
  <header>
    <?php include('encabezado.php'); ?>
  </header>

  <section>
    <table border="1" width="550" cellspacing="10" cellpadding="0">
      <tr>
        <td>
          <img src="Imagenes_tienda/Carrito.png" width="80" height="80" />
        </td>
      </tr>
      <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
      </tr>

      <?php
      if(!empty($_SESSION['productos'])) {
          foreach($_SESSION['productos'] as $cod => $cant) {
              $precio = asignaPrecio($cod);
              $subtotal = $cant * $precio;
              $tSubtotal += $subtotal;
              ?>
              <tr>
                <td id="centrado"><?php echo $cod; ?></td>
                <td><?php echo muestraDescripcion($cod); ?></td>
                <td id="derecha"><?php echo '$' . number_format($precio, 2); ?></td>
                <td id="centrado"><?php echo $cant; ?></td>
                <td id="derecha"><?php echo '$' . number_format($subtotal, 2); ?></td>
              </tr>
              <?php
          }
      } else {
          echo '<tr><td colspan="5" id="centrado">No hay productos en el carrito</td></tr>';
      }
      ?>

      <!-- Resto de la tabla igual -->
    </table>
  </section>

  <footer>
    <?php include('pie.php'); ?>
  </footer>
</body>
</html>