// Needs ../viacep.js

let timeout = null;

const postalcode = document.getElementById("postalcode");

function postalcodetrigger() {
    clearTimeout(timeout);

    timeout = setTimeout(() => {
        let cep = postalcode.value.replace(/\D/g, "");
        if (cep.length === 8) {
            viacep(cep, function (data){
                if(!data.erro){
                    document.getElementById("street").value = data.logradouro;
                    document.getElementById("neighbourhood").value = data.bairro;
                    document.getElementById("city").value = data.localidade;
                }else{
                    document.getElementById("street").value = "";
                    document.getElementById("neighbourhood").value = "";
                    document.getElementById("city").value = "";
                }
            })
        }
    }, 2000);
}

postalcode.addEventListener("input", postalcodetrigger);

document.addEventListener("DOMContentLoaded", () => {
    if (postalcode.value) {
        postalcodetrigger();
    }
});