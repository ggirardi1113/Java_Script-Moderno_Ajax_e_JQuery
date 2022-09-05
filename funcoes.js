$("#salvar").click(function(){
    var Preco = parseFloat(document.getElementById("Preco").value);
    var GasolinaGasta = parseFloat(document.getElementById("GasolinaGasta").value);
    var Distancia = parseFloat(document.getElementById("Distancia").value);
    var PrecoFinal = GasolinaGasta*Preco;
    var PrecoKM = PrecoFinal/Distancia;
    document.getElementById("resultado").innerHTML = "Preço total gasto: R$"+PrecoFinal+"<br>Preço por KM rodado: R$"+PrecoKM;
    $.post("salvar.php",
    {
        NomeMotorista:$("#NomeMotorista").val(),
        Modelo:$("#Modelo").val(),
        Placa:$("#Placa").val(),
        Origem:$("#Origem").val(),
        Destino:$("#Destino").val(),
        GasolinaGasta:$("#GasolinaGasta").val(),
        Preco:$("#Preco").val(),
        Distancia:$("#Distancia").val()
    }
    );
});