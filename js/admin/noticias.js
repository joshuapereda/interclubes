var url_base = "http://192.168.0.100:90/inteclubesperu";
$(document).ready(function () {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                // Asignamos el atributo src a la tag de imagen
                $('#imagenmuestra').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // El listener va asignado al input
    $("#imagen").change(function () {
        $("#imagenmuestra").show();
        readURL(this);
    });
    $("#btn-cerrar").click(function(){
        $("#modal-agregado").fadeOut();
    });
    $("#btn-publicacion").click(function () {
        var file_data = $('#imagen').prop('files')[0];
        var form_data = new FormData();
        form_data.append('imagen', file_data);
        form_data.append('titulo', $("#titulo-publicacion").val());
        form_data.append('texto', $("#textos").val());
        form_data.append('categoria', $("#categoria").val());
        $.ajax({
            url: url_base + "/admin/AddNoticias", // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (res) {
                $("#modal-agregado").fadeIn();
                console.log(res); // display response from the PHP script, if any
            },
            error: function(xhr, textStatus, error) {
                console.log(xhr.responseText);
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);

              }
        });
    });
});