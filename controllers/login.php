<?php 
    session_start();
    include '../models/conexion.php';
    include '../models/login.php';
    include '../models/procesos.php';
    include 'prosesos.php';

    if(isset($_POST['acclogin']))
    {
        $user = $_POST['user'];
        $passw = $_POST['passw'];
        $campo = $_POST['usuarios'];
        $tabla = $_POST['tabla'];


        AccesoLogin($user,$passw,$tabla,$campo);
        
    }
    elseif(isset($_POST['olvide']))
    {
        header("Location:../views/olvide_clave.php");
    }
    elseif(isset($_POST['cambioClave']))
    {
        $token = $_POST['token'];
        $passw1 = $_POST['passw1'];
        $passw2 = $_POST['passw2'];



        CambioClave($token,$passw1,$passw2);
    }
    else
    {
        header("Location: ../index.php");
    }
?>