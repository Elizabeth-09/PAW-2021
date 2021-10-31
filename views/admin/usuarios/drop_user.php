<?php
include '../../../models/conexion.php';
include '../../../controllers/procesos.php';
include '../../../models/procesos.php';

$idusuario = $_GET['idusuario'];

$updDrop = CRUD("DELETE FROM `usuarios` WHERE `usuarios`.`idusuario` =$idusuario ", "d");
?>