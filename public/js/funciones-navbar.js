$(document).ready(function () {
    /* Cargar vista usuario */
    $(".user").click(function(event) {
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
    });
    /* btn salir*/
    $(".exit-sys").click(function () {
        if (confirm('Seguro/a en cerrar sesion')) {
            location.href = "../../index.php";
        }
        else {
            alert('Cierre de sesion cancelado');
        }
    });
    /* btn eliminar usuario*/
    $(".exit-sys1").click(function (event) {
        if (confirm('Seguro/a en eliminar este usuario')) {
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
        }
        else {
            alert('Eliminar usuario cancelado');
        }
    });
});