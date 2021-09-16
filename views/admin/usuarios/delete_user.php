<?php
include '../../../models/conexion.php';
include '../../../controllers/prosesos.php';
include '../../../models/procesos.php';

$idusuario = $_POST['idusuario'];
$user = $_POST['user'];
?>
<?php if (CRUD("DELETE usuarios SET usuario='$user', WHERE idusuario='$idusuario'","d")) : ?>
    <script>
        alertify.success("Usuario Elimando...");
        $('#UserDelete').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else : ?>
    <script>
        alertify.error("Error al eliminar usuario...");
        $('#UserDelete').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif ?>