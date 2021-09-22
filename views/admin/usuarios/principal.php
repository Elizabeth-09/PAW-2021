<script src="../../public/js/funciones-navbar.js"></script>
<script src="../../public/js/funciones-usuarios.js"></script>
<?php

    session_start();
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';
    $cont = 0;
    $pagina = 0;

    if(isset($_GET["num"]));
    {
        $pagina = $_GET["num"];

    }

    if (!$pagina)
    {
        $inicio = 0;
        $pagina = 1;
    }
    else 
    {
        $inicio =($pagina - 1)* $registros;

    }

    $query = "SELECT * FROM usuarios";

    $dataUser = CRUD("SELECT * FROM usuarios ORDER BY id_usuario LIMIT $inicio,$registros", "s");

    $num_registro = CountReg($query);
    $paginas = ceil($num_registro/$registros);

?>

<div class="card">
    <div class="card-header bg-dark text-white">
            <b>Panel Usuarios</b>
    </div>

    <div class="card-body">
        <div id="result-form">
            <div class="row">
                <div class="col md-4">
                <form id="data-user">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Usuario: </span>
                    </div>
                    <input type="text" name="user" class="form-control" placeholder="Usuario" required="ON">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Contraseña: </span>
                    </div>
                    <input type="password" name="clave" class="form-control" required="ON">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo Usuario:</label>
                    </div>
                    <select class="custom-select" name="tipo_user" id="tipo-user">
                        <option value="0" disabled selected>Seleccione Tipo</option>
                        <option value="1">Administrador</option>
                        <option value="2">Operador</option>
                    </select>
                </div>
                <div style="margin-top:10px">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form> 
                </div>
                <div class="col md-8">
                    <?php include 'table_usuarios.php';?>
                    <?php if($num_registro > $registros):?>
                        <?php if($pagina == 1):?>
                        <div style="text-align: center;">
                            <a href="" class="btn pagina" v-num="<?php echo ($pagina + 1); ?>">
                            num-reg="<?php echo $registros;?>"
                            <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                            </a>
                        </div>
                        <?php elseif($pagina == $paginas):?>
                        <div style="text-align: center;">
                            <a href="" class="btn pagina" v-num="<?php echo ($pagina - 1); ?>">
                            num-reg="<?php echo $registros;?>"
                            <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                            </a>
                        </div>
                    <?php else: ?>
                        <div style="text-align: center;">
                            <a href="" class="btn pagina" v-num="<?php echo ($pagina + 1); ?>">
                            num-reg="<?php echo $registros;?>"
                            <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                            </a>
                            <a href="" class="btn pagina" v-num="<?php echo ($pagina - 1); ?>">
                            num-reg="<?php echo $registros;?>"
                            <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                            </a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>      
    </div>
</div>