<?php
include '../../../models/conexion.php';
include '../../../controllers/prosesos.php';
include '../../../models/procesos.php';

$idusuario = $_GET['idusuario'];

$dataUser = CRUD("SELECT * FROM usuarios WHERE idusuario='$idusuario'", "s");
?>
<script src="../../public/js/funciones-usuarios.js"></script>
<form id="UPDPass" onsubmit="verificarPasswords(); return false">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nueva contraseña: </span>
        </div>
        <input type="password" name="clave" class="form-control" required="ON">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nueva contraseña: </span>
        </div>
        <input type="password" name="clave" class="form-control" required="ON">
    </div>
        <button class="btn btn-primary">Actualizar</button>
</form>