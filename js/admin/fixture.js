var url_base = "http://192.168.0.100:90/inteclubesperu";
$(document).ready(function () {
    
    $("#btn-cerrar").click(function(){
        $("#modal-agregado").fadeOut();
    });
    $("#btn-publicacion").click(function () {
        var file_data = $('#fixture').prop('files')[0];
        var form_data = new FormData();
        form_data.append('fixture', file_data);        
        form_data.append('categoria', $("#categoria").val());
        $.ajax({
            url: url_base + "/admin/AddFixture", // point to server-side PHP script 
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