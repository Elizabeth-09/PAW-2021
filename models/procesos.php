<?php

class Procesos

{
    public function isdu($query,$tipo)
    {
        $row = NULL;
        $modelo = new ConexBD();
        $conexion = $modelo->get_conexion();
        $stm = $conexion->prepare($query);

        if($tipo == "s" || $tipo == "s")
        {
            $stm->execute();
            while ($result = $stm->fetch())
            {
                $row[] = $result;
            }
            return $row;
        }

        else
        {
            if(!$stm)
            {
                return 0;
            }

            else 
            {
                $stm->execute();
            }
        }
    }

   /* Modelo para contar registro */
   
   public function row_data($query)
{
    $modelo = new ConexBD();
    $conexion = $modelo->get_conexion();
    $stm = $conexion->query($query);
    $num_rows = $stm->rowCount();
    return $num_rows;

}

}
   
  
?>