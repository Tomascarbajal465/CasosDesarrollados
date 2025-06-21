<?php
function getProducto(){
    return isset($_POST['selProducto']) ? $_POST['selProducto'] : '';
}

function getCantidad(){
    $cantidad = isset($_POST['txtCantidad']) ? $_POST['txtCantidad'] : 0;
    return is_numeric($cantidad) && $cantidad > 0 ? (int)$cantidad : 1;
}
?>