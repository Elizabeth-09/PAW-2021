$(document).ready(function() {
    /*Cargar vista de usuarios*/
    $(".user").click(function(event){
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
    });
    /*Btn Salir */
    $(".exit-sys").click(function() {
       if (confirm('Seguro/a en cerrar sesion'))
       {
           location.href = "../../index.php";
    } else {
           alert('Cierre de sesion cancelada...');
       }
    });

});