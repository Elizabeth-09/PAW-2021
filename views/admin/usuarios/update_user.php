<?php
include '../../../models/conexion.php';
include '../../../controllers/prosesos.php';
include '../../../models/procesos.php';

$idusuario = $_POST['idusuario'];
$user = $_POST['user'];
$tipo = $_POST['tipo_user'];
?>
<?php if (CRUD("UPDATE usuarios SET usuario='$user', tipo='$tipo' WHERE idusuario='$idusuario'","u")) : ?>
    <script>
        alertify.success("Usuario actualizado...");
        $('#UserUpd').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else : ?>
    <script>
        alertify.error("Error al actualizar usuario...");
        $('#UserUpd').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif ?>