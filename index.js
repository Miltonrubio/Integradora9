$(document).ready(function () {
    mostrar();
    console.log("llama a la función");
});


function mostrar(){
    console.log("Entra a la función")
    $.getJSON("consultas.php", function (reponse) {
        $.each(reponse, function (i, value) {
            $(".table").append("<tr><td >" + value.NumMesa + "</td><td>" + value.Nombre + "</td>\n\
            <td>" + value.PlaEntrada + "</td><td>" + value.PlaPrincipal + "</td><td>" + value.Postre + "</td><td>" + value.Bebida + "</td><td>" + value.Aditamientos + "</td></tr>");
        });
    });
}