$(document).ready(function () {
    /* Cargar vista usuario */
    $(".user").click(function(event) {
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
    });
    /* btn salir*/
    $(".exit-sys").click(function () {
        if (confirm('Seguro/a en cerrar sesion')) {
            $("#contenido").load("../../index.php");
        }
        else {
            alert('Cierre de sesion cancelado');
            $("#contenido").load("usuarios/principal.php");
        }
    });

    $(".exit-sys1").click(function () {
        if (confirm('Seguro/a que desea eliminar el usuario')) {
            $("#contenido").load("usuarios/principal.php"); 
        }
        else {
            alert('Eliminar usuario cancelado');
            $("#contenido").load("usuarios/principal.php");
        }
    });


});