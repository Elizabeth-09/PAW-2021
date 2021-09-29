<?php
     include '../models/conexion.php';
     include '../controllers/procesos.php';
     include '../models/procesos.php';

     $user = $_POST['user'];
     $email = $_POST['email'];
     
     $query1 = "SELECT COUNT(usuario) AS tuser FROM usuarios WHERE usuario = '$user'";
     $query2 = "SELECT COUNT(email) AS temail FROM usuarios WHERE usuario = '$user' AND '$email'";


     $buscarUser = CRUD($query1, "s");
     $buscarEmail = CRUD($query2, "s");


     foreach($buscarUser AS $result)
     {
         echo $contUser = $result['tuser'];
     }

     foreach($buscarEmail AS $result)
     {
         echo $contEmail = $result['temail'];
     }
?>