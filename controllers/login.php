<?php

    session_start();
   
    include '../models/conexion.php';
    include '../models/login.php';
    include 'procesos.php';
    
    if(isset($_POST['acclogin']))
    {
        $user = $_POST['user'];
        $passw = $_POST['passw'];
        
        AccesoLogin($user, $passw);
    }
    elseif(isset($_POST['olvide']))
    {
        header("Location: ../views/olvide_clave.php");
    }
    else
    {
        header("Location: ../login.php");
    }
    
?>