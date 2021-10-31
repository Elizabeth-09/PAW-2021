<?php

include '../../../models/conexion.php';
include '../../../controllers/procesos.php';
include '../../../models/procesos.php';

echo $idusuario = $_POST['idusuario'];
echo $user = $_POST['user'];
echo $tipo = $_POST['tipo_user'];
?>
<?php if (CRUD(" UPDATE usuarios SET usuario ='$user',tipo='$tipo' WHERE idusuario='$idusuario'", "u")) : ?>
    <script>
        alertify.success("Usuario Actualizado...");
        $('#UserUpd').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php else : ?>
    <script>
        alert("Error al actualizar usuarip...");
        $('#UserUpd').modal('hide');
        $("#contenido").load("usuarios/principal.php");
    </script>
<?php endif ?>