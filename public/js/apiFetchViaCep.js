"use strict";

const setFormInputs = (data) => {
    document.getElementById("address").value = data.logradouro;
    document.getElementById("neighborhood").value = data.bairro;
    document.getElementById("city").value = data.localidade;
    document.getElementById("region").value = data.uf;
};

const getCepAdress = async () => {
    const cep = document.getElementById("cep").value;
    const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

    const response = await fetch(apiUrl);
    const data = await response.json();

    if (data.hasOwnProperty("erro")) {
        document.getElementById("cep").value = "CEP não encontrado!";
        setTimeout(() => {
            document.getElementById("cep").value = "";
        }, 3000);
    } else {
        setFormInputs(data);
    }
};

document.getElementById("cep").addEventListener("focusout", getCepAdress);
