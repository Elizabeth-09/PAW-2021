<?php
function AccesoLogin($user,$passw,$tabla,$campo)
{
    $consultas = new Login();
    $data = $consultas->GetDataUser($user,$tabla,$campo);

    if ($data) {
        foreach ($data as $result) {
            $idusuario = $result['idusuario'];
            $hash = $result['clave'];
            $tipo = $result['tipo'];
            $estado = $result['estado'];
        }
        if ($estado == 1)
        {
            if (password_verify($passw,$hash))
            {
                if($tipo==1)
                {
                    $_SESSION["idusuario"] = $idusuario;
                    $_SESSION["user"] = $user;
                    $_SESSION["tipo"] = $tipo;
                    header("Location: ../views/admin/");
                }
                else
                {
                    $_SESSION["idusuario"] = $idusuario;
                    $_SESSION["user"] = $user;
                    $_SESSION["tipo"] = $tipo;
                    header("Location: ../views/operador/");

                }
            }
            else
            {
                header("Location:../index.php?msj=".base64_encode("Contraseña incorrecta...")); 
            }
        }
        else
        {
        header("Location:../index.php?msj=".base64_encode("El usuario no tiene permisos de acceso..."));  
        }

    }
    else
    {
    header("Location:../index.php?msj=".base64_encode("El usuario no existe..."));  
    }
}

/*Modelo para relizar un CRUD*/
function CRUD($query,$tipo)
{
    $consultas = new Procesos();
    $data = $consultas->isdu($query,$tipo);
    return $data;
}
/*Funcion para contar registros*/
function CountReg($query)
{
    $consultas = new Procesos();
    $data = $consultas->row_data($query);
    return $data;
}
//Funion para buscar valores//
function buscavalor($tabla,$campo,$condicion)
{
    $valor = NULL;
    $consultas = new Procesos();
    $datos = $consultas->BuscarValor($tabla,$campo,$condicion);
    if($datos)
    {
       foreach ($datos AS $result)
       {
           $valor = $result[0];

       }
       return $valor;
    }
}
//Funcion para el token//
function Token($length)
{
    $key = '';
    $cadena = "0123456789abcdefghijklmnopqrstuvwxyz";
    for($i=0;$i < $length;$i++)
    {
        $key .= $cadena[rand(0,35)];

    }
    return $key;
}
//Funcion para el Email//
function Email($email,$token)
{
    $desde = "paw@gmail.com";
    $cabecera = 'From: Soporte <'.$desde.'>'."\r\n".'Reply-To'.$desde."\r\n";
    $cabecera .= 'Content-type: text/html; charset=utf-8'."\r\n";

    $sms="<b>Token: </b>".$token;

    mail($email,"Solicitud de Token",$sms,$cabecera);
}
//Funcion para cambio de clave//
function CambioClave($token,$passw1,$passw2)
{
    $buscaToken = buscavalor("usuarios","COUNT(token)","token ='$token'");
    $idusuario = buscavalor("usuarios","idusuario","token ='$token'");

    if($buscaToken !=0)
    {
        if($passw1 == $passw2)
        {
          $newpassw = password_hash($passw2, PASSWORD_DEFAULT);

          $update = CRUD("UPDATE usuarios SET clave='$newpassw', token='' WHERE idusuario='$idusuario'","u");
          if($update)
          {
            header("Location:../index.php?msj=".base64_encode("Contraseña actualizada..."));
          }
          else
          {
            header("Location:../index.php?msj=".base64_encode("Error contraseña no actualizada..."));
          }
        }
        else
        {
        header("Location: ../views/cambio_clave.php");
        }

    }
    else
    {
        header("Location: ../views/cambio_clave.php");
    }

}

//Funcioon para cargar Imagenes//
function CargarIMG($tmp_dir,$newName,$path)
{
    mkdir($path, 0777, true);
    
}
?>