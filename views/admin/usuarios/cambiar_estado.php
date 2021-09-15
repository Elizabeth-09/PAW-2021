<?php
include '../../../models/conexion.php';
include '../../../controllers/prosesos.php';
include '../../../models/procesos.php';

$idusuario=$_GET['idusuario'];
$estado = $_GET['estado'];

$updEstado = CRUD("UPDATE usuarios SET estado='$estado' WHERE idusuario='$idusuario'", "u");

?>
<?php if($updEstado): ?>
    <script>
        alertify.success("Estado actualizado...");
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else: ?>
    <script>
        alertify.error("Error al actualizar estado...");
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif ?>
