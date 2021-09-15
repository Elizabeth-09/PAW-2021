<?php
class Procesos
{
    /*Modelo para relizar crud */
    public function isdu($query, $tipo) /* i> Insertar /s>Select / d> Delete /u> Update*/
    {
        $row = NULL;
        $modelo = new ConexBD();
        $conexion = $modelo->get_conexion();
        $stm = $conexion->prepare($query);

        if ($tipo == "s" || $tipo == "S") {
            $stm->execute();
            while ($result = $stm->fetch()) {
                $row[] = $result;
            }
            return $row;
        } else {
            if (!$stm) {
                return 0;
            } else {
                $stm->execute();
                return 1;
            }
        }
    }
    /*Modelo para contar registro*/
    public function row_data($query)
    {
        $modelo = new ConexBD();
        $conexion = $modelo->get_conexion();
        $stm = $conexion->query($query);
        $num_rows = $stm->rowCount();
        return $num_rows;
    }
}
