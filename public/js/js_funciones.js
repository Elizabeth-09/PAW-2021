function readURL(input) {
    if (input.files && input.files[0])
    {
        var reader = new FileReader();

        reader.onload = function (e){
            //asignamos el atributo src a la tag de la imagen
            $('#muestraimagen').attr('src', e.target.result);

            reader.readAsDataURL(input.files[0]);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

//El listener ve asignado al input
$("#imagen").change(function(){
readURL(this);
});