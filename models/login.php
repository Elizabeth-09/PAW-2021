<?php
    class login
 {
    public function GetDataUser($user,$tabla,$campo)
    {
        $row = NULL;
        $modelo = new ConexBD();
        $arg = ":".$campo;
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM $tabla WHERE $campo = :$arg";
        $stm = $conexion->prepare($sql);
        $stm->bindParam($arg,$user);
        $stm->execute();

        while ($result = $stm->fetch())
        {
            $row[] = $result;
        }

        return $row;

    }
      
 }
 
?>