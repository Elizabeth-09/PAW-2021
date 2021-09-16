<?php
include '../../../models/conexion.php';
include '../../../controllers/prosesos.php';
include '../../../models/procesos.php';

$idusuario=$_GET['idusuario'];
$usuario = $_GET['usuario'];

$usuario = CRUD("DELETE FROM usuarios WHERE idusuario='$idusuario'", "d");

?>
<?php if($usuario): ?>
    <script>
        alertify.success("Usuario Eliminado...");
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else: ?>
    <script>
        alertify.error("Error al eliminar usuario...");
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif ?>
