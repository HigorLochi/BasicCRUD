async function viacep(cep, callback) {
    $.ajax({
        url: "https://viacep.com.br/ws/" + cep + "/json/",
        method: "GET",
        dataType: "json",
        success: function(data) {
            callback(data);
        },
        error: function(error) {
            callback({
                "erro": "true"
            });
        }
    });
}