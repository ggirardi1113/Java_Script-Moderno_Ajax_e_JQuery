$("#salvar").click(function(){
    var Preco = parseFloat(document.getElementById("preco").value);
    var GasolinaGasta = parseFloat(document.getElementById("gasolinaGasta").value);
    var Distancia = parseFloat(document.getElementById("distancia").value);
    var PrecoFinal = GasolinaGasta*Preco;
    var PrecoKM = PrecoFinal/Distancia;
    document.getElementById("resultado").innerHTML = "Preço total gasto: R$"+PrecoFinal+"<br>Preço por KM rodado: R$"+PrecoKM;
    $.post("salvar.php",
    {
        NomeMotorista:$("#nomeMotorista").val(),
        Modelo:$("#modelo").val(),
        Placa:$("#placa").val(),
        Origem:$("#origem").val(),
        Destino:$("#destino").val(),
        GasolinaGasta:$("#gasolinaGasta").val(),
        Preco:$("#preco").val(),
        Distancia:$("#Distancia").val()
    }
    );
});