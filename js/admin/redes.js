var url_base="http://192.168.0.100:90/inteclubesperu";
    $(document).ready(function() {
        $("#btn-redes").click(function() {
            var form_data = new FormData();
            form_data.append('facebook', $("#facebook").val());
            form_data.append('instagram', $("#instagram").val());
            form_data.append('youtube', $("#youtube").val());
            form_data.append('twitter', $("#twitter").val());
            form_data.append('flickr', $("#flickr").val());
            $.ajax({
                url: url_base + "/admin/addRedes", // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(res) {
                    console.log(res); // display response from the PHP script, if any
                }
            });
        });
    });
