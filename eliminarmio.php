<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $id = $_GET['id'];
    $query_delete = mysqli_query($conexion, "DELETE FROM nofactura WHERE totalfactura = $id");
    mysqli_close($conexion);
    header("location: ventas.php");
}
?>