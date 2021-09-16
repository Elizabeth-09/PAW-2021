$(document).ready(function () {
    $("#data-user").on("submit", function (event) {
        var tipo = document.getElementById("tipo-user").value;

        if (tipo == 0) {
            alertify.error("No selecciono el tipo de usuario...");
        }
        else {
            var formData = new FormData(document.getElementById("data-user"));
            formData.append("dato", "valor");

            $.ajax({
                url: "usuarios/save_user.php",
                type: "POST",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function (res) {
                    $("#result-form").html(res);
                });
        }
        event.preventDefault();
    });

    /* Cambiar Estado de Usuario*/
    $(".btnHDUser").click(function (event) {
        var id, estado;
        id = $(this).attr("id-user");
        estado = $(this).attr("estado");
        $("#result-form").load("usuarios/cambiar_estado.php?idusuario=" + id + "&estado=" + estado);
        event.preventDefault();
    });

    /*Cambiar Modal para actualizar clave*/
    $(".upd-key").click(function () {
        var id = $(this).attr("id-user");
        $('#modalKeyUpd').modal('show');
        $("#passUser").load("usuarios/update_pass.php?idusuario=" + id);
    });
    /*Cargar Modal para actualizar usuario..*/
    $(".upd-user").click(function () {
        var id = $(this).attr("id-user");
        $('#UserUpd').modal('show');
        $("#dataUser").load("usuarios/updateDataUser.php?idusuario=" + id);
    });
    /*Actualizar Nombre usuario y tipo*/
    $("#UPDUser").on("submit", function (event) {
        var tipo = document.getElementById("tipo-user").value;

        var formData = new FormData(document.getElementById("UPDUser"));
        formData.append("dato", "valor");

        $.ajax({
            url: "usuarios/update_user.php",
            type: "POST",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
            .done(function (res) {
                $("#result-form").html(res);
            });
        event.preventDefault();
    });
    /* Eliminar Usuario */
    $(".exit-sys1").click(function (event) {
        var id, eliminar;
        id = $(this).attr("id-user");
        eliminar = $(this).attr("eliminar");
        $("#result-form").load("usuarios/delete_usuario.php?idusuario=" + id + "&eliminar=" + eliminar);
        event.preventDefault();
    });

    /* Actualizar Clave */
    $("#UPDpass").on("submit", function (event) {
        var tipo = document.getElementById("tipo-user").value;

        var formData = new FormData(document.getElementById("UPDpass"));

        
        $.ajax({
            url: "usuarios/upd_pass.php",
            type: "POST",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
            .done(function (res) {
                $("#result-form").html(res);
            });
        event.preventDefault();
    });
});